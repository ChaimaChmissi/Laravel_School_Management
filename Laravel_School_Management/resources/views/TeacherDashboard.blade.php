<x-TeacherLayout>
    <x-slot name="header">
        <!-- Your header content here -->
    </x-slot>

    <main slot="main">
        <br>
        <br>
 
<!DOCTYPE html>
<html>
<head>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Teacher Dashboard</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <style>
            /* Custom styles */
            body {
                padding-top: 50px;
                background-color: #f7f7f9;
            }
    
            .dashboard-content {
                padding: 20px;
            }
    
            .card {
                border: none;
                background-color: #fff;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease;
            }
    
            .card:hover {
                transform: translateY(-5px);
            }
    
            .card-title {
                color: #333;
                font-size: 18px;
                font-weight: bold;
                margin-bottom: 15px;
            }
    
            .card-text {
                color: #666;
                font-size: 14px;
                margin-bottom: 20px;
            }
    
            .btn-primary {
                background-color: #8c61ff;
                border: none;
                transition: background-color 0.3s ease;
            }
    
            .btn-primary:hover {
                background-color: #704cff;
            }
        </style>
    </head>
    <body>
        <div class="dashboard-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa-clipboard-list"></i> Classes</h5>
                                <p class="card-text">Manage your classes and course materials.</p>
                                <a href="#" class="btn btn-primary">Go to Classes</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa-calendar-alt"></i> Schedule</h5>
                                <p class="card-text">View and manage your teaching schedule.</p>
                                <a href="#" class="btn btn-primary">View Schedule</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa-envelope"></i> Messages</h5>
                                <p class="card-text">Communicate with students and colleagues.</p>
                                <a href="#" class="btn btn-primary">Go to Messages</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    </html>
    
    <!-- Your main content here -->
    </main>
</x-TeacherLayout>
