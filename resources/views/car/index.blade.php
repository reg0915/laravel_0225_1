<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
.container {
  display: flex;
  flex-direction: column; /* 垂直排列 */
  justify-content: center; /* 垂直置中 */
  align-items: center; /* 水平置中 */
  height: 100vh; /* 讓父元素撐滿整個畫面 */
}

.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 10px;
  cursor: pointer;
  width: 150px;
}

.button1 { background-color: #008CBA; } 
.button2 { background-color: #008CBA; } 
.button3 { background-color: #008CBA; } 
</style>
</head>
<body>
    
    
    
    <div class="container">
        <h3>car index</h3>
        
        <button class="button button1">
        <p>  
            <a href="{{route('cars.create')}}">create</a>
        </p>
    </button>

    {{-- <button class="button button2">
    <p>  
        <a href="{{route('cars.update')}}">update</a>
    </p>
    </button>


    <button class="button button3">
    <p>  
        <a href="{{route('cars.del')}}">del</a>
    </p>
    </button> --}}
    </div>


    <div class="container mt-3">
        <h2>Bordered Table</h2>
        <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>
        <a href=""></a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>rank</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $key => $value) :?>
                <tr>
                    <td>{{$value['id']}}</td>
                    <td>{{$value['name']}}</td>
                    <td>{{$value['rank']}}</td>
                </tr>
                <?php endforeach;?>


            </tbody>
        </table>
    </div>
</body>
</html>