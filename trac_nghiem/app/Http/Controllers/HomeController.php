<?php

namespace App\Http\Controllers;

use App\Models\CauHoi;
use App\Models\DapAn;
use App\Models\De;
use App\Models\DeCauhoi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    public function loginSubmit(Request $request)
    {
        $arrUser = [
            'username' => $request->username,
            'password' =>$request->password
        ];
        if (Auth::attempt($arrUser)) {
            return redirect()->route('exam');
        }
        else {
            return back();
        }
    }

    public function exam()
    {
        $cauhoi=CauHoi::with('dap_ans')->inRandomOrder()
                ->limit(Config::get('constants.numberQues'))
                ->get();
                $de=De::create(['id'=>Auth::id()]);
                foreach ($cauhoi as $key => $value) {
                    DeCauhoi::create([
                        'de_id' => $de->de_id,
		                'ch_id' => $value->ch_id
                    ]);
                }
                return view('exam',compact('de','cauhoi'));
    }

    public function examSubmit(Request $request)
    {
        $temp=0;
        // dd($request);
        // dd($request->all());
        foreach ($request->all() as $key => $value) {
            if(substr($key,0,6)=='cauhoi'){
                $da=DapAn::where('id',$value[0])->first();
                $da->status==1&& $temp++;
            }
        }
        $mark=$temp/Config::get('constants.numberQues')*10??0;
        $de=De::where('de_id',$request->de_id)->update([
            'mark'=>round($mark,2),
        ]);

        return redirect()->route('result');
        
    }

    public function result()
    {
        $de=De::where('id',Auth::id())->latest('de_id')->first();
        $user=Auth::user();
        return view('result',compact('de','user'));
    }
}
