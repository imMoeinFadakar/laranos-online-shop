<head>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{ url("/bootstrap.rtl.css") }}" type="text/css" rel="stylesheet"  >
    <link href="{{ url("/style.css") }}" type="text/css" rel="stylesheet"  >

<title>شهرها</title>

</head>

<body dir="rtl" >

@if(session("massage"))

    <div class="alert alert-danger" role="alert">
        {{ session("massage") }}
    </div>

@endif


<div class="container-fluid" >
    <div class="row d-flex justify-content-center" >
        <h2 class="text-center orangeBGC p-3 text-white" > لیست شهر ها </h2>
<div class="col-8">



    @foreach($Citys as $city)

        <div class="alert alert-light d-flex justify-content-evenly" role="alert">
            <div class="" >{{ $city->id }}</div>
            <div class="" >{{ $city->text }}</div>
<div><a class="btn btn-info text-white" href="{{ url("admin/cities/edit/$city->id") }}" >تغییرات</a> <a class="btn btn-danger" href="{{ url("admin/cities/delete/$city->id") }}"  >حذف</a> </div>

        </div>

    @endforeach

</div>
        <div class="d-flex justify-content-center">
<form method="POST" action="/saveCity" >

    <div class="form-floating mb-3 d-flex justify-content-center">
        <input type="hidden" value="{{ csrf_token() }}" name="_token" >
        <input type="text" class="form-control" id="floatingInput" name="cityName" placeholder="name@example.com">
        <label for="floatingInput"> اسم شهر را وارد کنید </label>
    </div>
    <div>
        <button type="submit"  class="btn btn-success shadow-lg" >ارسال</button>
    </div>

</form>

        </div>

    </div>
</div>
</body>






