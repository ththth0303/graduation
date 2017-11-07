@extends('layouts.master')
@section('content')
    <div class="col-sm-12" id="th">
        <div class="white-box">
            <div style="border: 1px solid #d7d7d7; padding: 10px">
                <h2>Hoàn thành đề cương</h2>
                <div class=""><p><b>Date: </b>11/11/2017</p></div>
                <div class=""><p><b>Student: </b>Ngô Trung Thắng</p></div>
                <div class=""><p><b>Instructor: </b>Ts.Nguyễn Văn A</p></div>
                <div class=""><p><b>Argumentant: </b>Ths.Nguyễn Văn C</p></div>
                <hr>
                <div class=""><p><b>Attack: </b><a href="">document.docx</a></p></div>
                <hr>
                <div class="">
                    <p>
                        <b>Index: </b><br>
                        MỤC LỤC<br>Danh mục kí hiệu và viết tắt    iii<br>Danh mục hình vẽ    iv<br>Danh mục bảng   v<br>Lời cảm ơn  vi<br>Lời nói đầu vii<br>Chương 1. Khảo sát quy trình đăng ký và giao đề tài báo cáo tốt nghiệp tại khoa an toàn thông tin   1<br>1.1.    Quy trình đăng ký và giao đề tài hiện hành  1<br>1.1.1.  Ra thông báo kêu gọi đề xuất đề tài 1<br>1.1.2.  Tiếp nhận đăng ký đề tài của sinh viên  2<br>1.1.3.  Công bố kết quả đăng ký 2<br>1.2.    Một số hạn chế của quy trình hiện nay   3<br>1.3.    Bài toán Xây dựng công cụ hỗ trợ công tác giao đề tài báo cáo tốt nghiệp    3<br>Chương 2. Phân tích thiết kế xây dựng công cụ hỗ trợ công tác giao đề tài báo cáo tốt nghiệp    6<br>2.1.    Xây dựng biểu đồ Use case   6<br>2.1.1.  Biểu đồ Use Case người dùng 6<br>2.1.2.  Biểu đồ Use Case người hướng dẫn    7<br>2.1.3.  Biểu đồ Use Case Sinh viên  8<br>2.1.4.  Biểu đồ use case Admin  9<br>2.2.    Kịch bản cho các Use case   10<br>2.2.1.  Kịch bản cho chức năng Đăng nhập    10<br>2.2.2.  Kịch bản cho chức năng Xem danh sách đề tài 11<br>2.2.3.  Kịch bản cho chức năng Đăng ký đề tài và Hủy đăng ký đề tài 11<br>2.2.4.  Kịch bản cho chức năng Phê duyệt Đăng ký và Hủy đăng ký đề tài  13<br>2.2.5.  Kịch bản cho chức năng Quản lý tài khoản    13<br>2.2.6.  Kịch bản cho chức năng Cập nhật đề tài  15<br>2.2.7.  Kịch bản cho chức năng Duyệt đề tài 16<br>2.2.8.  Kịch bản cho chức năng Tìm kiếm 17<br>2.2.9.  Kịch bản cho chức năng Thống kê 18<br>2.3.    Biểu đồ hoạt động   19<br>2.3.1.  Biểu đồ hoạt động Đăng nhập 19<br>2.3.2.  Biểu đồ hoạt động Đăng ký đề tài của Sinh viên  20<br>2.3.3.  Biểu đồ hoạt động Hủy đề tài của sinh viên  21<br>2.3.4.  Biểu đồ hoạt động Người hướng dẫn duyệt đề tài đăng ký của sinh viên    22<br>2.3.5.  Biểu đồ hoạt động Duyệt hủy đề tài đăng ký của sinh viên    23<br>2.3.6.  Biểu đồ hoạt động Tìm kiếm  24<br>2.3.7.  Biểu đồ hoạt động Thêm sinh viên    25<br>2.3.8.  Biểu đồ hoạt động Sửa sinh viên 26<br>2.3.9.  Biểu đồ hoạt động Xóa sinh viên 27<br>2.3.10. Biểu đồ hoạt động Duyệt đề tài  28<br>2.3.11. Biểu đồ hoạt động Thống kê  29<br>Chương 3. XÂY DỰNG CÔNG CỤ HỖ TRỢ cÔNG TÁC ĐĂNG KÝ VÀ GIAO ĐỒ ÁN TỐT NGHIỆP 30<br>3.1.    Giới thiệu ngôn ngữ lập trình PHP và Hệ quản trị CSDL MySQL 30<br>3.1.1.  Giới thiệu ngôn ngữ lập trình PHP   30<br>3.1.2.  Giới thiệu Hệ quản trị CSDL MySQL   30<br>3.1.3.  Sự kết hợp giữa PHP và MySQL    31<br>3.2.    Mô hình MVC 31<br>3.2.1.  Giới thiệu mô hình MVC  31<br>3.2.2.  Xây dựng MVC cho sản phẩm   32<br>3.3.    Xây dựng Cơ sở dự liệu cho hệ thống 34<br>3.3.1.  Các bảng cơ sở dữ liệu  34<br>3.4.    Giao diện phần mềm  37<br>3.4.1.  Giao diện trang Đăng nhập   37<br>3.4.2.  Giao diện trang Admin thêm người hướng dẫn  38<br>3.4.3.  Giao diện Admin sửa người hướng dẫn 38<br>3.4.4.  Giao diện Danh sách người hướng dẫn 39<br>3.4.5.  Giao diện sinh viên đăng ký 39<br>3.4.6.  Giao diện sinh viên chờ người hướng dẫn duyệt đề tài    39<br>3.4.7.  Giao diện sinh viên hủy đề tài  40<br>3.4.8.  Giao diện người hướng dẫn duyệt  hủy đề tài sinh viên   40<br>Kết luận    41<br>Tài liệu tham khảo  42<br>PHỤ LỤC 43
                    </p>
                </div>
                <hr>
                <div class=""><p><b>Describe: </b></p></div>
            </div>
        </div>
    </div>
@endsection
@section('script') 
    
@endsection