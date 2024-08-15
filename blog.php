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
    <!-- Font Awesome Library-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>مدونة عافيتي</title>
    <style>
        .navbar-nav .nav-link.active {
            color:var(--bs-blue) !important;
        }
        .card {
            /* border: none !important; */
            height: 100%;
        }
        .card-body {
            padding: 20px 20px 30px 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }
        .card-title {
            font-size: 15.6px;
            font-weight: 500;
            line-height: 1.6;
            text-align: right;
        }
        .card-text {
            font-size: 13px;
            margin: 11px 0 0 0;
            color: #0A284D;
            line-height: 1.8;
            text-align: right;
        }
        .category button {
            font-size: .7em;
            padding: 6px 7px 7px;
            border-radius: 5px !important;
            line-height: 1;
            font-weight: 500;
            box-shadow: 0px 9px 25px rgb(217 221 255 / 40%);
        }
        .accordion-button::after {
            margin-right: auto;
            margin-left: 0;
        }
        .accordion-body {
            padding-right: 0.6rem !important;
            padding-left: 0.5rem !important;
        }
        /* width */
        .accordion-body::-webkit-scrollbar {
            width: 8px;
        }

        /* Track */
        .accordion-body::-webkit-scrollbar-track {
            background: #f1f1f1; 
            border-radius: 5px;
        }
        
        /* Handle */
        .accordion-body::-webkit-scrollbar-thumb {
            background: var(--bs-gray-400); 
            border-radius: 5px;
            max-height: 10px;
        }

        /* Handle on hover */
        .accordion-body::-webkit-scrollbar-thumb:hover {
            background: #486df6; 
        }
        .form-check {
            display: flex !important;
        }
        .form-check .form-check-input {
            width: 18px;
            height: 18px;
            margin-left: 0.5rem;
            float: right !important;
        }
        label {
            font-size: .73em;
            font-weight: 600;
        }
        .add-btn{
            right: 3%;
            bottom: 2%;
        }
        @media (min-width: 500px) and (max-width: 575.8px) {
           .row-cols-1>* {
                width: 50%;
            }
        }
        @media (min-width: 992px) and (max-width: 1500px){
            .row-cols-lg-3>* {
                width: 50%;
            }
            .col-lg-3 {
                width: 30%;
            }
            .col-lg-9 {
                width: 70%;
            }
        }
    </style>
