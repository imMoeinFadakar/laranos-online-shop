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


        @foreach($allOrders as $allOrder)

            <div action="/ChangeCategory" method="GET" class="row d-flex justify-content-center " >
                <div class="col-8 text-center" >
                    <div class="alert alert-light" role="alert">
                     <div class="row">

         <div class="col-4">
                            تعداد:
                            
                            {{  

                                   $allOrder->count


                            }}</div>
                        <div class="col-4">
                            کاربر:
               
                      </div>
                        <div class="col-4">
                            محصول:
                            
                            {{  
                            
                                   $allOrder->Product->name
                            
                            }}</div>

                     </div>
               


                    </div>
                </div>
          



         

        @endforeach

    </div>


</div>



<script src="{{url("./bootstrap.bundle.js") }}"></script>
</body>
