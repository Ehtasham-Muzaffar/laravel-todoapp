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
            <h1>Edit List</h1>
            
        </div>
        <div class="bottom">
                <ul>
             
                <li>{{$data['Message']}}   
                    <span>{{$data['created_at']}}</span>
                
                </li>
                {{-- <span>{{$item['created_at']}}</span> --}}
             
             

                    
                
                    
                </ul>
        </div>
        <div class="form">
            <form method="post" action="{{route('submit.update',['id'=>$data['id']])}}">
                @csrf
                {{-- <input type="text" name="{{$data['id']}}"> --}}
                <input type="text" name="name" value="{{$data['Message']}}">
                <input type="submit">
            </form>
        </div>
    </div>
</body>
</html>