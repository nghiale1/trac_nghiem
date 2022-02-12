<?php

namespace App\Http\Controllers;

use App\Models\CauHoi;
use App\Models\DapAn;
use App\Models\De;
use App\Models\DeCauhoi;
use App\Models\PhongThi;
use Carbon\Carbon;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    public function loginSubmit(Request $request)
    {
        $arrUser = [
            'username' => $request->username,
            'password' => $request->password
        ];
        if (Auth::attempt($arrUser)) {
            return redirect()->route('admin');
        } else {
            return back();
        }
    }

    public function loginExam(Request $request)
    {
        $phongthi = PhongThi::where('password', $request->password)
            ->whereDate('start', '<=', Carbon::now())
            ->whereDate('end', '>=', Carbon::now())->first();
        if ($phongthi) {
            $request->session()->put('de', $phongthi->id);
            $de=De::create([
                'id' => $phongthi->id,
                'name' => $request->username,
                'unit' => $request->unit,
                'birth' => $request->birth,
            ]);
            $request->session()->put('de', $de->de_id);
            $cauhoi = CauHoi::with(['dap_ans' => function ($q) {
                $q->inRandomOrder();
            }])->inRandomOrder()
                ->limit(Config::get('constants.numberQues'))
                ->get();

            $count = DeCauhoi::where('de_id', $request->session()->get('de'))->count();
            if ($count < Config::get('constants.numberQues')) {
                foreach ($cauhoi as $value) {
                    if ($count < Config::get('constants.numberQues')) {

                        DeCauhoi::create([
                            'de_id' => $de->de_id,
                            'ch_id' => $value->ch_id
                        ]);
                        $count++;
                    }
                }
            }

            return redirect()->route('exam');
        } else {
            return redirect()->route('index')->with('error', 'Mật khẩu không đúng.');
        }
    }

    public function exam(Request $request)
    {
        $cauhoi = DeCauhoi::with('cau_hoi.dap_ans')->where('de_id', $request->session()->get('de'))->get();
        
        $de =  De::where('de_id', $request->session()->get('de'))->first();
        if ($de->status==1) {
            return redirect()->route('result');
        }
        return view('exam', compact('de', 'cauhoi'));
    }

    public function examSubmit(Request $request)
    {
        $temp = 0;
        foreach ($request->all() as $key => $value) {
            if (substr($key, 0, 6) == 'cauhoi') {
                $da = DapAn::where('id', $value[0])->first();
                $da->status == 1 && $temp++;
            }
        }
        $mark = $temp / Config::get('constants.numberQues') * 10 ?? 0;
        De::where('de_id', $request->de_id)->update([
            'mark' => round($mark, 2),
        ]);



        return redirect()->route('result');
    }

    public function result(Request $request)
    {
        $de = De::where('de_id', $request->session()->get('de'))->first();
        $request->session()->forget('de');
        return view('result', compact('de'));
    }

    public function admin()
    {
        return view('admin.template.layout');
    }
}
