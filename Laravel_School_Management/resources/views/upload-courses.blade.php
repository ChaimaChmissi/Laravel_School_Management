<x-TeacherLayout>
    <x-slot name="header">
   <head>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        </head>
        <main slot="main">
          <head>
            <!-- Include Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <!-- Include Font Awesome CSS for icons -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
          
        </head>
        <body>
            <div class="container form-container">
                <h1>Upload Your Course</h1>
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                <form action="{{ route('courses.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title" id="title" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea name="description" id="description" required class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="file">File:</label>
                        <input type="file" name="file" required class="form-control-file">
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-upload"></i> Upload Course
                    </button>
                </form>
            </div>
        
            <!-- Include Bootstrap JS -->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </body>
        
</x-TeacherLayout>
<style>
  /* Custom styles */
  body {
      padding: 20px;
  }

  .form-container {
      max-width: 500px;
      margin: 0 auto;
  }

  .form-container label {
      font-weight: bold;
  }

  .form-container input[type="text"],
  .form-container textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-bottom: 15px;
  }

  .form-container button[type="submit"] {
      padding: 10px 20px;
      background-color: #7963e5;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
  }

  .alert {
      margin-bottom: 20px;
  }
</style>