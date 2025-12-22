<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Workshop HTML Form (ตกแต่งแล้ว)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #f8f9fa;
        }
        .form-box {
            max-width: 550px;
            margin: 30px auto;
        }
        textarea {
            height: 120px;
        }
    /* ลบ Icon ติ๊กถูก/ผิด ของ Bootstrap ออกเพื่อให้ดูสะอาดตาเหมือนรูปตัวอย่าง */
    .form-control.is-valid, .was-validated .form-control:valid,
    .form-control.is-invalid, .was-validated .form-control:invalid,
    .form-select.is-valid, .was-validated .form-select:valid,
    .form-select.is-invalid, .was-validated .form-select:invalid {
        background-image: none !important;
        padding-right: 0.75rem;
    }

    /* ปรับสีข้อความแจ้งเตือนให้ชัดเจน */
    .invalid-feedback { color: #dc3545; font-size: 0.875em; }
    .valid-feedback { color: #198754; font-size: 0.875em; }

    /* CSS สำหรับซ่อน Input "อื่นๆ" */
    .d-none { display: none !important; }
    </style>
    @stack('style')
</head>
<body>
    <div class="container mt-4">
        <h1>@yield('header1')</h1>
         @yield('content')
    </div>
    @stack('scripts')
</body>
</html>
