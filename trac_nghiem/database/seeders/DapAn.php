<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DapAn extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dap_an')->insert([[
            'content'=>'23/11/1962',
            'status'=>0,
            'ch_id'=>1,
        ],[
            'content'=>'23/11/1963',
            'status'=>0,
            'ch_id'=>1,
        ],[
            'content'=>'23/11/1964',
            'status'=>1,
            'ch_id'=>1,
        ],[
            'content'=>'23/11/1965',
            'status'=>0,
            'ch_id'=>1,
        ],
        [
            'content'=>'Chân đồng, vai sắt, đánh giỏi, bắn trúng',
            'status'=>0,
            'ch_id'=>2,
        ],[
            'content'=>'Đoàn kết, hiệp đồng, linh hoạt, sáng tạo, đánh giỏi, bắn trúng',
            'status'=>1,
            'ch_id'=>2,
        ],[
            'content'=>'Quân dân đoàn kết, Kiên cường bám trụ, Tự lực tự cường, Anh dũng chiến đấu',
            'status'=>0,
            'ch_id'=>2,
        ],[
            'content'=>'Đoàn kết, hiệp đồng, chủ động, sáng tạo, đánh giỏi, bắn trúng',
            'status'=>0,
            'ch_id'=>2,
        ],
        [
            'content'=>'Quân dân đoàn kết, Trụ bám kiên cường, Tự lực tự cường, Anh dũng chiến đấu',
            'status'=>0,
            'ch_id'=>3,
        ],[
            'content'=>'Đoàn kết, hiệp đồng, linh hoạt, sáng tạo, đánh giỏi, bắn trúng',
            'status'=>0,
            'ch_id'=>3,
        ],[
            'content'=>'Quân dân đoàn kết, Kiên cường bám trụ, Tự lực tự cường, Anh dũng chiến đấu',
            'status'=>1,
            'ch_id'=>3,
        ],[
            'content'=>'Đoàn kết, hiệp đồng, chủ động, sáng tạo, đánh giỏi, bắn trúng',
            'status'=>0,
            'ch_id'=>3,
        ],
        [
            'content'=>'10/12/1945',
            'status'=>1,
            'ch_id'=>4,
        ],[
            'content'=>'12/12/1945',
            'status'=>0,
            'ch_id'=>4,
        ],[
            'content'=>'22/12/1944',
            'status'=>0,
            'ch_id'=>4,
        ],[
            'content'=>'11/12/1945',
            'status'=>0,
            'ch_id'=>4,
        ],
        [
            'content'=>'2311',
            'status'=>1,
            'ch_id'=>5,
        ],[
            'content'=>'2315',
            'status'=>0,
            'ch_id'=>5,
        ],[
            'content'=>'10',
            'status'=>0,
            'ch_id'=>5,
        ],[
            'content'=>'24',
            'status'=>0,
            'ch_id'=>5,
        ],
        [
            'content'=>'Bản lĩnh chính trị vững vàng, động cơ trong sáng, trách nhiệm cao; Đạo đức, lối sống trong sạch, lành mạnh.',
            'status'=>0,
            'ch_id'=>6,
        ],[
            'content'=>'Có văn hóa, tri thức khoa học, trình độ quân sự, năng lực, phương pháp, tác phong công tác và sức khỏe tốt đáp ứng yêu cầu nhiệm vụ; Thực hành dân chủ, kỷ luật tự giác, nghiêm minh.',
            'status'=>0,
            'ch_id'=>6,
        ],[
            'content'=>'Chăm lo xây dựng đoàn kết nội bộ tốt, tôn trọng, giúp đỡ, gắn bó máu thịt với Nhân dân; có tinh thần quốc tế trong sáng.',
            'status'=>0,
            'ch_id'=>6,
        ],[
            'content'=>'Tất cả các nội dung trên.',
            'status'=>1,
            'ch_id'=>6,
        ],
        [
            'content'=>'Đoàn kết - Dân chủ - Kỷ cương - Sáng tạo - Phát triển',
            'status'=>1,
            'ch_id'=>7,
        ],[
            'content'=>'Đoàn kết - Kỷ cương - Dân chủ - Sáng tạo - Phát triển ',
            'status'=>0,
            'ch_id'=>7,
        ],[
            'content'=>'Dân chủ - Đoàn kết - Kỷ cương - Sáng tạo - Đổi mới ',
            'status'=>0,
            'ch_id'=>7,
        ],[
            'content'=>'Dân chủ - Đoàn kết - Kỷ cương - Sáng tạo - Phát triển',
            'status'=>0,
            'ch_id'=>7,
        ],
        [
            'content'=>'Tiến thẳng lên hiện đại',
            'status'=>0,
            'ch_id'=>8,
        ],[
            'content'=>'Có sức mạnh quân sự mạnh',
            'status'=>0,
            'ch_id'=>8,
        ],[
            'content'=>'Tinh, gọn, mạnh',
            'status'=>1,
            'ch_id'=>8,
        ],[
            'content'=>'Đứng đầu trong khu vực Đông Nam Á',
            'status'=>0,
            'ch_id'=>8,
        ],
        [
            'content'=>'4 chuẩn mực	',
            'status'=>0,
            'ch_id'=>9,
        ],[
            'content'=>'5 chuẩn mực',
            'status'=>1,
            'ch_id'=>9,
        ],[
            'content'=>'6 chuẩn mực	',
            'status'=>0,
            'ch_id'=>9,
        ],[
            'content'=>'3 chuẩn mực',
            'status'=>0,
            'ch_id'=>9,
        ],
        [
            'content'=>'Khẩu trang, Khử khuẩn, Khoảng cách, Không tập trung, Khai báo y tế.',
            'status'=>1,
            'ch_id'=>10,
        ],[
            'content'=>'Khẩu trang, Không ăn đồ ăn sống, Khoảng cách, Không tập trung, Khai báo y tế.',
            'status'=>0,
            'ch_id'=>10,
        ],[
            'content'=>'Khẩu trang, Khử khuẩn, Khoảng cách, Không tập trung, Không khai báo y tế.',
            'status'=>0,
            'ch_id'=>10,
        ],[
            'content'=>'Khẩu trang, Khử khuẩn, Khoảng cách, Không hoang mang, Khai báo y tế.',
            'status'=>0,
            'ch_id'=>10,
        ],
        [
            'content'=>'Phê bình, khiển trách, cảnh cáo, giáng cấp, phạt giam, tước danh hiệu quân nhân.',
            'status'=>0,
            'ch_id'=>11,
        ],[
            'content'=>'Khiển trách, cảnh cáo, giáng cấp, cách chức, phạt giam kỷ luật, tước danh hiệu quân nhân.',
            'status'=>0,
            'ch_id'=>11,
        ],[
            'content'=>'Khiển trách, cảnh cáo, giáng cấp bậc quân hàm, giáng chức, cách chức, tước danh hiệu quân nhân.',
            'status'=>1,
            'ch_id'=>11,
        ],[
            'content'=>'Khiển trách, cảnh cáo, giáng cấp bậc quân hàm, giáng chức, cách chức, tước danh hiệu quân nhân, phạt tù.',
            'status'=>0,
            'ch_id'=>11,
        ],
        [
            'content'=>'Vắng mặt trái phép',
            'status'=>0,
            'ch_id'=>12,
        ],[
            'content'=>'Làm nhục, hành hung đồng đội',
            'status'=>0,
            'ch_id'=>12,
        ],[
            'content'=>'Đào ngũ ',
            'status'=>1,
            'ch_id'=>12,
        ],[
            'content'=>'Vi phạm các quy định về trực chiến, trực chỉ huy, trực ban, trực nghiệp vụ',
            'status'=>0,
            'ch_id'=>12,
        ],
        [
            'content'=>'Chống mệnh lệnh',
            'status'=>1,
            'ch_id'=>13,
        ],[
            'content'=>'Chấp hành không nghiêm mệnh lệnh',
            'status'=>0,
            'ch_id'=>13,
        ],[
            'content'=>'Cản trở đồng đội thực hiện nhiệm vụ',
            'status'=>0,
            'ch_id'=>13,
        ],[
            'content'=>'Làm nhục, hành hung người chỉ huy hoặc cấp trên',
            'status'=>0,
            'ch_id'=>13,
        ],
        [
            'content'=>'Chống mệnh lệnh',
            'status'=>0,
            'ch_id'=>14,
        ],[
            'content'=>'Chấp hành không nghiêm mệnh lệnh',
            'status'=>1,
            'ch_id'=>14,
        ],[
            'content'=>'Cản trở đồng đội thực hiện nhiệm vụ',
            'status'=>0,
            'ch_id'=>14,
        ],[
            'content'=>'Làm nhục, hành hung người chỉ huy hoặc cấp trên',
            'status'=>0,
            'ch_id'=>14,
        ],
        [
            'content'=>'Tuân thủ nghiêm 5K; Thực phẩm đủ tại nhà; Tẩy rửa vệ sinh sạch sẽ; Test Covid tất cả; Tiêm chủng tại phường/xã.',
            'status'=>0,
            'ch_id'=>15,
        ],[
            'content'=>'Tuân thủ nghiêm 5K; Tổ chức sinh hoạt tại nhà; Thầy thuốc đến tận gia; Test Covid tất cả; Tiêm chủng tại phường/xã.',
            'status'=>0,
            'ch_id'=>15,
        ],[
            'content'=>'Tuân thủ nghiêm 5K; Thực phẩm đủ tại nhà; Thầy thuốc đến tận gia; Test Covid tất cả; Tiêm chủng tại phường/xã.',
            'status'=>1,
            'ch_id'=>15,
        ],[
            'content'=>'Tuân thủ nghiêm 5K; Thực phẩm đủ tại nhà; Thầy thuốc đến tận gia; Test Covid tất cả; Tiêm chủng tại nhà.',
            'status'=>0,
            'ch_id'=>15,
        ],
        [
            'content'=>'Đẩy mạnh  học tập và làm theo tư tưởng, đạo đức, phong cách Hồ Chí Minh',
            'status'=>1,
            'ch_id'=>16,
        ],[
            'content'=>'Đẩy mạnh học tập và làm theo  phong cách Hồ Chí Minh',
            'status'=>0,
            'ch_id'=>16,
        ],[
            'content'=>'Đẩy mạnh học tập tư tưởng, đạo đức, phong cách Hồ Chí Minh',
            'status'=>0,
            'ch_id'=>16,
        ],[
            'content'=>'Đẩy mạnh việc học tập và làm theo tư tưởng Hồ Chí Minh',
            'status'=>0,
            'ch_id'=>16,
        ],
        [
            'content'=>'Vững mạnh về chính trị. ',
            'status'=>0,
            'ch_id'=>17,
        ],[
            'content'=>'Tổ chức biên chế đúng quy định, duy trì nghiêm túc các chế độ SSCĐ, huấn luyện giỏi; Xây dựng nền nếp chính quy và quản lý kỷ luật tốt',
            'status'=>0,
            'ch_id'=>17,
        ],[
            'content'=>'Bảo đảm tốt hậu cần, tài chính và đời sống bộ đội; Bảo đảm tốt công tác kỹ thuật.  ',
            'status'=>0,
            'ch_id'=>17,
        ],[
            'content'=>'Tất cả các nội dung trên.',
            'status'=>1,
            'ch_id'=>17,
        ],
        [
            'content'=>'Quân đội cùng cả nước chung sức, đồng lòng thi đua phòng, chống và chiến thắng đại dịch COVID-19',
            'status'=>1,
            'ch_id'=>18,
        ],[
            'content'=>'Quân đội thi đua phòng, chống và chiến thắng đại dịch COVID-19',
            'status'=>0,
            'ch_id'=>18,
        ],[
            'content'=>'Quân đội cùng cả nước chung sức thi đua phòng, chống và chiến thắng đại dịch COVID-19',
            'status'=>0,
            'ch_id'=>18,
        ],[
            'content'=>'Quân đội cùng cả nước chung sức phòng, chống và chiến thắng đại dịch COVID-19',
            'status'=>0,
            'ch_id'=>18,
        ],
        [
            'content'=>'Đoàn kết, mẫu mực, kỷ cương, linh hoạt, sáng tạo, Quyết thắng',
            'status'=>1,
            'ch_id'=>19,
        ],[
            'content'=>'Dân chủ, mẫu mực, kỷ cương, sáng tạo, Quyết thắng',
            'status'=>0,
            'ch_id'=>19,
        ],[
            'content'=>'Đoàn kết, dân chủ, kỷ cương, sáng tạo, Quyết thắng',
            'status'=>0,
            'ch_id'=>19,
        ],[
            'content'=>'Đoàn kết, kỷ cương, nêu gương, sáng tạo, Quyết thắng',
            'status'=>0,
            'ch_id'=>19,
        ],
        [
            'content'=>'17 đồng chí	',
            'status'=>0,
            'ch_id'=>20,
        ],[
            'content'=>'18 đồng chí	',
            'status'=>0,
            'ch_id'=>20,
        ],[
            'content'=>'19 đồng chí',
            'status'=>1,
            'ch_id'=>20,
        ],[
            'content'=>'20 đồng chí',
            'status'=>0,
            'ch_id'=>20,
        ],
        [
            'content'=>'Kiên quyết đấu tranh phòng, chống tham nhũng, lãng phí, tiêu cực, quan liêu.',
            'status'=>0,
            'ch_id'=>21,
        ],[
            'content'=>'Đẩy mạnh phân cấp, phân quyền đi đôi với tăng cường kiểm tra, giám sát và kiểm soát chặt chẽ quyền lực.',
            'status'=>0,
            'ch_id'=>21,
        ],[
            'content'=>'Kiên quyết đấu tranh phòng, chống tham nhũng, lãng phí, tiêu cực, quan liêu; đẩy mạnh phân cấp, phân quyền đi đôi với tăng cường kiểm tra, giám sát và kiểm soát chặt chẽ quyền lực. ',
            'status'=>1,
            'ch_id'=>21,
        ],[
            'content'=>'Kiên quyết đấu tranh phòng, chống tham nhũng, lãng phí, tiêu cực, quan liêu  tăng cường kiểm tra, giám sát và kiểm soát chặt chẽ quyền lực.',
            'status'=>0,
            'ch_id'=>21,
        ],
        [
            'content'=>'2.350 km',
            'status'=>0,
            'ch_id'=>22,
        ],[
            'content'=>'1.749 km',
            'status'=>0,
            'ch_id'=>22,
        ],[
            'content'=>'3.260 km',
            'status'=>0,
            'ch_id'=>22,
        ],[
            'content'=>'1.137 km',
            'status'=>1,
            'ch_id'=>22,
        ],
        [
            'content'=>'Bộ Tư lệnh Tác chiến không gian mạng trực thuộc Binh chủng Thông Tin.',
            'status'=>0,
            'ch_id'=>23,
        ],[
            'content'=>'Bộ Tư lệnh Tác chiến không gian mạng trực thuộc Bộ Quốc phòng.',
            'status'=>1,
            'ch_id'=>23,
        ],[
            'content'=>'Trung tâm Tác chiến không gian mạng trực thuộc Binh chủng Thông Tin.',
            'status'=>0,
            'ch_id'=>23,
        ],[
            'content'=>'Trung tâm Tác chiến không gian mạng trực thuộc Bộ Quốc phòng. ',
            'status'=>0,
            'ch_id'=>23,
        ],
        [
            'content'=>'15/8/2017.',
            'status'=>1,
            'ch_id'=>24,
        ],[
            'content'=>'16/8/2017.',
            'status'=>0,
            'ch_id'=>24,
        ],[
            'content'=>'17/8/2017.',
            'status'=>0,
            'ch_id'=>24,
        ],[
            'content'=>'18/8/2017.',
            'status'=>0,
            'ch_id'=>24,
        ],
        [
            'content'=>'Cần, kiệm, liêm chính.',
            'status'=>0,
            'ch_id'=>25,
        ],[
            'content'=>'Có văn hóa, tri thức khoa học, trình độ quân sự, năng lực, phương pháp, tác phong công tác và sức khỏe tốt đáp ứng yêu cầu nhiệm vụ.',
            'status'=>1,
            'ch_id'=>25,
        ],[
            'content'=>'Tự lập, tự chủ, tự tu dưỡng rèn luyện.',
            'status'=>0,
            'ch_id'=>25,
        ],[
            'content'=>'Tất cả các nội dung trên.',
            'status'=>0,
            'ch_id'=>25,
        ],
        [
            'content'=>'Bản lĩnh chính trị vững vàng, động cơ trong sáng, trách nhiệm cao.',
            'status'=>1,
            'ch_id'=>26,
        ],[
            'content'=>'Tâm trong, trí sáng, hoài bão lớn.',
            'status'=>0,
            'ch_id'=>26,
        ],[
            'content'=>'Tuyệt đối trung thành với Đảng, Nhà nước và nhân dân.',
            'status'=>0,
            'ch_id'=>26,
        ],[
            'content'=>'Tất cả các nội dung trên',
            'status'=>0,
            'ch_id'=>26,
        ],
        [
            'content'=>'Hải Phòng',
            'status'=>0,
            'ch_id'=>27,
        ],[
            'content'=>'Đà Nẵng',
            'status'=>1,
            'ch_id'=>27,
        ],[
            'content'=>'Bình Thuận',
            'status'=>0,
            'ch_id'=>27,
        ],[
            'content'=>'Cà Mau',
            'status'=>0,
            'ch_id'=>27,
        ],
        [
            'content'=>'Quảng Ninh',
            'status'=>0,
            'ch_id'=>28,
        ],[
            'content'=>'Thanh Hóa',
            'status'=>0,
            'ch_id'=>28,
        ],[
            'content'=>'Khánh Hòa',
            'status'=>1,
            'ch_id'=>28,
        ],[
            'content'=>'Bến Tre',
            'status'=>0,
            'ch_id'=>28,
        ],
        [
            'content'=>'An Giang.',
            'status'=>0,
            'ch_id'=>29,
        ],[
            'content'=>'Kiên Giang.',
            'status'=>0,
            'ch_id'=>29,
        ],[
            'content'=>'Đồng Tháp.',
            'status'=>0,
            'ch_id'=>29,
        ],[
            'content'=>'Tất cả các ý trên.',
            'status'=>1,
            'ch_id'=>29,
        ],
        [
            'content'=>'02 ',
            'status'=>0,
            'ch_id'=>30,
        ],[
            'content'=>'03 ',
            'status'=>1,
            'ch_id'=>30,
        ],[
            'content'=>'04',
            'status'=>0,
            'ch_id'=>30,
        ],[
            'content'=>'05',
            'status'=>0,
            'ch_id'=>30,
        ],
        ]
    );
    }
}
