<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
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
        <h2>Registration Form</h2>
        <hr>
                        <form action="{{route('register.user')}}" method="post" >
                            @csrf
          @if (Session ::has ('success'))
          <div class ="alert alert-success">{{Session::get('success')}}</div>
          @endif

          @if (Session ::has ('fail'))
          <div class ="alert alert-success">{{Session::get('fail')}}</div>
          @endif

            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" name="first_name" id="first_name" required>
                <span class="text-danger">@error('first_name') {{$message}} @enderror</span>
            </div>

            <div class="form-group">
                <label for="last_name">last Name:</label>
                <input type="text" name="last_name" id="last_name" required>
                <span class="text-danger">@error('last_name') {{$message}} @enderror</span>
            </div>

            <div class="form-group">
                <label for="last_name">Username:</label>
                <input type="text" name="username" id="username" required>
                <span class="text-danger">@error('username') {{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
                <span class="text-danger">@error('email') {{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
                <span class="text-danger">@error('password') {{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <button type="submit" class="btn">Register</button>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                        <a href="login"> Login Here.</a>
                        {{ __('Already registered?') }}
                    </a>
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
            </div>
        </form>
    </div>
</body>
</html>
