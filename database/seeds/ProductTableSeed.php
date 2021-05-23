<?php

use Illuminate\Database\Seeder;

class ProductTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = Str::random(10);
        DB::table('products')->insert([
            'name' => "Điện thoại Samsung Galaxy S21 5G",
            'slug' => "samsung-galaxy-s21",
            'import_price' => "18990000",
            'price' => "19990000",
            'amount' => "2",
            'sold_amount' => "1",
            'sku' => "samsung-galaxy-s21",
            'des' => "Galaxy S21 5G nằm trong series S21 đến từ Samsung nổi bật với thiết kế tràn viền, cụm camera ấn tượng cho đến hiệu năng mạnh mẽ hàng đầu.
            “Bộ cánh” mới nổi bật và sang trọng
            Nổi bật với cụm camera sau được thiết kế đầy mới lạ, phần khuôn hình chữ nhật chứa bộ 3 camera ôm trọn cạnh trái của chiếc smartphone, viền khuôn cong uyển chuyển, hạn chế tối đa độ nhô ra so với mặt lưng, mang lại cái nhìn tổng thể hài hòa, độc đáo.
            
            Samsung Galaxy S21 5G | Thiết kế nổi bật với cụm camera chữ nhật
            
            Galaxy S21 có 3 màu sắc chính là: Tím, bạc và đen. Cho người dùng thoải mái lựa chọn để phù hợp với phong cách của bản thân nhất.
            
            Samsung Galaxy S21 5G | Với 3 màu sắc chính là: Tím, trắng và xám
            
            Samsung Galaxy S21 hỗ trợ đầy đủ tính năng bảo mật sinh trắc học, bảo mật tối đa điện thoại của bạn bằng công nghệ mở khóa vân tay siêu âm đặt dưới màn hình và bảo mật khuôn mặt. Kết hợp với tính năng chạm 2 lần sáng màn hình giờ đây bạn có thể bật, mở khóa điện thoại cực kì nhanh chóng, tiện lợi và an toàn.
            
            Samsung Galaxy S21 5G | Trang bị mở khóa vân tay siêu âm đặt dưới màn hình
            
            Galaxy S21 là chiếc điện thoại kháng nước, bụi đạt chuẩn IP68, chuẩn cao nhất hiện tại. Máy có thể sống sót ở độ sâu 1.5m lên đến 30 phút, giúp hạn chế được khả năng hư hỏng thiết bị khi bị nước đổ vào, trời mưa hoặc không may làm rơi xuống nước.
            
            Samsung Galaxy S21 5G | Kháng nước, bụi đạt chuẩn IP68
            
            Màn hình vô cực Infinity-O siêu mượt
            Galaxy S21 được trang bị màn hình Dynamic AMOLED 2X, hỗ trợ HDR10+ tiên tiến do Samsung phát triển, có thể đạt được độ sáng cao nhất lên đến 1300 nits, ngay cả khi dưới ánh sáng mặt trời Galaxy S21 vẫn cho hình ảnh sống động, rõ ràng đến không ngờ, sẽ nâng trải nghiệm thị giác của bạn lên một tầm cao mới.
            
            Samsung Galaxy S21 5G | Trang bị màn hình Dynamic AMOLED 2X, hỗ trợ HDR10+ tiên tiến
            
            Galaxy S21 sở hữu màn hình kích thước 6.2 inch độ phân giải Full HD+ có tần số quét 120 Hz, gấp đôi so với thế hệ trước. Không chỉ phản hồi cực nhạy, mà màn hình còn tối ưu tần số quét trong mỗi lần bạn thực hiện thao tác chạm, cho mọi thao tác chạm của bạn đều mịn màng, nhanh nhạy và có độ chính xác cao nhất.
            
            Samsung Galaxy S21 5G | Màn hình kích thước 6.2 inch độ phân giải Full HD+ có tần số quét 120 Hz
            
            Bên cạnh đó, Galaxy S21 đã nhận được chứng nhận cho dải màu sắc trên di động, 100% phạm vi bao phủ DCI-P3 (chuẩn điện ảnh) cho hình ảnh không bị nhạt màu mà được hiển thị sống động, bất chấp mọi điều kiện ánh sáng.
            
            Samsung Galaxy S21 5G | Dải màu sắc trên di động chuẩn điện ảnh
            Hơn thế nữa, chiếc điện thoại này có khả năng giảm các tác động của ánh sáng xanh, giúp bảo vệ sức khỏe đôi mắt của bạn, hạn chế tình trạng nhức, mỏi mắt khi sử dụng thiết bị trong thời gian dài. Cho bạn thỏa sức tận hưởng những giây phút giải trí đỉnh cao, bất kể ngày đêm.
            
            Samsung Galaxy S21 5G | Trang bị kính cường lực Corning Gorilla Glass Victus
            
            Galaxy S21 được bảo vệ bởi kính cường lực Corning Gorilla Glass Victus với khả năng chịu lực cực kỳ ấn tượng, hạn chế tối đa trầy xước và hư hỏng. Đây là loại kính cứng nhất trên điện thoại thông minh Samsung kể từ đầu năm 2021.
            
            Camera cho hình ảnh hoàn hảo đến từng chi tiết
            Thông số máy ảnh luôn là niềm tự hào của Samsung. Galaxy S21 chiếc điện thoại sở hữu 3 camera sau trong đó camera góc rộng, góc siêu rộng có cùng độ phân giải là 12 MP, camera tele có độ phân giải lên đến 64 MP. Ở mặt trước, camera selfie có độ phân giải 10 MP.
            
            Samsung Galaxy S21 5G | Cụm camera sau
            
            Cụm camera này hỗ trợ đầy đủ các tính năng mà một người dùng cần. Chế độ chụp chân dung, góc rộng, AI làm đẹp,... luôn sẵn sàng mang đến cho người dùng những bức ảnh xuất sắc mà không cần chỉnh sửa quá nhiều.
            
            Samsung Galaxy S21 5G | Camera góc rộng, góc siêu rộng có cùng độ phân giải là12 MP
            
            Chế độ chụp đêm (Night Mode) sẽ giúp các cuộc vui trong đêm của bạn được ghi lại một cách rõ ràng. Zoom kỹ thuật số lên đến 30x có thể giúp bạn tiếp cận được những vật thể ở xa với độ chi tiết cao nhất.
            
            Samsung Galaxy S21 5G | Chế độ chụp đêm (Night Mode), Zoom kỹ thuật số lên đến 30x 
            
            Samsung Galaxy S21 cho phép quay video chất lượng 8K siêu cao. Đây là độ phân giải mà ít có dòng smartphone nào sở hữu được. Nhờ sự hỗ trợ của các công nghệ chống rung siêu ổn định, cùng với một ít bộ lọc màu người dùng có thể sáng tạo những thước phim hàng ngày, khi đi du lịch hay vào dịp đặc biệt,... tất cả đều trông như những bộ phim chất lượng cao ngoài rạp.
            
            Samsung Galaxy S21 5G | Giao diện chụp ảnh
            
            Camera selfie AI 10 MP hỗ trợ chụp góc rộng, HDR, chế độ tự động làm đẹp kèm theo Stickers, người dùng thoải mái sáng tạo đa dạng kiểu mẫu ảnh mà mình thích. Ngoài ra, camera này cũng sở hữu quay video độ phân giải lên đến 4K. 
            
            Samsung Galaxy S21 5G | Camera selfie AI 10 MP hỗ trợ chụp góc rộng, HDR, làm đẹp thông minh
            Vi xử lý Exynos 2100 mới nhất của Samsung 
            Cho đến tháng 01/2021 thì CPU Exynos 2100 8 nhân là con chip thứ 2 của nhà Samsung được sản xuất trên quy trình 5 nm EUV, được cải tiến với tốc độ nhanh hơn, thông minh hơn và tiết kiệm điện hơn. Cho bạn thỏa sức làm việc và giải trí hiệu quả với khả năng xử lý mạnh mẽ vượt trội.
            
            Samsung Galaxy S21 5G | Trang bị vi xử lý Exynos 2100
            
            CPU Exynos 2100 đi kèm với GPU Mali-G78 cải thiện hiệu suất đồ họa lên tới 40% so với thế hệ trước. Hiệu năng đo được trên ứng dụng AnTuTu cho số liệu là 460.537 điểm giúp điện thoại chơi game tốt mượt mà trên các dòng game phổ biến hiện nay như PUBG Mobile, Liên Quân Mobile,...
            
            Samsung Galaxy S21 5G | Điểm Antutu
            
            Chế độ Priority Mode mới từ Game Booster của hãng sẽ chặn các cuộc gọi, thông báo, AI sẽ tự động điều chỉnh các cài đặt để mang đến những trải nghiệm tốt nhất, đồng thời cải thiện hiệu suất của máy lên mức tối đa.
            
            Samsung Galaxy S21 5G | Chế độ Priority Mode mới từ Game Booster chặn cuộc gọi, thông báo
            
            Đi kèm với CPU mạnh mẽ trên là 8 GB RAM cho khả năng đa nhiệm mượt mà, bộ nhớ trong 128 GB cho phép người dùng thoải mái lưu trữ dữ liệu cần thiết. Lưu ý rằng chiếc smartphone này sẽ không hỗ trợ thẻ nhớ ngoài.
            
            Samsung Galaxy S21 5G | RAM 8 GB đa nhiệm mượt mà, bộ nhớ trong 128 GB
            
            Exynos 2100 là một CPU tương thích với mạng 5G, sẽ mang đến tốc độ truyền tải nhanh hơn gấp nhiều lần khi so sánh với mạng 4G, giúp bạn tải lên hoặc tải xuống mọi dữ liệu trong tích tắc.
            
            Viên pin tích hợp nhiều công nghệ thông minh
            Samsung Galaxy S21 có viên pin dung lượng 4000 mAh, tuy dung lượng không quá cao nhưng khi kết hợp cùng công nghệ màn hình mới, CPU được nâng cấp. S21 có thể cùng bạn học tập, giải trí cả ngày mà không quá lo lắng về vấn đề cạn năng lượng.
            
            Samsung Galaxy S21 5G | Viên pin dung lượng 4000 mAh
            
            Công nghệ sạc nhanh 25 W trên Galaxy S21 cung cấp cho người dùng hàng giờ sử dụng chỉ trong vài phút sạc. Ngoài ra, công nghệ sạc nhanh không dây Qi 2.0 sẽ tiện lợi hơn nữa khi không cần đến cáp sạc, gọn gàng và thuận tiện. 
            
            Samsung Galaxy S21 5G | Công nghệ sạc nhanh 25 W
            
            PowerShare đã có mặt trên Galaxy S21, công nghệ này có khả năng biến điện thoại thành một viên pin dự phòng khi có thể chia sẻ pin điện thoại của mình cho các thiết bị khác hỗ trợ sạc không dây như: Đồng hồ thông minh hoặc điện thoại,... một tính năng vô cùng lợi ích.
            
            Samsung Galaxy S21 5G | Có thể chia sẻ pin điện thoại của mình cho các thiết bị khác
            
            Chiếc điện thoại Samsung Galaxy S21 5G cùng toàn bộ S21 series mới hứa hẹn sẽ làm mưa làm gió ở phân khúc cao cấp, từ diện mạo sang trọng đến hiệu năng, từ công nghệ màn hình đến cụm camera. Đây là những yếu tố khẳng định đẳng cấp chính chiếc điện thoại và của chủ sở hữu.",
            'parameter'=>"<p>M&agrave;n h&igrave;nh:Dynamic AMOLED 2X6.2&quot;Full HD+</p><p>Hệ điều h&agrave;nh:Android 11</p><p>Camera sau:Ch&iacute;nh 12 MP &amp; Phụ 64 MP, 12 MP</p><p>Camera trước:10 MP</p><p>Chip:Exynos 2100</p><p>RAM:8 GB</p><p>Bộ nhớ trong:128 GB</p><p>SIM:2 Nano SIM hoặc 1 Nano SIM + 1 eSIMHỗ trợ 5G</p><p>Pin, Sạc:4000 mAh25 W</p>",
            'summary' => "Chiếc điện thoại Samsung Galaxy S21 5G cùng toàn bộ S21 series mới hứa hẹn sẽ làm mưa làm gió ở phân khúc cao cấp",
            'images' => "a1.jpg",
            'category_id' => 2,
        ]);
        DB::table('products')->insert([
            'name' => "Điện thoại iPhone 12 64GB",
            'slug' => "iphone-12",
            'import_price' => "23490000",
            'price' => "23500000",
            'amount' => "2",
            'sold_amount' => "1",
            'sku' => "iphone-12",
            'des' => '<h3>Trong những th&aacute;ng cuối năm 2020,&nbsp;<a href="https://www.thegioididong.com/apple" target="_blank" title="Tham khảo sản phẩm chính hãng của Apple tại Thế Giới Di Động">Apple</a>&nbsp;đ&atilde; ch&iacute;nh thức giới thiệu đến người d&ugrave;ng cũng như iFan thế hệ iPhone&nbsp;12&nbsp;series&nbsp;mới với h&agrave;ng loạt t&iacute;nh năng bứt ph&aacute;, thiết kế được lột x&aacute;c ho&agrave;n to&agrave;n, hiệu năng đầy mạnh mẽ v&agrave; một trong số đ&oacute; ch&iacute;nh l&agrave;&nbsp;<a href="https://www.thegioididong.com/dtdd/iphone-12" target="_blank" title="Tham khảo điện thoại iPhone 12 chính hãng tại Thế Giới Di Động">iPhone 12 64GB</a>.</h3>

            <h3>Hiệu năng vượt xa mọi giới hạn</h3>
            
            <p>Apple đ&atilde; trang bị con chip mới nhất của h&atilde;ng (t&iacute;nh đến 11/2020) cho iPhone 12 đ&oacute; l&agrave;&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-chip-apple-a14-bionic-tren-iphone-12-va-ipad-1290695" target="_blank" title="Tìm hiểu chip A14 Bionic là gì?">A14 Bionic</a>, được sản xuất tr&ecirc;n tiến tr&igrave;nh 5 nm với hiệu suất ổn định hơn so với chip A13 được trang bị tr&ecirc;n phi&ecirc;n bản tiền nhiệm&nbsp;<a href="https://www.thegioididong.com/dtdd/iphone-11" target="_blank" title="Tham khảo điện thoại iPhone 11 chính hãng tại Thế Giới Di Động">iPhone 11</a>.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/213031/iphone-12-144220-044259.jpg" onclick="return false;"><img alt="Chip A14 Bionic mạnh mẽ | iPhone 12" src="https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-144220-044259.jpg" title="Chip A14 Bionic mạnh mẽ | iPhone 12" /></a></p>
            
            <p>Xem th&ecirc;m:&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-chip-apple-a14-bionic-tren-iphone-12-va-ipad-1290695" target="_blank" title="Tìm hiểu về chip Apple A14 Bionic trên iPhone 12 và iPad Air 2020">T&igrave;m hiểu về chip Apple A14 Bionic tr&ecirc;n iPhone 12 v&agrave; iPad Air 2020</a></p>
            
            <p>Với CPU Apple A14 Bionic, bạn c&oacute; thể dễ d&agrave;ng trải nghiệm mọi tựa game với những pha chuyển cảnh mượt m&agrave; hay h&agrave;ng loạt hiệu ứng đồ họa tuyệt đẹp ở mức đồ họa cao m&agrave; kh&ocirc;ng lo t&igrave;nh trạng giật lag.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/213031/iphone-12-18.jpg" onclick="return false;"><img alt="Chiến game siêu mượt, đồ họa tuyệt đẹp | iPhone 12" src="https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-18.jpg" title="Chiến game siêu mượt, đồ họa tuyệt đẹp | iPhone 12" /></a></p>
            
            <p>Chưa hết, Apple c&ograve;n g&acirc;y bất ngờ đến người d&ugrave;ng với hệ thống 5G lần đầu ti&ecirc;n được trang bị tr&ecirc;n những chiếc&nbsp;<a href="https://www.thegioididong.com/dtdd-apple-iphone" target="_blank" title="Tham khảo iPhone kinh doanh tại thegioididong.com">iPhone</a>, cho tốc độ truyền tải dữ liệu nhanh hơn, ổn định hơn.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/213031/iphone-12-20.jpg" onclick="return false;"><img alt="Kết nối 5G truyền tải dữ liệu nhanh chóng | iPhone 12" src="https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-20.jpg" title="Kết nối 5G truyền tải dữ liệu nhanh chóng | iPhone 12" /></a></p>
            
            <p>iPhone 12 sẽ chạy tr&ecirc;n hệ điều h&agrave;nh&nbsp;<a href="https://www.thegioididong.com/hoi-dap/ios-14-va-5-tinh-nang-moi-thu-vi-khong-the-bo-qua-tren-1268933" target="_blank" title="Tìm hiểu thêm những tính năng trên iOS 14">iOS 14</a>&nbsp;với nhiều t&iacute;nh năng hấp dẫn như hỗ trợ Widget cũng như những n&acirc;ng cấp tối ưu phần mềm đ&aacute;ng kể mang lại những trải nghiệm th&uacute; vị mới lạ đến người d&ugrave;ng.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/213031/iphone-12-13.jpg" onclick="return false;"><img alt="Khám phá những tính năng mới hấp dẫn trên iOS 14 | iPhone 12" src="https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-13.jpg" title="Khám phá những tính năng mới hấp dẫn trên iOS 14 | iPhone 12" /></a></p>
            
            <h3>Cụm camera kh&ocirc;ng ngừng cải tiến</h3>
            
            <p>iPhone 12 được trang bị hệ thống camera k&eacute;p bao gồm&nbsp;<a href="https://www.thegioididong.com/dtdd-camera-goc-rong" target="_blank" title="Tham khảo điện thoại có camera góc rộng tại Thế Giới Di Động">camera g&oacute;c rộng</a>&nbsp;v&agrave; camera si&ecirc;u rộng c&oacute; c&ugrave;ng độ ph&acirc;n giải l&agrave; 12 MP, chế độ ban đ&ecirc;m (<a href="https://www.thegioididong.com/hoi-dap/che-do-chup-dem-night-mode-la-gi-907873" target="_blank" title="Tìm hiểu chế độ chụp đêm Night Mode là gì?">Night Mode</a>) tr&ecirc;n bộ đ&ocirc;i camera n&agrave;y cũng đ&atilde; được n&acirc;ng cấp về phần cứng lẫn thuật to&aacute;n xử l&yacute;, khi chụp những bức ảnh thiếu s&aacute;ng bạn sẽ nhận được kết quả ấn tượng với m&agrave;u sắc, độ chi tiết r&otilde; n&eacute;t đ&aacute;ng kinh ngạc.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/213031/iphone-12-040321-030344.jpg" onclick="return false;"><img alt="Cụm camera sau| iPhone 12" src="https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-040321-030344.jpg" title="Cụm camera sau| iPhone 12" /></a></p>
            
            <p>Bạn c&oacute; thể kh&aacute;m ph&aacute; th&ecirc;m những t&iacute;nh năng của camera tr&ecirc;n iPhone 12 như chế độ smart HDR 3 gi&uacute;p c&acirc;n bằng yếu tố &aacute;nh s&aacute;ng trong ảnh, l&agrave;m nổi bật chi tiết đối tượng v&agrave; c&acirc;y cối trong khi vẫn giữ được m&agrave;u sắc phong ph&uacute; của bầu trời ngay cả v&agrave;o buổi trưa nắng gắt.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/213031/iphone-12-9.jpg" onclick="return false;"><img alt="Chụp ảnh với tính năng smart HDR 3 sắc nét, chất lượng | iPhone 12" src="https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-9.jpg" title="Chụp ảnh với tính năng smart HDR 3 sắc nét, chất lượng | iPhone 12" /></a></p>
            
            <p>Chế độ chụp ch&acirc;n dung đ&atilde; tốt nay c&ograve;n tốt hơn trong việc l&agrave;m mờ hậu cảnh một c&aacute;ch nghệ thuật để dồn hết sự tập trung v&agrave;o đối tượng m&agrave; bạn muốn chụp.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/213031/iphone-12-10.jpg" onclick="return false;"><img alt="Nổi bật chủ thể với tính năng chụp chân dung độc đáo | iPhone 12" src="https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-10.jpg" title="Nổi bật chủ thể với tính năng chụp chân dung độc đáo | iPhone 12" /></a></p>
            
            <p>Bạn sẽ dễ d&agrave;ng quay video 4K HDR với chuẩn điện ảnh&nbsp;<a href="https://www.thegioididong.com/hoi-dap/dolby-vision-la-gi-cac-ung-dung-noi-bat-va-nhung-loai-1226284" target="_blank" title="Tìm hiểu Dolby Vision là gì?">Dolby Vision</a>&nbsp;v&agrave; chỉnh sửa ngay tr&ecirc;n chiếc điện thoại của m&igrave;nh, bạn c&oacute; thể đưa video l&ecirc;n TV của bạn để thưởng thức thước phim sắc n&eacute;t chất lượng cao.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/213031/iphone-12-11.jpg" onclick="return false;"><img alt="Quay video chất lượng ngay cả trong điều kiện ánh sáng yếu | iPhone 12" src="https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-11.jpg" title="Quay video chất lượng ngay cả trong điều kiện ánh sáng yếu | iPhone 12" /></a></p>
            
            <p>Sự kết hợp của 2 cảm biến chất lượng n&agrave;y đ&atilde; tạo n&ecirc;n một hệ thống camera chuy&ecirc;n nghiệp kh&ocirc;ng kh&aacute;c g&igrave; những chiếc m&aacute;y ảnh thực thụ, dễ d&agrave;ng đem lại những bức h&igrave;nh sắc n&eacute;t tuyệt đối, độ chi tiết cao v&agrave; đa dạng chế độ chụp cho người d&ugrave;ng linh hoạt sử dụng.</p>
            
            <h3>Ghi dấu ấn về mặt thiết kế</h3>
            
            <p>Về ngoại h&igrave;nh iPhone 12 c&oacute; thiết kế ho&agrave;i niệm với phần cạnh được l&agrave;m vu&ocirc;ng vức tương tự tr&ecirc;n mẫu iPhone 4 thay v&igrave; bo cong như iPhone 11.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/213031/iphone-12-040321-030352.jpg" onclick="return false;"><img alt=" iPhone 12 có thiết kế hoài niệm tương tự iPhone 4 series" src="https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-040321-030352.jpg" title=" iPhone 12 có thiết kế hoài niệm tương tự iPhone 4 series" /></a></p>
            
            <p>Ở mặt trước iPhone 12 phần tai thỏ được l&agrave;m nhỏ gọn hơn v&agrave; cũng l&agrave; nơi chứa cảm biến Face ID c&oacute; thể nhận diện khu&ocirc;n mặt một c&aacute;ch nhanh ch&oacute;ng v&agrave; ch&iacute;nh x&aacute;c.</p>
            
            <p>Apple c&ograve;n mang đến cho người một loạt gam m&agrave;u c&aacute; t&iacute;nh, độc đ&aacute;o tr&ecirc;n những chiếc iPhone của m&igrave;nh để người d&ugrave;ng c&oacute; sự lựa chọn ph&ugrave; hợp với những phong c&aacute;ch kh&aacute;c nhau.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/213031/iphone-12-17.jpg" onclick="return false;"><img alt="Sở hữu loạt gam màu cá tính | iPhone 12" src="https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-17.jpg" title="Sở hữu loạt gam màu cá tính | iPhone 12" /></a></p>
            
            <p>iPhone 12 được trang bị m&agrave;n h&igrave;nh Super Retina XDR OLED tr&agrave;n viền c&oacute; k&iacute;ch thước 6.1 inch, cho bạn kh&ocirc;ng gian trải nghiệm lớn cũng như những gi&acirc;y ph&uacute;t giải tr&iacute; hấp dẫn tr&ecirc;n một m&agrave;n ảnh v&ocirc; c&ugrave;ng chất lượng.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/213031/iphone-12-040421-030410.jpg" onclick="return false;"><img alt="Màn hình Super Retina XDR OLED 6.1 inch | iPhone 12" src="https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-040421-030410.jpg" title="Màn hình Super Retina XDR OLED 6.1 inch | iPhone 12" /></a></p>
            
            <p>M&aacute;y được chế t&aacute;c c&oacute; độ ho&agrave;n thiện cực cao với thiết kế nguy&ecirc;n khối, khung nh&ocirc;m v&agrave; mặt sau l&agrave; k&iacute;nh cường lực cao cấp to&aacute;t l&ecirc;n vẻ ngo&agrave;i sang chảnh cũng như mang lại độ hiệu quả an to&agrave;n cao mỗi khi sử dụng.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/213031/iphone-12-041521-031513.jpg" onclick="return false;"><img alt="Độ hoàn thiện cao, chắc chắn cho thiết bị | iPhone 12" src="https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-041521-031513.jpg" title="Độ hoàn thiện cao, chắc chắn cho thiết bị | iPhone 12" /></a></p>
            
            <p>Mặt trước của iPhone 12 được phủ ho&agrave;n to&agrave;n bởi lớp k&iacute;nh cường lực Ceramic Shield cứng c&aacute;p, được đ&aacute;nh gi&aacute; l&agrave; c&oacute; độ bền cao v&agrave; cứng c&aacute;p hơn hầu hết c&aacute;c loại mặt k&iacute;nh c&oacute; tr&ecirc;n&nbsp;<a href="https://www.thegioididong.com/dtdd" target="_blank" title="Tham khảo điện thoại chính hãng tại Thế Giới Di Động">điện thoại th&ocirc;ng minh</a>&nbsp;kh&aacute;c c&oacute; mặt tr&ecirc;n thị trường.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/213031/iphone-12-040321-030328.jpg" onclick="return false;"><img alt="Lớp kính cường lực Ceramic Shield | iPhone 12" src="https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-040321-030328.jpg" title="Lớp kính cường lực Ceramic Shield | iPhone 12" /></a></p>
            
            <p>Xem th&ecirc;m:&nbsp;<a href="https://www.thegioididong.com/hoi-dap/mat-kinh-ceramic-shield-tren-iphone-12-la-gi-co-xin-so-nhu-1298900" target="_blank" title="Mặt kính Ceramic Shield trên iPhone 12 là gì? Có xịn sò như quảng cáo?">Mặt k&iacute;nh Ceramic Shield tr&ecirc;n iPhone 12 l&agrave; g&igrave;? C&oacute; xịn s&ograve; như quảng c&aacute;o?</a></p>
            
            <p>V&agrave; để cho thiết bị trở n&ecirc;n ho&agrave;n hảo hơn n&ecirc;n kh&ocirc;ng thể thiếu khả năng kh&aacute;ng nước, bụi chuẩn IP68 gi&uacute;p người d&ugrave;ng y&ecirc;n t&acirc;m sử dụng với những buổi đi chơi biển m&agrave; kh&ocirc;ng hề lo chiếc m&aacute;y bị v&ocirc; nước.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/213031/iphone-12-2.jpg" onclick="return false;"><img alt="Kháng nước bụi chuẩn IP68 | iPhone 12" src="https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-2.jpg" title="Kháng nước bụi chuẩn IP68 | iPhone 12" /></a></p>
            
            <h3>Trải nghiệm xuy&ecirc;n suốt, liền mạch cả ng&agrave;y d&agrave;i</h3>
            
            <p>Để bạn c&oacute; những gi&acirc;y ph&uacute;t trải nghiệm liền mạch, Apple đ&atilde; trang bị một vi&ecirc;n pin c&oacute; dung lượng 2815 mAh, t&iacute;ch hợp cho khả năng tiết kiệm pin gi&uacute;p người d&ugrave;ng c&oacute; thể giải tr&iacute; đa phương tiện l&ecirc;n đến 17 giờ v&agrave; nghe nhạc li&ecirc;n tục l&ecirc;n đến 65 giờ.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/213031/iphone-12-040321-030358.jpg" onclick="return false;"><img alt="Dung lượng pin sử dụng đáp ứng đủ một ngày | iPhone 12" src="https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-040321-030358.jpg" title="Dung lượng pin sử dụng đáp ứng đủ một ngày | iPhone 12" /></a></p>
            
            <p>V&agrave; kh&ocirc;ng thể thiếu đ&oacute; ch&iacute;nh l&agrave; t&iacute;nh năng sạc nhanh, iPhone 12 c&oacute; khả năng&nbsp;<a href="https://www.thegioididong.com/dtdd-sac-pin-nhanh" target="_blank" title="Tham khảo điện thoại có sạc pin nhanh tại Thế Giới Di Động">sạc pin nhanh</a>&nbsp;qua c&aacute;p c&ocirc;ng suất 20 W, chỉ trong v&ograve;ng 30 ph&uacute;t th&igrave; chiếc m&aacute;y đ&atilde; c&oacute; thế sạc được 50% pin. Th&ecirc;m v&agrave;o đ&oacute; l&agrave; khả năng&nbsp;<a href="https://www.thegioididong.com/dtdd-sac-khong-day" target="_blank" title="Tham khảo điện thoại có sạc không dây tại Thế Giới Di Động">sạc kh&ocirc;ng d&acirc;y</a>&nbsp;MagSafe v&ocirc; c&ugrave;ng tiện dụng.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/213031/iphone-12-16.jpg" onclick="return false;"><img alt="Sạc nhanh và sạc không dây tiện lợi hữu ích | iPhone 12" src="https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-16.jpg" title="Sạc nhanh và sạc không dây tiện lợi hữu ích | iPhone 12" /></a></p>
            
            <p>Xem th&ecirc;m:&nbsp;<a href="https://www.thegioididong.com/hoi-dap/cong-nghe-magsafe-magsafe-2-la-gi-co-tren-thiet-bi-nao-cua-1241888" target="_blank" title="MagSafe trên iPhone 12 là gì? Dùng để làm gì trên các thiết bị Apple?">MagSafe tr&ecirc;n iPhone 12 l&agrave; g&igrave;? D&ugrave;ng để l&agrave;m g&igrave; tr&ecirc;n c&aacute;c thiết bị Apple?</a></p>
            
            <p>Sự lột x&aacute;c đầy mạnh mẽ lần n&agrave;y của Apple kh&ocirc;ng chỉ g&acirc;y bất ngờ đến người d&ugrave;ng m&agrave; c&ograve;n đ&aacute;nh dấu một kỷ nguy&ecirc;n mới trong nền ph&aacute;t triển smartphone Apple. V&agrave; đ&acirc;y cũng được xem l&agrave; một trong những bộ series iPhone m&agrave; Apple đặt nhiều t&acirc;m huyết, mục đ&iacute;ch v&agrave; đầy t&iacute;nh năng mạnh mẽ chưa từng thấy.</p>
            ',
            'parameter'=>"<p>M&agrave;n h&igrave;nh:OLED6.1&quot;Super Retina XDR</p>

            <p>Hệ điều h&agrave;nh:iOS 14</p>
            
            <p>Camera sau:2 camera 12 MP</p>
            
            <p>Camera trước:12 MP</p>
            
            <p>Chip:Apple A14 Bionic</p>
            
            <p>RAM:4 GB</p>
            
            <p>Bộ nhớ trong:64 GB</p>
            
            <p>SIM:1 Nano SIM &amp; 1 eSIMHỗ trợ 5G</p>
            
            <p>Pin, Sạc:2815 mAh20 W</p>
            ",
            'summary' => "Chiếc điện thoại Samsung Galaxy S21 5G cùng toàn bộ S21 series mới hứa hẹn sẽ làm mưa làm gió ở phân khúc cao cấp",
            'images' => "a2.jpg",
            'category_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => "Điện thoại Xiaomi Redmi Note 10 (6GB/128GB)",
            'slug' => "xiaomi-redmi-note-10",
            'import_price' => "5090000",
            'price' => "5100000",
            'amount' => "2",
            'sold_amount' => "1",
            'sku' => "xiaomi-redmi-note-10",
            'des' => '<p>Xiaomi đ&atilde; tr&igrave;nh l&agrave;ng chiếc điện thoại mang t&ecirc;n gọi l&agrave; Xiaomi Redmi Note 10 với điểm nhấn ch&iacute;nh l&agrave; cụm 4 camera 48 MP, chip rồng Snapdragon 678 mạnh mẽ c&ugrave;ng nhiều n&acirc;ng cấp như dung lượng pin 5.000 mAh v&agrave; hỗ trợ sạc nhanh 33 W tiện lợi.<br />
            Thiết kế đẹp mắt, sang trọng đến từng chi tiết<br />
            Xiaomi Redmi Note 10 sở hữu khung viền kim loại kết hợp với mặt lưng nhựa c&oacute; hiệu ứng m&agrave;u sắc đem lại một ngoại h&igrave;nh sang trọng v&agrave; bắt mắt.</p>
            
            <p>Điện thoại Xiaomi Redmi Note 10 (6GB/128GB) | Thiết kế đẹp mắt, sang trọng đến từng chi tiết</p>
            
            <p>Tổng trọng lượng của m&aacute;y chỉ 178.8 g c&ugrave;ng thiết kế mỏng nhẹ ấn tượng với độ mỏng 8.29 mm, cho trải nghiệm cầm nắm thao t&aacute;c thoải m&aacute;i, mang điện thoại đi khắp nơi thật dễ d&agrave;ng.</p>
            
            <p>Điện thoại Xiaomi Redmi Note 10 (6GB/128GB) | Thiết kế cạnh viền</p>
            
            <p>Cảm biến v&acirc;n tay một chạm được t&iacute;ch hợp ở cạnh viền gi&uacute;p việc mở kh&oacute;a điện thoại nhanh ch&oacute;ng v&agrave; cho cảm gi&aacute;c cầm tay thoải m&aacute;i.</p>
            
            <p>Điện thoại Xiaomi Redmi Note 10 (6GB/128GB) | Cảm biến v&acirc;n tay ở cạnh viền</p>
            
            <p>Xiaomi Redmi Note 10 đem đến cho người ti&ecirc;u d&ugrave;ng 3 t&ugrave;y chọn m&agrave;u sắc bao gồm: Trắng, Đen v&agrave; Xanh tự do lựa chọn cho phong c&aacute;ch của bạn.</p>
            
            <p>Điện thoại Xiaomi Redmi Note 10 (6GB/128GB) | Nhiều m&agrave;u sắc, thoải m&aacute;i lựa chọn</p>
            
            <p>M&agrave;n h&igrave;nh si&ecirc;u lớn, trải nghiệm ho&agrave;n hảo<br />
            Màn hình của Redmi Note 10 được trang bị m&agrave;n h&igrave;nh giải tr&iacute; k&iacute;ch thước 6.43 inch, đ&ocirc;̣ ph&acirc;n giải Full HD+, mật độ điểm ảnh cao đến tận 409 ppi, đem đến khả năng hiển thị v&ocirc; c&ugrave;ng sắc n&eacute;t.</p>
            
            <p>Điện thoại Xiaomi Redmi Note 10 (6GB/128GB) | M&agrave;n h&igrave;nh si&ecirc;u lớn, trải nghiệm ho&agrave;n hảo</p>
            
            <p>B&ecirc;n cạnh đ&oacute;, tấm nền AMOLED tr&ecirc;n Redmi Note 10 c&ograve;n cho độ s&aacute;ng cao, m&agrave;u sắc trung thực, đem đến cho người d&ugrave;ng trải nghiệm giải tr&iacute; đỉnh cao.</p>
            
            <p>Điện thoại Xiaomi Redmi Note 10 (6GB/128GB) | Chất lượng hiển thị sắc n&eacute;t</p>
            
            <p>Nổi bật hơn cả ch&iacute;nh l&agrave; tr&ecirc;n Xiaomi Redmi Note 10 sử dụng m&agrave;n h&igrave;nh đục lỗ, với viền m&agrave;n h&igrave;nh được thiết kế mỏng gi&uacute;p tối ưu h&oacute;a diện t&iacute;ch hiển thị của m&agrave;n h&igrave;nh mang đến trải nghiệm kh&ocirc;ng gian rộng r&atilde;i đủ để bạn thoải m&aacute;i sử dụng.&nbsp;</p>
            
            <p>Điện thoại Xiaomi Redmi Note 10 (6GB/128GB) | M&agrave;n h&igrave;nh đục lỗ tr&agrave;n viền</p>
            
            <p>Đồng thời, m&agrave;n h&igrave;nh tr&ecirc;n Redmi Note 10 c&ograve;n được chứng nhận bởi SGS, giảm lượng &aacute;nh s&aacute;ng xanh c&oacute; hại cho mắt, cho bạn thoải m&aacute;i sử dụng giải tr&iacute;, đọc b&aacute;o, xem phim trong thời gian d&agrave;i.&nbsp;</p>
            
            <p>Ngo&agrave;i ra, Redmi Note 10 c&ograve;n hỗ trợ hệ thống &acirc;m thanh Hi-res Audio với &acirc;m lượng cao v&agrave; dải &acirc;m rộng, cho bạn đắm ch&igrave;m trong kh&ocirc;ng gian giải tr&iacute; bất tận.</p>
            
            <p>Hiệu năng mượt m&agrave; với chip rồng Snapdragon<br />
            Xiaomi Redmi Note 10 được trang bị bộ vi xử l&yacute; Snapdragon 678 được sản xuất tr&ecirc;n tiến tr&igrave;nh 11 nm hiện đại đem đến một hiệu năng mạnh mẽ, c&ugrave;ng khả năng xử l&yacute; mượt m&agrave; c&aacute;c t&aacute;c vụ nhẹ nh&agrave;ng như lướt Facebook, xem phim hay thậm ch&iacute; l&agrave; chơi c&aacute;c tựa game nặng.</p>
            
            <p>Điện thoại Xiaomi Redmi Note 10 (6GB/128GB) | Hiệu năng mạnh mẽ với chip rồng Snapdragon</p>
            
            <p>Đi k&egrave;m với đ&oacute; l&agrave; dung lượng RAM 6 GB cho khả năng đa nhiệm tuyệt vời, mở nhiều ứng dụng c&ugrave;ng một l&uacute;c ho&agrave;n to&agrave;n kh&ocirc;ng bị giật lag.</p>
            
            <p>Bộ nhớ trong 128 GB c&oacute; thể mở rộng khả năng lưu trữ đến 512 GB qua thẻ nhớ ngo&agrave;i Micro SD, cho bạn thoải m&aacute;i sử dụng dữ liệu, c&agrave;i đặt được nhiều ứng dụng hay c&aacute;c tựa game nặng.</p>
            
            <p>Điện thoại Xiaomi Redmi Note 10 (6GB/128GB) | Hỗ trợ khe cắm thẻ nhớ ngo&agrave;i tới 512 GB</p>
            
            <p>Hơn thế nữa, Redmi Note 10 c&ograve;n được c&agrave;i đặt sẵn giao diện MIUI 12 mới, t&ugrave;y biến tr&ecirc;n nền Android 11 với nhiều n&acirc;ng cấp về giao diện lẫn hiệu năng, để mang tới một trải nghiệm giải tr&iacute; tốt nhất.</p>
            
            <p>Bộ bốn camera si&ecirc;u n&eacute;t, bắt trọn mọi khoảnh khắc<br />
            Xiaomi Redmi Note được trang bị cụm camera sau với độ ph&acirc;n giải lần lượt l&agrave; 48 MP hỗ trợ chụp ảnh g&oacute;c rộng, camera chụp ảnh g&oacute;c si&ecirc;u rộng 8 MP, hai camera 2 MP đo chiều s&acirc;u ảnh v&agrave; chụp ảnh macro.</p>
            
            <p>Điện thoại Xiaomi Redmi Note 10 (6GB/128GB) | Cụm 4 camera sau</p>
            
            <p>Cụm camera tr&ecirc;n Redmi Note 10 được hỗ trợ bằng c&ocirc;ng nghệ AI th&ocirc;ng minh, cho bạn ghi lại mọi khoảnh khắc trong cuộc sống h&agrave;ng ng&agrave;y của bạn một c&aacute;ch dễ d&agrave;ng v&agrave; đầy chi tiết.&nbsp;</p>
            
            <p>Điện thoại Xiaomi Redmi Note 10 (6GB/128GB) | Ảnh chụp bằng camera sau</p>
            
            <p>Với camera g&oacute;c si&ecirc;u rộng 8 MP, cho độ mở l&ecirc;n tới 118&deg; gi&uacute;p bạn c&oacute; thể ghi lại những d&atilde;y n&uacute;i rộng lớn, những t&ograve;a nh&agrave; chọc trời hay những cột mốc ở xa một c&aacute;ch dễ d&agrave;ng m&agrave; kh&ocirc;ng cần phải di chuyển nhiều.</p>
            
            <p>Điện thoại Xiaomi Redmi Note 10 (6GB/128GB) | Ảnh chụp g&oacute;c rộng</p>
            
            <p>Ngo&agrave;i ra, camera macro v&agrave; camera đo chiều s&acirc;u l&agrave; c&ocirc;ng cụ đắc lực để bạn c&oacute; được những bức ảnh độc đ&aacute;o ở khoảng c&aacute;ch gần hay chụp ảnh x&oacute;a ph&ocirc;ng một c&aacute;ch ảo diệu m&agrave; kh&ocirc;ng cần phải sử dụng đến ứng dụng thứ ba.</p>
            
            <p>Điện thoại Xiaomi Redmi Note 10 (6GB/128GB) | Ảnh chụp bằng camera sau</p>
            
            <p>Camera trước của m&aacute;y được thiết kế dạng đục lỗ c&oacute; độ ph&acirc;n giải 13 MP hỗ trợ đầy đủ các tính năng l&agrave;m đẹp AI Beautify, chụp ảnh g&oacute;c rộng, x&oacute;a ph&ocirc;ng với nhiều hiệu ứng bokeh độc đ&aacute;o cho bạn sẵn s&agrave;ng chia sẻ ảnh cho người th&acirc;n v&agrave; gia đ&igrave;nh l&ecirc;n mạng x&atilde; hội bất cứ l&uacute;c n&agrave;o.</p>
            
            <p>Điện thoại Xiaomi Redmi Note 10 (6GB/128GB) | Ảnh chụp selfie</p>
            
            <p>Thoải m&aacute;i sử dụng với dung lượng pin 5.000 mAh, tích hợp sạc nhanh 33 W&nbsp;<br />
            Xiaomi trang bị cho Xiaomi Redmi Note 10 vi&ecirc;n pin khủng 5.000 mAh, cho ph&eacute;p bạn sử dụng thoải m&aacute;i trong 1.5 ng&agrave;y chỉ sau duy nhất một lần sạc.</p>
            
            <p>Điện thoại Xiaomi Redmi Note 10 (6GB/128GB) | Dung lượng pin lớn, thoải m&aacute;i trải nghiệm</p>
            
            <p>Ngo&agrave;i ra, Xiaomi Redmi Note 10 c&oacute; khả năng sạc nhanh 33 W, nh&agrave; sản xuất tự tin cho biết rằng n&oacute; cho khả năng sạc đầy 50% pin chỉ trong khoảng 30 ph&uacute;t, cho ph&eacute;p bạn tận dụng tối đa thời gian sử dụng điện thoại của m&igrave;nh.</p>
            
            <p>Điện thoại Xiaomi Redmi Note 10 (6GB/128GB) | Khả năng sạc nhanh 33W</p>
            
            <p>Nh&igrave;n chung, Xiaomi Redmi Note 10 l&agrave; chiếc smartphone ho&agrave;n hảo, đ&aacute;p ứng tốt cho c&aacute;c nhu cầu giải tr&iacute;, chụp ảnh hay chơi game. Đặc biệt với mức gi&aacute; b&aacute;n v&ocirc; c&ugrave;ng hấp dẫn, chắc chắn đ&acirc;y sẽ l&agrave; một t&acirc;n binh s&aacute;ng gi&aacute; tr&ecirc;n thị trường smartphone đang rất s&ocirc;i động hiện nay.</p>
            ',
            'parameter'=>"<p>M&agrave;n h&igrave;nh:AMOLED6.43&quot;Full HD+</p>

            <p>Hệ điều h&agrave;nh:Android 11</p>
            
            <p>Camera sau:Ch&iacute;nh 48 MP &amp; Phụ 8 MP, 2 MP, 2 MP</p>
            
            <p>Camera trước:13 MP</p>
            
            <p>Chip:Snapdragon 678</p>
            
            <p>RAM:6 GB</p>
            
            <p>Bộ nhớ trong:128 GB</p>
            
            <p>SIM:2 Nano SIMHỗ trợ 4G</p>
            
            <p>Pin, Sạc:5000 mAh33 W</p>
            ",
            'summary' => "Chiếc điện thoại Samsung Galaxy S21 5G cùng toàn bộ S21 series mới hứa hẹn sẽ làm mưa làm gió ở phân khúc cao cấp",
            'images' => "a3.jpg",
            'category_id' => 5,
        ]);
        
        DB::table('products')->insert([
            'name' => "Điện thoại OPPO A93",
            'slug' => "oppo-a93",
            'import_price' => "5090000",
            'price' => "5100000",
            'amount' => "2",
            'sold_amount' => "1",
            'sku' => "oppo-a93",
            'des' => '<h3><a href="https://www.thegioididong.com/dtdd-oppo" target="_blank" title="Tham khảo điện thoại OPPO chính hãng tại Thegioididong.com">OPPO</a>&nbsp;đ&atilde; tung ra&nbsp;<a href="https://www.thegioididong.com/dtdd/oppo-a93" target="_blank" title="Tham khảo điện thoại OPPO A93 chính hãng tại Thegioididong.com">OPPO A93</a>&nbsp;d&ograve;ng sản&nbsp;phẩm thuộc ph&acirc;n kh&uacute;c&nbsp;<a href="https://www.thegioididong.com/dtdd?p=tu-4-7-trieu" target="_blank" title="Tham khảo điện thoại tầm trung chính hãng tại Thegioididong.com">điện thoại tầm trung</a>&nbsp;được xem l&agrave; tiếp nối từ&nbsp;<a href="https://www.thegioididong.com/dtdd/oppo-a92" target="_blank" title="Tham khảo điện thoại OPPO A92 chính hãng tại Thegioididong.com">OPPO A92</a>&nbsp;với nhiều điểm được n&acirc;ng cấp như hiệu năng, hệ thống camera c&ugrave;ng khả năng sạc nhanh 18 W.</h3>

            <h3>Hiệu năng vượt trội c&ugrave;ng với Helio P95</h3>
            
            <p>OPPO A93 được trang bị chipset MediaTek Helio P95 tốc độ CPU đạt 2.2 GHz với sức mạnh như thế n&agrave;y th&igrave; A93 sẽ kh&ocirc;ng l&agrave;m bạn thất vọng khi c&oacute; thể hoạt động tốt với nhiều ứng dụng nặng hay thao t&aacute;c cuộn trang đều diễn ra trơn tru cảm gi&aacute;c như kh&ocirc;ng c&oacute; độ trễ.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/229056/oppo-a93-270620-100612.jpg" onclick="return false;"><img alt="Vi xử lý Helio P95 | OPPO A93" src="https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-270620-100612.jpg" title="Vi xử lý Helio P95 | OPPO A93" /></a></p>
            
            <p>Ấn tượng hơn khi bộ nhớ RAM đến 8 GB gi&uacute;p m&aacute;y c&oacute; thể thao t&aacute;c tr&ecirc;n nhiều ứng dụng c&ugrave;ng l&uacute;c m&agrave; kh&ocirc;ng c&oacute; hiện tượng&nbsp;giật lag n&acirc;ng cao trải nghiệm người d&ugrave;ng.</p>
            
            <p>Đo tr&ecirc;n Antutu th&igrave; OPPO A93&nbsp;đạt 201.029 điểm, con số kh&aacute; cao&nbsp;đảm bảo mọi hoạt&nbsp;động&nbsp;đều mượt m&agrave; v&agrave; gi&uacute;p&nbsp;<a href="https://www.thegioididong.com/dtdd-choi-game" target="_blank" title="Tham khảo điện thoại chơi game - cấu hình cao tại Thegioididong.com ">điện thoại chơi game</a>&nbsp;đồ hoạ nặng như Li&ecirc;n Qu&acirc;n cũng kh&ocirc;ng th&agrave;nh vấn&nbsp;đề.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/229056/oppo-a93-012520-042549.jpg" onclick="return false;"><img alt="Điểm số đo trên Antutu | OPPO A93" src="https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-012520-042549.jpg" title="Điểm số đo trên Antutu | OPPO A93" /></a></p>
            
            <p>V&agrave; c&oacute; bộ nhớ trong 128 GB thoải m&aacute;i lưu trữ mọi dữ liệu, nếu chưa đủ th&igrave; m&aacute;y vẫn hỗ trợ thẻ nhớ ngo&agrave;i MicroSD tối đa 256 GB cho bạn th&ecirc;m nhiều kh&ocirc;ng gian lưu trữ hơn.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/229056/oppo-a93-270620-100617.jpg" onclick="return false;"><img alt="Hỗ trợ thẻ nhớ ngoài tối đa 256 GB | OPPO A93" src="https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-270620-100617.jpg" title="Hỗ trợ thẻ nhớ ngoài tối đa 256 GB | OPPO A93" /></a></p>
            
            <p>Mặc kh&aacute;c, OPPO A93 được c&agrave;i đặt sẵn hệ điều h&agrave;nh Android 10 tr&ecirc;n giao diện Color OS 7.2 với những t&iacute;nh năng th&ocirc;ng minh chắc chắn sẽ rất th&uacute; vị.</p>
            
            <p>B&ecirc;n cạnh đ&oacute;, m&aacute;y t&iacute;ch hợp HyperEngine c&ocirc;ng nghệ d&agrave;nh cho tr&ograve; chơi gi&uacute;p bạn n&acirc;ng cao trải nghiệm chơi th&ocirc;ng qua chất lượng h&igrave;nh ảnh bắt mắt, di chuyển mượt m&agrave; nhất trong bất kỳ thế giới trực tuyến n&agrave;o như Li&ecirc;n Qu&acirc;n Mobile.</p>
            
            <h3>Cụm camera selfie t&iacute;ch hợp AI</h3>
            
            <p>OPPO A93 c&oacute; 4 camera sau được xếp đối xứng nhau trong module h&igrave;nh vu&ocirc;ng v&agrave; thanh đ&egrave;n flash LED. Camera ch&iacute;nh c&oacute; độ ph&acirc;n giải 48 MP, camera g&oacute;c si&ecirc;u rộng 8 MP, mono đơn sắc&nbsp;v&agrave; mono ch&acirc;n dung lần lượt đều bằng 2 MP.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/229056/oppo-a93-270620-100622.jpg" onclick="return false;"><img alt="Cụm 4 camera với cảm biến chính 48 MP | OPPO A93" src="https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-270620-100622.jpg" title="Cụm 4 camera với cảm biến chính 48 MP | OPPO A93" /></a></p>
            
            <p>Với hệ thống camera n&agrave;y m&aacute;y c&ograve;n trang bị c&ocirc;ng nghệ Super Night sẽ gi&uacute;p ảnh của bạn sắc n&eacute;t hơn trong điều kiện thiếu s&aacute;ng, c&ugrave;ng khả năng xo&aacute; ph&ocirc;ng tạo hiệu ứng ph&ocirc;ng m&agrave;u kh&aacute;c biệt cho bức ảnh trở n&ecirc;n độc lạ v&agrave; đẹp xuất sắc như trong studio.</p>
            
            <p>&nbsp;</p>
            
            <p>&nbsp;</p>
            
            <p>&nbsp;</p>
            
            <p><img src="https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-012520-042556.jpg" />Ảnh chụp tr&ecirc;n OPPO A93</p>
            
            <p>&nbsp;</p>
            
            <p>&nbsp;</p>
            
            <p><img src="https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-012620-042603.jpg" />Ảnh chụp tr&ecirc;n OPPO A93</p>
            
            <p>&nbsp;</p>
            
            <p>&nbsp;</p>
            
            <p>&nbsp;</p>
            
            <p>Khả năng quay video 4K với tốc độ khung h&igrave;nh l&agrave; 30 fps cho bạn ghi lại những khoảnh khắc thường ng&agrave;y trong cuộc sống với chất lượng mượt m&agrave; v&agrave; xem rất đ&atilde; mắt.</p>
            
            <p>Camera selfie k&eacute;p với cảm biến ch&iacute;nh l&agrave; 16 MP v&agrave; cảm biến đo độ s&acirc;u 2 MP. Việc kết hợp c&ocirc;ng nghệ l&agrave;m đẹp AI đem đến những bức ảnh selfie đẹp mắt trong thật tự nhi&ecirc;n v&agrave; khả năng xo&aacute; ph&ocirc;ng l&agrave;m nổi bật chủ thể.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/229056/oppo-a93-1.jpg" onclick="return false;"><img alt="Camera selfie kép hỗ trợ tính năng làm đẹp AI, xóa phông | OPPO A93" src="https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-1.jpg" title="Camera selfie kép hỗ trợ tính năng làm đẹp AI, xóa phông | OPPO A93" /></a></p>
            
            <h3>Thiết kế cảm hứng, khơi nguồn s&aacute;ng tạo</h3>
            
            <p>OPPO A93 c&oacute; thiết kế v&ocirc; c&ugrave;ng nhỏ gọn mỏng 7.48 mm v&agrave; nặng chỉ 164 g cho cảm gi&aacute;c cầm nắm nhẹ nh&agrave;ng, thoải m&aacute;i trong qu&aacute; tr&igrave;nh sử dụng.&nbsp;</p>
            
            <p><a href="https://www.thegioididong.com/images/42/229056/oppo-a93-270620-100645.jpg" onclick="return false;"><img alt="Thiết kế nhỏ gọn, cầm nắm dễ dạng | OPPO A93" src="https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-270620-100645.jpg" title="Thiết kế nhỏ gọn, cầm nắm dễ dạng | OPPO A93" /></a></p>
            
            <p>C&aacute;c cạnh được bo tr&ograve;n cho cảm gi&aacute;c mềm mại, từng chi tiết đều được chăm ch&uacute;t cho thấy sản phẩm c&oacute; chất lượng đ&aacute;ng được tin cậy. Từ đường v&acirc;n tr&ecirc;n mặt lưng trải d&agrave;i từ camera mang đến một ngoại h&igrave;nh v&ocirc; c&ugrave;ng bắt mắt lại&nbsp;vừa nổi bật.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/229056/oppo-a93-270720-100701.jpg" onclick="return false;"><img alt="Thiết kế bo tròn tạo cảm giác mềm mại | OPPO A93" src="https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-270720-100701.jpg" title="Thiết kế bo tròn tạo cảm giác mềm mại | OPPO A93" /></a></p>
            
            <p>M&aacute;y c&oacute; thiết kế nguy&ecirc;n khối v&agrave; mặt lưng sử dụng chất liệu thuỷ tinh hữu cơ cho độ bền cao cũng như được phủ một lớp m&agrave;ng b&oacute;ng gi&uacute;p chống b&aacute;m v&acirc;n tay, hạn chế bụi bẩn v&agrave; mồ h&ocirc;i.</p>
            
            <p>Mặt trước đ&atilde; được OPPO trang bị k&iacute;nh cường lực&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-kinh-cuong-luc-smartphone-corning-gorilla-glass-3-1288806" target="_blank" title="Tìm hiểu Gorilla Glass 3+ tại Thegioididong.com">Gorilla Glass 3+</a>&nbsp;tăng th&ecirc;m phần cứng c&aacute;p cho m&aacute;y cũng như hạn chế mọi sự trầy xước v&agrave; va đập.&nbsp;</p>
            
            <h3>M&agrave;n h&igrave;nh sống động, sắc n&eacute;t</h3>
            
            <p>OPPO A93 c&oacute; k&iacute;ch thước 6.43 inch v&agrave; c&oacute; độ ph&acirc;n giải Full HD+ (1080 x 2400 Pixels). M&aacute;y sử dụng tấm nền&nbsp;<a href="https://www.thegioididong.com/hoi-dap/man-hinh-amoled-la-gi-905766" target="_blank" title="Tìm hiểu màn hình AMOLED tại Thegioididong.com">AMOLED</a>&nbsp;việc xem phim hay chơi game đều sẽ mang đến chất lượng hiển thị sắc n&eacute;t, m&agrave;u sắc tươi tắn, h&igrave;nh ảnh chi tiết hơn.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/229056/oppo-a93-270620-100637.jpg" onclick="return false;"><img alt="Màn hình sống động, sắc nét | OPPO  A93" src="https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-270620-100637.jpg" title="Màn hình sống động, sắc nét | OPPO  A93" /></a></p>
            
            <h3>Khả năng sạc nhanh 18 W</h3>
            
            <p>OPPO A93 sở hữu vi&ecirc;n pin c&oacute; dung lượng lớn 4000 mAh qu&aacute; đủ cho bạn khoảng 1 ng&agrave;y d&agrave;i sử dụng hoặc 2 ng&agrave;y t&ugrave;y theo nhu cầu sử dụng. Hơn nữa, m&aacute;y được hỗ trợ sạc nhanh l&ecirc;n đến 18 W th&ocirc;ng qua cổng sạc Type-C gi&uacute;p sạc nhanh thiết bị chỉ trong thời gian ngắn.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/229056/oppo-a93-270620-100632.jpg" onclick="return false;"><img alt="Khả năng sạc nhanh 30W | OPPO A93" src="https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-270620-100632.jpg" title="Khả năng sạc nhanh 30W | OPPO A93" /></a></p>
            
            <p>Ngo&agrave;i ra, m&aacute;y vẫn hỗ trợ t&iacute;nh năng&nbsp;<a href="https://www.thegioididong.com/dtdd-bao-mat-van-tay" target="_blank" title="Tham khảo điện thoại mở khoá bằng vân tay tại Thegioididong.com ">bảo mật v&acirc;n tay</a>&nbsp;v&agrave;&nbsp;<a href="https://www.thegioididong.com/dtdd-bao-mat-khuon-mat" target="_blank" title="Tham khảo điện thoại mở khoá bằng khuôn mặt tại Thegioididong.com ">bảo mật khu&ocirc;n mặt</a>&nbsp;gi&uacute;p bạn mở kho&aacute; thiết bị nhanh ch&oacute;ng hơn trong mọi trường hợp.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/229056/oppo-a93-270620-100656.jpg" onclick="return false;"><img alt="Cảm biến vân tay dưới màn hình | OPPO A93" src="https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-270620-100656.jpg" title="Cảm biến vân tay dưới màn hình | OPPO A93" /></a></p>
            
            <p>Nếu bạn&nbsp;đang cần một chiếc&nbsp;<a href="https://www.thegioididong.com/dtdd-pin-khung" target="_blank" title="Tham khảo điện thoại pin trâu tại Thegioididong.com">điện thoại pin tr&acirc;u</a>&nbsp;đi k&egrave;m với nhiều&nbsp;đặc&nbsp;điểm nổi bật như hiệu năng vượt trội, camera chuy&ecirc;n nghiệp nhiều t&iacute;nh năng c&ugrave;ng với sạc nhanh th&igrave;&nbsp;đ&acirc;y sẽ l&agrave; sản phẩm tầm trung ho&agrave;n hảo mang&nbsp;đến những trải nghiệm tuyệt vời&nbsp;đến người d&ugrave;ng.</p>
            ',
            'parameter'=>"",
            'summary' => "",
            'images' => "a4.jpg",
            'category_id' => 5,
        ]);

        DB::table('products')->insert([
            'name' => "Điện thoại Samsung Galaxy A02",
            'slug' => "samsung-galaxy-a02",
            'import_price' => "5090000",
            'price' => "5100000",
            'amount' => "2",
            'sold_amount' => "1",
            'sku' => "samsung-galaxy-a02",
            'des' => '<h3><a href="https://www.thegioididong.com/samsung" rel="noopener" target="_blank" title="Tham khảo sản phẩm Samsung chính hãng tại Thegioididong.com" type="Tham khảo các mẫu điện thoại, smartphone Samsung chính hãng tại Thegioididong.com">Samsung</a>&nbsp;bổ sung th&ecirc;m t&ugrave;y chọn&nbsp;<a href="https://www.thegioididong.com/dtdd" rel="noopener" target="_blank" title="Tham khảo các mẫu smartphone chính hãng, giá tốt, có trả góp tại Thegioididong.com" type="Tham khảo các mẫu smartphone chính hãng, giá tốt, có trả góp tại Thegioididong.com">smartphone</a>&nbsp;trong ph&acirc;n kh&uacute;c gi&aacute; rẻ mang t&ecirc;n&nbsp;<a href="https://www.thegioididong.com/dtdd/samsung-galaxy-a02" rel="noopener" target="_blank" title="Tham khảo giá điện thoại Samsung Galaxy A02 chính hãng tại Thegioididong.com" type="Tham khảo giá điện thoại Samsung Galaxy A02 chính hãng tại Thegioididong.com">Galaxy A02</a>, m&aacute;y trang bị một cấu h&igrave;nh ổn định c&ugrave;ng mức pin khủng 5000 mAh cho thời lượng vượt trội trong tầm gi&aacute; mang đến bạn nhiều trải nghiệm th&uacute; vị hơn.</h3>

            <h3>Gọn nhẹ với nhiều sắc m&agrave;u thời trang</h3>
            
            <p>Galaxy A02 d&ugrave;ng chất liệu nhựa đặc trưng với những gam m&agrave;u trẻ trung bắt mắt, mang đến một thiết bị c&oacute; trọng lượng nhẹ, thoải m&aacute;i cho bạn cầm nắm hay mang đi, thuận tiện trong thao t&aacute;c h&agrave;ng ng&agrave;y.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/228999/samsung-galaxy-a02-007.jpg" onclick="return false;"><img alt="Samsung Galaxy A02 | Thiết kế gọn nhẹ cầm nắm thoải mái" src="https://cdn.tgdd.vn/Products/Images/42/228999/samsung-galaxy-a02-007.jpg" title="Samsung Galaxy A02 | Thiết kế gọn nhẹ cầm nắm thoải mái" /></a></p>
            
            <p>Mặt lưng của Galaxy A02 kh&ocirc;ng bị đơn điệu m&agrave; trở n&ecirc;n mạnh mẽ c&aacute; t&iacute;nh hơn với những đường v&acirc;n nổi carbon. Thiết kế n&agrave;y c&ograve;n gi&uacute;p bạn cầm nắm được b&aacute;m tay, chống đ&aacute;nh rơi do trơn tuột, đồng thời hạn chế lưu lại dấu v&acirc;n tay tr&ecirc;n bề mặt.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/228999/samsung-galaxy-a02-001-1.jpg" onclick="return false;"><img alt="Samsung Galaxy A02 | Mặt lưng mạnh mẽ cá tính hơn với những đường vân nổi carbon" src="https://cdn.tgdd.vn/Products/Images/42/228999/samsung-galaxy-a02-001-1.jpg" title="Samsung Galaxy A02 | Mặt lưng mạnh mẽ cá tính hơn với những đường vân nổi carbon" /></a></p>
            
            <p>Tương tự thế hệ tiền nhiệm&nbsp;<a href="https://www.thegioididong.com/dtdd/samsung-galaxy-a01" rel="noopener" target="_blank" title="Tham khảo điện thoại Samsung Galaxy A01 chính hãng tại Thế Giới Di Động">Samsung Galaxy A01</a>, A02 vẫn sẽ c&oacute; cụm camera k&eacute;p v&agrave; đ&egrave;n flash đặt dọc ở g&oacute;c tr&aacute;i c&ugrave;ng logo Samsung quen thuộc.</p>
            
            <h3>Cấu h&igrave;nh đ&aacute;p ứng tốt c&aacute;c nhu cầu cơ bản</h3>
            
            <p>Trang bị vi xử l&yacute; MediaTek MT6739W, Galaxy A02 c&oacute; cấu h&igrave;nh kh&ocirc;ng qu&aacute; nổi bật nhưng vẫn đủ đ&aacute;p ứng tốt c&aacute;c nhu cầu cơ bản như lướt web đọc tin tức, xem phim v&agrave; giải tr&iacute; với những tựa game nhẹ như: Subway Surfer hay xếp kim cương.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/228999/samsung-galaxy-a02-004-1.jpg" onclick="return false;"><img alt="Samsung Galaxy A02 | Trang bị vi xử lý MediaTek MT6739W" src="https://cdn.tgdd.vn/Products/Images/42/228999/samsung-galaxy-a02-004-1.jpg" title="Samsung Galaxy A02 | Trang bị vi xử lý MediaTek MT6739W" /></a></p>
            
            <p>Mức&nbsp;<a href="https://www.thegioididong.com/dtdd-ram-duoi-4gb" rel="noopener" target="_blank" title="Tham khảo các mẫu smartphone có dung lượng RAM dưới 4 GB cho nhu cầu cơ bản, giá rẻ tại Thegioididong.com" type="Tham khảo các mẫu smartphone có dung lượng RAM dưới 4 GB cho nhu cầu cơ bản, giá rẻ tại Thegioididong.com">RAM 3 GB</a>&nbsp;kh&aacute; ổn để bạn c&oacute; thể đa nhiệm v&agrave; chuyển đổi giữa c&aacute;c ứng dụng mượt m&agrave;. B&ecirc;n cạnh đ&oacute;,&nbsp;<a href="https://www.thegioididong.com/dtdd-rom-32-den-64gb" rel="noopener" target="_blank" title="Tham khảo giá smartphone giá rẻ có bộ nhớ trong từ 32 GB đến 64 GB tai Thegioididong.com" type="Tham khảo giá smartphone giá rẻ có bộ nhớ trong từ 32 GB đến 64 GB tai Thegioididong.com">bộ nhớ trong 32 GB</a>&nbsp;hỗ trợ th&ecirc;m thẻ nhớ ngo&agrave;i, sẵn s&agrave;ng đ&aacute;p ứng tốt nhu cầu lưu trữ của bạn mọi l&uacute;c mọi nơi.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/228999/samsung-galaxy-a02-003.jpg" onclick="return false;"><img alt="Samsung Galaxy A02 | Hỗ trợ thẻ nhớ ngoài" src="https://cdn.tgdd.vn/Products/Images/42/228999/samsung-galaxy-a02-003.jpg" title="Samsung Galaxy A02 | Hỗ trợ thẻ nhớ ngoài" /></a></p>
            
            <h3>Pin 5000 mAh thời lượng ấn tượng</h3>
            
            <p>Pin ch&iacute;nh l&agrave; điểm n&acirc;ng cấp mạnh mẽ nhất của Galaxy A02 khi tăng từ 3000 mAh của Galaxy A01 l&ecirc;n đến 5000 mAh. Với thời lượng pin n&agrave;y, m&aacute;y c&oacute; thể hoạt động xuy&ecirc;n suốt qua tận ng&agrave;y tiếp theo, cho bạn tha hồ lướt web hay thỏa th&iacute;ch xem phim, gọi điện kh&ocirc;ng bị gi&aacute;n đoạn.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/228999/samsung-galaxy-a02-005.jpg" onclick="return false;"><img alt="Samsung Galaxy A02 | Pin dung lượng lớn 5000 mAh" src="https://cdn.tgdd.vn/Products/Images/42/228999/samsung-galaxy-a02-005.jpg" title="Samsung Galaxy A02 | Pin dung lượng lớn 5000 mAh" /></a></p>
            
            <h3>M&agrave;n h&igrave;nh giải tr&iacute; si&ecirc;u rộng.</h3>
            
            <p>Kh&ocirc;ng chỉ ấn tượng về dung lượng pin khủng, Galaxy A02 c&ograve;n sở hữu m&agrave;n h&igrave;nh 6.5 inch si&ecirc;u to&nbsp;<a href="https://www.thegioididong.com/dtdd-man-hinh-tran-vien" rel="noopener" target="_blank" title="Tham khảo giá điện thoại smartphone tràn viền mỏng tại Thegioididong.com" type="Tham khảo giá điện thoại smartphone tràn viền mỏng tại Thegioididong.com">viền mỏng</a>&nbsp;với thiết kế camera giọt nước, m&agrave;n h&igrave;nh m&aacute;y c&oacute; độ ph&acirc;n giải HD+ k&egrave;m tấm nền PLS TFT LCD cho g&oacute;c nh&igrave;n rộng v&agrave; cải thiện chất lượng m&agrave;u sắc v&agrave; h&igrave;nh ảnh.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/228999/samsung-galaxy-a02-006.jpg" onclick="return false;"><img alt="Samsung Galaxy A02 | Màn hình 6.5 inch" src="https://cdn.tgdd.vn/Products/Images/42/228999/samsung-galaxy-a02-006.jpg" title="Samsung Galaxy A02 | Màn hình 6.5 inch" /></a></p>
            
            <p>Tuy kh&ocirc;ng qu&aacute; sắc n&eacute;t, nhưng bạn sẽ c&oacute; một m&agrave;n h&igrave;nh rộng đủ rộng để hiển thị nhiều nội dung hơn với m&agrave;u sắc v&agrave; độ s&aacute;ng tương đối tốt trong tầm gi&aacute;.</p>
            
            <h3>Thể hiện sự s&aacute;ng tạo với cụm camera k&eacute;p</h3>
            
            <p>Galaxy A02 kh&ocirc;ng c&oacute; sự thay đổi về camera so với phi&ecirc;n bản tiền nhiệm, m&aacute;y vẫn sẽ trang bị cụm camera k&eacute;p gồm camera ch&iacute;nh 13 MP v&agrave; camera phụ 2 MP, hỗ trợ chụp ảnh ch&acirc;n dung lẫn chụp ảnh&nbsp;<a href="https://www.thegioididong.com/dtdd-camera-macro" rel="noopener" target="_blank" title="Tham khảo các dòng điện thoại có camera hỗ trợ chụp siêu cận macro tại Thegioididong.com" type="Tham khảo các dòng điện thoại có camera hỗ trợ chụp siêu cận macro tại Thegioididong.com">si&ecirc;u cận macro</a>&nbsp;thời thượng, để bạn thỏa sức chụp v&agrave; lưu lại những điều th&uacute; vị xung quanh.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/228999/samsung-galaxy-a02-002.jpg" onclick="return false;"><img alt="Samsung Galaxy A02 | Cụm camera kép gồm camera chính 13 MP và camera phụ 2 MP" src="https://cdn.tgdd.vn/Products/Images/42/228999/samsung-galaxy-a02-002.jpg" title="Samsung Galaxy A02 | Cụm camera kép gồm camera chính 13 MP và camera phụ 2 MP" /></a></p>
            
            <p>Camera selfie 5 MP hỗ trợ chụp ảnh selfie v&agrave; gọi video call với chất lượng cao, hỗ trợ c&aacute;c c&ocirc;ng cụ chỉnh sửa ảnh nhẹ, gi&uacute;p bạn nhanh ch&oacute;ng c&oacute; những tấm h&igrave;nh đẹp để chia sẻ hay l&agrave;m h&igrave;nh đại diện tr&ecirc;n mạng x&atilde; hội.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/228999/a5.jpg" onclick="return false;"><img alt="Samsung Galaxy A02 | Camera trước 5 MP hỗ trợ chụp ảnh selfie và gọi video call" src="https://cdn.tgdd.vn/Products/Images/42/228999/a5.jpg" title="Samsung Galaxy A02 | Camera trước 5 MP hỗ trợ chụp ảnh selfie và gọi video call" /></a></p>
            
            <p>T&oacute;m lại, với một m&agrave;n h&igrave;nh lớn, cấu h&igrave;nh vừa đủ, Galaxy A02 l&agrave; d&ograve;ng điện thoại gi&aacute; rẻ d&agrave;nh cho người d&ugrave;ng cần thời lượng pin khỏe chủ yếu để li&ecirc;n lạc, giải tr&iacute; cơ bản. B&ecirc;n cạnh đ&oacute;, thương hiệu Samsung c&ugrave;ng mức gi&aacute; tốt ch&iacute;nh l&agrave; yếu tố khiến Galaxy A02 được nhiều người tin tưởng v&agrave; chọn lựa.</p>
            
            <p>&nbsp;</p>
            ',
            'parameter'=>"<h3>&nbsp;</h3>

            <p>M&agrave;n h&igrave;nh:AMOLED6.43&quot;Full HD+</p>
            
            <p>Hệ điều h&agrave;nh:Android 10</p>
            
            <p>Camera sau:Ch&iacute;nh 48 MP &amp; Phụ 8 MP, 2 MP, 2 MP</p>
            
            <p>Camera trước:Ch&iacute;nh 16 MP &amp; Phụ 2 MP</p>
            
            <p>Chip:MediaTek Helio P95</p>
            
            <p>RAM:8 GB</p>
            
            <p>Bộ nhớ trong:128 GB</p>
            
            <p>SIM:2 Nano SIMHỗ trợ 4G</p>
            
            <p>Pin, Sạc:4000 mAh18 W</p>
            ",
            'summary' => "với một màn hình lớn, cấu hình vừa đủ, Galaxy A02 là dòng điện thoại giá rẻ dành cho người dùng cần thời lượng pin khỏe chủ yếu để liên lạc",
            'images' => "a4.jpg",
            'category_id' => 2,
        ]);

        DB::table('products')->insert([
            'name' => "Điện thoại Samsung Galaxy A02",
            'slug' => "samsung-galaxy-a02",
            'import_price' => "5090000",
            'price' => "5100000",
            'amount' => "2",
            'sold_amount' => "1",
            'sku' => "samsung-galaxy-a02",
            'des' => '<h3><a href="https://www.thegioididong.com/samsung" rel="noopener" target="_blank" title="Tham khảo sản phẩm Samsung chính hãng tại Thegioididong.com" type="Tham khảo các mẫu điện thoại, smartphone Samsung chính hãng tại Thegioididong.com">Samsung</a>&nbsp;bổ sung th&ecirc;m t&ugrave;y chọn&nbsp;<a href="https://www.thegioididong.com/dtdd" rel="noopener" target="_blank" title="Tham khảo các mẫu smartphone chính hãng, giá tốt, có trả góp tại Thegioididong.com" type="Tham khảo các mẫu smartphone chính hãng, giá tốt, có trả góp tại Thegioididong.com">smartphone</a>&nbsp;trong ph&acirc;n kh&uacute;c gi&aacute; rẻ mang t&ecirc;n&nbsp;<a href="https://www.thegioididong.com/dtdd/samsung-galaxy-a02" rel="noopener" target="_blank" title="Tham khảo giá điện thoại Samsung Galaxy A02 chính hãng tại Thegioididong.com" type="Tham khảo giá điện thoại Samsung Galaxy A02 chính hãng tại Thegioididong.com">Galaxy A02</a>, m&aacute;y trang bị một cấu h&igrave;nh ổn định c&ugrave;ng mức pin khủng 5000 mAh cho thời lượng vượt trội trong tầm gi&aacute; mang đến bạn nhiều trải nghiệm th&uacute; vị hơn.</h3>

            <h3>Gọn nhẹ với nhiều sắc m&agrave;u thời trang</h3>
            
            <p>Galaxy A02 d&ugrave;ng chất liệu nhựa đặc trưng với những gam m&agrave;u trẻ trung bắt mắt, mang đến một thiết bị c&oacute; trọng lượng nhẹ, thoải m&aacute;i cho bạn cầm nắm hay mang đi, thuận tiện trong thao t&aacute;c h&agrave;ng ng&agrave;y.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/228999/samsung-galaxy-a02-007.jpg" onclick="return false;"><img alt="Samsung Galaxy A02 | Thiết kế gọn nhẹ cầm nắm thoải mái" src="https://cdn.tgdd.vn/Products/Images/42/228999/samsung-galaxy-a02-007.jpg" title="Samsung Galaxy A02 | Thiết kế gọn nhẹ cầm nắm thoải mái" /></a></p>
            
            <p>Mặt lưng của Galaxy A02 kh&ocirc;ng bị đơn điệu m&agrave; trở n&ecirc;n mạnh mẽ c&aacute; t&iacute;nh hơn với những đường v&acirc;n nổi carbon. Thiết kế n&agrave;y c&ograve;n gi&uacute;p bạn cầm nắm được b&aacute;m tay, chống đ&aacute;nh rơi do trơn tuột, đồng thời hạn chế lưu lại dấu v&acirc;n tay tr&ecirc;n bề mặt.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/228999/samsung-galaxy-a02-001-1.jpg" onclick="return false;"><img alt="Samsung Galaxy A02 | Mặt lưng mạnh mẽ cá tính hơn với những đường vân nổi carbon" src="https://cdn.tgdd.vn/Products/Images/42/228999/samsung-galaxy-a02-001-1.jpg" title="Samsung Galaxy A02 | Mặt lưng mạnh mẽ cá tính hơn với những đường vân nổi carbon" /></a></p>
            
            <p>Tương tự thế hệ tiền nhiệm&nbsp;<a href="https://www.thegioididong.com/dtdd/samsung-galaxy-a01" rel="noopener" target="_blank" title="Tham khảo điện thoại Samsung Galaxy A01 chính hãng tại Thế Giới Di Động">Samsung Galaxy A01</a>, A02 vẫn sẽ c&oacute; cụm camera k&eacute;p v&agrave; đ&egrave;n flash đặt dọc ở g&oacute;c tr&aacute;i c&ugrave;ng logo Samsung quen thuộc.</p>
            
            <h3>Cấu h&igrave;nh đ&aacute;p ứng tốt c&aacute;c nhu cầu cơ bản</h3>
            
            <p>Trang bị vi xử l&yacute; MediaTek MT6739W, Galaxy A02 c&oacute; cấu h&igrave;nh kh&ocirc;ng qu&aacute; nổi bật nhưng vẫn đủ đ&aacute;p ứng tốt c&aacute;c nhu cầu cơ bản như lướt web đọc tin tức, xem phim v&agrave; giải tr&iacute; với những tựa game nhẹ như: Subway Surfer hay xếp kim cương.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/228999/samsung-galaxy-a02-004-1.jpg" onclick="return false;"><img alt="Samsung Galaxy A02 | Trang bị vi xử lý MediaTek MT6739W" src="https://cdn.tgdd.vn/Products/Images/42/228999/samsung-galaxy-a02-004-1.jpg" title="Samsung Galaxy A02 | Trang bị vi xử lý MediaTek MT6739W" /></a></p>
            
            <p>Mức&nbsp;<a href="https://www.thegioididong.com/dtdd-ram-duoi-4gb" rel="noopener" target="_blank" title="Tham khảo các mẫu smartphone có dung lượng RAM dưới 4 GB cho nhu cầu cơ bản, giá rẻ tại Thegioididong.com" type="Tham khảo các mẫu smartphone có dung lượng RAM dưới 4 GB cho nhu cầu cơ bản, giá rẻ tại Thegioididong.com">RAM 3 GB</a>&nbsp;kh&aacute; ổn để bạn c&oacute; thể đa nhiệm v&agrave; chuyển đổi giữa c&aacute;c ứng dụng mượt m&agrave;. B&ecirc;n cạnh đ&oacute;,&nbsp;<a href="https://www.thegioididong.com/dtdd-rom-32-den-64gb" rel="noopener" target="_blank" title="Tham khảo giá smartphone giá rẻ có bộ nhớ trong từ 32 GB đến 64 GB tai Thegioididong.com" type="Tham khảo giá smartphone giá rẻ có bộ nhớ trong từ 32 GB đến 64 GB tai Thegioididong.com">bộ nhớ trong 32 GB</a>&nbsp;hỗ trợ th&ecirc;m thẻ nhớ ngo&agrave;i, sẵn s&agrave;ng đ&aacute;p ứng tốt nhu cầu lưu trữ của bạn mọi l&uacute;c mọi nơi.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/228999/samsung-galaxy-a02-003.jpg" onclick="return false;"><img alt="Samsung Galaxy A02 | Hỗ trợ thẻ nhớ ngoài" src="https://cdn.tgdd.vn/Products/Images/42/228999/samsung-galaxy-a02-003.jpg" title="Samsung Galaxy A02 | Hỗ trợ thẻ nhớ ngoài" /></a></p>
            
            <h3>Pin 5000 mAh thời lượng ấn tượng</h3>
            
            <p>Pin ch&iacute;nh l&agrave; điểm n&acirc;ng cấp mạnh mẽ nhất của Galaxy A02 khi tăng từ 3000 mAh của Galaxy A01 l&ecirc;n đến 5000 mAh. Với thời lượng pin n&agrave;y, m&aacute;y c&oacute; thể hoạt động xuy&ecirc;n suốt qua tận ng&agrave;y tiếp theo, cho bạn tha hồ lướt web hay thỏa th&iacute;ch xem phim, gọi điện kh&ocirc;ng bị gi&aacute;n đoạn.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/228999/samsung-galaxy-a02-005.jpg" onclick="return false;"><img alt="Samsung Galaxy A02 | Pin dung lượng lớn 5000 mAh" src="https://cdn.tgdd.vn/Products/Images/42/228999/samsung-galaxy-a02-005.jpg" title="Samsung Galaxy A02 | Pin dung lượng lớn 5000 mAh" /></a></p>
            
            <h3>M&agrave;n h&igrave;nh giải tr&iacute; si&ecirc;u rộng.</h3>
            
            <p>Kh&ocirc;ng chỉ ấn tượng về dung lượng pin khủng, Galaxy A02 c&ograve;n sở hữu m&agrave;n h&igrave;nh 6.5 inch si&ecirc;u to&nbsp;<a href="https://www.thegioididong.com/dtdd-man-hinh-tran-vien" rel="noopener" target="_blank" title="Tham khảo giá điện thoại smartphone tràn viền mỏng tại Thegioididong.com" type="Tham khảo giá điện thoại smartphone tràn viền mỏng tại Thegioididong.com">viền mỏng</a>&nbsp;với thiết kế camera giọt nước, m&agrave;n h&igrave;nh m&aacute;y c&oacute; độ ph&acirc;n giải HD+ k&egrave;m tấm nền PLS TFT LCD cho g&oacute;c nh&igrave;n rộng v&agrave; cải thiện chất lượng m&agrave;u sắc v&agrave; h&igrave;nh ảnh.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/228999/samsung-galaxy-a02-006.jpg" onclick="return false;"><img alt="Samsung Galaxy A02 | Màn hình 6.5 inch" src="https://cdn.tgdd.vn/Products/Images/42/228999/samsung-galaxy-a02-006.jpg" title="Samsung Galaxy A02 | Màn hình 6.5 inch" /></a></p>
            
            <p>Tuy kh&ocirc;ng qu&aacute; sắc n&eacute;t, nhưng bạn sẽ c&oacute; một m&agrave;n h&igrave;nh rộng đủ rộng để hiển thị nhiều nội dung hơn với m&agrave;u sắc v&agrave; độ s&aacute;ng tương đối tốt trong tầm gi&aacute;.</p>
            
            <h3>Thể hiện sự s&aacute;ng tạo với cụm camera k&eacute;p</h3>
            
            <p>Galaxy A02 kh&ocirc;ng c&oacute; sự thay đổi về camera so với phi&ecirc;n bản tiền nhiệm, m&aacute;y vẫn sẽ trang bị cụm camera k&eacute;p gồm camera ch&iacute;nh 13 MP v&agrave; camera phụ 2 MP, hỗ trợ chụp ảnh ch&acirc;n dung lẫn chụp ảnh&nbsp;<a href="https://www.thegioididong.com/dtdd-camera-macro" rel="noopener" target="_blank" title="Tham khảo các dòng điện thoại có camera hỗ trợ chụp siêu cận macro tại Thegioididong.com" type="Tham khảo các dòng điện thoại có camera hỗ trợ chụp siêu cận macro tại Thegioididong.com">si&ecirc;u cận macro</a>&nbsp;thời thượng, để bạn thỏa sức chụp v&agrave; lưu lại những điều th&uacute; vị xung quanh.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/228999/samsung-galaxy-a02-002.jpg" onclick="return false;"><img alt="Samsung Galaxy A02 | Cụm camera kép gồm camera chính 13 MP và camera phụ 2 MP" src="https://cdn.tgdd.vn/Products/Images/42/228999/samsung-galaxy-a02-002.jpg" title="Samsung Galaxy A02 | Cụm camera kép gồm camera chính 13 MP và camera phụ 2 MP" /></a></p>
            
            <p>Camera selfie 5 MP hỗ trợ chụp ảnh selfie v&agrave; gọi video call với chất lượng cao, hỗ trợ c&aacute;c c&ocirc;ng cụ chỉnh sửa ảnh nhẹ, gi&uacute;p bạn nhanh ch&oacute;ng c&oacute; những tấm h&igrave;nh đẹp để chia sẻ hay l&agrave;m h&igrave;nh đại diện tr&ecirc;n mạng x&atilde; hội.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/228999/a5.jpg" onclick="return false;"><img alt="Samsung Galaxy A02 | Camera trước 5 MP hỗ trợ chụp ảnh selfie và gọi video call" src="https://cdn.tgdd.vn/Products/Images/42/228999/a5.jpg" title="Samsung Galaxy A02 | Camera trước 5 MP hỗ trợ chụp ảnh selfie và gọi video call" /></a></p>
            
            <p>T&oacute;m lại, với một m&agrave;n h&igrave;nh lớn, cấu h&igrave;nh vừa đủ, Galaxy A02 l&agrave; d&ograve;ng điện thoại gi&aacute; rẻ d&agrave;nh cho người d&ugrave;ng cần thời lượng pin khỏe chủ yếu để li&ecirc;n lạc, giải tr&iacute; cơ bản. B&ecirc;n cạnh đ&oacute;, thương hiệu Samsung c&ugrave;ng mức gi&aacute; tốt ch&iacute;nh l&agrave; yếu tố khiến Galaxy A02 được nhiều người tin tưởng v&agrave; chọn lựa.</p>
            
            <p>&nbsp;</p>
            ',
            'parameter'=>"<h3>&nbsp;</h3>

            <p>M&agrave;n h&igrave;nh:AMOLED6.43&quot;Full HD+</p>
            
            <p>Hệ điều h&agrave;nh:Android 10</p>
            
            <p>Camera sau:Ch&iacute;nh 48 MP &amp; Phụ 8 MP, 2 MP, 2 MP</p>
            
            <p>Camera trước:Ch&iacute;nh 16 MP &amp; Phụ 2 MP</p>
            
            <p>Chip:MediaTek Helio P95</p>
            
            <p>RAM:8 GB</p>
            
            <p>Bộ nhớ trong:128 GB</p>
            
            <p>SIM:2 Nano SIMHỗ trợ 4G</p>
            
            <p>Pin, Sạc:4000 mAh18 W</p>
            ",
            'summary' => "với một màn hình lớn, cấu hình vừa đủ, Galaxy A02 là dòng điện thoại giá rẻ dành cho người dùng cần thời lượng pin khỏe chủ yếu để liên lạc",
            'images' => "a5.jpg",
            'category_id' => 2,
        ]);

        DB::table('products')->insert([
            'name' => "Điện thoại Samsung Galaxy A02",
            'slug' => "samsung-galaxy-a02",
            'import_price' => "5090000",
            'price' => "5100000",
            'amount' => "2",
            'sold_amount' => "1",
            'sku' => "samsung-galaxy-a02",
            'des' => '<h3><a href="https://www.thegioididong.com/samsung" rel="noopener" target="_blank" title="Tham khảo sản phẩm Samsung chính hãng tại Thegioididong.com" type="Tham khảo các mẫu điện thoại, smartphone Samsung chính hãng tại Thegioididong.com">Samsung</a>&nbsp;bổ sung th&ecirc;m t&ugrave;y chọn&nbsp;<a href="https://www.thegioididong.com/dtdd" rel="noopener" target="_blank" title="Tham khảo các mẫu smartphone chính hãng, giá tốt, có trả góp tại Thegioididong.com" type="Tham khảo các mẫu smartphone chính hãng, giá tốt, có trả góp tại Thegioididong.com">smartphone</a>&nbsp;trong ph&acirc;n kh&uacute;c gi&aacute; rẻ mang t&ecirc;n&nbsp;<a href="https://www.thegioididong.com/dtdd/samsung-galaxy-a02" rel="noopener" target="_blank" title="Tham khảo giá điện thoại Samsung Galaxy A02 chính hãng tại Thegioididong.com" type="Tham khảo giá điện thoại Samsung Galaxy A02 chính hãng tại Thegioididong.com">Galaxy A02</a>, m&aacute;y trang bị một cấu h&igrave;nh ổn định c&ugrave;ng mức pin khủng 5000 mAh cho thời lượng vượt trội trong tầm gi&aacute; mang đến bạn nhiều trải nghiệm th&uacute; vị hơn.</h3>

            <h3>Gọn nhẹ với nhiều sắc m&agrave;u thời trang</h3>
            
            <p>Galaxy A02 d&ugrave;ng chất liệu nhựa đặc trưng với những gam m&agrave;u trẻ trung bắt mắt, mang đến một thiết bị c&oacute; trọng lượng nhẹ, thoải m&aacute;i cho bạn cầm nắm hay mang đi, thuận tiện trong thao t&aacute;c h&agrave;ng ng&agrave;y.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/228999/samsung-galaxy-a02-007.jpg" onclick="return false;"><img alt="Samsung Galaxy A02 | Thiết kế gọn nhẹ cầm nắm thoải mái" src="https://cdn.tgdd.vn/Products/Images/42/228999/samsung-galaxy-a02-007.jpg" title="Samsung Galaxy A02 | Thiết kế gọn nhẹ cầm nắm thoải mái" /></a></p>
            
            <p>Mặt lưng của Galaxy A02 kh&ocirc;ng bị đơn điệu m&agrave; trở n&ecirc;n mạnh mẽ c&aacute; t&iacute;nh hơn với những đường v&acirc;n nổi carbon. Thiết kế n&agrave;y c&ograve;n gi&uacute;p bạn cầm nắm được b&aacute;m tay, chống đ&aacute;nh rơi do trơn tuột, đồng thời hạn chế lưu lại dấu v&acirc;n tay tr&ecirc;n bề mặt.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/228999/samsung-galaxy-a02-001-1.jpg" onclick="return false;"><img alt="Samsung Galaxy A02 | Mặt lưng mạnh mẽ cá tính hơn với những đường vân nổi carbon" src="https://cdn.tgdd.vn/Products/Images/42/228999/samsung-galaxy-a02-001-1.jpg" title="Samsung Galaxy A02 | Mặt lưng mạnh mẽ cá tính hơn với những đường vân nổi carbon" /></a></p>
            
            <p>Tương tự thế hệ tiền nhiệm&nbsp;<a href="https://www.thegioididong.com/dtdd/samsung-galaxy-a01" rel="noopener" target="_blank" title="Tham khảo điện thoại Samsung Galaxy A01 chính hãng tại Thế Giới Di Động">Samsung Galaxy A01</a>, A02 vẫn sẽ c&oacute; cụm camera k&eacute;p v&agrave; đ&egrave;n flash đặt dọc ở g&oacute;c tr&aacute;i c&ugrave;ng logo Samsung quen thuộc.</p>
            
            <h3>Cấu h&igrave;nh đ&aacute;p ứng tốt c&aacute;c nhu cầu cơ bản</h3>
            
            <p>Trang bị vi xử l&yacute; MediaTek MT6739W, Galaxy A02 c&oacute; cấu h&igrave;nh kh&ocirc;ng qu&aacute; nổi bật nhưng vẫn đủ đ&aacute;p ứng tốt c&aacute;c nhu cầu cơ bản như lướt web đọc tin tức, xem phim v&agrave; giải tr&iacute; với những tựa game nhẹ như: Subway Surfer hay xếp kim cương.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/228999/samsung-galaxy-a02-004-1.jpg" onclick="return false;"><img alt="Samsung Galaxy A02 | Trang bị vi xử lý MediaTek MT6739W" src="https://cdn.tgdd.vn/Products/Images/42/228999/samsung-galaxy-a02-004-1.jpg" title="Samsung Galaxy A02 | Trang bị vi xử lý MediaTek MT6739W" /></a></p>
            
            <p>Mức&nbsp;<a href="https://www.thegioididong.com/dtdd-ram-duoi-4gb" rel="noopener" target="_blank" title="Tham khảo các mẫu smartphone có dung lượng RAM dưới 4 GB cho nhu cầu cơ bản, giá rẻ tại Thegioididong.com" type="Tham khảo các mẫu smartphone có dung lượng RAM dưới 4 GB cho nhu cầu cơ bản, giá rẻ tại Thegioididong.com">RAM 3 GB</a>&nbsp;kh&aacute; ổn để bạn c&oacute; thể đa nhiệm v&agrave; chuyển đổi giữa c&aacute;c ứng dụng mượt m&agrave;. B&ecirc;n cạnh đ&oacute;,&nbsp;<a href="https://www.thegioididong.com/dtdd-rom-32-den-64gb" rel="noopener" target="_blank" title="Tham khảo giá smartphone giá rẻ có bộ nhớ trong từ 32 GB đến 64 GB tai Thegioididong.com" type="Tham khảo giá smartphone giá rẻ có bộ nhớ trong từ 32 GB đến 64 GB tai Thegioididong.com">bộ nhớ trong 32 GB</a>&nbsp;hỗ trợ th&ecirc;m thẻ nhớ ngo&agrave;i, sẵn s&agrave;ng đ&aacute;p ứng tốt nhu cầu lưu trữ của bạn mọi l&uacute;c mọi nơi.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/228999/samsung-galaxy-a02-003.jpg" onclick="return false;"><img alt="Samsung Galaxy A02 | Hỗ trợ thẻ nhớ ngoài" src="https://cdn.tgdd.vn/Products/Images/42/228999/samsung-galaxy-a02-003.jpg" title="Samsung Galaxy A02 | Hỗ trợ thẻ nhớ ngoài" /></a></p>
            
            <h3>Pin 5000 mAh thời lượng ấn tượng</h3>
            
            <p>Pin ch&iacute;nh l&agrave; điểm n&acirc;ng cấp mạnh mẽ nhất của Galaxy A02 khi tăng từ 3000 mAh của Galaxy A01 l&ecirc;n đến 5000 mAh. Với thời lượng pin n&agrave;y, m&aacute;y c&oacute; thể hoạt động xuy&ecirc;n suốt qua tận ng&agrave;y tiếp theo, cho bạn tha hồ lướt web hay thỏa th&iacute;ch xem phim, gọi điện kh&ocirc;ng bị gi&aacute;n đoạn.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/228999/samsung-galaxy-a02-005.jpg" onclick="return false;"><img alt="Samsung Galaxy A02 | Pin dung lượng lớn 5000 mAh" src="https://cdn.tgdd.vn/Products/Images/42/228999/samsung-galaxy-a02-005.jpg" title="Samsung Galaxy A02 | Pin dung lượng lớn 5000 mAh" /></a></p>
            
            <h3>M&agrave;n h&igrave;nh giải tr&iacute; si&ecirc;u rộng.</h3>
            
            <p>Kh&ocirc;ng chỉ ấn tượng về dung lượng pin khủng, Galaxy A02 c&ograve;n sở hữu m&agrave;n h&igrave;nh 6.5 inch si&ecirc;u to&nbsp;<a href="https://www.thegioididong.com/dtdd-man-hinh-tran-vien" rel="noopener" target="_blank" title="Tham khảo giá điện thoại smartphone tràn viền mỏng tại Thegioididong.com" type="Tham khảo giá điện thoại smartphone tràn viền mỏng tại Thegioididong.com">viền mỏng</a>&nbsp;với thiết kế camera giọt nước, m&agrave;n h&igrave;nh m&aacute;y c&oacute; độ ph&acirc;n giải HD+ k&egrave;m tấm nền PLS TFT LCD cho g&oacute;c nh&igrave;n rộng v&agrave; cải thiện chất lượng m&agrave;u sắc v&agrave; h&igrave;nh ảnh.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/228999/samsung-galaxy-a02-006.jpg" onclick="return false;"><img alt="Samsung Galaxy A02 | Màn hình 6.5 inch" src="https://cdn.tgdd.vn/Products/Images/42/228999/samsung-galaxy-a02-006.jpg" title="Samsung Galaxy A02 | Màn hình 6.5 inch" /></a></p>
            
            <p>Tuy kh&ocirc;ng qu&aacute; sắc n&eacute;t, nhưng bạn sẽ c&oacute; một m&agrave;n h&igrave;nh rộng đủ rộng để hiển thị nhiều nội dung hơn với m&agrave;u sắc v&agrave; độ s&aacute;ng tương đối tốt trong tầm gi&aacute;.</p>
            
            <h3>Thể hiện sự s&aacute;ng tạo với cụm camera k&eacute;p</h3>
            
            <p>Galaxy A02 kh&ocirc;ng c&oacute; sự thay đổi về camera so với phi&ecirc;n bản tiền nhiệm, m&aacute;y vẫn sẽ trang bị cụm camera k&eacute;p gồm camera ch&iacute;nh 13 MP v&agrave; camera phụ 2 MP, hỗ trợ chụp ảnh ch&acirc;n dung lẫn chụp ảnh&nbsp;<a href="https://www.thegioididong.com/dtdd-camera-macro" rel="noopener" target="_blank" title="Tham khảo các dòng điện thoại có camera hỗ trợ chụp siêu cận macro tại Thegioididong.com" type="Tham khảo các dòng điện thoại có camera hỗ trợ chụp siêu cận macro tại Thegioididong.com">si&ecirc;u cận macro</a>&nbsp;thời thượng, để bạn thỏa sức chụp v&agrave; lưu lại những điều th&uacute; vị xung quanh.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/228999/samsung-galaxy-a02-002.jpg" onclick="return false;"><img alt="Samsung Galaxy A02 | Cụm camera kép gồm camera chính 13 MP và camera phụ 2 MP" src="https://cdn.tgdd.vn/Products/Images/42/228999/samsung-galaxy-a02-002.jpg" title="Samsung Galaxy A02 | Cụm camera kép gồm camera chính 13 MP và camera phụ 2 MP" /></a></p>
            
            <p>Camera selfie 5 MP hỗ trợ chụp ảnh selfie v&agrave; gọi video call với chất lượng cao, hỗ trợ c&aacute;c c&ocirc;ng cụ chỉnh sửa ảnh nhẹ, gi&uacute;p bạn nhanh ch&oacute;ng c&oacute; những tấm h&igrave;nh đẹp để chia sẻ hay l&agrave;m h&igrave;nh đại diện tr&ecirc;n mạng x&atilde; hội.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/228999/a5.jpg" onclick="return false;"><img alt="Samsung Galaxy A02 | Camera trước 5 MP hỗ trợ chụp ảnh selfie và gọi video call" src="https://cdn.tgdd.vn/Products/Images/42/228999/a5.jpg" title="Samsung Galaxy A02 | Camera trước 5 MP hỗ trợ chụp ảnh selfie và gọi video call" /></a></p>
            
            <p>T&oacute;m lại, với một m&agrave;n h&igrave;nh lớn, cấu h&igrave;nh vừa đủ, Galaxy A02 l&agrave; d&ograve;ng điện thoại gi&aacute; rẻ d&agrave;nh cho người d&ugrave;ng cần thời lượng pin khỏe chủ yếu để li&ecirc;n lạc, giải tr&iacute; cơ bản. B&ecirc;n cạnh đ&oacute;, thương hiệu Samsung c&ugrave;ng mức gi&aacute; tốt ch&iacute;nh l&agrave; yếu tố khiến Galaxy A02 được nhiều người tin tưởng v&agrave; chọn lựa.</p>
            
            <p>&nbsp;</p>
            ',
            'parameter'=>"<h3>&nbsp;</h3>

            <p>M&agrave;n h&igrave;nh:AMOLED6.43&quot;Full HD+</p>
            
            <p>Hệ điều h&agrave;nh:Android 10</p>
            
            <p>Camera sau:Ch&iacute;nh 48 MP &amp; Phụ 8 MP, 2 MP, 2 MP</p>
            
            <p>Camera trước:Ch&iacute;nh 16 MP &amp; Phụ 2 MP</p>
            
            <p>Chip:MediaTek Helio P95</p>
            
            <p>RAM:8 GB</p>
            
            <p>Bộ nhớ trong:128 GB</p>
            
            <p>SIM:2 Nano SIMHỗ trợ 4G</p>
            
            <p>Pin, Sạc:4000 mAh18 W</p>
            ",
            'summary' => "với một màn hình lớn, cấu hình vừa đủ, Galaxy A02 là dòng điện thoại giá rẻ dành cho người dùng cần thời lượng pin khỏe chủ yếu để liên lạc",
            'images' => "a6.jpg",
            'category_id' => 2,
        ]);

        DB::table('products')->insert([
            'name' => "Điện thoại OPPO A93",
            'slug' => "oppo-a93",
            'import_price' => "5090000",
            'price' => "5100000",
            'amount' => "2",
            'sold_amount' => "1",
            'sku' => "oppo-a93",
            'des' => '<h3><a href="https://www.thegioididong.com/dtdd-oppo" target="_blank" title="Tham khảo điện thoại OPPO chính hãng tại Thegioididong.com">OPPO</a>&nbsp;đ&atilde; tung ra&nbsp;<a href="https://www.thegioididong.com/dtdd/oppo-a93" target="_blank" title="Tham khảo điện thoại OPPO A93 chính hãng tại Thegioididong.com">OPPO A93</a>&nbsp;d&ograve;ng sản&nbsp;phẩm thuộc ph&acirc;n kh&uacute;c&nbsp;<a href="https://www.thegioididong.com/dtdd?p=tu-4-7-trieu" target="_blank" title="Tham khảo điện thoại tầm trung chính hãng tại Thegioididong.com">điện thoại tầm trung</a>&nbsp;được xem l&agrave; tiếp nối từ&nbsp;<a href="https://www.thegioididong.com/dtdd/oppo-a92" target="_blank" title="Tham khảo điện thoại OPPO A92 chính hãng tại Thegioididong.com">OPPO A92</a>&nbsp;với nhiều điểm được n&acirc;ng cấp như hiệu năng, hệ thống camera c&ugrave;ng khả năng sạc nhanh 18 W.</h3>

            <h3>Hiệu năng vượt trội c&ugrave;ng với Helio P95</h3>
            
            <p>OPPO A93 được trang bị chipset MediaTek Helio P95 tốc độ CPU đạt 2.2 GHz với sức mạnh như thế n&agrave;y th&igrave; A93 sẽ kh&ocirc;ng l&agrave;m bạn thất vọng khi c&oacute; thể hoạt động tốt với nhiều ứng dụng nặng hay thao t&aacute;c cuộn trang đều diễn ra trơn tru cảm gi&aacute;c như kh&ocirc;ng c&oacute; độ trễ.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/229056/oppo-a93-270620-100612.jpg" onclick="return false;"><img alt="Vi xử lý Helio P95 | OPPO A93" src="https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-270620-100612.jpg" title="Vi xử lý Helio P95 | OPPO A93" /></a></p>
            
            <p>Ấn tượng hơn khi bộ nhớ RAM đến 8 GB gi&uacute;p m&aacute;y c&oacute; thể thao t&aacute;c tr&ecirc;n nhiều ứng dụng c&ugrave;ng l&uacute;c m&agrave; kh&ocirc;ng c&oacute; hiện tượng&nbsp;giật lag n&acirc;ng cao trải nghiệm người d&ugrave;ng.</p>
            
            <p>Đo tr&ecirc;n Antutu th&igrave; OPPO A93&nbsp;đạt 201.029 điểm, con số kh&aacute; cao&nbsp;đảm bảo mọi hoạt&nbsp;động&nbsp;đều mượt m&agrave; v&agrave; gi&uacute;p&nbsp;<a href="https://www.thegioididong.com/dtdd-choi-game" target="_blank" title="Tham khảo điện thoại chơi game - cấu hình cao tại Thegioididong.com ">điện thoại chơi game</a>&nbsp;đồ hoạ nặng như Li&ecirc;n Qu&acirc;n cũng kh&ocirc;ng th&agrave;nh vấn&nbsp;đề.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/229056/oppo-a93-012520-042549.jpg" onclick="return false;"><img alt="Điểm số đo trên Antutu | OPPO A93" src="https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-012520-042549.jpg" title="Điểm số đo trên Antutu | OPPO A93" /></a></p>
            
            <p>V&agrave; c&oacute; bộ nhớ trong 128 GB thoải m&aacute;i lưu trữ mọi dữ liệu, nếu chưa đủ th&igrave; m&aacute;y vẫn hỗ trợ thẻ nhớ ngo&agrave;i MicroSD tối đa 256 GB cho bạn th&ecirc;m nhiều kh&ocirc;ng gian lưu trữ hơn.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/229056/oppo-a93-270620-100617.jpg" onclick="return false;"><img alt="Hỗ trợ thẻ nhớ ngoài tối đa 256 GB | OPPO A93" src="https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-270620-100617.jpg" title="Hỗ trợ thẻ nhớ ngoài tối đa 256 GB | OPPO A93" /></a></p>
            
            <p>Mặc kh&aacute;c, OPPO A93 được c&agrave;i đặt sẵn hệ điều h&agrave;nh Android 10 tr&ecirc;n giao diện Color OS 7.2 với những t&iacute;nh năng th&ocirc;ng minh chắc chắn sẽ rất th&uacute; vị.</p>
            
            <p>B&ecirc;n cạnh đ&oacute;, m&aacute;y t&iacute;ch hợp HyperEngine c&ocirc;ng nghệ d&agrave;nh cho tr&ograve; chơi gi&uacute;p bạn n&acirc;ng cao trải nghiệm chơi th&ocirc;ng qua chất lượng h&igrave;nh ảnh bắt mắt, di chuyển mượt m&agrave; nhất trong bất kỳ thế giới trực tuyến n&agrave;o như Li&ecirc;n Qu&acirc;n Mobile.</p>
            
            <h3>Cụm camera selfie t&iacute;ch hợp AI</h3>
            
            <p>OPPO A93 c&oacute; 4 camera sau được xếp đối xứng nhau trong module h&igrave;nh vu&ocirc;ng v&agrave; thanh đ&egrave;n flash LED. Camera ch&iacute;nh c&oacute; độ ph&acirc;n giải 48 MP, camera g&oacute;c si&ecirc;u rộng 8 MP, mono đơn sắc&nbsp;v&agrave; mono ch&acirc;n dung lần lượt đều bằng 2 MP.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/229056/oppo-a93-270620-100622.jpg" onclick="return false;"><img alt="Cụm 4 camera với cảm biến chính 48 MP | OPPO A93" src="https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-270620-100622.jpg" title="Cụm 4 camera với cảm biến chính 48 MP | OPPO A93" /></a></p>
            
            <p>Với hệ thống camera n&agrave;y m&aacute;y c&ograve;n trang bị c&ocirc;ng nghệ Super Night sẽ gi&uacute;p ảnh của bạn sắc n&eacute;t hơn trong điều kiện thiếu s&aacute;ng, c&ugrave;ng khả năng xo&aacute; ph&ocirc;ng tạo hiệu ứng ph&ocirc;ng m&agrave;u kh&aacute;c biệt cho bức ảnh trở n&ecirc;n độc lạ v&agrave; đẹp xuất sắc như trong studio.</p>
            
            <p>&nbsp;</p>
            
            <p>&nbsp;</p>
            
            <p>&nbsp;</p>
            
            <p><img src="https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-012520-042556.jpg" />Ảnh chụp tr&ecirc;n OPPO A93</p>
            
            <p>&nbsp;</p>
            
            <p>&nbsp;</p>
            
            <p><img src="https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-012620-042603.jpg" />Ảnh chụp tr&ecirc;n OPPO A93</p>
            
            <p>&nbsp;</p>
            
            <p>&nbsp;</p>
            
            <p>&nbsp;</p>
            
            <p>Khả năng quay video 4K với tốc độ khung h&igrave;nh l&agrave; 30 fps cho bạn ghi lại những khoảnh khắc thường ng&agrave;y trong cuộc sống với chất lượng mượt m&agrave; v&agrave; xem rất đ&atilde; mắt.</p>
            
            <p>Camera selfie k&eacute;p với cảm biến ch&iacute;nh l&agrave; 16 MP v&agrave; cảm biến đo độ s&acirc;u 2 MP. Việc kết hợp c&ocirc;ng nghệ l&agrave;m đẹp AI đem đến những bức ảnh selfie đẹp mắt trong thật tự nhi&ecirc;n v&agrave; khả năng xo&aacute; ph&ocirc;ng l&agrave;m nổi bật chủ thể.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/229056/oppo-a93-1.jpg" onclick="return false;"><img alt="Camera selfie kép hỗ trợ tính năng làm đẹp AI, xóa phông | OPPO A93" src="https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-1.jpg" title="Camera selfie kép hỗ trợ tính năng làm đẹp AI, xóa phông | OPPO A93" /></a></p>
            
            <h3>Thiết kế cảm hứng, khơi nguồn s&aacute;ng tạo</h3>
            
            <p>OPPO A93 c&oacute; thiết kế v&ocirc; c&ugrave;ng nhỏ gọn mỏng 7.48 mm v&agrave; nặng chỉ 164 g cho cảm gi&aacute;c cầm nắm nhẹ nh&agrave;ng, thoải m&aacute;i trong qu&aacute; tr&igrave;nh sử dụng.&nbsp;</p>
            
            <p><a href="https://www.thegioididong.com/images/42/229056/oppo-a93-270620-100645.jpg" onclick="return false;"><img alt="Thiết kế nhỏ gọn, cầm nắm dễ dạng | OPPO A93" src="https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-270620-100645.jpg" title="Thiết kế nhỏ gọn, cầm nắm dễ dạng | OPPO A93" /></a></p>
            
            <p>C&aacute;c cạnh được bo tr&ograve;n cho cảm gi&aacute;c mềm mại, từng chi tiết đều được chăm ch&uacute;t cho thấy sản phẩm c&oacute; chất lượng đ&aacute;ng được tin cậy. Từ đường v&acirc;n tr&ecirc;n mặt lưng trải d&agrave;i từ camera mang đến một ngoại h&igrave;nh v&ocirc; c&ugrave;ng bắt mắt lại&nbsp;vừa nổi bật.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/229056/oppo-a93-270720-100701.jpg" onclick="return false;"><img alt="Thiết kế bo tròn tạo cảm giác mềm mại | OPPO A93" src="https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-270720-100701.jpg" title="Thiết kế bo tròn tạo cảm giác mềm mại | OPPO A93" /></a></p>
            
            <p>M&aacute;y c&oacute; thiết kế nguy&ecirc;n khối v&agrave; mặt lưng sử dụng chất liệu thuỷ tinh hữu cơ cho độ bền cao cũng như được phủ một lớp m&agrave;ng b&oacute;ng gi&uacute;p chống b&aacute;m v&acirc;n tay, hạn chế bụi bẩn v&agrave; mồ h&ocirc;i.</p>
            
            <p>Mặt trước đ&atilde; được OPPO trang bị k&iacute;nh cường lực&nbsp;<a href="https://www.thegioididong.com/hoi-dap/tim-hieu-kinh-cuong-luc-smartphone-corning-gorilla-glass-3-1288806" target="_blank" title="Tìm hiểu Gorilla Glass 3+ tại Thegioididong.com">Gorilla Glass 3+</a>&nbsp;tăng th&ecirc;m phần cứng c&aacute;p cho m&aacute;y cũng như hạn chế mọi sự trầy xước v&agrave; va đập.&nbsp;</p>
            
            <h3>M&agrave;n h&igrave;nh sống động, sắc n&eacute;t</h3>
            
            <p>OPPO A93 c&oacute; k&iacute;ch thước 6.43 inch v&agrave; c&oacute; độ ph&acirc;n giải Full HD+ (1080 x 2400 Pixels). M&aacute;y sử dụng tấm nền&nbsp;<a href="https://www.thegioididong.com/hoi-dap/man-hinh-amoled-la-gi-905766" target="_blank" title="Tìm hiểu màn hình AMOLED tại Thegioididong.com">AMOLED</a>&nbsp;việc xem phim hay chơi game đều sẽ mang đến chất lượng hiển thị sắc n&eacute;t, m&agrave;u sắc tươi tắn, h&igrave;nh ảnh chi tiết hơn.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/229056/oppo-a93-270620-100637.jpg" onclick="return false;"><img alt="Màn hình sống động, sắc nét | OPPO  A93" src="https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-270620-100637.jpg" title="Màn hình sống động, sắc nét | OPPO  A93" /></a></p>
            
            <h3>Khả năng sạc nhanh 18 W</h3>
            
            <p>OPPO A93 sở hữu vi&ecirc;n pin c&oacute; dung lượng lớn 4000 mAh qu&aacute; đủ cho bạn khoảng 1 ng&agrave;y d&agrave;i sử dụng hoặc 2 ng&agrave;y t&ugrave;y theo nhu cầu sử dụng. Hơn nữa, m&aacute;y được hỗ trợ sạc nhanh l&ecirc;n đến 18 W th&ocirc;ng qua cổng sạc Type-C gi&uacute;p sạc nhanh thiết bị chỉ trong thời gian ngắn.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/229056/oppo-a93-270620-100632.jpg" onclick="return false;"><img alt="Khả năng sạc nhanh 30W | OPPO A93" src="https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-270620-100632.jpg" title="Khả năng sạc nhanh 30W | OPPO A93" /></a></p>
            
            <p>Ngo&agrave;i ra, m&aacute;y vẫn hỗ trợ t&iacute;nh năng&nbsp;<a href="https://www.thegioididong.com/dtdd-bao-mat-van-tay" target="_blank" title="Tham khảo điện thoại mở khoá bằng vân tay tại Thegioididong.com ">bảo mật v&acirc;n tay</a>&nbsp;v&agrave;&nbsp;<a href="https://www.thegioididong.com/dtdd-bao-mat-khuon-mat" target="_blank" title="Tham khảo điện thoại mở khoá bằng khuôn mặt tại Thegioididong.com ">bảo mật khu&ocirc;n mặt</a>&nbsp;gi&uacute;p bạn mở kho&aacute; thiết bị nhanh ch&oacute;ng hơn trong mọi trường hợp.</p>
            
            <p><a href="https://www.thegioididong.com/images/42/229056/oppo-a93-270620-100656.jpg" onclick="return false;"><img alt="Cảm biến vân tay dưới màn hình | OPPO A93" src="https://cdn.tgdd.vn/Products/Images/42/229056/oppo-a93-270620-100656.jpg" title="Cảm biến vân tay dưới màn hình | OPPO A93" /></a></p>
            
            <p>Nếu bạn&nbsp;đang cần một chiếc&nbsp;<a href="https://www.thegioididong.com/dtdd-pin-khung" target="_blank" title="Tham khảo điện thoại pin trâu tại Thegioididong.com">điện thoại pin tr&acirc;u</a>&nbsp;đi k&egrave;m với nhiều&nbsp;đặc&nbsp;điểm nổi bật như hiệu năng vượt trội, camera chuy&ecirc;n nghiệp nhiều t&iacute;nh năng c&ugrave;ng với sạc nhanh th&igrave;&nbsp;đ&acirc;y sẽ l&agrave; sản phẩm tầm trung ho&agrave;n hảo mang&nbsp;đến những trải nghiệm tuyệt vời&nbsp;đến người d&ugrave;ng.</p>
            ',
            'parameter'=>"",
            'summary' => "",
            'images' => "a1.jpg",
            'category_id' => 5,
        ]);

    }
}
