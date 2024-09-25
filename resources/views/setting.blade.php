<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
     <link href="{{ url("/bootstrap.rtl.css") }}" type="text/css" rel="stylesheet"  >
     <link href="{{ url("/style.css") }}" type="text/css" rel="stylesheet"  >



    @foreach ( $allUsersInformation as $User )
         <title dir="rtl">لارانوس  | تنظیمات </title>
    @endforeach
   
</head>
<body>
  @if ( session("massage") )



  <div id="close" class=" w-100 position-absolute bgc z-3  " style="height:100vh" style="max-width: 25rem;top:30%; left:35%  " >
      <div id class="card text-bg-light mb-3  position-absolute  p-0   mx-auto  z-3"  style="max-width: 25rem;top:30%; left:35%  ">
      <div class="card-header   orangeBGC text-white ">پیام مدیریت</div>
      <div class="card-body">
        <p class="card-text">{{ session("massage") }}</p>
        <h5 class="card-title"><button class="btn  btn__signup "  id="closeHandler"  >تایید</button></h5>
      </div>
    </div>
  </div>


@endif
@foreach ( $allUsersInformation as $Users )
       <div class="container-fluid">
        <div class="row text-center  text-orange">
            <h4>مشخصات شما</h4>
            <h6>با کلیک روی هرکدام می توانید ان  ها را بازنویسی کنید</h6>
        </div>
        <form action="{{ url("/editUserInformation") }}" method="post">
        
                <div class="row mt-4">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                  <input type="hidden" name="id"  value="{{  Auth::id()  }}"  >
            <div class="col-6 text-center"><div class="form-floating mb-3 w-50 m-auto">
                <input type="text" class="form-control" name="username" value="{{ $Users->username}}" id="floatingInput1" placeholder="name@example.com">
                <label for="floatingInput">نام کاربری </label>
              </div></div>
            <div class="col-6 text-center"><div class="form-floating mb-3 w-50 m-auto">
                <input type="text" name="name" class="form-control" value="{{ $Users->name}}" id="floatingInput2" placeholder="name@example.com">
                <label for="floatingInput">نام </label>
              </div> </div>
        </div>
        <div class="row mt-4">
            <div class="col-6 text-center"><div class="form-floating mb-3 w-50 m-auto">
                <input type="email" name="email" class="form-control" value="{{ $Users->email}}" id="floatingInput3" placeholder="name@example.com">
                <label for="floatingInput">رایانامه </label>
              </div>  </div>
            <div class="col-6 text-center"> <div class="form-floating mb-3 w-50 m-auto">
                <input type="text" class="form-control" name="address"  value="{{ $Users->address}}" id="floatingInput4" placeholder="name@example.com">
                <label for="floatingInput">  نشانی منزل </label>
              </div>  </div>
        </div>
        <div class="row mt-4">
            <div class="col-6 text-center"><div class="form-floating mb-3 w-50 m-auto">
                <input type="text" name="mobail_number" class="form-control" value="{{ $Users->mobail_number}}" id="floatingInput3" placeholder="name@example.com">
                <label for="floatingInput">شماره همراه  </label>
              </div>  </div>

              <div class="col-6 text-center"><div class="form-floating mb-3 w-50 m-auto">
            
                <select class="form-select" aria-label="Default select example" name="city">
  
                  @foreach ($allCities as $city )
                          <option value="{{ $city->id }}">{{ $city->text }}</option>
                  @endforeach
            
       
  
                </select>
              </div></div>

        </div>
        <div class="row">
            <h4 class="text-center  text-orange" >در صورت تمایل گذرواژه جدید خود را وارد کنید</h4>
        </div>
        <div class="row mt-4">
            <div class="col-6 text-center"><div class="form-floating mb-3 w-50 m-auto">
                <input type="password" name="password" class="form-control"  id="floatingInput3" placeholder="name@example.com">
                <label for="floatingInput"> تکرار گذرواژه  </label>
              </div>  </div>
            <div class="col-6 text-center"> <div class="form-floating mb-3 w-50 m-auto">
                <input type="password" name="re-enter-password"  class="form-control"  id="floatingInput4" placeholder="name@example.com">
                <label for="floatingInput"> گذرواژه </label>
              </div>  </div>
        </div>
        <div class="row mt-4 mb-4">


            <div class="col-12 text-center mb-5"><button class="btn btn-light " type="submit" id="changInfor" > ارسال و تغییر اطلاعات </button></div>
        
        <hr>
        
        </form>

    </div>
