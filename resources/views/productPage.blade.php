<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">



        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
         <link href="{{ url("/style.css") }}" type="text/css" rel="stylesheet"  >
         <link href="{{ url("/all.css") }}" type="text/css" rel="stylesheet"  >
    <link href="{{ url("/bootstrap.rtl.css") }}" type="text/css" rel="stylesheet"  >
     <script src="{{ url("/bootstrap.bundle.js") }}" ></script>
    @foreach($specificProducts as $specificProduct)
        <title>    لارانوس     |        {{ $specificProduct->name }}  </title>
    @endforeach

</head>
<body>
    @if ( session("massage") )


{{-- 1 --}}
    <div id="close" class=" w-100 position-absolute bgc z-2  " style="height:100vh" style="max-width: 25rem;top:30%; left:35%  " >
{{-- 2 --}}
        <div  class="card text-bg-light mb-3  position-absolute  p-0   mx-auto  z-3"  style="max-width: 25rem;top:30%; left:35%  ">
{{-- 3 --}}
        <div class="card-header   orangeBGC text-white ">پیام مدیریت</div>
{{-- 3 --}}
        <div class="card-body">
          <p class="card-text">{{ session("massage") }}</p>
          <h5 class="card-title"><button class="btn  btn__signup "  id="closeHandler"  >تایید</button></h5>
        </div>

      </div>
    </div>


@endif
<div class="container-fluid mt-5">
    <div class="row ">
        <div class="  col-xxl-9  col-xl-9   col-lg-9 col-sm-12 col-md-12  ">
            
            <div class="row p-3" style=" ">
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        @foreach ($productImage as $items)
                        <img      src="{{ url($items->url)  }}"  onclick='changeImage( "{{ url( $items->url )  }}"  ) '     data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $items->id }}"  style="height: 50px; width: 70px ; "  class="   rounded-3  opacity-100 " aria-current="true" aria-label="Slide 1"></img>
                        @endforeach
                       
                    </div>



                    <div class="carousel-inner shadow  shadow-md fa-sort-shapes-down-alt colored rounded-4 ">
                        <div class="carousel-item active rounded-4 ">
                            <img src="{{ url($productImage->first()->url  )  }} " width="50" height="500"  class="d-block w-100 rounded-2  rounded-4 " alt="ssvsv" id="imageHolder">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
              


                    </div>
                    <button class="carousel-control-prev  p-2  d-none" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-danger  p-2 rounded-pill " aria-hidden="true"></span>
                        <span class="visually-hidden p-3">Previous</span>
                    </button>
                    <button class="carousel-control-next  d-none " type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>


            </div>

            <div class="contaner-fluid  col-xs-block d-sm-block d-md-block d-lg-none d-xl-none d-xxl-none ">
                <div class="list-group mt-5 pt-5 ">
                    <li  class="list-group-item   btn__signup text-center" aria-current="true">
                        ویژگی های محصول
                    </li>
                    <li href="#" class="list-group-item  " dir="rtl">
                        <div class="row FontYekan text-center">
                            <div class="col-12 ">
                                <h3 class="">ویژگی: رنگ</h3>
                            </div>
                            <div class="col-12 ">
                                <h3 class="">ویژگی: رنگ</h3>
                            </div>
                            <div class="col-12 ">
                                <h3 class="">ویژگی: رنگ</h3>
                            </div>
                            <div class="col-12 ">
                                <h3 class="">ویژگی: رنگ</h3>
                            </div>

                            <div class="col-12">
                                <h3 class=""><button class="btn btn-light  FontYekan"> <i class="fa-thin fa-basket-shopping"></i>
                                        افزودن به سبد خرید</button></h3>
                            </div>
                            <div class="col-12">
                                <h3 class=""><button class="btn btn__signup FontYekan">افزودن به سبد خرید</button></h3>
                            </div>
                        </div>
                    </li>
                </div>
            </div>


            <div class="container-fluid">
              
                <div class="row ">


                    <div class="container-fluid mt-5">
                 
                        <div class="row">
                            <div class="col-12 text-center" id="stars">
                                <div class="row">
                            
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-5">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-12 ">
                                                <div class="row">
                                                   
                                                     

                <!-- Notice that the stars are in reverse order -->

                <div class="feedback-form  w-100  d-flex justify-content-center align-items-center " >
                    <form id="feedbackForm" class=" d-flex justify-content-center align-content-center w-100" >
                        <div class="rating m-0 mb-4  ">
                            <!-- Notice that the stars are in reverse order -->
                            
                            <input  class=" w-100"  type="radio" id="star5"  name="rating" value="5">
                            <label  class=" w-100 h-50"  for="star5"  class="stars" onclick="stared(5)"  ><i class=" fa fa-star" ></i></label>
                            <input  class=" w-100"  type="radio" id="star4" name="rating" value="4">
                            <label  class=" w-100"  class="stars" for="star4"  onclick="stared(4)"  ><i class=" fa fa-star" ></i></label>
                            <input  class=" w-100"  type="radio" id="star3" name="rating" value="3">
                            <label  class=" w-100"  class="stars" for="star3"  onclick="stared(3)"  ><i class=" fa fa-star" ></i></label>
                            <input  class=" w-100"  type="radio" id="star2" name="rating" value="2">
                            <label  class=" w-100"  class="stars" for="star2"  onclick="stared(2)"  ><i class=" fa fa-star" ></i></label>
                            <input  class=" w-100"  type="radio" id="star1" name="rating" value="1">
                            <label  class=" w-100" class="stars"  for="star1"  onclick="stared(1)"  ><i class=" fa fa-star" ></i></label>
                            

                        </div>
              
                    </form>
          
                </div>
          
                <input id="id"  type="hidden" class="   " value="{{ $id }}" >
                <input id="idUser" type="hidden"  class="   " value="{{  $idUser}}" >

    
                          
                                     
                                                </div>
                                          
                                              <div class="row">
                                                <div class="col-2"><p class="pt-1  m-0 FontYekan " dir="rtl" > {{ $fiveStars}} نفر</p></div>
                                                 <div class="col-8 p-0">      <div class="row text-center pt-2  d-flex justify-content-center fs-4 p-0 ">
                                                    <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="{{ $fiveStars}}" aria-valuemin="0" aria-valuemax="{{ $allStarsForThisCount }} ">
                                                        <div class="progress-bar bg-success" style="width: {{ $fiveStars}}%  "></div>
                                                    </div>      </div>
                                               
                                                </div> 
                                                <div class="col-2"><p class="fs-6  m-0 FontYekan " dir="rtl" >(5)</p></div>

