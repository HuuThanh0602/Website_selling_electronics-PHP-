<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Quản Trị Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
    <style>
        html, body {
        height: 100%;
        margin: 0;
        }

        .d-flex {
            height: 100vh; 
        }

        .main-left {
            background-color: #343a40;
            color: white;
            padding: 20px;
            width: 20%;
            height: 110%; 
        }

        .main-left h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .main-left div {
            margin: 15px 0;
            font-size: 18px;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .main-left div:hover {
            background-color: #495057;
        }

        .table-title {
            margin-bottom: 20px;
        }

        .table-title h2 {
            font-size: 28px;
            font-weight: bold;
        }


        .button a {
            text-decoration: none;
            color: white;
            background-color: #28a745;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
        }

        .button a:hover {
            background-color: #218838;
        }

        .table th, .table td {
            vertical-align: middle;
        }

        .table th {
            background-color: #f8f9fa;
            color: #495057;
        }

        .table tbody tr:hover {
            background-color: #f1f1f1;
        }
        .edit-icon, .delete-icon {
            font-size: 20px;
            color: #007bff;
            cursor: pointer;
        }

        .edit-icon:hover {
            color: #0056b3;
        }

        .delete-icon:hover {
            color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <div class="main-left">
            <h2 class="title">Quản Trị Website</h2>
            <div class="main-left-1" id="main-left-content">
                <i class="bi bi-house-gear-fill"></i> Trang chủ quản trị
            </div>
            <div class="main-left-2" id="load-product">
                <i class="bi bi-box"></i> Sản Phẩm
            </div>
            <div class="main-left-3" id="load-articles">
                <i class="bi bi-file-earmark-post"></i> Bài Viết
            </div>
            <div>
                <i class="bi bi-gear"></i> Cài Đặt
            </div>
            <div >
                <form method="POST" action="{{ route('logout') }}" style="margin-top: 0.1rem;">
                    @csrf
                    <button type="submit" class="dropdown-item" style="background: none; border: none; color: white;">
                        <i class="bi bi-box-arrow-left"></i> Đăng Xuất
                    </button>
                </form>
            </div>
        </div>
        <div class="d-flex flex-column p-3" style="width: 100%;" id="main-right-content">
            <div id="dynamic-content">
            </div>
        </div>
    </div>
    @if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
    @endif
    <script>
    $(document).ready(function() {
    let currentUrl = sessionStorage.getItem('currentUrl') || '/load-products'; 
    $("#load-product").click(function() {
        currentUrl = '/load-products'; 
        sessionStorage.setItem('currentUrl', currentUrl); 
        loadContent(currentUrl, 'Đang tải sản phẩm...');
    });
    $("#load-articles").click(function() {
        currentUrl = '/load-articles'; 
        sessionStorage.setItem('currentUrl', currentUrl); 
        loadContent(currentUrl, 'Đang tải bài viết...');
    });
    function loadContent(url, loadingMessage) {
        $("#dynamic-content").html(`<p>${loadingMessage}</p>`);
        $.ajax({
            url: url,
            method: 'GET',
            success: function(data) {
                $("#dynamic-content").html(data);
                setupPagination(url);      
                setupDeleteHandler(url);    
            }
        });
    }
    function setupPagination(url) {
        $("#dynamic-content").on("click", ".pagination a", function(e) {
            e.preventDefault();
            let pageUrl = $(this).attr("href");
            currentUrl = pageUrl; 
            sessionStorage.setItem('currentUrl', currentUrl);
            loadContent(pageUrl, 'Đang tải...');
        });
    }
    function setupDeleteHandler(url) {
        $(".delete-button").click(function(e) {
            e.preventDefault();
            let form = $(this).closest(".delete-form");
            let deleteUrl = form.attr("action");
            $.ajax({
                url: deleteUrl,
                type: 'POST',
                data: form.serialize(),
                success: function(response) {
                    if (response.success) {
                        loadContent(url, 'Đang tải lại danh sách...'); 
                    } else {
                        alert("Đã xảy ra lỗi, vui lòng thử lại!");
                    }
                },
                error: function(xhr) {
                    alert("Đã xảy ra lỗi, vui lòng thử lại!");
                }
            });
        });
    }
    loadContent(currentUrl, 'Đang tải sản phẩm...'); 
});
    </script>
</body>
</html>
