<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>لارانوس | خانه</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{ url("/bootstrap.rtl.css") }}" type="text/css" rel="stylesheet"  >
    <link href="{{ url("/style.css") }}" type="text/css" rel="stylesheet"  >
</head>
<body>
<div class="container-fluid" >

    <div class="row d-flex justify-content-center align-items-center" >
        @foreach($categoryNames as $categoryNames)
            <div class="col-12" >
                <div class="card m-0" style="">

                    <div class="card-body">
                        <h3 class="card-title text-white orangeBGC  p-1 text-center">{{ $categoryNames->title }} </h3>
                        <p class="card-text  text-center"> {{ $all_pro->count()  }} <span>: تعداد محصولات </span> </p>
                    </div>
                    <ul class="list-group list-group-flush p-0 col-6 m-auto">
                        @foreach($all_pro as $AP)
               
                                <li class="list-group-item p-0 "><a href="/productPage/{{ $AP->id}}" class="orangeHover p-1  text-decoration-none text-dark d-flex justify-content-between"> <p class="m-0 p-0"> {{ $AP->name }}  </p> <p class="m-0 p-0 " dir="rtl" >  {{ $AP->price  }} تومان</p> </a></li>
                     

                        @endforeach
                    </ul>
                    <div class="card-body d-flex justify-content-center">

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


<div class="container-fluid  mt-5">
   
 <div class="row ">
    <div class="col-5 text-center  m-auto mb-4">مشاهده سایر دسته بندی ها</div>
 </div>
            <div class="row" dir="rtl">
     
                    @foreach ( $categories  as $category )
                  
        <div class="col p-3 text-orange d-flex justify-content-center  align-items-center" >
              <a href="{{ url("/showcategory/". $category->id  ) }}" class=' text-decoration-none' >
                            <button class=" btn btn__signup    text-white text-center " dir="rtl" >  {{ $category->id }}  .   {{  $category->title }}</button>
                          
                                       </a>
                                </div>     
                                
                                 @endforeach         
                 </div>       

       
             
          
              
    
            </div>
  
</div>





</body>
