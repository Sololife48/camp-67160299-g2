<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Workshop HTML Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: 'Sarabun', sans-serif;
        }
        .form-box {
            max-width: 500px;
            margin: auto;
        }
        textarea {
            height: 120px;
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <h2 class="text-center mb-4">Workshop #HTML - FORM</h2>

    <form class="form-box">
        <div class="row mb-2">
            <label class="col-4 col-form-label">ชื่อ</label>
            <div class="col-8">
                <input type="text" class="form-control">
            </div>
        </div>

        <div class="row mb-2">
            <label class="col-4 col-form-label">สกุล</label>
            <div class="col-8">
                <input type="text" class="form-control">
            </div>
        </div>

        <div class="row mb-2">
            <label class="col-4 col-form-label">วัน/เดือน/ปีเกิด</label>
            <div class="col-8">
                <input type="date" class="form-control">
            </div>
        </div>

        <div class="row mb-2">
            <label class="col-4 col-form-label">อายุ</label>
            <div class="col-8">
                <input type="number" class="form-control">
            </div>
        </div>

        <div class="row mb-2">
            <label class="col-4 col-form-label">เพศ</label>
            <div class="col-8 pt-2">
                <input type="radio" name="gender"> ชาย
                <input type="radio" name="gender" class="ms-3"> หญิง
            </div>
        </div>

        <div class="row mb-2">
            <label class="col-4 col-form-label">รูป</label>
            <div class="col-8">
                <input type="file" class="form-control">
            </div>
        </div>

        <div class="row mb-2">
            <label class="col-4 col-form-label">ที่อยู่</label>
            <div class="col-8">
                <textarea class="form-control"></textarea>
            </div>
        </div>

        <div class="row mb-2">
            <label class="col-4 col-form-label">สีที่ชอบ</label>
            <div class="col-8">
                <select class="form-select">
                    <option>สีแดง</option>
                    <option>สีเขียว</option>
                    <option>สีน้ำเงิน</option>
                </select>
            </div>
        </div>

        <div class="row mb-2">
            <label class="col-4 col-form-label">แนวเพลงที่ชอบ</label>
            <div class="col-8 pt-2">
                <input type="radio" name="music"> เพื่อชีวิต
                <input type="radio" name="music" class="ms-2"> ลูกทุ่ง
                <input type="radio" name="music" class="ms-2"> อื่นๆ
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-12">
                <input type="checkbox"> ยินยอมให้เก็บข้อมูล
            </div>
        </div>

        <div class="row">
            <div class="col-6 text-start">
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
            <div class="col-6 text-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>
