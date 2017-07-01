<?php 
	if(isset($seo)) {
		$title = ($seo->meta_title)?$seo->meta_title:'Xem tuổi - xem tử vi số mệnh';
		$meta_title = $seo->meta_title;
		$meta_keyword = $seo->meta_keyword;
		$meta_description = $seo->meta_description;
		$meta_image = $seo->meta_image;
		$isHome = true;
		$is404 = false;
	} else {
		$title = PAGENOTFOUND;
		$meta_title = '';
		$meta_keyword = '';
		$meta_description = '';
		$meta_image = '';
		$isHome = false;
		$is404 = true;
	}
	$extendData = array(
			'meta_title' => $meta_title,
			'meta_keyword' => $meta_keyword,
			'meta_description' => $meta_description,
			'meta_image' => $meta_image,
			'isHome' => $isHome,
			'is404' => $is404,
		);
?>
@extends('site.layouts.master', $extendData)

@section('title', $title)

@section('content')

@include('patterns.filter1')

@include('site.common.ad', ['posPc' => 7, 'posMobile' => 8])

<div class="box">
	<ul class="loveyou">
		<li><a href="{{ url('/tu-vi-2017') }}" title="Tử vi 2017"><img src="{{ url('/img/s/tu-vi-2017.jpg') }}" alt="Tử vi 2017"><span>Tử vi 2017</span></a></li>
		<li><a href="{{ url('/tu-vi-tron-doi') }}" title="Tử vi trọn đời"><img src="{{ url('/img/s/tu-vi-tron-doi.jpg') }}" alt="Tử vi trọn đời"><span>Tử vi trọn đời</span></a></li>
		<li><a href="{{ url('/tu-vi-12-con-giap') }}" title="Tử vi 12 con giáp"><img src="{{ url('/img/s/tu-vi-12-con-giap.jpg') }}" alt="Tử vi 12 con giáp"><span>Tử vi 12 con giáp</span></a></li>
		<li><a href="{{ url('/xem-tu-vi-theo-gio-sinh') }}" title="Tử vi theo giờ sinh"><img src="{{ url('/img/s/xem-tu-vi-theo-gio-sinh.jpg') }}" alt="Tử vi theo giờ sinh"><span>Tử vi theo giờ sinh</span></a></li>
		<li><a href="{{ url('/kien-thuc-tu-vi') }}" title="Kiến Thức Tử Vi"><img src="{{ url('/img/s/kien-thuc-tu-vi.jpg') }}" alt="Kiến Thức Tử Vi"><span>Kiến Thức Tử Vi</span></a></li>
		<li><a href="{{ url('/xem-tuoi') }}" title="Xem hợp tuổi"><img src="{{ url('/img/s/xem-hop-tuoi.jpg') }}" alt="Xem hợp tuổi"><span>Xem hợp tuổi</span></a></li>
		<li><a href="{{ url('/xem-tuoi-vo-chong') }}" title="Xem tuổi vợ chồng"><img src="{{ url('/img/s/xem-tuoi-vo-chong.jpg') }}" alt="Xem tuổi vợ chồng"><span>Xem tuổi vợ chồng</span></a></li>
		<li><a href="{{ url('/xem-tuoi-ket-hon') }}" title="Xem tuổi kết hôn"><img src="{{ url('/img/s/xem-tuoi-ket-hon.jpg') }}" alt="Xem tuổi kết hôn"><span>Xem tuổi kết hôn</span></a></li>
		<li><a href="{{ url('/xem-tuoi-xong-dat') }}" title="Xem Tuổi Xông Đất"><img src="{{ url('/img/s/xem-tuoi-xong-nha.jpg') }}" alt="Xem Tuổi Xông Đất"><span>Xem Tuổi Xông Đất</span></a></li>
		<li><a href="{{ url('/dat-ten-con-theo-ngu-hanh') }}" title="Đặt tên con theo ngũ hành"><img src="{{ url('/img/s/dat-ten-con-theo-ngu-hanh.jpg') }}" alt="Đặt tên con theo ngũ hành"><span>Đặt tên con theo ngũ hành</span></a></li>
		<li><a href="{{ url('/cao-ly-dau-hinh') }}" title="Cao ly đầu hình"><img src="{{ url('/img/s/cao-ly-dau-hinh.jpg') }}" alt="Cao ly đầu hình"><span>Cao ly đầu hình</span></a></li>
		<li><a href="{{ url('/quy-coc-toan-menh') }}" title="Quỷ cốc toán mệnh"><img src="{{ url('/img/s/quy-coc-toan-menh.jpg') }}" alt="Quỷ cốc toán mệnh"><span>Quỷ cốc toán mệnh</span></a></li>
		<li><a href="{{ url('/bang-tinh-tam-tai-hoang-oc-kim-lau') }}" title="Bảng tính tam tai hoàng ốc kim lâu"><img src="{{ url('/img/s/tam-tai-hoang-oc-kim-lau.jpg') }}" alt="Tam tai hoàng ốc kim lâu"><span>Tam tai hoàng ốc kim lâu</span></a></li>
		<li><a href="{{ url('/menh-so') }}" title="Xem mệnh số"><img src="{{ url('/img/s/menh-so.jpg') }}" alt="mệnh số"><span>Xem mệnh số</span></a></li>
		<li><a href="{{ url('/xem-cung-menh-theo-nam-sinh') }}" title="Xem cung mệnh"><img src="{{ url('/img/s/cung-menh.jpg') }}" alt="Xem cung mệnh"><span>Xem cung mệnh</span></a></li>
		<li><a href="{{ url('/xem-sao-chieu-menh') }}" title="Xem sao chiếu mệnh"><img src="{{ url('/img/s/sao-chieu-menh.jpg') }}" alt="Xem sao chiếu mệnh"><span>Xem sao chiếu mệnh</span></a></li>
		<li><a href="{{ url('/tich-truyen') }}" title="Tích Truyện"><img src="{{ url('/img/s/tich-truyen.jpg') }}" alt="Tích Truyện"><span>Tích Truyện</span></a></li>
		<li><a href="{{ url('/van-khan-co-truyen') }}" title="Văn Khấn Cổ Truyền"><img src="{{ url('/img/s/van-khan-co-truyen.jpg') }}" alt="Văn Khấn Cổ Truyền"><span>Văn Khấn Cổ Truyền</span></a></li>
		<li><a href="{{ url('/nhan-qua') }}" title="Nhân quả"><img src="{{ url('/img/s/nhan-qua.jpg') }}" alt="Nhân quả"><span>Nhân quả</span></a></li>
		<li><a href="{{ url('/nhung-cau-noi-hay') }}" title="Những câu nói hay"><img src="{{ url('/img/s/nhung-cau-noi-hay.jpg') }}" alt="Những câu nói hay"><span>Những câu nói hay</span></a></li>
		<li><a href="{{ url('/tuong-so') }}" title="Tướng Số"><img src="{{ url('/img/s/tuong-so.jpg') }}" alt="Tướng Số"><span>Tướng Số</span></a></li>
		<li><a href="{{ url('/mau-sac-hop-tuoi') }}" title="Xem màu sắc hợp tuổi"><img src="{{ url('/img/s/mau-sac-hop-tuoi.jpg') }}" alt="Xem màu sắc hợp tuổi"><span>Xem màu sắc hợp tuổi</span></a></li>
		<li><a href="{{ url('/xem-ngay-cuoi-hoi') }}" title="Xem ngày cưới hỏi"><img src="{{ url('/img/s/xem-ngay-cuoi-hoi.jpg') }}" alt="Xem ngày cưới hỏi"><span>Xem ngày cưới hỏi</span></a></li>
		<li><a href="{{ url('/chon-ngay-chon-cat') }}" title="Xem ngày chon cất"><img src="{{ url('/img/s/chon-ngay-chon-cat.jpg') }}" alt="Xem ngày chôn cất"><span>Xem ngày chôn cất</span></a></li>
		<li><a href="{{ url('/xem-ngay-khai-truong') }}" title="Xem ngày khai trương"><img src="{{ url('/img/s/xem-ngay-khai-truong.jpg') }}" alt="Xem ngày khai trương"><span>Xem ngày khai trương</span></a></li>
		<li><a href="{{ url('/xem-ngay-lam-nha') }}" title="Xem ngày làm nhà"><img src="{{ url('/img/s/xem-ngay-lam-nha.jpg') }}" alt="Xem ngày làm nhà"><span>Xem ngày làm nhà</span></a></li>
		<li><a href="{{ url('/xem-ngay-nhap-trach-ve-nha-moi') }}" title="Xem ngày về nhà mới"><img src="{{ url('/img/s/xem-ngay-nhap-trach-ve-nha-moi.jpg') }}" alt="Xem ngày về nhà mới"><span>Xem ngày về nhà mới</span></a></li>
		<li><a href="{{ url('/xem-ngay-tu-tao-sua-chua') }}" title="Xem ngày tu tạo sửa chữa"><img src="{{ url('/img/s/xem-ngay-tu-tao-sua-chua.jpg') }}" alt="Xem ngày tu tạo sửa chữa"><span>Xem ngày tu tạo sửa chữa</span></a></li>
		<li><a href="{{ url('/xem-ngay-bat-tuong') }}" title="Xem ngày bất tương"><img src="{{ url('/img/s/xem-ngay-bat-tuong.jpg') }}" alt="Xem ngày bất tương"><span>Xem ngày bất tương</span></a></li>
		<li><a href="{{ url('/xem-ngay-hac-dao-ngay-xau') }}" title="Xem ngày hắc đạo"><img src="{{ url('/img/s/xem-ngay-hac-dao-ngay-xau.jpg') }}" alt="Xem ngày hắc đạo"><span>Xem ngày hắc đạo</span></a></li>
		<li><a href="{{ url('/xem-ngay-hoang-dao') }}" title="Xem ngày hoàng đạo"><img src="{{ url('/img/s/xem-ngay-hoang-dao.jpg') }}" alt="Xem ngày hoàng đạo"><span>Xem ngày hoàng đạo</span></a></li>
		<li><a href="{{ url('/xem-huong-nha-tot') }}" title="Xem hướng nhà tốt"><img src="{{ url('/img/s/xem-huong-nha-tot.jpg') }}" alt="Xem hướng nhà tốt"><span>Xem hướng nhà tốt</span></a></li>
		<li><a href="{{ url('/phong-thuy') }}" title="Xem phong thủy"><img src="{{ url('/img/s/phong-thuy.jpg') }}" alt="Xem phong thủy"><span>Phong thủy</span></a></li>
		<li><a href="{{ url('/phong-thuy/phong-thuy-mat-tien') }}" title="Xem phong thủy mặt tiền"><img src="{{ url('/img/s/phong-thuy-mat-tien.jpg') }}" alt="Phong thủy mặt tiền"><span>Phong thủy mặt tiền</span></a></li>
		<li><a href="{{ url('/phong-thuy/phong-thuy-san-vuon') }}" title="Xem phong thủy sân vườn"><img src="{{ url('/img/s/phong-thuy-san-vuon.jpg') }}" alt="Phong thủy sân vườn"><span>Phong thủy sân vườn</span></a></li>
		<li><a href="{{ url('/phong-thuy/phong-thuy-cai-menh') }}" title="Phong Thủy Cải Mệnh"><img src="{{ url('/img/s/phong-thuy-cai-menh.jpg') }}" alt="Phong Thủy Cải Mệnh"><span>Phong Thủy Cải Mệnh</span></a></li>
		<li><a href="{{ url('/phong-thuy/phong-thuy-kinh-doanh') }}" title="Phong Thủy Kinh Doanh"><img src="{{ url('/img/s/phong-thuy-kinh-doanh.jpg') }}" alt="Phong Thủy Kinh Doanh"><span>Phong Thủy Kinh Doanh</span></a></li>
		<li><a href="{{ url('/phong-thuy/phong-thuy-nha-o') }}" title="Phong Thủy Nhà Ở"><img src="{{ url('/img/s/phong-thuy-nha-o.jpg') }}" alt="Phong Thủy Nhà Ở"><span>Phong Thủy Nhà Ở</span></a></li>
		<li><a href="{{ url('/phong-tuc-tap-quan') }}" title="Phong Tục Tập Quán"><img src="{{ url('/img/s/phong-tuc-tap-quan.jpg') }}" alt="Phong Tục Tập Quán"><span>Phong Tục Tập Quán</span></a></li>
		<li><a href="{{ url('/boi-ngay-sinh') }}" title="Bói ngày sinh"><img src="{{ url('/img/s/boi-ngay-sinh.jpg') }}" alt="Bói ngày sinh"><span>Bói ngày sinh</span></a></li>
		<li><a href="{{ url('/boi-not-ruoi') }}" title="Bói nốt ruồi"><img src="{{ url('/img/s/boi-not-ruoi.jpg') }}" alt="Bói nốt ruồi"><span>Bói nốt ruồi</span></a></li>
		<li><a href="{{ url('/boi-nhay-mat') }}" title="Bói nháy mắt"><img src="{{ url('/img/s/boi-nhay-mat.jpg') }}" alt="Bói nháy mắt"><span>Bói nháy mắt</span></a></li>
		<li><a href="{{ url('/xem-boi-chi-tay') }}" title="Xem Bói Chỉ Tay"><img src="{{ url('/img/s/xem-boi-chi-tay.jpg') }}" alt="Xem Bói Chỉ Tay"><span>Xem Bói Chỉ Tay</span></a></li>
		<li><a href="{{ url('/xem-boi-hoa-tay') }}" title="Xem Bói hoa tay"><img src="{{ url('/img/s/xem-boi-hoa-tay.jpg') }}" alt="Xem Bói hoa tay"><span>Xem Bói hoa tay</span></a></li>
		<li><a href="{{ url('/diem-bao-lanh-du') }}" title="Điềm báo lành dữ"><img src="{{ url('/img/s/diem-bao-lanh-du.jpg') }}" alt="Điềm báo lành dữ"><span>Điềm báo lành dữ</span></a></li>
		<li><a href="{{ url('/giai-ma-giac-mo') }}" title="Giải Mã Giấc Mơ"><img src="{{ url('/img/s/giai-ma-giac-mo.jpg') }}" alt="Giải Mã Giấc Mơ"><span>Giải Mã Giấc Mơ</span></a></li>
		<li><a href="{{ url('/giai-mong-chiem-bao') }}" title="Giải Mộng Chiêm Bao"><img src="{{ url('/img/s/giai-mong-chiem-bao.jpg') }}" alt="Giải Mộng Chiêm Bao"><span>Giải Mộng Chiêm Bao</span></a></li>
		<li><a href="{{ url('/giai-ma-giac-mo-va-cac-con-so') }}" title="Giải Mã Giấc Mơ Và Các Con Số"><img src="{{ url('/img/s/giai-ma-giac-mo-va-cac-con-so.jpg') }}" alt="Giải Mã Giấc Mơ Và Con Số"><span>Giải Mã Giấc Mơ Và Con Số</span></a></li>
		<li><a href="{{ url('/ngay-sinh-va-tinh-cach') }}" title="Xem bói ngày Sinh Và Tính Cách"><img src="{{ url('/img/s/ngay-sinh-va-tinh-cach.jpg') }}" alt="Bói ngày Sinh Và Tính Cách"><span>Bói ngày Sinh Và Tính Cách</span></a></li>
		<li><a href="{{ url('/thang-sinh-va-tinh-cach') }}" title="Xem bói tháng Sinh Và Tính Cách"><img src="{{ url('/img/s/thang-sinh-va-tinh-cach.jpg') }}" alt="Bói tháng Sinh Và Tính Cách"><span>Bói tháng Sinh Và Tính Cách</span></a></li>
		<li><a href="{{ url('/xem-boi-tinh-yeu-theo-nhom-mau') }}" title="Xem bói tình yêu theo nhóm máu"><img src="{{ url('/img/s/xem-boi-tinh-yeu-theo-nhom-mau.jpg') }}" alt="Bói tình yêu theo nhóm máu"><span>Bói tình yêu theo nhóm máu</span></a></li>
		<li><a href="{{ url('/xem-boi-thay-phan') }}" title="Xem bói thầy phán"><img src="{{ url('/img/s/xem-boi-thay-phan.jpg') }}" alt="Bói thầy phán"><span>Bói thầy phán</span></a></li>
		<li><a href="{{ url('/xem-boi-ai-cap') }}" title="Xem bói Ai Cập"><img src="{{ url('/img/s/xem-boi-ai-cap.jpg') }}" alt="Xem bói Ai Cập"><span>Xem bói Ai Cập</span></a></li>
		<li><a href="{{ url('/xem-boi-tinh-yeu-theo-chu-cai-dau-tien') }}" title="Xem Bói Tình Yêu Theo Chữ Cái Đầu Tiên Trong Tên"><img src="{{ url('/img/s/xem-boi-tinh-yeu-theo-chu-cai-dau-tien.jpg') }}" alt="Bói Tình Yêu Theo Chữ Cái"><span>Bói Tình Yêu Theo Chữ Cái</span></a></li>
		<li><a href="{{ url('/xem-boi-tinh-cach-theo-chu-cai-dau-tien') }}" title="Xem Bói Tính Cách Theo Chữ Cái Đầu Tiên Trong Tên"><img src="{{ url('/img/s/xem-boi-tinh-cach-theo-chu-cai-dau-tien.jpg') }}" alt="Bói Tính Cách Theo Chữ Cái"><span>Bói Tính Cách Theo Chữ Cái</span></a></li>
		<li><a href="{{ url('/xem-boi-tuong-mat') }}" title="Xem Bói Tướng Mặt"><img src="{{ url('/img/s/xem-boi-tuong-mat.jpg') }}" alt="Xem Bói Tướng Mặt"><span>Xem Bói Tướng Mặt</span></a></li>
		<li><a href="{{ url('/boi-bai-tay') }}" title="Bói Bài Tây"><img src="{{ url('/img/s/boi-bai-tay.jpg') }}" alt="Bói Bài Tây"><span>Bói Bài Tây</span></a></li>
		<li><a href="{{ url('/boi-bai-tarot') }}" title="Bói Bài Tarot"><img src="{{ url('/img/s/boi-bai-tarot.jpg') }}" alt="Bói Bài Tarot"><span>Bói Bài Tarot</span></a></li>
		<li><a href="{{ url('/12-cung-hoang-dao') }}" title="12 cung hoàng đạo"><img src="{{ url('/img/s/12-cung-hoang-dao.jpg') }}" alt="12 cung hoàng đạo"><span>12 cung hoàng đạo</span></a></li>
		<li><a href="{{ url('/xem-cung-hoang-dao') }}" title="Xem cung hoàng đạo"><img src="{{ url('/img/s/xem-cung-hoang-dao.jpg') }}" alt="Xem cung hoàng đạo"><span>Xem cung hoàng đạo</span></a></li>
		<li><a href="{{ url('/tinh-yeu-cua-cung-hoang-dao') }}" title="Tình Yêu Của Cung Hoàng Đạo"><img src="{{ url('/img/s/tinh-yeu-cua-cung-hoang-dao.jpg') }}" alt="Tình Yêu Của Cung Hoàng Đạo"><span>Tình Yêu Của Cung Hoàng Đạo</span></a></li>
		<li><a href="{{ url('/xep-hang-12-chom-sao') }}" title="Xếp Hạng 12 Chòm Sao"><img src="{{ url('/img/s/xep-hang-12-chom-sao.jpg') }}" alt="Xếp Hạng 12 Chòm Sao"><span>Xếp Hạng 12 Chòm Sao</span></a></li>
	</ul>
</div>

@if(count($data) > 0)
	@foreach($data as $key => $value)
		@if(count($value->posts) > 0)
			<?php 
				if($value->parentType) {
					$url = url($value->parentType->slug.'/'.$value->slug);
				} else {
					$url = url($value->slug);
				}
			?>
			<div class="box">
				<div class="box-title clearfix">
					<h3><a href="{{ $url }}" title="{!! $value->name !!}">{!! $value->name !!}</a></h3>
					<span>&nbsp;</span>
				</div>
				@include('site.post.box', array('type' => $value))
			</div>
			<div class="clearfix"></div>
		@endif
	@endforeach
@endif

@endsection