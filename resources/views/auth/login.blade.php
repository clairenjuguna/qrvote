<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        body {
            background-image: url('public\backend\assets\images\image1.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .container {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 5px;
            margin-top: 100px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
        }
        .form-group input {
            width: 100%;
            padding: 5px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }
        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login Page</h2>
        <hr>

        <form action="{{route('login.user')}}" method="post">
            @csrf
            @if (Session ::has ('success'))
            <div class ="alert alert-success">{{Session::get('success')}}</div>
            @endif

            @if (Session ::has ('fail'))
            <div class ="alert alert-success">{{Session::get('fail')}}</div>
            @endif




            <div class="form-group">
                <label for="last_name">Username:</label>
                <input type="text" name="username" id="username" required>
                <span class="text-danger">@error('username') {{$message}} @enderror</span>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
                <span class="text-danger">@error('password') {{$message}} @enderror</span>
            </div>

                <div class="form-group">
                    <button class="btn btn-block btn-primary":type="submit">Login</button>
                </div>
                <a href="registration"> New User !! Register Here.</a> <button type="button" class="btn btn-primary waves-effect waves-light">Register</button>
        </form>
    </div>
</body>
</html>
