<head>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{ url("/bootstrap.rtl.css") }}" type="text/css" rel="stylesheet"  >
    <link href="{{ url("/style.css") }}" type="text/css" rel="stylesheet"  >


</head>

@if(session("massage"))

    <div class="alert alert-light" role="alert">
          {{ session("massage") }}
    </div>

@endif

<h2 class="text-center orangeBGC py-2 text-white" > برسی کامنت ها</h2>
<div class="table-responsive small container">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th scope="col">شماره</th>
            <th scope="col">متن پیام</th>
            <th scope="col">زمان</th>
            <th scope="col">رد پیام</th>
            <th scope="col">تایید</th>

        </tr>
        </thead>
        <tbody>

        @foreach($checkComments as $checkComment)
            <form method="POST" action="{{ url("submited_comments") }}">
                <tr>
                    <td>{{ $checkComment->id }}</td>
                    <td>{{ $checkComment->text }}</td>
                    <td>{{ $checkComment->created_at }}</td>
                    <input type="hidden" name="product_id" value="{{ $checkComment->productId }}" >
                    <input type="hidden" name="User_Id" value="{{ $checkComment->userid }}" >
                    <input type="hidden" name="_token" value="{{ csrf_token()}}" >
                    <input type="hidden" name="text" value="{{  $checkComment->text }}" >
                    <input type="hidden" name="id" value="{{  $checkComment->id }}" >
                    <td>  <a href="{{ url("/deleteComments/$checkComment->id") }}" class="btn btn-danger " >حذف کامنت</a>  </td>
                    <td><button  type="submit" class="btn btn-success text-white"  >قبول کردن </button></td>
                </tr>
            </form>


        @endforeach

        </tbody>
    </table>
</div>

