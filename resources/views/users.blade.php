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
        .form, .user
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
                margin-top: 30px;
                text-decoration: none;
            }
            .submitt
            {
                margin-top: 15px;
            }
            </style>

    </head>
    <body>

        @if(session()->has('message'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            {{session()->get('message')}}
        </div>

        @endif

        <div class="container user">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="title">Welcome to user's page.</h1>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <a class="viewbutton" href="{{url('view_messages')}}"><button class="btn btn-primary">View messages</button></a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <form action="{{url('sendMessage')}}" method="POST" class='form-group'>
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control boxStyle" name="name" placeholder="input your name" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="input your email" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="number" class="form-control" name="phone" placeholder="input your phone" required>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" placeholder="input your address" required>
                        </div>

                        <div class="input-group">
                            <span class="input-group-text">Message</span>
                            <textarea class="form-control" name="message" aria-label="With textarea" placeholder="write your message"></textarea>
                        </div>

                        <button type='submit' class='btn btn-primary submitt'>Send message</button>

                    </form>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    </body>
</html>

