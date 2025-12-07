<!DOCTYPE html>
<html lang="th">
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
    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4 text-primary fw-bold">📝 Workshop #HTML - FORM</h2>
    

    <div class="card shadow-lg form-box">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">ข้อมูลส่วนตัว</h5>
        </div>
        <div class="card-body">
            <form>
                <div class="row mb-3 align-items-center">
                    <label for="firstName" class="col-sm-4 col-form-label">ชื่อ</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="firstName" placeholder="กรุณาใส่ชื่อของคุณ" required>
                    </div>
                </div>

                <div class="row mb-3 align-items-center">
                    <label for="lastName" class="col-sm-4 col-form-label">สกุล</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="lastName" placeholder="กรุณาใส่นามสกุลของคุณ" required>
                    </div>
                </div>

                <div class="row mb-3 align-items-center">
                    <label for="birthDate" class="col-sm-4 col-form-label">วัน/เดือน/ปีเกิด</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="birthDate">
                    </div>
                </div>

                <div class="row mb-3 align-items-center">
                    <label for="age" class="col-sm-4 col-form-label">อายุ</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="age" placeholder="ปี" min="1" max="150">
                    </div>
                </div>

                <div class="row mb-3 align-items-center">
                    <label class="col-sm-4 col-form-label">เพศ</label>
                    <div class="col-sm-8">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="ชาย">
                            <label class="form-check-label" for="male">ชาย</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="หญิง">
                            <label class="form-check-label" for="female">หญิง</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3 align-items-center">
                    <label for="profilePic" class="col-sm-4 col-form-label">รูป</label>
                    <div class="col-sm-8">
                        <input type="file" class="form-control" id="profilePic">
                    </div>
                </div>
                
                <hr> <div class="row mb-3">
                    <label for="address" class="col-sm-4 col-form-label">ที่อยู่</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="address" placeholder="ที่อยู่ปัจจุบัน"></textarea>
                    </div>
                </div>

                <div class="row mb-3 align-items-center">
                    <label for="favColor" class="col-sm-4 col-form-label">สีที่ชอบ</label>
                    <div class="col-sm-8">
                        <select class="form-select" id="favColor">
                            <option selected disabled>เลือกสีที่คุณชอบ</option>
                            <option value="red">สีแดง</option>
                            <option value="green">สีเขียว</option>
                            <option value="blue">สีน้ำเงิน</option>
                            <option value="yellow">สีเหลือง</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3 align-items-center">
                    <label class="col-sm-4 col-form-label">แนวเพลงที่ชอบ</label>
                    <div class="col-sm-8">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="music" id="lifeSong" value="เพื่อชีวิต">
                            <label class="form-check-label" for="lifeSong">เพื่อชีวิต</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="music" id="countrySong" value="ลูกทุ่ง">
                            <label class="form-check-label" for="countrySong">ลูกทุ่ง</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="music" id="otherSong" value="อื่นๆ">
                            <label class="form-check-label" for="otherSong">อื่นๆ</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="dataConsent" required>
                            <label class="form-check-label" for="dataConsent">
                                ยินยอมให้เก็บข้อมูล
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 d-flex justify-content-between">
                        <button type="reset" class="btn btn-outline-secondary px-4"><i class="bi bi-x-circle"></i> Reset</button>
                        <button type="submit" class="btn btn-success px-4"><i class="bi bi-check-circle"></i> Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>