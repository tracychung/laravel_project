<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="container mt-3">
  <h2>Students Table</h2>
  <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>       
  <a href="{{route('students.create')}}" class="btn btn-success mb-3 mt-3 ">單筆新增</a>
  {{-- {{dd($data)}} --}}
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>edit/del</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        
        <tr>


            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->age}}</td>
            <td>

              <form action="{{route('students.destroy',['student'=>$item->id])}}" method="post">
                @csrf
                @method('DELETE')
                {{-- <a href="stedents/1/edit">修改</a> --}}
                {{-- dd(route('students.edit',['student=>1'])) --}}
                <a class="btn btn-warning" href="{{route('students.edit',['student'=>$item->id])}}"><i class="fa-solid fa-pen-to-square"></i></a>
                {{-- <a href="http://">刪除</a> --}}
                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                </form>
                {{-- DEL --}}
                {{-- 419 --}}
            </td>
        </tr>
        @endforeach
        
    </tbody>
  </table>
</div>

</body>
</html>