</div>

                                   
                                     
                                            <div class="row">
                                                <div class="col-2"><p class="pt-1  m-0 FontYekan " dir="rtl">  {{ $fourStars}} نفر</p></div>
                                                <div class="col-8 p-0 ">
                                                <div class="row text-center pt-2  d-flex justify-content-center fs-4 p-0  ">
                                                    <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="{{ $allStarsForThisCount  % 100 }} ">
                                                        <div class="progress-bar bg-info" style="width: {{ $fourStars }}%"></div>
                                                    </div>
                                                </div></div>
                                                <div class="col-2"><p class="fs-6  m-0 FontYekan " dir="rtl" >(4)</p></div>
                                                     </div>



                                                    <div class="row">
                                                        <div class="col-2"><p class="pt-1  m-0 FontYekan " dir="rtl" >  {{ $threeStars}} نفر</p></div>
                                                        <div class="col-8 p-0">     <div class="row  text-center pt-2  d-flex justify-content-center fs-4 p-0  ">
                                                    <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="{{ $allStarsForThisCount  % 100 }} ">
                                                        <div class="progress-bar bg-warning" style="width: {{ $threeStars }}%"></div>
                                                    </div>
                                                </div></div>
                                                <div class="col-2"><p class="fs-6  m-0 FontYekan " dir="rtl" >(3)</p></div>
                                                    </div>
                                           
                                                    
                                                    <div class="row">
                                                        <div class="col-2"><p class="pt-1  m-0 FontYekan " dir="rtl" >  {{ $towStars}} نفر</p></div>
                                                        <div class="col-8 p-0">    <div class="row  text-center pt-2  d-flex justify-content-center fs-4 p-0  ">
                                                            <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="{{ $allStarsForThisCount  % 100 }} ">
                                                                <div class="progress-bar bg-danger" style="width: {{ $towStars }}%"></div>
                                                            </div>
                                                        </div></div>
                                                        <div class="col-2"><p class="fs-6  m-0 FontYekan " dir="rtl" >(2)</p></div>
                                                    </div>

                                            


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row text-center orangeBGC mt-5 mb p-3 rounded-3">
                            <h2 class="FontYekan text-white">نظر ها در مورد محصول</h2>
                        </div>
          @foreach ($productsComment as $productsComment)
                        <div class="row m-auto  mb-0">
                            <div class="card m-auto w-100 ">
                                <div class="card-body text-center">
                                           <div class="row mt-1 mb-2 FontYekan">
                                            <p class="card-text fs-5  FontYekan mb-3  "   dir="rtl" > نام:  {{  $productsComment->text  }}   </p>
                             </div>
                            
                                    @if (!$productsComment->url )
                                   
                                    @else
                                     <img src="{{ url($productsComment->url ) }}" alt="" class=" w-25 h-25 rounded-3 ">
                                    @endif    
                                  <hr>
                                    <div class="row mt-2">
                                           <div class="col-6">
                                       <h4  class=" text-center  text-danger  FontYekan " >نقاط ضعف</h4>
                                       <hr>
                                 <p class=" FontYekan">  {{ $productsComment->weakness_point  }}</p> 
                                    
                                    </div>
                                    <div class="col-6">
                                        <h4  class=" text-center  text-success  FontYekan " >نقاط قوت</h4>
                                        <hr>
                                        <p class=" FontYekan"> {{ $productsComment->strength  }}</p>    
                                    
                                    </div>   
                                    </div>
                              
                                
                           
        
                                </div>
                                
                            </div>
                        </div>

                        @endforeach  
                        <div class=" alert alert-light" >
                            <div class="row ">
   <button type="button" class="btn  m-auto   btn__signup FontYekan  w-75    " data-bs-toggle="modal" data-bs-target="#exampleModal">
                            ثبت نظر در مورد این محصول
                            </button>
