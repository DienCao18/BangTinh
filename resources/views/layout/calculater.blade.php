<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
</head>
<body>
    <h1 class="text-center">Calculater Online</h1>
    <form action="" method="post" class="text-center">
        @csrf
        <label for=""> Nhập số a</label> <br>
        <input type="number" name="a" placeholder="nhập số a" value={{$a}} > <hr>
        <label for=""> Nhập số b <b></b></label> <br>
        <input type="number" name="b" placeholder="nhập số b" value={{$b}}> <hr>

        Result: {{$result}}
        <div class="d-flex justify-content-around">
            <button name='cal' class="btn btn-primary" value="+">Tổng</button>
            <button  name='cal'class="btn btn-success" value="-">Hiệu</button>
            <button name='cal' class="btn btn-primary" value="*">Tích</button>
            <button name='cal' class="btn btn-success" value="/">Thương</button>
        </div>

    </form>
</body>
</html>