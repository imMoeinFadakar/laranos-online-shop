<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ url("/bootstrap.rtl.css") }}" type="text/css" rel="stylesheet"  >
         <link href="{{ url("/style.css") }}" type="text/css" rel="stylesheet"  >



    <title>Document</title>
</head>
<body>
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
    <div class="container-fluid">
     
        <div class="row ">
            <div class="col-8  h-100 orangeBGC " style="height: 100vh !important ;" >
              <div class="row pb-2 bg-white d-flex justify-content-between ">
                <div class="col-2  d-flex justify-content-center align-items-center  "> <a href="{{ url("/")}}" class=" d-inline  m-auto  text-orange fs-2"><i class="fa fa-home"></i> </a></div>
                <div class="col-10 text-center">        <h2 class=" text-center  d-inline "  style="height: 55px ;" >سبد خرید</h2></div>

                   
                </div>
             <div class="row d-flex justify-content-center align-items-center">
                <div class="col-10">
  
                     @foreach ($orders as $order )
                           <div class="card mb-3 mt-2" style="max-width: 540px;" dir="rtl">
                        <div class="row g-0">
                          <div class="col-md-2 d-flex justify-content-center align-items-center">
                             {{  $order->product->name }}
                          </div>
                          <div class="col-md-10">
                            <div class="card-body">
                              <div class="row">
                <div class="col-4" dir="rtl">
                  <input type="hidden" value="{{ Auth::id() }}" id="User_id" >
                  <input type="hidden" value="{{ csrf_token()  }}" id="csrf" >
                  <input type="hidden" value="{{ $order->product->id }}" id="Product_id" >

                  <select class="form-select" value="{{ $order->count  }}"  aria-label="Default select example" id="counterProductInBasket{{ $order->id }}" onchange="counterProductInBasket({{ $order->id }} , {{ $order->product->price }} )" >
                    @for ($i = 1 ;  $i <= $order->product->count ; $i++ )
                    @if ($i ===  $order->count  )
                    <option selected  value="{{  $i }}">{{  $i }}</option>
                    @endif
            <option value="{{  $i }}">{{  $i }}</option>
            @endfor
                  </select> 
                </div>
                <div class="col-4 d-flex justify-content-center align-items-center"><a href="{{ url("/deleteOrder/".$order->id  ) }}"  class=" btn btn-danger " >حذف</a></div>
                <div class="col-4 text-nowrap  pt-2 " id="priceWrapper{{ $order->id }}" >{{ $order->product->price *  $order->count   }}  تومان </div>
            
            
                              </div>
              
                              

                            </div>
                          </div>
                        </div>
                      </div>
                     @endforeach

                

                </div>
             </div>
            </div>
            <div class="col-4 bg-light ">
                   
              <div class="row mt-2">
                <h3 class=" text-center m-0 p-0" >مشخصات  تحویل گیرنده</h3>
              </div>
              <hr>

          
                    @foreach ($users as $user)
                    <div class="row">
                      <div class="col-6"><p dir="rtl" class=" FontYekan">نام:{{ $user->name }}</p> </div>
                      <div class="col-6"><p dir="rtl" class=" FontYekan" >نام کاربری: {{ $user->username }}</p></div>  
                 </div>
                 <div class="row">
                      <div class="col-6"><p dir="rtl" class=" FontYekan">شماره: {{ $user->mobail_number }}</p> </div>
                      <div class="col-6"><p dir="rtl" class=" FontYekan" >شهر :  {{ $user->city->text }}</p></div>  
                 </div>
                 <div class="row">
                      <div class="col-12"><p dir="rtl" class=" FontYekan" >ادرس: {{  $user->address }}</p> </div>
                 </div>
                    @endforeach
                 
<div class="row">
<div class="col-12 d-flex justify-content-center align-items-center mt-5">
         <h4 class=" FontYekan">133000 تومان</h4>
</div>
</div>
<div class="row mt-5">

  @if ($orders->count() == 0 )
    <div class="col-6 rounded-pill  d-flex justify-content-center align-items-center">
             <h5 class=" text-center" >هنوز سبد  خریدت خالیه <a href="/see_all_products" class=" text-orange" >شروع خرید</a> </h5>
    </div>
@else
  <div class="col-6  d-flex justify-content-center align-items-center"><button  class=" btn  btn__signup " >ثبت ادامه خرید </button></div>
  @endif

<div class="col-6  d-flex justify-content-center align-items-center"><a href="{{ url("/setting")}}"   class=" btn  bg-white" >تغییر اطلاعات</a></div>
</div>
<div class="row">
  <h2></h2>
</div>
            </div>
        </div>
    </div>
    <script src="{{url("./bootstrap.bundle.js") }}"></script>
<script src="{{url("./app.js") }}"></script>
<script src="{{url("./all.js") }}"></script>
<script src="{{url("./counter.js") }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>
