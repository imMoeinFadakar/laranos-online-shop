<head>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
     <link href="{{ url("/bootstrap.rtl.css") }}" type="text/css" rel="stylesheet"  >
     <link href="{{ url("/style.css") }}" type="text/css" rel="stylesheet"  >


</head>


<div class="container-fluid text-orange">
    <div class="row">
        <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
            <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="يغلق"></button>
                </div>
                <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center  text-orange  gap-2 active" aria-current="page" href="/admin_all_products">
                                <svg class="bi"><use xlink:href="#house-fill"/></svg>
                          مدیریت محصولات
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex text-orange   align-items-center gap-2" href="{{ url("/showAllCategories") }}">
                                <svg class="bi"><use xlink:href="#file-earmark"/></svg>
                           مدیریت دسته بندی ها
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex text-orange   align-items-center gap-2" href="/admin/showCities">
                                <svg class="bi"><use xlink:href="#cart"/></svg>
                          مدیریت شهرها
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex text-orange   align-items-center gap-2" href="/checkComments">
                                <svg class="bi"><use xlink:href="#people"/></svg>
                               مدیریت نظر ها
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex text-orange   align-items-center gap-2" href="/checkImage">
                                <svg class="bi"><use xlink:href="#graph-up"/></svg>
                              مدیریت عکس ها
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex text-orange   align-items-center gap-2" href="/check_Information">
                                <svg class="bi"><use xlink:href="#puzzle"/></svg>
                                مدیریت اطلاعات
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex  text-orange   align-items-center gap-2" href="/ShowUser">
                                <svg class="bi"><use xlink:href="#puzzle"/></svg>
                                مدیریت کاربران
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
                        <span>سایر دسترسی ها</span>
                        <a class="link-secondary" href="#" aria-label="إضافة تقرير جديد">
                            <svg class="bi"><use xlink:href="#plus-circle"/></svg>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-auto">
                        <li class="nav-item">
                            <a class="nav-link text-orange   d-flex align-items-center gap-2" href="#">
                                <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
                                مشاهده خرید ها
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-orange   d-flex align-items-center gap-2" href="/showAllOrders">
                                <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
                              مشاهده سفارشات
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-orange   d-flex align-items-center gap-2" href="">
                                <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
                                مشاهده نظرات تایید شده
                            </a>
                        </li>

                    </ul>

                    <hr class="my-3">

                    <ul class="nav flex-column mb-auto">
                        <li class="nav-item">
                            <a class="nav-link text-orange   d-flex align-items-center gap-2" href=" {{ url("/addAdmin")  }} ">
                                <svg class="bi"><use xlink:href="#gear-wide-connected"/></svg>
                                تنظیمات مدیر
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-orange   d-flex align-items-center gap-2" href="{{ url("/LogoutAdmin") }}">
                                <svg class="bi"><use xlink:href="#door-closed"/></svg>
                                خروج
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
