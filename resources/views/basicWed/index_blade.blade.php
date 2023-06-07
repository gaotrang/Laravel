<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
        .header{
            background: #95a5a6;
            margin: 20px auto;
            width:95%;
            height: 100px;
            display:flex;
            justify-content: center;
            align-content: center;
            border-radius: 50px;
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
        }
        .sidebar{
            background: #16a085;
            margin: 20px auto;
            width: 95%;
            height: 100px;
            /* position: absolute;
            left: 30%; */
           


        }
        .content{
            background: #e67e22;
            margin: 20px auto;
            width: 95%;
            height: 100px;
            /* position: absolute; */
            
        }

        .footer{
            background: #95a5a6;
            margin: 20px auto;
            width:95%;
            height: 100px;
            display:flex;
            justify-content: center;
            align-content: center;
            border-radius: 50px;
        }
    </style>
</head>
<body>
    <div>
        <div class="header">
            HEADER
        </div>
        <div class="navigation">
            Navigation
        </div>

        <div class='main'>
            <div class="sidebar">
                Sidebar
            </div>
            <div class="content">
                CONTENT
            </div>
        </div>

        <div class="footer">
            FOOTER
        </div>
    </div>
</body>
</html>