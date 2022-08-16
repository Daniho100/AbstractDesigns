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
                margin-top: 50px;
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
                text-decoration: none;
            }
        </style>
    </head>
    <body>

        <div class="container admin">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title">Hello Admin, here are your mails</h2>
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
                            <th>Message</th>
                            <th>Date and Time</th>
                            <th>Action</th>
                        </tr>
                        
                            @foreach($data as $data)
                        <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->phone}}</td>
                            <td>{{$data->address}}</td>
                            <td>{{$data->message}}</td>
                            <td>{{$data->created_at}}</td>
                            <td><a href="{{url('delete',$data->id)}}" onclick="return confirm('Are you sure you want to delete message?')"><button class="btn btn-danger">Delete</button></a></td>
                            
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

