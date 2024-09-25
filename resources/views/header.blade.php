

<head>
    <link href="{{ url("/all.css") }}" type="text/css" rel="stylesheet"  >
</head>

<div class="backgroundImage p-0 ">

    <div class="container-fluid backgroundColor  p-0">
        <div class="row   w-100">
            <div class="col-12  p-0 ">

                <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                    <div class="container-fluid d-flex justify-content-center">
                   
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse d-flex justify-content-center " id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-center align-items-center">
                                <li class="nav-item">
                                    <a class="nav-link active  orangeColorLink" aria-current="page" href="#">تخفیفات ویژه</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  orangeColorLink" href="#">  همکاری با ما</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  orangeColorLink" href="#"> درباره ما</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  orangeColorLink" href="#">پرفروش ترین ها</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  orangeColorLink" href="/see_all_products"> همه کالا ها</a>
                                </li>

                                <li class="nav-item">

                                </li>
                                <li class="nav-item">

                                </li>
                                <li class="nav-item">
                                </li>
                            </ul>
                            <ul class="navbar-nav">
                                @if (Auth::guest())  
     <li class="nav-item px-2"><a href="{{ url("/registerClient") }}" class="btn btn__signup">ثبت نام</a></li>
                                <li class="nav-item px-2"><a href="{{ url("/loginClient") }}" class="btn btn-light"> ورود</a></li>
                              @endif  
                                @auth
                                 <li class="nav-item px-2"><a href="{{  url("/Logout") }}" class="  "><i class=" fa fa-power-off text-light fs-2 orangeColorLink" style="font-size:40px !important ; " ></i> </a></li>
                                 <li class="nav-item px-2">  <a href="{{  url("/setting") }}" class=""> <i class=" fa fa-gear text-light fs-3 orangeColorLink" style="font-size:40px !important ; " ></i></a></li>
                                 <li class="nav-item px-2"><a href="{{  url("/seeUserBasket") }}" class=""><i class="fa  fa-shopping-basket text-light  orangeColorLink" style="font-size:40px !important ; " ></i> </a></li>
                                 <!-- Button trigger modal -->

 
  
                                @endauth
                           
                            </ul>

                        </div>
                    </div>
                </nav>
                <script src="{{ url('/all.js')}}"></script>
                <script src="{{ url('/app.js')}}"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
                
                
