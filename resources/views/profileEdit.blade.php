<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .navbar {
      background-color: #06BBCC !important;
    }
    .btn-primary {
      background-color: #06BBCC;
      border-color: #06BBCC;
    }
    .btn-primary:hover {
      background-color: #0497a5;
      border-color: #0497a5;
    }
    .profile-pic {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border: 4px solid #06BBCC;
    }
    .card-title {
      color: #06BBCC;
    }
    footer {
      background-color: #06BBCC !important;
      margin-top: 200px;
    }
  </style>
</head>
<body class="bg-light">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">eLEARNING</a>
      <div>
        <a href="{{ route('user.index') }}" class="btn btn-outline-light btn-sm">Home</a>
      </div>
    </div>
  </nav>

 <form action="{{ route('user.profile.update') }}"  method="post"  enctype="multipart/form-data">
     @csrf
    @method('PUT')  

   
  <div class="mb-3">
    <label>Profile Image</label><br>
    <img src="{{ $student->image_url }}" class="rounded-circle mb-2" width="100">
    <input type="file" name="image" class="form-control">
</div>

      <button type="submit" class="btn btn-primary">Save Changes</button>
 </form>

  <!-- Footer -->
  <footer class="text-white text-center py-3">
    <p>&copy; 2025 eLEARNING. All Rights Reserved.</p>
  </footer>

</body>
</html>

