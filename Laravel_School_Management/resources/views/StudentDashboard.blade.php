<x-app-layout>
    <x-slot name="header">
        <main slot="main">
            <br>
            <br>
            <!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    /* Custom CSS for purple color scheme */
    body {
      background-color: #f5f5f5;
    }
    
    .card {
      border-radius: 10px;
      border: none;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    
    .card-header {
      background-color: #7963e5;
      color: #fff;
      border-radius: 10px 10px 0 0;
    }
    
    .card-body {
      padding: 20px;
    }
    
    .card-title {
      color: #7963e5;
    }
    
    .dashboard-title {
      color: #7963e5;
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
    }
    
    .statistics {
      margin-top: 20px;
    }
    
    .statistics .row {
      margin-bottom: 20px;
    }
    
    .statistics .card-text {
      font-size: 18px;
      font-weight: bold;
    }
    
    .achievements {
      margin-top: 20px;
    }
    
    .achievements .badge {
      background-color: #7963e5;
      font-size: 14px;
      padding: 8px 12px;
      margin-right: 10px;
      color: #fff;
    }
  </style>
  <title>Student Dashboard</title>
</head>

<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h2 class="dashboard-title">Student Dashboard</h2>
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">Statistics</h5>
          </div>
          <div class="card-body">
            <div class="statistics">
              <div class="row">
                <div class="col-sm-6">
                  <div class="d-flex align-items-center">
                    <i class="fa fa-book fa-3x mr-3" style="color: #7963e5;"></i>
                    <div>
                      <h6 class="card-title">Total Subjects</h6>
                      <p class="card-text">8</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="d-flex align-items-center">
                    <i class="fa fa-graduation-cap fa-3x mr-3" style="color: #7963e5;"></i>
                    <div>
                      <h6 class="card-title">GPA</h6>
                      <p class="card-text">3.8</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="d-flex align-items-center">
                    <i class="fa fa-calendar fa-3x mr-3" style="color: #7963e5;"></i>
                    <div>
                      <h6 class="card-title">Attendance</h6>
                      <p class="card-text">87%</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="d-flex align-items-center">
                    <i class="fa fa-trophy fa-3x mr-3" style="color: #7963e5;"></i>
                    <div>
                      <h6 class="card-title">Achievements</h6>
                      <div class="achievements">
                        <span class="badge">Mathematics</span>
                        <span class="badge">Science</span>
                        <span class="badge">Coding</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>



</x-app-layout>