</head>
<body class="min-vh-100 position-relative pt-5 mt-4" style="text-align: right;">
    <?php
        include("header.php");
    ?>
   <div class="container-md">
      <div class="d-flex justify-content-center align-items-center mt-4 rounded-3" style="height: 50vh; background: #F3F8FF;">
        <div class="my-4 text-center px-auto">
            <h1 class="">المدونة</h1>
            <p class="my-4 mx-2 px-3 py-1" style="text-align: justify; color: #141C7A;">.مقالات يومية بأهم المواضيع في الصحة والرفاهية النفسية، لتكون أفضل نسخة من نفسك</p>
            <div class="mx-auto my-4">
                <form class="d-flex align-items-center py-1 px-3 border border-1 border-dark rounded-pill bg-white" role="search">
                    <input class="form-control shadow-none border-0 px-0" type="search" placeholder="اكتب كلمة البحث ثم اضغط زر الإدخال" style="text-align: right;">
                    <button class="btn border-0 mx-2 p-0" type="submit"><i class="fa-solid fa-magnifying-glass fs-5"></i></button>
                </form>
            </div>
        </div>
      </div>
      <div class="row w-100 min-vh-100 g-3 my-4 mx-auto pb-5">
        <div class="col-sm-6 col-md-7 col-lg-9 order-2 order-sm-1 posts">
            <div class="row row-cols-1 row-cols-lg-3 my-2 gx-2 gy-3 pb-5">
                <div class="col">
                    <div class="card">
                        <img src="./images/3-2-720x405.png" class="card-img-top" alt="...">
                        <div class="card-body" style="direction: rtl;">
                            <div class="category mb-2 d-flex">
                                <button type="button" class="btn btn-primary ms-1">عام</button>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="date fw-semibold" style="font-size: 11.2px; color: #9EA1B6;">
                                    9 أغسطس  -  2024
                                </div>
                                <div class="likes">
                                    <button type="button" class="btn d-flex align-items-center p-0 border-0" style="color: #9EA1B6;">
                                        <div class="likes-number" style="font-size: 14px; margin-bottom: 1px;">1</div>
                                        <i class="fa-regular fa-heart me-2"></i>
                                    </button>
                                </div>
                            </div>
                            <h5 class="card-title">اشتباه متلازمة داون .. الأعراض و الاسباب</h5>
                            <p class="card-text mb-3">اشتباه متلازمة داون من أهم المعلومات التي تهم الكثير من الآباء للتعامل مع هذه الحالة التي قد تبدو مرضية للوهلة الأولى...</p>
                            <a href="view_blog.php" class="btn btn-primary text-center mt-3 px-4 align-self-end">إقراء المزيد</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="./images/2-3-720x405.png" class="card-img-top" alt="...">
                        <div class="card-body" style="direction: rtl;">
                            <div class="category mb-2 d-flex">
                                <button type="button" class="btn btn-primary ms-1">عام</button>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="date fw-semibold" style="font-size: 11.2px; color: #9EA1B6;">
                                    9 أغسطس  -  2024
                                </div>
                                <div class="likes">
                                    <button type="button" class="btn d-flex align-items-center p-0 border-0" style="color: #9EA1B6;">
                                        <div class="likes-number" style="font-size: 14px; margin-bottom: 1px;">1</div>
                                        <i class="fa-regular fa-heart me-2"></i>
                                    </button>
                                </div>
                            </div>
                            <h5 class="card-title">متلازمة داون عند الأطفال ... الأعراض والأسباب</h5>
                            <p class="card-text">متلازمة داون عند الأطفال أعراض و أسباب تُعتبر متلازمة داون عند الأطفال واحدة من أبرز الحالات الوراثية التي تؤثر عليهم. تحدث..</p>
                            <a href="view_blog.php" class="btn btn-primary mt-3 text-center px-4 align-self-end">إقراء المزيد</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="./images/Purple-and-White-AI-Tips-YouTube-Thumbnail-720x405.png" class="card-img-top" alt="...">
                        <div class="card-body" style="direction: rtl;">
                            <div class="category mb-2 d-flex">
                                <button type="button" class="btn btn-primary ms-1">عام</button>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="date fw-semibold" style="font-size: 11.2px; color: #9EA1B6;">
                                    9 أغسطس  -  2024
                                </div>
                                <div class="likes">
                                    <button type="button" class="btn d-flex align-items-center p-0 border-0" style="color: #9EA1B6;">
                                        <div class="likes-number" style="font-size: 14px; margin-bottom: 1px;">1</div>
                                        <i class="fa-regular fa-heart me-2"></i>
                                    </button>
                                </div>
                            </div>
                            <h5 class="card-title">كيف تعمل الذاكرة لدى الفرد و ما هي مشتتاتها ؟</h5>
                            <p class="card-text">ترتبط الذاكرة البشرية بعدد مختلف من أجزاء الدماغ، وتنقسم بدورها إلى عدة أنواع. فهي أكثر تعقيدًا من مجرد أنها عبارة عن…</p>
                            <a href="view_blog.php" class="btn btn-primary mt-3 text-center px-4 align-self-end">إقراء المزيد</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-5 col-lg-3 order-1 order-sm-2">
            <div class="accordion my-3" id="accordionExample" style="direction: rtl;">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        التصنيفات
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body overflow-y-scroll" style="max-height: 300px;" >
                        <form action="">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="radios" name="" id="1" class=""><label for="1" class="mb-1">اضطراب فرط الحركة وتشتت الانتباه</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="radios" name="" id="1" class=""><label for="1" class="mb-1">اضطرابات الطعام</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="radios" name="" id="1" class=""><label for="1" class="mb-1">الأسرة</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="radios" name="" id="1" class=""><label for="1" class="mb-1">الأطفال</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="radios" name="" id="1" class=""><label for="1" class="mb-1">الإدمان</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="radios" name="" id="1" class=""><label for="1" class="mb-1">الاستشارات النفسية</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="radios" name="" id="1" class=""><label for="1" class="mb-1">الاضطرابات الشخصية</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="radios" name="" id="1" class=""><label for="1" class="mb-1">الاضطرابات النفسية</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="radios" name="" id="1" class=""><label for="1" class="mb-1">الاضطرابات النمائية</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="radios" name="" id="1" class=""><label for="1" class="mb-1">الاكتئاب</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="radios" name="" id="1" class=""><label for="1" class="mb-1">الرهاب الإجتماعي</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="radios" name="" id="1" class=""><label for="1" class="mb-1">الصحة الجنسية</label>
                            </div>                        
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="radios" name="" id="1" class=""><label for="1" class="mb-1">الصحة النفسية</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="radios" name="" id="1" class=""><label for="1" class="mb-1">الصحة النفسية في العمل</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="radios" name="" id="1" class=""><label for="1" class="mb-1">الصحة النفسية للحامل</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="radios" name="" id="1" class=""><label for="1" class="mb-1">الصحة النفسية للطلاب</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="radios" name="" id="1" class=""><label for="1" class="mb-1">العلاج النفسي</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="radios" name="" id="1" class=""><label for="1" class="mb-1">العلاقات الزوجية</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="radios" name="" id="1" class=""><label for="1" class="mb-1">الفصام</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="radios" name="" id="1" class=""><label for="1" class="mb-1">القلق</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="radios" name="" id="1" class=""><label for="1" class="mb-1">المشاعر</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="radios" name="" id="1" class=""><label for="1" class="mb-1">الوسواس القهري</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="radios" name="" id="1" class=""><label for="1" class="mb-1">الوعي النفسي</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="radios" name="" id="1" class=""><label for="1" class="mb-1">تطوير الذات</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="radios" name="" id="1" class=""><label for="1" class="mb-1">ثنائي القطب</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="radios" name="" id="1" class=""><label for="1" class="mb-1">عام</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="radios" name="" id="1" class=""><label for="1" class="mb-1">جودة الحياة</label>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
   </div>
   <div class="add-btn position-fixed">
        <a href="add_new_blog.php" class="btn btn-primary rounded-circle d-flex justify-content-center align-items-center" style="width: 60px;height: 60px;"><i class="fa-solid fa-plus fs-4"></i></a>
   </div>
   <?php
        include("footer.php");
    ?>
</body>
</html>