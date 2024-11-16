<!doctype html>
<html class="no-js" lang="zxx">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Robocon</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
    </head>
    <body>
        <div class="body-wrapper">
        @include('layouts.header')
            <div class="slider-with-banner">
                <div class="container">
                    <p>Trang chủ/ Giới thiệu</p>
                    <div style="width: 95%; height: 80%; background-color: whitesmoke;" >
                        
                        <!-- Begin Slider Area -->
                        <div  style="margin-left:  30px ;">
                            <h1 >Giới thiệu</h1>
                            <p>Trang giới thiệu giúp khách hàng hiểu rõ hơn về cửa hàng của bạn. Hãy cung cấp thông tin cụ thể về việc kinh doanh, về cửa hàng, thông tin liên hệ. Điều này sẽ giúp khách hàng cảm thấy tin tưởng khi mua hàng trên website của bạn.
                            <br> Một vài gợi ý cho nội dung trang Giới thiệu:</p>
                            <ul style="margin-left: 20px; font-size: larger;">
                                <li style="list-style-type: disc;">1</li>
                                <li style="list-style-type: disc;">2</li>
                                <li style="list-style-type: disc;">3</li>
                                <li style="list-style-type: disc;">4</li>
                                <li style="list-style-type: disc;">5</li>
                                <li style="list-style-type: disc;">6</li>
                                <li style="list-style-type: disc;">7</li>
                            </ul>
                            <p>Bạn có thể chỉnh sửa hoặc xoá bài viết này tại <strong>đây</strong> hoặc thêm những bài viết mới trong phần quản lý <strong>Trang nội dung</strong>.</p>
                            <img src="1.jpg" alt="" style="margin-left: 250px; width: 50%;">
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.footer')>
        </div>
    </body>
</html>
