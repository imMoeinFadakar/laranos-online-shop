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

    <style>
        @import url('https://fonts.googleapis.com/css?family=Exo:400,700');

*{
    margin: 0px;
    padding: 0px;
}

body{
    font-family: 'Exo', sans-serif;
}


.context {
    width: 100%;
    position: absolute;
    top:50vh;
    
}

.context h1{
    text-align: center;
    color: orange;
    font-size: 150px;
}
 h1{
    text-align: center;
    color: orange;
    font-size: 150px;
  
}


.area{
    background: #ffffff;  
    background: -webkit-linear-gradient(to left, #93fb8f, #4eda16);  
    width: 100%;
    height:100vh;
    
   
}

.circles{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.circles li{
    position: absolute;
    display: block;
    list-style: none;
    width: 20px;
    height: 20px;
    background: orange ;
    animation: animate 25s linear infinite;
    bottom: -150px;
       border-radius: 100px !important;
}

.circles li:nth-child(1){
    left: 25%;
    width: 80px;
    height: 80px;
    animation-delay: 0s;
 
}


.circles li:nth-child(2){
    left: 10%;
    width: 20px;
    height: 20px;
    animation-delay: 2s;
    animation-duration: 12s;
}

.circles li:nth-child(3){
    left: 70%;
    width: 20px;
    height: 20px;
    animation-delay: 4s;
}

.circles li:nth-child(4){
    left: 40%;
    width: 60px;
    height: 60px;
    animation-delay: 0s;
    animation-duration: 18s;
}

.circles li:nth-child(5){
    left: 65%;
    width: 20px;
    height: 20px;
    animation-delay: 0s;
}

.circles li:nth-child(6){
    left: 75%;
    width: 110px;
    height: 110px;
    animation-delay: 3s;
}

.circles li:nth-child(7){
    left: 35%;
    width: 150px;
    height: 150px;
    animation-delay: 7s;
}

.circles li:nth-child(8){
    left: 50%;
    width: 25px;
    height: 25px;
    animation-delay: 15s;
    animation-duration: 45s;
}

.circles li:nth-child(9){
    left: 20%;
    width: 15px;
    height: 15px;
    animation-delay: 2s;
    animation-duration: 35s;
}

.circles li:nth-child(10){
    left: 85%;
    width: 150px;
    height: 150px;
    animation-delay: 0s;
    animation-duration: 11s;
}



@keyframes animate {

    0%{
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 0;
    }

    100%{
        transform: translateY(-1000px) rotate(720deg);
        opacity: 0;
        border-radius: 50%;
    }

}
    </style>
    <title>Document</title>
</head>
<body>
         
  
    @if ( session("massage") )
    
    <div id="close" class=" w-100 position-absolute bgc z-3  " style="height:100vh" style="max-width: 25rem;top:30%; left:35%  " >
        <div id class="card text-bg-light mb-3  position-absolute  p-0   mx-auto  z-3"  style="max-width: 25rem;top:30%; left:35%  ">
        <div class="card-header   orangeBGC text-white  text-center FontYekan">پیام مدیریت</div>
        <div class="card-body">
          <p class="card-text  text-center  FontYekan  ">{{ session("massage") }}</p>
          <h5 class="card-title text-right"><button class="btn  btn__signup  FontYekan "  id="closeHandler"  >تایید</button></h5>
        </div>
      </div>
    </div>

    
    @endif

  



<div class="area h-100" >
            <ul class="circles z-1 ">
<div class="container d-flex justify-content-center m-auto z-3">
    <div class="row m-auto  ">
 <h1 class="text-orange   FontYekan  " > لارانوس  </h1>
<div class="col-12 text-center">

</div>




<form action="{{ url("login_post")}}" method="POST"  class=" z-2" >

    <input type="hidden" name="_token" value=" {{ csrf_token() }} ">
    <div class="form-floating mb-3 ">
        <input type="text" name="EUM"  style="z-index: : 3; " class="form-control   FontYekan text-orange  text-center"  
        @if (isset($_COOKIE["EUM"]))
            
value="{{  $_COOKIE["EUM"]  }}"

        @endif 
        id="floatingInput" placeholder="name@example.com" required>
        <label for="floatingInput"   class="  FontYekan text-center "> ایمیل یا شماره همراه یا نام کاربری </label>
      </div>
      <div class="form-floating ">
        <input type="password"  style="z-index: : 3; " 

        name="password" class="form-control text-center FontYekan text-orange " id="floatingPassword"  
        @if (isset($_COOKIE["password"]))
            
        value="{{  $_COOKIE["password"]  }}"
        
                @endif 
        placeholder="" required>
        <label for="floatingPassword" class="  FontYekan text-center">گذرواژه</label>
      </div>
      <div class="row d-flex justify-content-center mt-4">
    
      <div class="mb-3 form-check d-flex justify-content-evenly w-25    bg-light  ">
        <input type="checkbox" name="remember"   class="form-check-input  border-2  border-warning  "    id="exampleCheck1">
        <label class="form-check-label   FontYekan  " for="exampleCheck1">مرابه خاطر بسپار  </label>
      </div>
    
      </div>
    
      <div class="row  mt-2  ">
        
        <button type="submit" class=" w-75  btn btn__signup mt-5 m-auto" >ورود</button>
      </div>


</form>

<div class="row d-flex justify-content-center align-items-center mt-5   z-2 ">
    <div class="col-3 d-flex justify-content-center ">
        <a class="  text-orange   FontYekan"  href="#" >ورود با گوگل</a>
    </div>
    <div class="col-3 d-flex justify-content-center ">
         <a  href="#" class=" text-orange    FontYekan  "   > ثبت نام </a>
        <p class=" FontYekan" >حساب نداری؟</p>
       
    </div>
    </div>



    </div>
</div>
                    <li class=" z-0 orangeBGC " ></li>
                    <li class=" z-0 orangeBGC " ></li>
                    <li class=" z-0 orangeBGC " ></li>
                    <li class=" z-0 orangeBGC " ></li>
                    <li class=" z-0 orangeBGC " ></li>
                    <li class=" z-0 orangeBGC " ></li>
                    <li class=" z-0 orangeBGC " ></li>
                    <li class=" z-0 orangeBGC " ></li>
                    <li class=" z-0 orangeBGC " ></li>
                    <li class=" z-0 orangeBGC " ></li>
            </ul>
    </div >
<script src="{{url("./app.js") }}"></script>
</body>
</html>






