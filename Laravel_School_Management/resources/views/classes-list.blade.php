<x-AdminLayout>
    <x-slot name="header">
        <main slot="main">
            <br>
            <br>


<!DOCTYPE html>
<html>
<head>
    <title>Subjects List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  </head>
<body>
    
   



 <h1>Classes List</h1>
 @if (session('success'))
    <div class="alert alert-danger" style="width: 50%">
        {{ session('success') }}
    </div>
@endif
<br><br> 
<a href="{{ url('add-class/')}}">
    <button>Add Class</button>
  </a>

<br><br> 

<table class="table">
 
    <thead class="thead-custom">
      <th>Class Name</th>
      <th>Class Description</th>
      <th>Created At</th>

      <th>Actions</th>
    </thead>
    
@foreach ($classes as $class)
    <tbody>

      <td>{{ $class->name }}</td>
      <td>{{ $class->description }}</td>
      <td>{{ $class->created_at }}</td>
  <td> <a onclick="return confirm('are you sure ?')" href="{{url('edit-class/'.$class->id)}}"><box-icon name='edit-alt'  style="  fill:  #FFD700;" ></box-icon></a>

   <a   onclick="return confirm('are you sure ?')" href="{{url('delete-class/'.$class->id)}}"> <box-icon name='trash' style="  fill:  #F47174;"></box-icon> </a> </td>

       
    
 @endforeach
    </tbody>
  </table>

</body>
</html>
</x-AdminLayout>




<style>
table {
  font-family: "Public Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;
  font-size: 15px;
  line-height: 22.95px;
  text-align: start;
  letter-spacing: normal;
  color: #697a8d;
  background-color: #ffffff;
  box-shadow: rgba(67, 89, 113, 0.12) 0px 2px 6px 0px;
  border-radius: 8px;
  width:20%;

  max-width: 1000px;
  align-items: center;

  margin: auto;

bottom: 50px;
}

.thead-custom {
  background-color: #AF8FE9; /* Change the background color to your desired color */
 color: white;   
}


h1 {
  font-family: "Public Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;
  font-size: 35pxx;
  text-align: center;
  letter-spacing: normal;
  color: #566a7f;
  background-color: #ffffff;
  
  color: #AF8FE9;

  
}
button {
 

  padding: 7px 20px;
  font-family: "Public Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;
  font-size: 15px;
  line-height: 22.95px;
  text-align: center;
  align-items: center;
  letter-spacing: normal;
  color: #ffffff;
  background-color: #696cff;

  box-shadow: rgba(105, 108, 255, 0.4) 0px 2px 4px 0px;
  border-radius: 6px;
  margin-left: 1300px;
}


</style>