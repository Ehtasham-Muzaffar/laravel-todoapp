<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="top">
            <h1>TodoList</h1>
            
        </div>
        <div class="bottom">
                <ul>
                @foreach ($data as $item)
                <li>{{$item['Message']}}    <span><a id="del" href="{{route('submit.del',['id'=>$item['id']])}}">Delete</a></span>
                    <span><a id="edit" href="{{route('submit.edit',['id'=>$item['id']])}}">Edit</a></span>
                    <span>{{$item['created_at']}}</span>
                
                </li>
                {{-- <span>{{$item['created_at']}}</span> --}}
             
                @endforeach
                    
                
                    
                </ul>
        </div>
        <div class="form">
            <form action="{{route('submit.form')}}">
                @csrf
                <input type="text" name="name">
                <input type="submit">
            </form>
        </div>
    </div>
</body>
</html>