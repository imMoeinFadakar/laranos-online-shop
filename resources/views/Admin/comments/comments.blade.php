<head>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{ url("/bootstrap.rtl.css") }}" type="text/css" rel="stylesheet"  >
    <link href="{{ url("/style.css") }}" type="text/css" rel="stylesheet"  >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</head>
<body>

@if(session("massage"))

    <div class="alert alert-warning alert-dismissible text-center fade show" role="alert">
        <strong class="m-auto" >{{ session("massage") }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@endif

<div class="container-fluid" >
    <div class="row orangeBGC d-flex justify-content-center align-items-center mb-2" >
        <h3 class="text-center mb-2 mt-2 text-white" > مشاهده و تغییر دسته بندی </h3>
    </div>
    <div class="row d-flex justify-content-center" >

        @foreach($allCategorys as $allCategory)



        @endforeach

    </div>

    <h3 class="text-center mb-5 orangeBGC mb-2 mt-2 text-white py-2 " > افزودن دسته بندی </h3>

    <div class="row d-flex justify-content-center" >
        <form method="head" action="{{ url('/add_new_category') }}" class="d-flex justify-content-center" >
            <div class="col-8 d-flex justify-content-center align-items-center" >
                <div class="form-floating mb-3">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token"  class="form-control" id="floatingInput" placeholder="name@example.com">
                    <input type="text" name="title" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput"> نام دسته بندی </label>
                </div>
            </div>
            <div class="col-4 d-flex justify-content-center align-items-center">
                <button class="btn-success btn" type="submit"> ثبت و تایید </button>
            </div>
        </form>
    </div>


</div>



<script src="{{url("./bootstrap.bundle.js") }}"></script>
</body>
