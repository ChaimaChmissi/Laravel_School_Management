



<x-AdminLayout>
    <x-slot name="header">
        <main slot="main">
            <br>
            <br>


<!DOCTYPE html>
<html>
<head>
    <title>Classes List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Add Class</h1>
    @if (session('success'))
    <div class="alert alert-success" style="width: 50%">
        {{ session('success') }}
    </div>
@endif
    
    <form method="POST" action="{{ url('save-class/') }}">
        @csrf 
        <div class="mb-3">
            <label class="form-label">Class Name</label>
            <input type="name" class="form-control" name="name" value="{{ $class->name }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Class Description </label>
            <input type="name" class="form-control" name="description" value="{{ $class->description }}">
        </div>
        <div> 
            <button type="submit" class="btn btn-primary">Add</button>
            <a href="{{ url('classes-list')}}">Back to Classes List</a>
          </div>
          
       
    </form>
    

 
</body>
</html>




 
</x-AdminLayout>