</div>
                        </div>

                     

                    <div class="row">
                      
                        <div class="col-12  d-flex justify-content-center align-content-center">
                       <!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade  " id="exampleModal" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  "  >
     <div class="modal-content  text-right   position-relative " style="width: 50rem !important;right:30%" >
        <div class="modal-header  orangeBGC text-white ">
          <h2 class="modal-title fs-5 text-center  m-auto  FontYekan " id="exampleModalLabel">ثبت نظرات شما</h2>
         
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-6">
                <h4  class=" text-center" >قوانین نظرات</h4>
                  <ol class="  FontYekan" dir="rtl" >
                    <li class=" mt-3" >توهین و فحاشی ممنوع</li>
                    <li>سیاسی ممنوع </li>
                    <li>ارسال عکس واجب نیست</li>
                    <li>   نظرات پس از تایید توسط ادمین منتشر خواهند شد</li>
                  </ol>
            </div>
            <div class="col-6">

                <form action="{{ url("/sendComments")}}" method="post">
                <div class="form-floating mb-3">
                    <input type="hidden" name="product_id"  value="{{ $id  }}" >
                    <input type="hidden" name="user_id"  value="{{   $idUser }}" >
                    <input type="hidden" name="_token" value=" {{ csrf_token() }} ">
                    <input type="text" name="weakness" class="form-control   fontYekan" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput   "   class=" FontYekan text-orange"   >نقاط ضعف</label>
                  </div><div class="form-floating mb-3">
                    <input type="text" class="form-control   fontYekan" name="power"  id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput   " class=" FontYekan text-orange"   > نقاط قوت </label>
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-btn">
                      <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn__signup FontYekan">
                        اضافه کردن فایل
                      </a>
                    </span>
                    <input id="thumbnail" class="form-control" type="text" name="images">
                  </div>
                  <div id="holder" style="margin-top:15px;max-height:100px;"></div>
            </div>
        
                  <div class="form-floating mb-3">
                    <textarea class="form-control  FontYekan " name="text"  placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2" class=" FontYekan text-orange" >نظرتو اینجا بنویس</label>
                  </div>   
                  <div class="row w-100  d-flex justify-content-center align-items-center ">
                    <div class="col-6 p-2   d-flex justify-content-center ">                  <button type="submit" class="btn  w-100 FontYekan  btn__signup ">ثبت نظر </button>
                    </div>
                    <div class="col-6  p-2  d-flex justify-content-center  gap-3 "><button type="button" class="btn btn-secondary w-100   FontYekan "   data-bs-dismiss="modal">بستن</button>  
                    </div>
                  </div>
                </form>


            </div>
          </div>
        </div>
        <div class="modal-footer">
       
        </div>
      </div>
    </div>
  </div>
                        </div>
                   
        
                    </div>
                    </div>
       
                    <div class="row">


                        @forelse($allSimilarCategories as $allSimilarCategorie)
                        @foreach($allSimilarCategorie->images as $image)

                        @if($loop->iteration <= 2)  


                        <div class="col-xxl-4 col-xl-4 col-md-6 col-sm-12 d-flex justify-content-center text-center mb-3 mt-3">

                            <div class="card" style="width: 18rem;">
                                <img src="{{ url($image->url) }}"  height="200" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-title mb-2 FontYekan text-orange">{{ $allSimilarCategorie->name  }} </h3>
                                    <p class="card-text FontYekan " style="min-height: 48px !important;" > {{ $allSimilarCategorie->description }} </p>
                                    <div class="row">
         
                                          @if($allSimilarCategorie->price_off != 0)
                                          <div class="col-6">
                                    <h6 class="card-title text-decoration-line-through text-secondary  FontYekan ">{{ $allSimilarCategorie->price_off }} </h6>
                                     </div>
                                    @else

                                    @endif   
                                   
                                     <div class="col-6 m-auto">
                                            <h5 class="card-title  text-nowrap FontYekan" dir="rtl">{{ $allSimilarCategorie->price }} تومان</h5>
                                     </div>
                                    </div>
                           
                                
                                    <a href="/productPage/{{$allSimilarCategorie->id}}" class="btn  btn__signup  FontYekan">مشاهده محصول</a>
                                </div>
                            </div>

                        </div>





                    @endif 
            

                                @endforeach
                               @empty
                            @endforelse

                    </div>

                </div>
            </div>

            <div class="w-75">

     <div class="container-fluid  ">
                <div class="row  ">

                    <div class="row text-center orangeBGC mt-3 mb-3 p-3 rounded-3 ">
                        <h2 class="FontYekan text-white">ممکن است خوشتان بیاید</h2>
                    </div>

                    @forelse($maybeYouLikeThis as $maybeYouLikeThi)
                    @foreach($maybeYouLikeThi->images as $images)
                    <div class=" col-xxl-4 col-xl-4 col-md-6 col-sm-12 d-flex text-center  justify-content-center">

                        <div class="card FontYekan" style="width: 18rem;">
                            <img src="{{ url($images->url) }}"   height="200" class="card-img-top" alt="...">
                            <div class="card-body">

                                <h3 class="card-title mb-2 FontYekan text-orange">{{ $maybeYouLikeThi->name  }} </h3>
                                <p class="card-text FontYekan " style="min-height: 48px !important;" > {{ $allSimilarCategorie->description }} </p>
                                <div class="row">
     
                                      @if($maybeYouLikeThi->price_off != 0)
                                      <div class="col-6">
                                <h6 class="card-title text-decoration-line-through text-secondary  FontYekan ">{{ $maybeYouLikeThi->price_off }} </h6>
                                 </div>
                                @else

                                @endif   
                               
                                 <div class="col-6 m-auto">
                                        <h5 class="card-title  text-nowrap FontYekan" dir="rtl">{{ $maybeYouLikeThi->price }} تومان</h5>
                                 </div>
                                </div>

                                <a href="#" class="btn btn__signup">مشاهده محصول</a>
                            </div>
                        </div>

                    </div>
                        @endforeach
                    @empty

                    @endforelse
                </div>
            </div>

            </div>
       


            {{-- end of col-9 --}}
        </div>
        <div class="col-3">

            <div class="list-group mt-2 pt-5  position-fixed top-0 d-xxl-block d-xl-block d-lg-block d-md-none d-sm-none   " style="width:25%; left:74%">

                @foreach($specificProducts as $specificProduct)

                    <li  class="list-group-item   btn__signup text-center" aria-current="true">
                          {{ $specificProduct->name  }}
                    </li>
                    @endforeach
                    <li href="#" class="list-group-item  " dir="rtl">
                    <div class="row FontYekan text-center">
                          
                   
                        @foreach($specificProducts as $specificProduct)
                        <div class="col-12 ">
                            <h5 class="">{{ $specificProduct->description }} </h5>
                        </div>

