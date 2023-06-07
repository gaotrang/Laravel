<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title >@yield('title')</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
        }
        body{
            width:100%;
            height:100vh;
        }

        .navigation{
            background: yellowgreen;
            margin: 20px auto;
            width: 95%;
            height: 100px;
            display:flex;
            justify-content: center;
            align-content: center;
            border-radius: 50px;

        }
        .main{
            position: relative;
            display:flex;
            justify-content: space-between;
            

         
        }
        .sidebar{
            background: #16a085;
            margin: 20px auto;
            width: 30%;
            text-align: center;
            display:flex;
            flex-direction: column;
            justify-content: center;
            align-content: center;
            border-radius: 50px;

        }
        .content{
            background: #e67e22;
            margin: 20px auto;
            width: 70%;
            height: 100px;
            display:flex;
            justify-content: center;
            align-content: center;
            border-radius: 50px;
            float: left;
            
        }


    </style>
</head>
<body>
    {{-- muon dong theo tung page thi @yield() --}}
    @include('client.pages.header')
    <div>

        <div class="navigation">
            Navigation
        </div>

        <div class='main'>
            <div class="sidebar">
                {{-- @yield('sidebar') --}}
                @section('sidebar')
                    <h2>Sidebar</h2>
                @show
            </div>
            <div class="content">
                @yield('content')
            </div>
        </div>
@include('client.pages.footer')

    </div>
</body>
</html>