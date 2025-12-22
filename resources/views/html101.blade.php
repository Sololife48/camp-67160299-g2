@extends('template.default')

@section('content')

<div class="container mt-5">
    <h2 class="text-center mb-4 text-primary fw-bold">📝 Workshop #HTML - FORM</h2>

    <div id="formContainer" class="card shadow-lg form-box">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">ข้อมูลส่วนตัว</h5>
        </div>
        <div class="card-body">
            <form id="workshopForm" class="needs-validation" novalidate>
                <div class="row mb-3 align-items-center">
                    <label for="firstName" class="col-sm-4 col-form-label">ชื่อ</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="firstName" placeholder="กรุณาใส่ชื่อของคุณ" required>
                        <div class="invalid-feedback">กรุณากรอกชื่อ</div>
                    </div>
                </div>

                <div class="row mb-3 align-items-center">
                    <label for="lastName" class="col-sm-4 col-form-label">สกุล</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="lastName" placeholder="กรุณาใส่นามสกุลของคุณ" required>
                        <div class="invalid-feedback">กรุณากรอกนามสกุล</div>
                    </div>
                </div>

                <div class="row mb-3 align-items-center">
                    <label for="birthDate" class="col-sm-4 col-form-label">วัน/เดือน/ปีเกิด</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="birthDate" required>
                        <div class="invalid-feedback">ระบุวันเกิด</div>
                    </div>
                </div>

                <div class="row mb-3 align-items-center">
                    <label for="age" class="col-sm-4 col-form-label">อายุ</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="age" placeholder="ปี" min="1" max="150" required>
                        <div class="invalid-feedback">ระบุอายุ</div>
                    </div>
                </div>

                <div class="row mb-3 align-items-center">
                    <label class="col-sm-4 col-form-label">เพศ</label>
                    <div class="col-sm-8">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="ชาย" required>
                            <label class="form-check-label" for="male">ชาย</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="หญิง" required>
                            <label class="form-check-label" for="female">หญิง</label>
                        </div>
                        <div class="invalid-feedback">กรุณาระบุเพศ</div>
                    </div>
                </div>

                <div class="row mb-3 align-items-center">
                    <label for="profilePic" class="col-sm-4 col-form-label">รูป</label>
                    <div class="col-sm-8">
                        <input type="file" class="form-control" id="profilePic" accept="image/*" required>
                        <div class="invalid-feedback">กรุณาอัปโหลดรูปภาพ</div>
                    </div>
                </div>

                <hr>

                <div class="row mb-3">
                    <label for="address" class="col-sm-4 col-form-label">ที่อยู่</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="address" placeholder="ที่อยู่ปัจจุบัน" required></textarea>
                        <div class="invalid-feedback">กรุณากรอกที่อยู่</div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="favColor" class="col-sm-4 col-form-label">สีที่ชอบ</label>
                    <div class="col-sm-8">
                        <select class="form-select" id="favColor" required>
                            <option selected disabled value="">เลือกสีที่คุณชอบ</option>
                            <option value="แดง">สีแดง</option>
                            <option value="เขียว">สีเขียว</option>
                            <option value="น้ำเงิน">สีน้ำเงิน</option>
                            <option value="เหลือง">สีเหลือง</option>
                            <option value="other">อื่นๆ (ระบุเอง)</option>
                        </select>
                        <input type="text" class="form-control mt-2 d-none" id="otherColorText" placeholder="ระบุสีที่ชอบ" disabled>
                        <div class="invalid-feedback">กรุณาเลือกสีที่ชอบ</div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">แนวเพลงที่ชอบ</label>
                    <div class="col-sm-8">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="music" id="lifeSong" value="เพื่อชีวิต" required>
                            <label class="form-check-label" for="lifeSong">เพื่อชีวิต</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="music" id="countrySong" value="ลูกทุ่ง" required>
                            <label class="form-check-label" for="countrySong">ลูกทุ่ง</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="music" id="otherSong" value="other" required>
                            <label class="form-check-label" for="otherSong">อื่นๆ</label>
                        </div>
                        <input type="text" class="form-control mt-2 d-none" id="otherMusicText" placeholder="ระบุแนวเพลง" disabled>
                        <div class="invalid-feedback">กรุณาเลือกแนวเพลง</div>
                    </div>
                </div>

                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" value="yes" id="dataConsent" required>
                    <label class="form-check-label" for="dataConsent">ยินยอมให้เก็บข้อมูล</label>
                    <div class="invalid-feedback">คุณต้องกดยินยอม</div>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="reset" class="btn btn-outline-secondary px-4" id="resetBtn"><i class="bi bi-x-circle"></i> Reset</button>
                    <button type="submit" class="btn btn-success px-4"><i class="bi bi-check-circle"></i> Submit</button>
                </div>
            </form>
        </div>
    </div>

    <div id="resultContainer" class="d-none">
        <h3 class="text-center mb-4 fw-bold">ข้อมูลผู้ใช้</h3>
        <div class="card shadow mx-auto" style="max-width: 800px; border-radius: 15px; overflow: hidden;">
            <div class="row g-0">
                <div class="col-md-4 bg-primary d-flex align-items-center justify-content-center p-4">
                    <img id="resImage" src="" class="img-fluid rounded shadow-sm" style="width: 100%; max-height: 250px; object-fit: cover; background: white;">
                </div>
                <div class="col-md-8 p-4">
                    <h3 id="resName" class="text-primary fw-bold mb-0"></h3>
                    <p class="text-muted small">ข้อมูลส่วนตัวสมาชิก</p>

                    <div class="row mt-4">
                        <div class="col-4 text-muted small">ที่อยู่:</div>
                        <div id="resAddress" class="col-8 small"></div>
                    </div>
                    <hr class="my-2">
                    <div class="row">
                        <div class="col-6">
                            <div class="text-muted small">เพศ:</div>
                            <div id="resGender" class="small"></div>
                        </div>
                        <div class="col-6">
                            <div class="text-muted small">วันเกิด:</div>
                            <div id="resBirth" class="small"></div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="text-muted small">สีที่ชอบ:</div>
                            <span id="resColor" class="badge bg-danger"></span>
                        </div>
                        <div class="col-6">
                            <div class="text-muted small">แนวเพลง:</div>
                            <div id="resMusic" class="small"></div>
                        </div>
                    </div>

                    <div class="mt-4 p-2 bg-light rounded text-success small">
                        <strong>สถานะการยินยอม:</strong> ยินยอมให้เก็บข้อมูล
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <button class="btn btn-secondary px-4" onclick="location.reload()">กลับหน้าฟอร์ม</button>
        </div>
    </div>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection

@push("scripts")
<script>
    (() => {
        'use strict'
        const form = document.getElementById('workshopForm')
        const resetBtn = document.getElementById('resetBtn')
        const formContainer = document.getElementById('formContainer')
        const resultContainer = document.getElementById('resultContainer')

        // --- 1. Logic ช่อง "สีอื่นๆ" (เดิม) ---
        const favColorSelect = document.getElementById('favColor')
        const otherColorInput = document.getElementById('otherColorText')

        favColorSelect.addEventListener('change', function() {
            if (this.value === 'other') {
                otherColorInput.classList.remove('d-none'); otherColorInput.disabled = false; otherColorInput.required = true;
            } else {
                otherColorInput.classList.add('d-none'); otherColorInput.disabled = true; otherColorInput.required = false;
            }
        })

        // --- 2. Logic ช่อง "เพลงอื่นๆ" (เดิม) ---
        const musicRadios = document.querySelectorAll('input[name="music"]')
        const otherMusicInput = document.getElementById('otherMusicText')

        musicRadios.forEach(radio => {
            radio.addEventListener('change', function() {
                if (this.value === 'other') {
                    otherMusicInput.classList.remove('d-none'); otherMusicInput.disabled = false; otherMusicInput.required = true;
                } else {
                    otherMusicInput.classList.add('d-none'); otherMusicInput.disabled = true; otherMusicInput.required = false;
                }
            })
        })

        // --- 3. Validation & Update Display Logic (อัปเดต) ---
        form.addEventListener('submit', event => {
            event.preventDefault();

            if (!form.checkValidity()) {
                event.stopPropagation();
            } else {
                // ดึงค่ามาแสดงผล
                document.getElementById('resName').innerText = `นาย${document.getElementById('firstName').value} ${document.getElementById('lastName').value}`;
                document.getElementById('resAddress').innerText = document.getElementById('address').value;
                document.getElementById('resGender').innerText = document.querySelector('input[name="gender"]:checked').value;
                document.getElementById('resBirth').innerText = document.getElementById('birthDate').value;

                // จัดการเรื่อง "สี" และ "แนวเพลง" กรณีเลือกอื่นๆ
                let colorDisp = favColorSelect.value === 'other' ? otherColorInput.value : favColorSelect.options[favColorSelect.selectedIndex].text;
                let musicDisp = document.querySelector('input[name="music"]:checked').value;
                if(musicDisp === 'other') musicDisp = otherMusicInput.value;

                document.getElementById('resColor').innerText = colorDisp;
                document.getElementById('resMusic').innerText = musicDisp;

                // แสดงรูปภาพ
                const file = document.getElementById('profilePic').files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) { document.getElementById('resImage').src = e.target.result; }
                    reader.readAsDataURL(file);
                }

                // สลับหน้าจอ
                formContainer.classList.add('d-none');
                resultContainer.classList.remove('d-none');
            }
            form.classList.add('was-validated')
        }, false)

        resetBtn.addEventListener('click', () => {
            form.classList.remove('was-validated');
            otherColorInput.classList.add('d-none');
            otherMusicInput.classList.add('d-none');
        })
    })()
</script>
@endpush