<div class="row d-flex justify-content-center">

    <div class="col-8" onload="onLoad()">
        <input type="radio" id="rating" name="" value="5" class=" d-none"  >
        <label for="star55">&#9733;</label>
        <input type="radio" id="rating" name="" value="4" class=" d-none"  >
        <label for="star44">&#9733;</label>
        <input type="radio" id="rating" name="" value="3" class=" d-none"  >
        <label for="star33">&#9733;</label>
        <input type="radio" id="rating" name="" value="2" class=" d-none"  >
        <label for="star22">&#9733;</label>
        <input type="radio" id="rating" name="" value="1" class=" d-none"  >
        <label for="star11">&#9733;</label>
    </div>
    <div class="col-4">
        <p class="m-0  text-nowrap" >
        از
       {{  $allStarsForThisCount }}
       ستاره
       </p>
    </div>
    
</div>


                        <div class="col-12 ">
                            @if($specificProduct->price_off != 0)
                            <p class="text-decoration-line-through text-secondary m-0 mt-2">{{$specificProduct->price_off}} تومان</p>
                            @else

                            @endif
                        </div>
                            <div class="col-12 ">
                                <h5 class="">{{ $specificProduct->price }} تومان</h5>
                            </div>
                        @endforeach

                         {{-- if this product is no exist in basket --}}

                            @if ($hasExist->count() == 0  )
                <div id="shoppingBasket">
                       <div class="col-12  mt-2 mb-2">
                                <div class="col-6 m-auto">
                                  <div class="row">
                                    <input type="hidden" value="{{$specificProduct->count}}" id="maxNumber" >
                                       <div class="col-4   p-0 m-0 "><button class=" btn btn__signup" onclick='add_products()' ><i class=" fa fa-plus" ></i></button></div>    
                                         <div class="col-4 p-0 m-0"><input type="text"  value="1"   class="w-100 h-100 rounded-2     text-center "  name="" id="productCounter" readonly  style="width: 50px; border:rgb(253, 68, 0) 1px solid "  ></div>
                                    <div class="col-4 p-0 m-0"><button class=" btn btn__signup" onclick="min_products()" ><i class=" fa   fa-minus" ></i></button></div>     
                                  </div>
                                </div>
                        </div>
                        <div class="col-12">
                            <h3 class=""><button class="btn btn-light  FontYekan "> <i class="fa-thin fa-basket-shopping"></i>
                                    بعدا می خرم  </button></h3>
                        </div>
                        <div class="col-12">
                            <h3 class=""><button class="btn btn__signup FontYekan  "  style="font-size:15px"    onclick=  'AddToCart({{  $specificProduct->id }} , "{{  csrf_token() }}"  ) '  >افزودن به سبد خرید</button></h3>
                        </div>
                </div>     
                
                <div class="row" id="afterShop" style="display: none">
                    <div class="col-12">
                                           <h3 class="  bg-white rounded-3  text-orange FontYekan " style="border:rgb(253, 68, 0) 1px solid "   >موجود در سبد کالا</h3>
                                       </div>
               
                                       <div class="col-12">
                                           <h3 class=""><a class="btn btn__signup FontYekan" href="{{ url("/seeUserBasket") }}" > مشاهده سبد خرید</a></h3>
                                       </div>
               
               </div>


                             @else
                             
