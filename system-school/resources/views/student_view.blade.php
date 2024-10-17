<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Student Details</h1>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title" style="min-height: 3vh">Name: {{ $student->name }}</h5>
                <p class="card-text" style="min-height: 5vh">Date of Birth: {{ $student->dob }}</p>
                <p class="card-text" style="min-height: 5vh">Phone: {{ $student->phone }}</p>
            </div>
        </div>
        <a href="{{ route('student') }}" class="btn btn-primary mt-3">Back to List</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
