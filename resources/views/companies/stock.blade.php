<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Laravel 9 CRUD</h2>
            </div>
            <div >
                <a href="{{route('company_cars.create')}}" class="btn btn-success">Create car</a>
            </div>
            @if($message=Session::get('success'))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
            @endif

            <table class="table table-bordered">
                <tr>
                    <th>No.</th>
                    <th>car_name</th>
                    <th>email</th>
                    <th>address</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach($company_cars as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->address}}</td>
                        <td>
                            <form action="{{route('company_cars.destroy',$item->id)}}" method="POST">
                                <a href="{{route('company_cars.edit',$item->id)}}" class="btn btn-warning">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    <tr>
                @endforeach
            </table>
            {!! $company_cars->links('pagination::bootstrap-5')!!}
        </div>
    </div>
</body>
</html>