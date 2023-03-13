<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
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
              {{-- <a href="stedents/1/edit">修改</a> --}}
              {{-- dd(route('students.edit',['student=>1'])) --}}
                <a href="{{route('students.edit',['student'=>$item->id])}}">修改</a>
                <a href="http://">刪除</a>
            </td>
        </tr>
        @endforeach
        
    </tbody>
  </table>
</div>

</body>
</html>
