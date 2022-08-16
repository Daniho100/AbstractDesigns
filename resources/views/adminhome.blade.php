<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Abstract9 Designs</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <style>
        .tableview, .admin
        {
            display: flex;
            justify-content:center;
            align-items:center;
            margin-top: 20px;
        }
        .title
        {
            font-size: 30px;
            font-weight: 600;
        }
        .viewbutton
        {
            display: flex;
            justify-content: flex-end;
            align-items: flex-end;
            margin-bottom: 30px;
            margin-top: 50px;
            text-decoration: none;
        }
        .search
        {
            display: flex;
            justify-content:center;
            align-items:center;
            padding-left: 200px;
            margin-top: 15px;
        }
        .search_button
        {
            margin-right: 10px !important;
        }
        </style>
    </head>
    <body>

        <div class="container admin">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="title">Welcome Admin</h1>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <form action="{{url('search')}}" method="get" class='form-group'>
                        @csrf
                        <div class="mb-3 search">
                            <input type="text" class="form-control boxStyle" name="search" placeholder="filter user status here" required>
                            <button type='submit' class='btn btn-success searchbutton'>SUBMIT</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="container tableview" align="center">
            <div class="row">
                <div class="col-lg-12">
                    <a class="viewbutton" href="{{url('view_AdminMessages')}}"><button class="btn btn-primary">View messages</button></a>
                </div>
            </div>
        </div>

        <div class="container tableview" align="center">
            <div class="row">
                <div class="col-lg-12">
                    <table class='table  table-striped' cellpadding="10">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                
                             @foreach($data as $data)
                        <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->phone}}</td>
                            <td>{{$data->address}}</td>
                            <td>{{$data->status}}</td>

                            @if($data->status=="admin")
                            <td>Not Allowed</td>
                            <td>Not Allowed</td>
                            @else

                            <td><a href="{{url('approved',$data->id)}}"><button class="btn btn-success">Approve</button></a></td>
                            <td><a href="{{url('cancelled',$data->id)}}" onclick="return confirm('Are you sure you want to cancel user registration?')"><button class="btn btn-danger">Cancel</button></a></td>
                            @endif
                            
                        </tr>
                
                            @endforeach

                    </table>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    </body>
</html>

