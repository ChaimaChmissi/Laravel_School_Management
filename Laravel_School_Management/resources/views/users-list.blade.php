



<x-AdminLayout>
    <x-slot name="header">
        <main slot="main">
            <br>
            <br>


<!DOCTYPE html>
<html>
<head>
    <title>Users List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Users List</h1>
    @if (session('success'))
    <div class="alert alert-success" style="width: 50%">
        {{ session('success') }}
    </div>
@elseif (session('error'))
    <div class="alert alert-danger" style="width: 50%">
        {{ session('error') }}
    </div>
@endif

 
</body>
</html>



<table class="table">
  <thead class="thead-custom">
      <th>User Name</th>
      <th>user Email</th>
      <th>user password</th>

      <th>Actions</th>
    </thead>
    
@foreach ($users as $user)
    <tbody>

      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->password }}</td>
      <td>
        <div style="display: flex; gap: 10px;">
          <button onclick="event.preventDefault();
                  document.getElementById('add-student-form-{{ $user->id }}').submit();">
            Add as Student
          </button>

          <form id="add-student-form-{{ $user->id }}" action="{{ url('/add-student/' . $user->id) }}" method="POST" style="display: none;">
            @csrf
          </form>

                <button onclick="event.preventDefault();
                document.getElementById('add-teacher-form-{{ $user->id }}').submit();">
          Add as Teacher
        </button>

        <form id="add-teacher-form-{{ $user->id }}" action="{{ url('/add-teacher/' . $user->id) }}" method="POST" style="display: none;">
          @csrf
        </form>
        </div>
      </td>
    </tbody>
@endforeach
</table>



 
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
    width:100%;
  
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
  
button
{
  padding: 7px 10px;
                         font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Oxygen, Ubuntu, Cantarell, 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif;
                         font-size: 15px;
                         line-height: 22.95px;
                         text-align: center;
                         align-items: center;
                         letter-spacing: normal;
                         color: #ffffff;
                         background-color: #696cff;
                         box-shadow: rgba(105, 108, 255, 0.4) 0px 2px 4px 0px;
                         border-radius: 6px;
                         "
}
  
  </style>