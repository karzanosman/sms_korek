<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
  
    @livewireStyles
</head>
<body>

    <!-- this is route for pages-->
    <div class="row m-2">
       
        <div class="col-md-2 col-12 border shadow ">
            <a href="{{route('/')}}" class="my-3 btn btn-primary btn-lg w-100 ">Add Compose</a>
            <a href="{{route('edit_compose')}}" class="my-3 btn btn-primary btn-lg w-100 ">Compose List</a>
            <a href="{{route('offers')}}" class=" btn btn-primary btn-lg w-100">Offers</a>
        </div>

        <div class="col-md-10 col-12">
            @yield('content')
        </div>

    </div>
    


    @livewireScripts

</body>
</html>