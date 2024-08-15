<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOSTARP -->
    <!-- IMPORT SCRIPTS & STYLES -->
    <link
      rel="stylesheet"
      href="./node_modules/bootstrap/dist/css/bootstrap.min.css"
    />
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Boostarp Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- Font Awesome Library-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>مدونة عافيتي - اضافة مقال جديد</title>
    <style>
        body {
            direction: rtl;
        }
        .navbar-nav .nav-link.active {
            color:var(--bs-blue) !important;
        }
        .editor-toolbar {
            background-color: #f8f9fa;
            border: 1px solid #ced4da;
            border-bottom: none;
            padding: 10px;
        }
        #editor {
            height: 300px;
            border: 1px solid #ced4da;
            padding: 10px;
            overflow-y: auto;
        }
        .btn-toolbar .btn-group {
            margin: 6px;
        }
        .color-box {
            display: flex;
            align-items: center;
            margin: 0 2px;
            white-space: nowrap;
        }
        .color-picker {
            height: 30px;
            width: 30px;
            padding: 0;
            border: none;
            background: none;
        }
        .btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }
        .btn-group>.btn:nth-child(n+3), .btn-group>:not(.btn-check)+.btn {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }
        label {
            font-size: 1rem;
            font-weight: 500;
        }
        .bth {
            border-radius: 0 !important;
        }
    </style>
</head>
<body class="min-vh-100 position-relative pt-5 mt-4" style="text-align: right;">
    <?php
        include("header.php");
    ?>
    <div class="container my-5">
        <h1 class="mb-5">إنشاء مقال جديد</h1>
        <hr/>
        <form action="" class="my-5">
            <div class="post-title mb-3">
                <label for="" class="ms-2">عنوان المقالة :</label>
                <div class="mt-3">
                    <input type="text" class="form-control rounded-0" style="max-width: 90%; height: 42px;" require>
                </div>
            </div>
            <div class="post-img mb-3">
                <label for="" class="ms-2">صورة غلاف المقالة :</label>
                <div class="mt-3">
                <input class="form-control rounded-0" type="file" id="formFile" style="max-width: 300px;" require>
                </div>
            </div>
            <div class="post-catory mb-3">
                <label for="" class="ms-3">التصنيف :</label>
                <div class="mt-3">
                    <select class="form-select rounded-0" aria-label="Default select example" style="max-width: 300px;">
                        <option selected>عام</option>
                        <option value="1">اضطراب فرط الحركة وتشتت الانتباه</option>
                        <option value="2">اضطرابات الطعام</option>
                        <option value="3">الأسرة</option>
                        <option value="3">الأطفال</option>
                        <option value="3">الإدمان</option>
                        <option value="3">الاستشارات النفسية</option>
                        <option value="3">الاضطرابات الشخصية</option>
                        <option value="3">الاضطرابات النفسية</option>
                        <option value="3">الاضطرابات النمائية</option>
                        <option value="3">الاكتئاب</option>
                        <option value="3">الرهاب الإجتماعي</option>
                        <option value="3">الصحة الجنسية</option>
                        <option value="3">الصحة النفسية</option>
                        <option value="3">الصحة النفسية في العمل</option>
                        <option value="3">الصحة النفسية للحامل</option>
                        <option value="3">الصحة النفسية للطلاب</option>
                        <option value="3">العلاج النفسي</option>
                        <option value="3">العلاقات الزوجية</option>
                        <option value="3">الفصام</option>
                        <option value="3">القلق</option>
                        <option value="3">المشاعر</option>
                        <option value="3">الوسواس القهري</option>
                        <option value="3">الوعي النفسي</option>
                        <option value="3">تطوير الذات</option>
                        <option value="3">ثنائي القطب</option>
                        <option value="3">جودة الحياة</option>
                    </select>
                </div>
            </div>
            <div class="mb-5">
                <label for="" class="mb-3">المقال :</label>
                <div class="editor-toolbar">
                    <div class="btn-toolbar" role="toolbar">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-outline-secondary" id="bold"><i class="bi bi-type-bold"></i></button>
                            <button type="button" class="btn btn-outline-secondary" id="italic"><i class="bi bi-type-italic"></i></button>
                            <button type="button" class="btn btn-outline-secondary" id="underline"><i class="bi bi-type-underline"></i></button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-outline-secondary" id="justifyLeft"><i class="bi bi-text-left"></i></button>
                            <button type="button" class="btn btn-outline-secondary" id="justifyCenter"><i class="bi bi-text-center"></i></button>
                            <button type="button" class="btn btn-outline-secondary" id="justifyRight"><i class="bi bi-text-right"></i></button>
                        </div>
                        <div class="btn-group" role="group">
                            <select class="form-select rounded-0" id="fontSize">
                                <option value="1">صغير</option>
                                <option value="3" selected>عادي</option>
                                <option value="5">كبير</option>
                                <option value="7">كبير جداً</option>
                            </select>
                        </div>
                        <div class="btn-group" role="group">
                            <select class="form-select rounded-0" id="fontName">
                                <option value="Arial" selected>Arial</option>
                                <option value="Helvetica">Helvetica</option>
                                <option value="Times New Roman">Times New Roman</option>
                                <option value="Courier">Courier</option>
                            </select>
                        </div>
                        <div class="btn-group" role="group">
                            <div class="color-box">
                                <label for="foreColor">اللون :</label>
                                <input type="color" class="color-picker me-2" id="foreColor" title="Font Color">
                            </div>
                        </div>
                        <div class="btn-group" role="group">
                            <div class="color-box">
                                <label for="foreColor"> الخلفية :</label>
                                <input type="color" class="color-picker me-2" id="backColor" title="Highlight Color">
                            </div>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-outline-secondary" id="insertOrderedList"><i class="bi bi-list-ol"></i></button>
                            <button type="button" class="btn btn-outline-secondary" id="insertUnorderedList"><i class="bi bi-list-ul"></i></button>
                        </div>
                    </div>
                </div>
                <div id="editor" contenteditable="true"></div>
            </div>
            <div class="d-flex">
                <button type="button" class="btn btn-primary rounded-0 px-5 py-2 ms-3">إنشاء</button>
                <button type="button" class="btn btn-outline-secondary rounded-0 px-4 py-2">إلغاء</button>
            </div>
        </form>
    </div>
    <?php
        include("footer.php");
    ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const editor = document.getElementById('editor');
            const toolbar = document.querySelector('.editor-toolbar');

            function execCommand(command, value = null) {
                document.execCommand(command, false, value);
                editor.focus();
            }

            toolbar.addEventListener('click', function(e) {
                const target = e.target.closest('button');
                if (target) {
                    const command = target.id;
                    execCommand(command);
                }
            });

            document.getElementById('fontSize').addEventListener('change', function(e) {
                execCommand('fontSize', e.target.value);
            });

            document.getElementById('fontName').addEventListener('change', function(e) {
                execCommand('fontName', e.target.value);
            });

            document.getElementById('foreColor').addEventListener('input', function(e) {
                execCommand('foreColor', e.target.value);
            });

            document.getElementById('backColor').addEventListener('input', function(e) {
                execCommand('backColor', e.target.value);
            });

            // Prevent the default behavior of drag and drop
            editor.addEventListener('dragover', function(e) {
                e.preventDefault();
            });

            editor.addEventListener('drop', function(e) {
                e.preventDefault();
            });
        });
    </script>
</body>
</html>