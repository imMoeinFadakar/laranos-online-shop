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

        @foreach($all_Information as $Information)

            <div action="/ChangeCategory" method="GET" class="row d-flex justify-content-center " >
                <div class="col-6 text-center" >
                    <div class="alert alert-light" role="alert">
                        شماره     {{ $Information->id }}  :      {{ $Information->title }}
                    </div>
                </div>
                <div class="col-4 d-flex justify-content-center align-items-center " >
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal{{$Information->id}}">
                        تغییر
                    </button>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger mx-3" data-bs-toggle="modal" data-bs-target="#exampleModal{{$Information->id}}{{$Information->id}}">
                        حذف
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{$Information->id}}{{$Information->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content orangeBGC text-white ">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 m-auto" id="exampleModalLabel"> حذف کردن دسته بندی : {{ $Information->title }} </h1>
                                </div>
                                <div class="modal-body">
                                    <div class="alert alert-light text-center" role="alert">
                                        <h4 class="text-center" >       پاک کردن دسته بندی :
                                            {{ $Information->title }}</h4>

                                        <br>
                                        یا از پاک کردن این دسته بندی مطمعن هستید؟
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">نه پاک نکن</button>
                                    <a type="button" href="{{ url("/deleteCategory/$Information->id") }}" class="btn btn-danger">اره میخوام پاک بشه</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$Information->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content orangeBGC text-white ">
                            <div class="modal-header text-center">
                                <h1 class="modal-title fs-5 m-auto" id="exampleModalLabel"> دسته بندی: {{ $Information->title }} </h1>
                            </div>
                            <div class="modal-body">

                                <form action="{{ url("/changeCategories") }}" method="POST" class="row d-flex justify-content-center " >
                                    <input type="hidden" name="_token" value="{{csrf_token()}}" class="form-control" >
                                    <input type="hidden"  name="categoryId" value="{{ $Information->id }}" class="form-control text-center" >
                                    <div class="form-floating mb-3">
                                        <input type="text" value="{{ $Information->title }}" name="title" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput"> نام دسته بندی را تغییر دهید </label>
                                    </div>


                            </div>
                            <div class="modal-footer">
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





</div>



<script src="{{url("./bootstrap.bundle.js") }}"></script>
</body>