<div class="row" >
     <div class="col-12">
                            <h3 class="  bg-white rounded-3  text-orange FontYekan " style="border:rgb(253, 68, 0) 1px solid "   >موجود در سبد کالا</h3>
                        </div>

                        <div class="col-12">
                            <h3 class=""><a class="btn btn__signup FontYekan" href="{{ url("/seeUserBasket") }}" > مشاهده سبد خرید</a></h3>
                        </div>

</div>
  


                            @endif

                     


                     {{-- else if it dosent exist --}}

                 


                    </div>
                </li>
            </div>
        </div>
    </div>
</div>

                     

<script>

var id = document.getElementById("id").value
var idUser = document.getElementById("idUser").value
console.log(id);

    function stared(x) {


console.log(id);
console.log(idUser);
console.log(x);

  let myJson = {
    product_id:  id  ,
    user_id : idUser ,
    score: x ,
  };

  fetch('/sendRating', {
    method: "POST",
    body: JSON.stringify(myJson), 
    headers: {
      "Content-Type": "application/json",
      "Accept": "application/json",
      "X-Requested-With": "XMLHttpRequest",
      "X-CSRF-Token": '{{ csrf_token() }}'
    },
  }).then(result => result.text()).then(result => {


          
    let div1 = document.createElement('div');

div1.classList.add("z-2")
div1.setAttribute(  "id", "close" )
div1.style.top = "0%"

div1.style.width = "100%"
div1.style.height = "100vh"
div1.style.zIndex = "2"
div1.style.position = "fixed"
div1.style.borderRadius = "10px"
div1.style.backdropFilter = "blur( 6.5px ) "
div1.style.boxShadow = "0 8px 32px 0 rgba( 31, 38, 135, 0.37 )"
div1.style.backgroundColor = "rgba( 255, 255, 255, 0.15 )"

let div2 = document.createElement('div');
div2.classList.add("card")
div2.classList.add("text-bg-light")
div2.classList.add("mb-3")
div2.classList.add("p-0")
div2.classList.add("mx-auto")
div2.classList.add("z-3")
div2.style.maxWidth = "25rem"
div2.style.top = "40%"
div2.style.left = "0%"

let div3 = document.createElement('div');
div3.classList.add("card-header")
div3.classList.add("orangeBGC")
div3.classList.add("text-white")
div3.innerHTML = "پیام مدیریت"

let div4 = document.createElement('div');
div4.classList.add("card-body")

let p = document.createElement('p');
p.classList.add("card-text")
p.style.fontFamily = "Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif"
p.innerHTML = result

let p2 = document.createElement('p');
p2.classList.add("card-text")
p2.style.fontFamily = "Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif"



let h5 = document.createElement('h5');
h5.classList.add("card-title")

let btn =  document.createElement("button")
btn.classList.add("btn")
btn.classList.add("btn__signup")
btn.innerHTML = "باشه"


document.body.appendChild(div1)
div1.appendChild(div2)
div2.appendChild(div3)
div2.appendChild(div4)
div4.appendChild(p)
div4.appendChild(btn)
div4.appendChild(h5)

btn.addEventListener('click' , function(){

    div1.style.display = "none"

})

setInterval(() => {
    
   
p2.innerHTML = num

}, 1000);



setTimeout( function(){

div1.style.display = "none"
  
}  , 5000)


  })
}

let closeHandlers = document.getElementById("closeHandlers")

if (closeHandlers){

let boxs = document.getElementById("close")

closeHandlers.addEventListener(  'click'  ,  async  function(){

    boxs.style.display = "none"

} )

}


event.preventDefault();

    // Here you can handle the submission, for now just logging the values
    console.log("Rating: ", x);




</script>

<br>
<br>
@include('footer')
<script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $('#lfm').filemanager('image');
</script>

<script src="{{ url('/all.js')}}"></script>
<script src="{{ url('/app.js')}}"></script>
<script src="{{ url('/counter.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>
