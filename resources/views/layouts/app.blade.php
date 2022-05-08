<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     li{
        list-style: none;
        
        padding: 10px;
       
    }
    div{
        display:flex;
        flex-direction: row;
        margin-left: 1000px;
        
        background: rgb(177, 157, 186);
    }
    li a{
        float: right;
        text-decoration: none;
    }
    body{
        background-color: rgb(127, 191, 63);
    }
    form{
        
        margin-top: 100px;
        margin-left: 90px;
    }
    input{
        margin: 10px;
    }
    </style>
</head>
<body>
    <div>
        <li><a href="/">HOME</a></li>
        <l1><a href="/register">REGISTER</a></li>
        <li><a href="/login">LOGIN</a></li>
        <li><a href="/details">DETAILS</a></li>
    </div>
    @yield('con')
</body>
</html>