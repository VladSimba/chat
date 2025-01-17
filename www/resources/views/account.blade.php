
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-group mb-0">
                <div class="card p-4">
                    <div class="card-body">
                        <h1>Account</h1>
                        <p class="text-muted">Edit account</p>
                        <form method="post" action="{{ route('edit-account-form-process') }}">
                            @csrf
                            <div class="input-group mb-3">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input name="name" type="text" class="form-control" placeholder="Username" value="{{ auth()->user()->name }}">
                                @error('text')
                                <p style="color: #FF2D20">{{$errors}}</p>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input name="email" type="email" class="form-control" placeholder="email" value="{{ auth()->user()->email }}">
                                @error('email')
                                <p style="color: #FF2D20">{{$errors}}</p>
                                @enderror
                            </div>
                            <div class="input-group mb-4">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input name="current_password" type="password" class="form-control" placeholder="Current password">
                                @error('current_password')
                                <p style="color: #FF2D20">{{$errors}}</p>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input name="new_password" type="password" class="form-control" placeholder="New password">
                                @error('new_password')
                                <p style="color: #FF2D20">{{$errors}}</p>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input name="new_password_confirmation" type="password" class="form-control" placeholder="New password confirmation">
                                @error('new_password_confirmation')
                                <p style="color: #FF2D20">{{$errors}}</p>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary px-4">Edit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                    <div class="card-body text-center">
                        <div>
                            <h2>Login</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <button type="button" class="btn btn-primary active mt-3">Login Now!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<link href="https://netdna.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    body{
        margin-top:20px;
        background:#eee;
    }
    .container {
        margin-right: auto;
        margin-left: auto;
        padding-right: 15px;
        padding-left: 15px;
        width: 100%;
    }

    @media (min-width: 576px) {
        .container {
            max-width: 540px;
        }
    }

    @media (min-width: 768px) {
        .container {
            max-width: 720px;
        }
    }

    @media (min-width: 992px) {
        .container {
            max-width: 960px;
        }
    }

    @media (min-width: 1200px) {
        .container {
            max-width: 1140px;
        }
    }



    .card-columns .card {
        margin-bottom: 0.75rem;
    }

    @media (min-width: 576px) {
        .card-columns {
            column-count: 3;
            column-gap: 1.25rem;
        }
        .card-columns .card {
            display: inline-block;
            width: 100%;
        }
    }
    .text-muted {
        color: #9faecb !important;
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem;
    }
    .mb-3 {
        margin-bottom: 1rem !important;
    }

    .input-group {
        position: relative;
        display: flex;
        width: 100%;
    }
</style>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<script type="text/javascript">

</script>
</body>
</html>