@endforeach





    <div class="container-fluid mt-5 mb-5" dir="rtl">
                    <div class="row text-center  text-orange">
                        <h4>محصولات خریداری شده</h4>
                    </div>
          
                @if ($allProductSolidToUser->count() == 0 )
                     <div dir="rtl" class="">
                <p class=" text-center FontYekan mt-4"  dir="rtl" >هنوز خریدی ثبت نشده                   <a href="{{ url("/seeUserBasket") }}" class="  FontYekan btn__signup" > تکمیل فرایند خرید</a>  </p>

                     </div>
                     
                  @else

              
                    <div class="row">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">نام</th>
                                <th scope="col">قیمت</th>
                                <th scope="col">زمان</th>
                              </tr>
                            </thead>
                            <tbody>
      @foreach ($allProductSolidToUser as $allProductSolidToUser )


                             <tr>
                        <a href="{{ url("/productPage/".$allProductSolidToUser->product->id ) }}">
                                    <th scope="row">{{ $allProductSolidToUser->id  }}</th>
                <td>{{ $allProductSolidToUser->product->name  }}</td>
                <td>{{ $allProductSolidToUser->product->price  }}</td>
                <td>{{ $allProductSolidToUser->created_at }}</td>
              </tr>
                        </a>

                    @endforeach       
                @endif  
            </tbody>
          </table>
    </div>
</div>
<hr>

    <div class="container-fluid mt-5  mb-5" dir="rtl">
                    <div class="row text-center  text-orange">
                        <h4>محصولات  منتظر تکمیل فاکتور</h4>
                    </div>
          
                @if ($UsersOrders->count() == 0 )
                     <div dir="rtl" class="">
                <p class=" text-center FontYekan mt-4"  dir="rtl" >توی سبدت کالایی نداری !!!!<a href="{{ url("/see_all_products") }}" class="  FontYekan btn__signup" >شروع خرید</a>  </p>

                     </div>
                     
                  @else

              
                    <div class="row">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">نام</th>
                                <th scope="col">قیمت</th>
                                <th scope="col">زمان</th>
                                <th scope="col">تعداد</th>
                              </tr>
                            </thead>
                            <tbody>
      @foreach ($UsersOrders as $UsersOrders )


                             <tr>
                        <a href="{{ url("/productPage/".$UsersOrders->product->id ) }}">
                                    <th scope="row">{{ $UsersOrders->id  }}</th>
                <td>{{ $UsersOrders->product->name  }}</td>
                <td>{{ $UsersOrders->product->price  }}</td>
                <td>{{ $UsersOrders->created_at }}</td>
                <td>{{ $UsersOrders->count }}</td>
              </tr>
                        </a>

                    @endforeach       
                @endif  
            </tbody>
          </table>
    </div>
</div>
<hr>
<div class="row text-center  text-orange">
  <h4>  کامنت های شما</h4>
</div>
<div class="container-fluid p-4">
    <div class="row">

    </div>
    <div class="row">
        @if ($UsersComment->count() == 0)
            
        <p class=" text-center FontYekan mt-4"  dir="rtl" >  هیچ نظری هنوز ثبت نشده !!!!  </p>


       @else

   
           
       <table class="table" dir="rtl">
        <thead>
          <tr>
            <th scope="col">شماره</th>
       
            <th scope="col">انچه نوشته ایید</th>
            <th scope="col">ویژگی مثبت</th>
            <th scope="col">ویژگی منفی</th>
            <th scope="col">زمان</th>
            <th scope="col">مشاهده</th>
          </tr>
        </thead>
        <tbody>
    @foreach ($UsersComment as $UsersComment )
        
          <tr>
            <th scope="row">{{ $UsersComment->id }}</th>
      
            <th scope="row">{{ $UsersComment->text }}</th>
          
            <td>{{ $UsersComment->strength }}</td>
            <td>{{ $UsersComment->weakness_point }}</td>
            <td>{{ $UsersComment->created_at }}</td>
            <td><a href="{{ url("/productPage/".$UsersComment->productId ) }}" class='btn btn-warning' >مشاهده</a></td>
          </tr>
   

       @endforeach
     </tbody>
      </table>
        @endif
    </div>
</div>
<div class="row text-center  text-orange">
  <h4> امتیازاتی که شما دادی</h4>
</div>

<div class="container-fluid p-4">
    <div class="row">

    </div>
    <div class="row">
        @if ($UsersStar->count() == 0)
            
        <p class=" text-center FontYekan mt-4"  dir="rtl" > هیچ ستاره ایی ندادی هنوز!!!!  </p>


       @else

   
           
       <table class="table" dir="rtl">
        <thead>
          <tr>
            <th scope="col">شماره</th>
            <th scope="col">  محصول</th>
            <th scope="col">ستاره</th>
            <th scope="col">زمان</th>
          </tr>
        </thead>
        <tbody>
    @foreach ($UsersStar as $UsersStar )
        
          <tr>
            <th scope="row">{{ $UsersStar->id }}</th>
            <td>{{ $UsersStar->score }}</td>
            <td>{{ $UsersStar->created_at }}</td>
            <th scope="row"><a class=" btn btn-warning" href="{{  url("/productPage/".$UsersStar->productId) }}">مشاهده محصول</a></th>

          </tr>
   

       @endforeach
     </tbody>
      </table>
        @endif
    </div>
</div>


<script src="{{url("./bootstrap.bundle.js") }}"></script>
<script src="{{url("./app.js") }}"></script>

</body>
</html>