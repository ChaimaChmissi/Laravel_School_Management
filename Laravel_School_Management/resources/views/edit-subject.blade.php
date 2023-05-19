



<x-AdminLayout>
    <x-slot name="header">
        <main slot="main">
            <br>
            <br>


<!DOCTYPE html>
<html>
<head>
    <title>Teachers List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Edit Subject</h1>
    @if (session('success'))
    <div class="alert alert-success" style="width: 50%">
        {{ session('success') }}
    </div>
@endif
    
    <form method="POST" action="{{ url('update-subject/'.$subject->id) }}">
        @csrf 
        <div class="mb-3">
            <label class="form-label">Subject Name</label>
            <input type="name" class="form-control" name="name" value="{{ $subject->name }}">
        </div>
        
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
    

 
</body>
</html>




 
</x-AdminLayout>
<style>
    body {
  font-family: "Roboto", sans-serif;
  background-color: #efefef;
  line-height: 1.9;
  color: #8c8c8c;
  position: relative; }

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  font-family: "Roboto", sans-serif;
  color: #000; }

a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease; }
  a, a:hover {
    text-decoration: none !important; }

.text-black {
  color: #000; }

.content {
  padding: 7rem 0; }

.heading {
  font-size: 2.5rem;
  font-weight: 900; }

.form-control {
  border: none;
  border-bottom: 1px solid #ccc;
  padding-left: 0;
  padding-right: 0;
  border-radius: 0;
  background: none; }
  .form-control:active, .form-control:focus {
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-color: #000; }

.col-form-label {
  color: #000;
  font-size: 13px; }

.btn, .form-control, .custom-select {
  height: 45px;
  border-radius: 0; }

.custom-select {
  border: none;
  border-bottom: 1px solid #ccc;
  padding-left: 0;
  padding-right: 0;
  border-radius: 0; }
  .custom-select:active, .custom-select:focus {
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-color: #000; }

.btn {
  border: none;
  border-radius: 0;
  font-size: 11px;
  letter-spacing: .2rem;
  text-transform: uppercase;
  border-radius: 30px !important; }
  .btn.btn-primary {
    border-radius: 30px;
    background: #4d80e4;
    color: #fff;
    -webkit-box-shadow: 0 15px 30px 0 rgba(77, 128, 228, 0.2);
    box-shadow: 0 15px 30px 0 rgba(77, 128, 228, 0.2); }
  .btn:hover {
    color: #fff; }
  .btn:active, .btn:focus {
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none; }

.contact-wrap {
  -webkit-box-shadow: 0 0px 20px 0 rgba(0, 0, 0, 0.2);
  box-shadow: 0 0px 20px 0 rgba(0, 0, 0, 0.2);
  background: #fff; }
  .contact-wrap .col-form-label {
    font-size: 14px;
    color: #b3b3b3;
    margin: 0 0 10px 0;
    display: inline-block;
    padding: 0; }
  .contact-wrap .form, .contact-wrap .contact-info {
    padding: 40px; }
  .contact-wrap .contact-info {
    color: rgba(255, 255, 255, 0.5); }
    .contact-wrap .contact-info ul li {
      margin-bottom: 15px;
      color: rgba(255, 255, 255, 0.5); }
      .contact-wrap .contact-info ul li .wrap-icon {
        font-size: 20px;
        color: #fff;
        margin-top: 5px; }
  .contact-wrap .form {
    background: #fff; }
    .contact-wrap .form h3 {
      color: #000;
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 30px; }
  .contact-wrap .contact-info {
    height: 100vh;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat; }
    .contact-wrap .contact-info a {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0; }
    @media (max-width: 1199.98px) {
      .contact-wrap .contact-info {
        height: 400px !important; } }
    .contact-wrap .contact-info h3 {
      color: #fff;
      font-size: 20px;
      margin-bottom: 30px; }

label.error {
  font-size: 12px;
  color: red; }

#message {
  resize: vertical; }

#form-message-warning, #form-message-success {
  display: none; }

#form-message-warning {
  color: #B90B0B; }

#form-message-success {
  color: #55A44E;
  font-size: 18px;
  font-weight: bold; }

.submitting {
  float: left;
  width: 100%;
  padding: 10px 0;
  display: none;
  font-weight: bold;
  font-size: 12px;
  color: #000; }

</style>