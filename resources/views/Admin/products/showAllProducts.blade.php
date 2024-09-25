<head>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{ url("/bootstrap.rtl.css") }}" type="text/css" rel="stylesheet"  >
    <link href="{{ url("/style.css") }}" type="text/css" rel="stylesheet"  >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</head>
<body dir="rtl" >

@if(session("massage"))

    <div class="alert alert-warning alert-dismissible text-center fade show" role="alert">
        <strong class="m-auto" >{{ session("massage") }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@endif

<div class="container-fluid" >
    <div class="row orangeBGC d-flex justify-content-center align-items-center mb-2" >
        <h3 class="text-center mb-2 mt-2 text-white" > مشاهده و تغییر  محصولات </h3>
    </div>
    <div class="row d-flex justify-content-center" >

        @foreach($all_products as $all_product )

            <div action="/ChangeCategory" method="GET" class="row d-flex justify-content-center " >
                <div class="col-8 text-center" >
                    <div class="alert alert-light" role="alert">
                      <div class="row" dir="rtl">
                        <div class="col-1">شماره:{{ $all_product->id }}</div>
                        <div class="col-3 text-nowrap overflow-hidden">نام محصول:{{ $all_product->name   }}</div>
                        <div class="col-2">تعداد:{{ $all_product->count }}</div>
                        <div class="col-2"> تخفیف:
                        
                        @if ($all_product->price_off  != 0)
                            <p  class="text-success  d-inline" >{{ $all_product->price_off }}</p>
                        @else
                        <p class="text-danger  d-inline " >{{ $all_product->price_off }} </p>
                        @endif
                        
                        
                        </div>
                        <div class="col-2"> قیمت:{{ $all_product->price }}</div>
                        <div class="col-2"> ویژه:
                          
                        @if ($all_product->has_star != 0)
                          <p class=" text-success d-inline" >بله</p>  
                        @else
                        <p class="text-danger d-inline"" >نیست</p>
                        @endif
                   
                        
                    </div>

                      </div>
                    </div>
                </div>
                <div class="col-4 d-flex justify-content-center align-items-center " >
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal{{$all_product->id}}">
                        تغییر
                    </button>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger mx-3" data-bs-toggle="modal" data-bs-target="#exampleModal{{$all_product->id}}{{$all_product->id}}">
                        حذف
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{$all_product->id}}{{$all_product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content  text-white ">
                                <div class="modal-header orangeBGC">
                                    <h1 class="modal-title fs-5 m-auto" id="exampleModalLabel"> حذف کردن  محصول : {{ $all_product->name }} </h1>
                                </div>
                                <div class="modal-body">
                                    <div class="alert alert-light text-center" role="alert">
                                        <h4 class="text-center" >       پاک کردن   :
                                            {{ $all_product->name }}</h4>

                                        <br>
                                        یا از پاک کردن این  محصول مطمعن هستید؟
                                    </div>
                                </div>
                                <div class="modal-footer d-flex  justify-content-center align-items-center ">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">نه پاک نکن</button>
                                    <a type="button" href="{{ url("/deleteProduct/$all_product->id") }}" class="btn btn-danger">اره میخوام پاک بشه</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$all_product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content  text-white ">
                            <div class="modal-header orangeBGC text-center">
                                <h1 class="modal-title fs-5 m-auto" id="exampleModalLabel"> دسته بندی: {{ $all_product->title }} </h1>
                            </div>
                            <div class="modal-body">

                                <form action="{{ url("/edit_Product") }}" method="POST" class="row d-flex justify-content-center " >
                                    <input type="hidden" name="_token" value="{{csrf_token()}}" class="form-control" >
                                    <input type="hidden"  name="ID" value="{{ $all_product->id }}" class="form-control text-center" >
                                    <div class="form-floating mb-3">
                                        <input type="text"  value="{{ $all_product->name }}" name="name" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput"> نام  محصول را تغییر دهید </label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text"  value="{{ $all_product->price  }}" name="price" class="form-control  text-orange " id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput"> قیمت  محصول را تغییر دهید </label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text"  value="{{ $all_product->price_off }}" name="price_off" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput"> تخفیف  محصول را تغییر دهید </label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text"  value="{{ $all_product->count }}" name="count" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput"> تعداد  محصول را تغییر دهید </label>
                                    </div>
                              
                                    <div class="form-floating mb-3">
                                        <input type="text"  value="{{ $all_product->description }}" name="description" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput"> توضیحات  محصول را تغییر دهید </label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" aria-label="Default select example" name="catgory_id" >
                                            @foreach ( $all_cats as $all_cat )
                                            <option value="{{ $all_cat->id }}">{{ $all_cat->title  }}</option>
                                @endforeach
                                          </select>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" aria-label="Default select example" name="has_star">
                                            <option value="0">فروش ویژه؟ خیر  </option>
                                            <option value="1">فروش ویژه ؟ بله</option>
                                          </select>
                                    </div>
                               
                            </div>
                            <div class="modal-footer d-flex justify-content-center align-items-center ">
                                <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">بستن</button>
                                <button type="submit"   class="btn btn-success " > تغییر دادن </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach

    </div>

    <h3 class="text-center mb-5 orangeBGC mb-2 mt-2 text-white py-2 " > افزودن  محصول </h3>


        <form method="post" action="{{ url('/addNewProducts') }}" class="d-flex justify-content-center" >

       

    <div class="row d-flex justify-content-center" >
      




            <div class="col-10 d-flex justify-content-center align-items-center" >
                <div class="row">
        
                    <input type="hidden" value="{{ csrf_token() }}" name="_token"  class="form-control" id="floatingInput" placeholder="name@example.com">


                    <div class="col-4  text-center">
                        <p>دسته بندی محصول را انتخاب کنید</p>
                                    <select class="form-select  m-auto mb-4" aria-label="Default select example" name="catgory_id" >
                            @foreach ( $all_cats as $all_cat )
                                        <option value="{{ $all_cat->id }}">{{ $all_cat->title  }}</option>
                            @endforeach
                          </select>
                    
                    </div>
                    <div class="col-4 text-center">
                                <p>محصول فروش ویژه دارد؟</p>
                        <select class="form-select  m-auto mb-4"  name="has_star" aria-label="Default select example" name="has_star">
                            <option value="0">خیر</option>
                            <option value="1">بله</option>
                          </select>
                    
                    </div>
                    <div class="col-4 text-center">
                                <p>   تعداد محصول فعال برای فروش</p>
                                <div class="form-floating mb-3">
                                    <input type="number" name="count" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">   تعداد </label>
                                </div>
                    
                    </div>


            


<div class="col-6  mt-3 ">  
       <p> نام محصول</p>
    
    <div class="form-floating mb-3">
 
    <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name@example.com">
    <label for="floatingInput"> نام  محصول </label>
</div></div>
<div class="col-6  mt-3 ">
        <p>با تخفیف  </p>
    <div class="form-floating mb-3">
        <input type="text" name="price" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">   قیمت </label>
    </div>

</div>
<div class="col-6 mt-3 "">
  <p> قیمت بدون تخفیف</p>
    <div class="form-floating mb-3">
        <input type="text" name="price_off" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">   تخفیف </label>
    </div>

</div>
<div class="col-6 mt-3 "">
    <p> قیمت بدون تخفیف</p>
    <div class="form-floating mb-3">
        <input type="text" name="description" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">   توضیحات </label>
    </div>

</div>


              
           

                </div>
             
            </div>
            <div class="col-2 d-flex justify-content-center align-items-center">
                <button class="btn-success btn" type="submit"> ثبت و تایید </button>
            </div>
        </form>
    </div>


</div>



<script src="{{url("./bootstrap.bundle.js") }}"></script>
</body>

