<!DOCTYPE html>
<html lang="fa" dir="rtl" class="h-100" >
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
    height: 60rem !important;
    
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
 
    
   
}

.circles{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 50rem;
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
       z-index: -1 ;
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
<body dir="rtl">
        
<div class="area" >
            <ul class="circles">
<div class="container d-flex justify-content-center m-auto   z-3 ">
    <div class="row m-auto  ">
 <h1 class="text-orange   FontYekan  " > لارانوس  </h1>
<div class="col-12 text-center">

</div>

<form action="{{ url("/registerClientPost")}}" method="POST" >

    
    <input type="hidden" name="_token" value=" {{ csrf_token() }} ">
    <div class="row">
    <div class="col-6">
        <div class="form-floating mb-3   ">
            <input type="text" name="name" class="form-control FontYekan  text-orange  " id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput" class="  FontYekan ">نام  </label>
          </div>
    </div>
    <div class="col-6">
        <div class="form-floating mb-3   ">
            <input type="text" name="username" class="form-control FontYekan text-orange " id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput" class="  FontYekan ">نام کاربری </label>
          </div>
    </div>
    <div class="col-12">

        <div class="form-floating mb-3   ">
            <input type="email" name="email"  class="form-control FontYekan text-orange " id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput" class="  FontYekan ">رایانامه  </label>
          </div>

    </div>
</div>
<div class="row">
    <div class="col-6">

        <div class="form-floating mb-3   ">
            <input type="password" name="password" class="form-control FontYekan text-orange " id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput" class="  FontYekan ">گذرواژه  </label>
          </div>

    </div>
    <div class="col-6">

        <div class="form-floating mb-3   ">
            <input type="password" name="repeat_password" class="form-control FontYekan text-orange " id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput" class="  FontYekan "> تکرار گذرواژه </label>
          </div>

    </div>
</div>
<div class="row">
    <div class="col-6">

        <div class="form-floating mb-3   ">
            <input type="number" name="number"  class="form-control FontYekan text-orange " id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput" class="  FontYekan "> شمراه همراه </label>
          </div>

    </div>
    <div class="col-6 text-center">

  
        <select name="cities" class="form-select  h-75 text-dark  text-orange  FontYekan text-orange " aria-label="Default select example ">
      @foreach ($cities as $city )
                <option class="text-dark  text-orange  FontYekan " value="{{ $city->id}}">{{ $city->text }}</option>
      @endforeach
        </select>

    </div>
</div>
<div class="row">
    <div class="col-12">
            <div class="form-floating">
                <textarea class="form-control    FontYekan text-orange text-orange "   name="Address"  placeholder="ادرستو اینجا بنویس" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2"  class="  FontYekan" >ادرس</label>
              </div>
    </div>
</div>
      <div class="row d-flex justify-content-center mt-4">
      </div>
      <div class="row    pe-auto ">
        <h5 class="text-center  FontYekan " >ثبت نام شما به منزله پذیرش <a href="#" class="  text-orange " >قوانین لارانوس</a>    می باشد </h5>
        <button type="submit" class=" w-75  btn btn__signup  m-auto" >ثبت نام</button>
      </div>
</form>





    </div>
</div>
































                    <li class="  orangeBGC " ></li>
                    <li class="  orangeBGC " ></li>
                    <li class="  orangeBGC " ></li>
                    <li class="  orangeBGC " ></li>
                    <li class="  orangeBGC " ></li>
                    <li class="  orangeBGC " ></li>
                    <li class="  orangeBGC " ></li>
                    <li class="  orangeBGC " ></li>
                    <li class="  orangeBGC " ></li>
                    <li class="  orangeBGC " ></li>
            </ul>
    </div >







<script>

</script>
</body>
</html>

