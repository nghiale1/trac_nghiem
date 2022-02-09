<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CauHoi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cau_hoi')->insert([[
            'ch_id'=>1,
            'content'=>'Đồng chí cho biết ngày truyền thống của Lữ đoàn Pháo binh 6?',
        ],[
            'ch_id'=>2,
            'content'=>'Đồng chí hãy cho biết nội dung nào dưới đây là nội dung chữ vàng truyền thống của Lữ đoàn Pháo binh 6?',
        ],[
            'ch_id'=>3,
            'content'=>'Đồng chí hãy cho biết nội dung nào dưới đây thể hiện chữ vàng truyền thống của Quân khu 9?',
        ],[
            'ch_id'=>4,
            'content'=>'Quân khu 9 được thành lập ngày, tháng, năm nào?',
        ],[
            'ch_id'=>5,
            'content'=>'Đồng chí cho biết Tiểu đoàn đầu tiên của Lữ đoàn 6?',
        ],[
            'ch_id'=>6,
            'content'=>'Đồng chí hãy cho biết những nội dung nào dưới đây là chuẩn mực “Bộ đội Cụ Hồ” theo Chỉ thị 855 của Quân ủy Trung ương?',
        ],[
            'ch_id'=>7,
            'content'=>'Đồng chí hãy cho biết phương châm Đại hội XIII của Đảng ?',
        ],[
            'ch_id'=>8,
            'content'=>'Đồng chí hãy cho biết Đại hội XIII của Đảng xác định phương hướng xây dựng Quân đội nhân dân Việt Nam đến năm 2025 như thế nào?',
        ],[
            'ch_id'=>9,
            'content'=>'Có bao nhiêu chuẩn mực xứng danh “Bộ đội Cụ Hồ”?',
        ],[
            'ch_id'=>10,
            'content'=>'Đồng chí hãy cho biết Thông điệp 5K của Bộ Y tế trong phòng, chống dịch bệnh Covid-19 là gì?',
        ],[
            'ch_id'=>11,
            'content'=>'Đồng chí hãy cho biết theo Thông tư số 16/2020/TT-BQP của Bộ Quốc phòng quy định những hình thức xử lý kỷ luật nào đối với HSQ - BS?',
        ],[
            'ch_id'=>12,
            'content'=>'Theo thông tư số 16/2020/TT-BQP ngày 21/2/2020 của Bộ quốc phòng về quy định việc áp dụng các hình thức kỷ luật, trình tự, thủ tục, thời hiệu, thời hạn và thẩm quyền xử lý kỷ luật trong Bộ quốc phòng. Điều 20 xử lý quân nhân vi phạm về?',
        ],[
            'ch_id'=>13,
            'content'=>'Theo thông tư số 16/2020/TT-BQP ngày 21/2/2020 của Bộ quốc phòng về quy định việc áp dụng các hình thức kỷ luật, trình tự, thủ tục, thời hiệu, thời hạn và thẩm quyền xử lý kỷ luật trong Bộ quốc phòng. Điều 13 xử lý quân nhân vi phạm về tội?',
        ],[
            'ch_id'=>14,
            'content'=>'Theo thông tư số 16/2020/TT-BQP ngày 21/2/2020 của Bộ quốc phòng về quy định việc áp dụng các hình thức kỷ luật, trình tự, thủ tục, thời hiệu, thời hạn và thẩm quyền xử lý kỷ luật trong Bộ quốc phòng. Điều 14 xử lý quân nhân vi phạm về tội?',
        ],[
            'ch_id'=>15,
            'content'=>'Đồng chí hãy cho biết Thông điệp thực hiện 5T của Bộ Y tế trong phòng chống dịch bệnh Covid-19 là gì?',
        ],[
            'ch_id'=>16,
            'content'=>'Chỉ thị 05-CT/TW của Bộ Chính trị có nội dung gì?',
        ],[
            'ch_id'=>17,
            'content'=>'Những nội dung nào dưới đây là tiêu chuẩn xây dựng đơn vị VMTD theo chỉ thị 917/CT-BQP của Bộ trưởng Bộ Quốc phòng?',
        ],[
            'ch_id'=>18,
            'content'=>'Tên chủ đề phong trào thi đua phòng chống Covid-19?',
        ],[
            'ch_id'=>19,
            'content'=>'Phong trào thi đua Quyết thắng năm 2021 tên là gì?',
        ],[
            'ch_id'=>20,
            'content'=>'Có bao nhiêu đồng chí nữ là ủy viên Ban Chấp hành Trung ương khóa XIII được bầu tại Đại hội XIII của Đảng?',
        ],[
            'ch_id'=>21,
            'content'=>'Một trong ba giải pháp đột phá của công tác xây dựng Đảng được Đại hội XIII của Đảng đề ra là?',
        ],[
            'ch_id'=>22,
            'content'=>'Biên giới Việt Nam – Campuchia dài bao nhiêu km?',
        ],[
            'ch_id'=>23,
            'content'=>'Bộ Tư lệnh 86 là tên gọi viết tắt của?',
        ],[
            'ch_id'=>24,
            'content'=>'Bộ Tư lệnh 86 được thành lập vào nagỳ tháng năm nào?',
        ],[
            'ch_id'=>25,
            'content'=>'Đâu là phẩm chất cần có của “Bộ đội Cụ Hồ” thời kỳ mới?',
        ],[
            'ch_id'=>26,
            'content'=>'Một trong những chuẩn mực phẩm chất “Bộ đội Cụ Hồ” trong thời kỳ mới theo Chỉ thị 855-CT/QUTW của Thường vụ Quân ủy Trung ương.',
        ],[
            'ch_id'=>27,
            'content'=>'Quần đảo Hoàng Sa thuộc tỉnh (thành phố) nào của Việt Nam?',
        ],[
            'ch_id'=>28,
            'content'=>'Quần đảo Trường Sa thuộc tỉnh (thành phố) nào của Việt Nam?',
        ],[
            'ch_id'=>29,
            'content'=>'Trong các tỉnh sau tỉnh nào có đường biên giới giáp Campuchia? ',
        ],[
            'ch_id'=>30,
            'content'=>'An Giang có bao nhiêu cửa khẩu quốc tế với Campuchia?',
        ],]);
    }
}
