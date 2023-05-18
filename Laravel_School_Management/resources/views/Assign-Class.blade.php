<!-- assign-class.blade.php -->
<x-AdminLayout>
    <x-slot name="header">
        <br>
        <br>
        <title>Assign Students</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
      </head>
    <body>
        
       
 <h1>Assign Students To Classes</h1>
 @if (session('success'))
    <div class="alert alert-success" style="width: 50% ; align-items:center " >
        {{ session('success') }}
    </div>
@endif
        <form action="{{ route('storeStudent') }}" method="POST">
            @csrf
            <table class="table">
                <thead class="thead-custom">
                    <th>Student Name</th>
                    <th>Student Email</th>
                    <th>Class</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>
                            <select name="class_id[]">
                                @foreach ($classes as $class)
                                <option value="{{ $class->id }}">{{ $class->name }}</option>
                                @endforeach
                            </select>
                            <input type="hidden" name="student_id[]" value="{{ $student->id }}">
                        </td>
                        <td>
                            <button type="submit">Save</button>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </form>
        

       
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
      width:50%;
    
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
    button
{
                padding: 7px 10px;
                         font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Oxygen, Ubuntu, Cantarell, 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif;
                         font-size: 15px;
                         line-height: 22.95px;
                         text-align: center;
                         align-items: center;
                         letter-spacing: normal;
                        color: #696cff;
                        
                         box-shadow: rgba(105, 108, 255, 0.4) 0px 2px 4px 0px;
                         border-radius: 6px;
                         "
}
    
    
    
    </style>

