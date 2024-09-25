<!DOCTYPE html >
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl" class="m-0 p-1">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>صفحه همه محصولات </title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{ url("/bootstrap.rtl.css") }}" type="text/css" rel="stylesheet"  >
    <link href="{{ url("/style.css") }}" type="text/css" rel="stylesheet"  >


</head>
<body class="  p-2  pt-0">

<div class="container-fluid mt-5 mb-5 ">
<div class="row d-flex justify-content-around ">
{{-- put foreach in here--}}
<h3 class="text-center mt-5 mb-5"> همه محصولات</h3>

@forelse($products as $product)
        @foreach($product->images as $image)


    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center cardShop p-2">
        <div class="card p-2" style="width: 18rem;">
            <img src="{{ url($image->url)}} " class="card-img-top rounded-4 h-50" alt=image">
            <div class="card-body text-center">
                <h5 class="card-title">{{ $product->name  }} </h5>
                <p class="card-title    text-decoration-line-through  text-secondary">  {{ $product->price_off }} </p>
                <h5 class="card-title"> {{ $product->price }} </h5>
                <a href="/productPage/{{ $product->id }}" class="btn btn-primary btn__signup border-0"> مشاهده محصول</a>
            </div>
        </div>
    </div>
        <br>
        <br>
        @endforeach
    @empty
                <div class="alert alert-danger" role="alert">
                    This is a danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                </div>

    @endforelse

</div>
</div>



{{-- end of foreach--}}

<div class="container-fluid mt-5 mb-5 ">
    <div class="row d-flex justify-content-around ">

<div class="col-12 d-flex justify-content-center align-items-center " dir="rtl" >
    {{  $products->links() }}
</div>

    </div>
</div>


<div class="container-fluid mt-5 mb-5 ">
    <div class="row d-flex justify-content-around ">






<script src="{{url("./bootstrap.bundle.js") }}"></script>

</div>
</div>

</body>


</html>
