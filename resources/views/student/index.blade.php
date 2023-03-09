<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>student</title>
</head>
<body>
    <h2>hello student index blade</h2>
    <br>
    {{-- <a href="{{url('student.excel')}}">excel</a> --}}
    {{-- <h1>Hello,{{$name}}</h1>
    <h3>{{$name}} - {{$age}}</h3> --}}

    {{-- laravel dd --}}
    
    {{-- <h1>Hello,{{$data['name']}}</h1>
    <h3>{{$data['name']}} - {{$data['age']}}</h3> --}}
    @php
    // dd($data);
    @endphp
    {{--  =>{{dd($data)}}  --}}
    @foreach ($data as $item)
    <p>{{$item['name']}} - {{$item['mobile']}}</p>
        
    @endforeach


    <br>
    <a href="{{route('students.excel')}}">excel</a>
    {{-- <a href="/student_excel">excel</a> --}}
    <br>
    <?php 
        dd($data);
    ?>
</body>
</html>