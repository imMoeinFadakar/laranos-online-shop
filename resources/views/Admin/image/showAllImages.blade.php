<head>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{ url("/bootstrap.rtl.css") }}" type="text/css" rel="stylesheet"  >
    <link href="{{ url("/style.css") }}" type="text/css" rel="stylesheet"  >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</head>
<body dir="rtl">

@if(session("massage"))

    <div class="alert alert-warning alert-dismissible text-center fade show" role="alert">
        <strong class="m-auto" >{{ session("massage") }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@endif

<div class="container-fluid" >
    <div class="row orangeBGC d-flex justify-content-center align-items-center mb-2" >
        <h3 class="text-center mb-2 mt-2 text-white" > مشاهده و تغییر  عکس هر محصول </h3>
    </div>
    <div class="row d-flex justify-content-center" >

@foreach ($allImages as $allImage )
    
<div class="row" >
    <div class="col-2 d-flex justify-content-evenly align-items-center" >    شماره     {{ $allImage->id }}  :   </div>
    <div class="col-4 d-flex justify-content-evenly align-items-center" >    <figure class="figure">
        <img src="{{ url($allImage->url) }}" class="figure-img img-fluid rounded w-100 h-50" alt="...">
      </figure>
    </div>

    <div class="col-1 d-flex justify-content-end align-items-center" >
                <h5 class="  text-nowrap " >{{ $allImage->Product->name   }}</h5>
    </div>
    <div class="col-2 d-flex justify-content-end align-items-center" >
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal{{$allImage->id}}">
            تغییر
        </button>
    </div>
  <div class="col-2 d-flex justify-content-start align-items-center" >
        <button type="button" class="btn btn-danger mx-3" data-bs-toggle="modal" data-bs-target="#exampleModal{{$allImage->id}}{{$allImage->id}}">
            حذف
        </button>
    </div>
</div>
</div>











<div action="/ChangeCategory" method="GET" class="row d-flex justify-content-center " >
    <div class="col-6 text-center" >
     
    <div class="col-3 d-flex justify-content-center align-items-center " >

        <!-- Button trigger modal -->
   
        <!-- Modal -->
        <div class="modal fade" id="exampleModal{{$allImage->id}}{{$allImage->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content  text-white ">
                    <div class="modal-header orangeBGC">
                        <h1 class="modal-title fs-5 m-auto" id="exampleModalLabel"> حذف کردن   این عکس</h1>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-light text-center" role="alert">
                         
                            <figure class="figure">
                                <img src="{{ url($allImage->url) }}" class="figure-img img-fluid rounded w-100 h-50" alt="...">
                              </figure>
                     
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center alighn-items-center">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">نه پاک نکن</button>
                        <a type="button" href="{{ url("/delete_image_selected/$allImage->id ") }}" class="btn btn-danger">اره میخوام پاک بشه</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal{{$allImage->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content  text-white ">
                <div class="modal-header orangeBGC text-center">
                    <h1 class="modal-title fs-5 m-auto" id="exampleModalLabel">  عکسِ شماره : {{ $allImage->id }}  </h1>
                </div>
                <div class="modal-body">

                    <form action="{{ url("/edit_selected_image") }}" method="POST" class="row d-flex justify-content-center " >
                        <input type="hidden" name="_token" value="{{csrf_token()}}" class="form-control" >
                        <div class="d-flex justify-content-center">
                          <figure class="figure ">
                            <img src="{{ url($allImage->url) }}" class="figure-img img-fluid rounded " alt="عکس محصول">
                          </figure>
                        </div>
                    
                        <input type="hidden"  name="ID" value="{{ $allImage->id }}" class="form-control text-center" >
                        <input type="hidden"  name="PRODUCT_ID" value="{{ $allImage->product_id }}" class="form-control text-center" >
                        <div class="form-floating mb-3">                            
                            <input type="text" value="{{ $allImage->url }}" name="URL_NAME" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput"> ادرس جدید را وارد کنید  </label>
                        </div>
                </div>
                <div class="modal-footer d-flex justify-content-center alighn-items-center ">
                    <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">بستن</button>
                    <button type="submit"   class="btn btn-success " > تغییر دادن </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



</div>
@endforeach
<h3 class="text-center mb-5 orangeBGC mb-2 mt-2 text-white py-2 " > افزودن دسته بندی </h3>

</div>

<div class="row mb-5">
    <div class="col-3 text-center">ادرس این عکس را وارد کنید</div>
    <div class="col-4 text-center"> ابن عکس کدام محصول است </div>
    <div class="col-2 text-center">عکس اصلی است؟</div>
    <div class="col-2 text-center"></div>
</div>


<div class="container">
<div class="row">
<div class="col-3 d-flex justify-content-center">
    <form action="{{ url("/addNewImage")  }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token()}}" >
     
          <div class="input-group">
            <span class="input-group-btn">
              <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                <i class="fa fa-picture-o"></i> Choose
              </a>
            </span>
            <input id="thumbnail" class="form-control" type="text" name="images">
          </div>
          <div id="holder" style="margin-top:15px;max-height:100px;"></div>
    </div>


    
    <div class="col-4">
        <select class="form-select" aria-label="Default select example" name="product_id">
            @foreach ($allProducts as $allProduct )
                    <option value="{{ $allProduct->id}}" >{{  $allProduct->name }}</option>
            @endforeach
          </select>
    </div>
    <div class="col-2 d-flex justify-content-center">    
        
        
        <div class="form-check  px-3">
            <input class="form-check-input" type="radio" name="has_star"  value="1"  id="flexRadioDefault1">
            <label class="form-check-label" for="stared">
                بله
            </label>
          </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="has_star"  value="0"  id="flexRadioDefault1">
            <label class="form-check-label" for="stared">
                نه
            </label>
          </div>
        
        
        
        </div>
    <div class="col-2">    <button class="btn-success btn" type="submit"> ثبت و تایید </button></div>
    </div>
    

    </form>
 

</div>



<script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $('#lfm').filemanager('image');
</script>
<script src="{{url("./bootstrap.bundle.js") }}"></script>
</body>

