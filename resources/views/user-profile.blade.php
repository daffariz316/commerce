<!-- resources/views/auth/profile.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- Link untuk CSS styling, misalnya bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="card mx-auto" style="max-width: 400px;">
            <div class="card-header text-center">
                <h2>User Profile</h2>
            </div>
            <div class="card-body">
                <p class="text-center"><strong>Name:</strong> {{ $user->username }}</p>
                <p class="text-center"><strong>Email:</strong> {{ $user->email }}</p>
                <p class="text-center"><strong>Phone:</strong> {{ $user->phone }}</p>
                <!-- Add other profile details as needed -->
                <div class="text-center">
                    <a href="{{ route('user.edit-profile-form') }}" class="btn btn-primary">Edit Profile</a>
                    <a href="{{ route('user.logout') }}" class="btn btn-danger">Sign Out</a>
                    <a href="{{ route('user.dashboard') }}" class="btn btn-secondary">Back to Home</a> <!-- Tambahkan tombol balik ke home -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>
