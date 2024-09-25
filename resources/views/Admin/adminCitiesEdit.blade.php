<head>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{ url("/bootstrap.rtl.css") }}" type="text/css" rel="stylesheet"  >
    <link href="{{ url("/style.css") }}" type="text/css" rel="stylesheet"  >

</head>
<body>
<form method="GET" action="{{ url("admin/editCities") }}" >
    <div class="row d-flex justify-content-center " >
    @foreach($specificCitys as $specificCity)


        <div class="col-8 d-flex justify-content-end">

            <div class="form-floating mb-3 d-flex justify-content-center">
                <input type="hidden" value="{{ csrf_token() }}" name="_token" >
                <input type="hidden" value="{{ $specificCity->id }}" name="cityId" >

                <input type="text"  value="{{ $specificCity->text }}" class="form-control" id="floatingInput" name="cityName" placeholder="name@example.com">
                <label for="floatingInput"> اسم شهر  </label>
            </div>

        </div>
        <div class="col-4">

            <button type="submit"  class="btn btn-success shadow-lg" >ذخیره</button>

        </div>


    @endforeach
    </div>
</form>

</body>

