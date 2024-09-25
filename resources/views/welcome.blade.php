<!DOCTYPE html >
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl" class="m-0 p-1">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>لارانوس | خانه</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
         <link href="{{ url("/bootstrap.rtl.css") }}" type="text/css" rel="stylesheet"  >
         <link href="{{ url("/style.css") }}" type="text/css" rel="stylesheet"  >


<style>

.bgc{
    background: rgba( 255, 255, 255, 0.15 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 6.5px );
-webkit-backdrop-filter: blur( 6.5px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
}
    
</style>

    </head>
    @if ( session("massage") )
    <div id="close" class=" w-100 position-absolute bgc z-2  " style="height:100vh" style="max-width: 25rem;top:30%; left:35%  " >
        <div id class="card text-bg-light mb-3  position-absolute  p-0   mx-auto  z-3"  style="max-width: 25rem;top:30%; left:35%  ">
        <div class="card-header   orangeBGC text-white ">پیام مدیریت</div>
        <div class="card-body">
          <p class="card-text">{{ session("massage") }}</p>
          <h5 class="card-title"><button class="btn  btn__signup "  id="closeHandler"  >تایید</button></h5>
        </div>
      </div>
    </div>
@endif
    <body class="  w-auto  p-2 pt-0" dir="rtl" lang="fa"  >




@include('header')

<div class="col-12  pt-5  searchBarWrapper  ">
    <div class="row pt-5">

    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-7 p-0 d-flex justify-content-between bg-white rounded-pill"><input type="text" class="search__input " placeholder="دنبال چی می گردی؟"><button class="btn__signup rounded-pill border-0  p-2 px-5 text-white fs-5"><p class=" d-inline " ><i class=" fa fa-search d-inline" ></i> </p> </button></div>
    </div>
    <div class="row pt-2 d-flex justify-content-center ">
        <div class="col-5 d-flex justify-content-center">

            @foreach($AllCategory as $items)  
            @if($loop->iteration <= 3)  
            <div class="col-4"><a href="/showcategory/{{ $items->id }}" class="px-3 py-1 border-1   d-flex justify-content-center align-content-center  rounded-pill   text-decoration-none  linkProductions fs-5 "> {{ $items->title }}   </a></div>

            @endif  
            @endforeach

        </div>
    </div>
</div>
</div>
</div>
</div>

</div>
<div class="container-fluid mt-5 mb-5 ">
    <div class="row">
        <h3 class=" text-center text-orange" >فروش ویژه </h3>
    </div>
    <div class="row">
        <div class="col-1 text-orange fs-1 d-flex justify-content-end align-items-center " >
            <i class=" fa  fa-angle-right rounded-2 p-2 cursor-pointer " style="border:1px solid rgb(235, 112, 12)" onclick="goBack()"> </i>
        </div>

     <div class="col-10    rounded-3 d-flex justify-content-around    align-items-center   flex-nowrap overflow-x-hidden"    id="scrollBox" >
             @forelse($getTops as $getTop)
        @foreach($getTop->images as $image )
    
  
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 p-2 " >
            <div class="card p-2" style="width: 18rem;">
                <img src="{{ url($image->url) }} " style="max-height: 13rem;min-height: 13rem " class="card-img-top rounded-4 h-50" alt=image">
                <div class="card-body text-center">
                    <h5 class="card-title " style="color: orangered"> {{ $getTop->name }}</h5>
                    <p class="card-title" style="min-height: 48px !important;" >{{ $getTop->description }} </p>
                    <div class="row" >
                        <div class="col-6" >   <h5 class="card-title d-flex justify-content-end  text-nowrap">  {{ $getTop->price }} ریال</h5>   </div>
                        <div class="col-6" >    @if( $getTop->price_off != 0)
                                <p class="card-title  d-flex justify-content-tart  text-decoration-line-through  text-secondary"> {{ $getTop->price_off }}  </p>
                                @endif 
                            </div>
                    </div>


                    <a href="/productPage/{{$getTop->id}}" class="btn btn-primary btn__signup border-0"> مشاهده محصول</a>
                </div>
            </div>
        </div>
            @endforeach
            @empty
            nothing
        @endforelse
   
     </div>

<div class="col-1 text-orange fs-1 d-flex justify-content-start align-items-center " >
    <i class=" fa  fa-angle-left rounded-2 p-2 cursor-pointer " style="border:1px solid rgb(235, 112, 12)" onclick="goNext()" > </i>
</div>

    </div>
</div>


<div class="container-fluid  mt-5 mb-5">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-4">

            <div class="container text-center">
                <div class="row row-cols-2">
                    <div class="col   border__left p-2 mb-2">

                        <h2 class='textOrange'>{{$countCategory}}+ </h2>
                        <h6>دسته بندی</h6>

                    </div>



                    <div class="col  border__left  p-2 mb-2">

                        <h2 class='textOrange'>{{$countProducts}}+ </h2>
                        <h6>محصول</h6>

                    </div>



                    <div class="col  border__left  p-2">

                        <h2 class='textOrange'>{{$countUser}}  </h2>
                        <h6>کاربر</h6>

                    </div>
                    <div class="col  border__left p-2 ">

                        <h2  class='textOrange'>{{ $countStar }} </h2>
                        <h6>امتیازات</h6>

                    </div>
                </div>
            </div>


        </div>
        <div class="col-6 d-xxl-flex  d-xl-flex d-lg-flex d-md-none d-sm-none  justify-content-center align-items-center ">
            <h2 class="text-nowrap textOrange  text-dark " >لذت خرید آسان و با صرفه با <b class="laranoseText"> <i class="" style="color: white">لارا</i> <i class="textNoos">نوس</i> </b></h2>
        </div>

    </div>
</div>

@yield('content')
<div class="container-fluid mt-5 p-2 mb-5" >
    <div class="row">

        @forelse($allProducts as $allProduct)
        @foreach($allProduct->images as $image)
        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 sm-col-4  m-auto p-3 d-flex justify-content-center ">
            <a href="/productPage/{{$allProduct->id}}" class="text-decoration-none text-dark" >
                <div class="circle ">
                    <div class="row d-flex justify-content-center align-items-center w-auto">
                        <img src="{{ url($image->url) }}"   class="w-50" alt="products">
                    </div>
                    <div class="row text-center w-auto">
                        <p class=" gray ">  {{ $allProduct->name }}</p>
                    </div>

                </div>
            </a>
        </div>

        @endforeach
        @empty
nothing founded
        @endforelse
        <div class="col-12 d-flex justify-content-center align-items-center text-orange  " dir="rtl" >
            {{  $allProducts->links() }}
        </div>

    </div>


    <div class="row">
    </div>
</div>


<div class="container-fluid backGroundSummer">
    <div class="row text-center w-50 m-auto bg-white mb-2">
        <h5 class="  p-2 fs-4">خرید تابستونه اینجا انجام بده</h5>
    </div>
    <div class="row d-flex justify-content-around align-items-center ">

        @forelse($clothes as $cloth)
        @foreach($cloth->images as $image)
        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 sm-col-5  summerBoxShop text-center   p-2" style="height: 20rem">
<a href="/productPage/{{ $cloth->id }}"  class="text-center text-decoration-none text-dark">

    <div class="row">
        <img src="{{ url($image->url) }}" class="w-75 h-75 m-auto h-50 rounded-pill" style="height: 8rem !important;" alt="">
    </div>

    <div class="row textWhiteHover" >
        <p class="textWhiteHover textBlack " >{{ $cloth->name }} </p>
        <p class="textWhiteHover textBlack "  class="  text-decoration-line-through ">{{ $cloth->price_off }}</p>
        <p class="textWhiteHover textBlack " >{{ $cloth->price }}</p>
    </div>

</a>


        </div>
            @endforeach
        @empty
            there is no product here
        @endforelse

    </div>
</div>


<div class="row    p-2" style="background-color: #f5f5f5">
    <div class="contaier-fluid mt-5 mb-5">

        <div class="row h-25">
         

            <div class="row d-flex justify-content-evenly">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 text-center">
                    <h5>دسته بندی</h5>
                    <div class="container text-center">

                        <div class="row row-cols-2">

                           @foreach($AllCategory as $AllCategor)

                            <div class="col-4 bordeInProducts p-2 hoverOrange text-whit">
                               <a href="/showcategory/{{ $AllCategor->id }}" target="_blank" class="link-dark text-decoration-none link-offset-1-hover">
                                   <div class="row text-center">
                                       <h6>{{ $AllCategor->title }}</h6>
                                   </div>
                               </a>
                            </div>

                            @endforeach




                        </div>
                    </div>
                </div>

      
                </div>





            </div>
        </div>
    </div>
</div>



<div class="container-fluid text-black">
    <div class="row ">
        <div class="col-12 images__middle__background">

            <div class="row text-center p-3 btn__signup">

                <h2>خریدی اسان مطمعن به صرفه و سریع</h2>
            </div>

            <div class="row d-flex justify-content-center align-items-center">

                <div class="col-12 d-flex justify-content-center  " style=" height:10rem !important;  ">
                    <div class="col-10 p-5">
                        <div class="row backGroundFaded p-2">
                            <div class="col-12 text-center double__cards p-2">
                                <div class="row FontYekan"><h2>ارسال در سریع ترین زمان  ممکن</h2></div>
                                <div class="row pt-4 FontYekan" ><p>  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam, sa
                                        piente suscipit dolorum inventore illum numquam consequatur eius delectus molestiae amet. V
                                        oluptate, modi beatae. Ipsum id nesciunt omnis obcaecati adipisci impedit, sint molestiae quo quae
                                        rat debitis itaque enim nam ex perferendis dolorum explicabo veritatis illum vitae! Quas blanditiis
                                        quisquam alias quaerat!   ارسال توسط لارانوس به صورت همان روز بوده با پست ویژه ارسال خواهد ش
                                        د در صورت در حرید های بالای 600 هزار تومان هزینه ارسال رایگان خواهد بود  . . . </p></div>


                                <div class="row d-flex justify-content-center pt-5">
                                    <div class="col-5 ">
                                        <button class="btn btn__signup">همشو بهم نشون بده</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container" style="">
            <div class="row " style="height: 20rem ">

                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6  text-center deatilesCardsOne">
                    <h3 class="footerTitleText d-flex justify-content-center "> همکاری با ما</h3>

                    <a href="" class = 'kinks__actions rounded-pill' >مشاهده همه</a>

                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 text-center deatilesCardsTwo">
                    <h3 class="footerTitleText d-flex justify-content-center ">  سفارش خرید</h3>

                    <a href="" class = 'kinks__actions rounded-pill' >مشاهده همه</a>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 text-center deatilesCardsThree">
                    <h3 class="footerTitleText d-flex justify-content-center "> پیگیری سفارشات</h3>

                    <a href="" class = 'kinks__actions rounded-pill' >مشاهده همه</a>
                </div>

            </div>
        </div>
    </div>



    @include('footer')



<script src="{{url("./bootstrap.bundle.js") }}"></script>
<script src="{{url("./app.js") }}"></script>
<script src="{{url("./scroll.js") }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    @yield('massage')


    </body>


</html>
