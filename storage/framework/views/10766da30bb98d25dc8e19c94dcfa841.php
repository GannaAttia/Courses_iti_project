<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* Match homepage color scheme */
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
    }
  </style>
</head>
<body class="bg-light">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">eLEARNING</a>
      <div>
        <a href="index.html" class="btn btn-outline-light btn-sm">Home</a>
      </div>
    </div>
  </nav>

  <!-- Profile Section -->
  <div class="container py-5">
    <div class="row">
      <!-- Left Column -->
      <div class="col-md-4">
        <div class="card shadow-sm">
          <div class="card-body text-center">
            <!-- Profile Picture -->
            <img src="https://via.placeholder.com/150" class="rounded-circle mb-3 profile-pic" alt="User Photo">
            <h4 class="mb-0">John Doe</h4>
            <p class="text-muted">Student</p>
            <a href="#" class="btn btn-primary btn-sm">Edit Profile</a>
          </div>
        </div>
      </div>

      <!-- Right Column -->
      <div class="col-md-8">
        <div class="card shadow-sm mb-3">
          <div class="card-body">
            <h5 class="card-title">Profile Information</h5>
            <hr>
            <p><strong>Email:</strong> john@example.com</p>
            <p><strong>Phone:</strong> +123 456 789</p>
            <p><strong>City:</strong> New York</p>
          </div>
        </div>

        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">My Courses</h5>
            <hr>
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Web Development Bootcamp
                <span class="badge bg-success">Completed</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Python for Beginners
                <span class="badge bg-warning">In Progress</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                UI/UX Design Basics
                <span class="badge bg-secondary">Not Started</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="text-white text-center py-3">
    <p>&copy; 2025 eLEARNING. All Rights Reserved.</p>
  </footer>

</body>
</html>
<?php /**PATH C:\Users\yassa\Downloads\Courses_iti_project\resources\views/auth/profile.blade.php ENDPATH**/ ?>