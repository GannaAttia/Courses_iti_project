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
        <a href="{{ route('user.courses.course') }}" class="btn btn-outline-light btn-sm">Home</a>
      </div>
    </div>
  </nav>

       @if ($errors->any())

                <div class="alert alert-danger">
                  @foreach ($errors->all() as $error)
                      <li>{{$error}}</li>
                  @endforeach
                </div>

                @endif

 <form novalidate action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data" class="container mt-5 bg-white p-4 rounded shadow">
    @csrf
    @method('PUT')

    <h3 class="mb-4 text-center text-primary">Edit Profile</h3>

    <div class="text-center mb-3">
        <img src="{{ $student->image_url }}" class="rounded-circle profile-pic mb-2" alt="Profile Image">
    </div>

    <div class="mb-3">
        <label class="form-label">Full Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $student->name) }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control" value="{{ old('phone', $student->phone) }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Profile Image</label>
        <input type="file" name="image" class="form-control">
    </div>

    <div class="d-grid">
        <button type="submit" class="btn btn-primary btn-lg">Save Changes</button>
    </div>
</form>


  <!-- Footer -->
  <footer class="text-white text-center py-3">
    <p>&copy; 2025 eLEARNING. All Rights Reserved.</p>
  </footer>

</body>
</html>

