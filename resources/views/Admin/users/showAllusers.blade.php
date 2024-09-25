<head>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{ url("/bootstrap.rtl.css") }}" type="text/css" rel="stylesheet"  >
    <link href="{{ url("/style.css") }}" type="text/css" rel="stylesheet"  >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</head>
<body  dir="rtl">

@if(session("massage"))

    <div class="alert alert-warning alert-dismissible text-center fade show" role="alert">
        <strong class="m-auto" >{{ session("massage") }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@endif


    
<table class="table">
    <thead class="text-orange" >
      <tr>
        <th scope="col">#</th>
        <th scope="col">نام</th>
        <th scope="col">نشانی </th>
        <th scope="col">ادرس</th>
        <th scope="col">رایانامه اینترنتی</th>
        <th scope="col">شماره موبایل</th>
        <th scope="col"> حذف</th>
      </tr>
    </thead>
    <tbody dir>
      <tr>
@foreach ($allUsers as $allUser)

        <th scope="row" dir="rtl">{{ $allUser->id }}</th>
        <td>{{ $allUser->name }}</td>
        <td>{{ $allUser->email }}</td>
        <td>{{ $allUser->address }}</td>
        <td>{{ $allUser->username }}</td>
        <td>{{ $allUser->mobail_number }}</td>
        <td><a href="{{ url("/DeleteUser/$allUser->id") }}" class="btn btn-danger">حذف این کاربر</a></td>
      </tr>
      <tr>

@endforeach

    </tbody>
  </table>





<script src="{{url("./bootstrap.bundle.js") }}"></script>
</body>

