<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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



</body>
</html>