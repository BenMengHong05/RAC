<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>


    <div class="container">
        <div class="d-flex align-items-center ">
            <div style="width: 70%">
                <h2>Student</h2>
                <form action="{{route('student_create')}}" class="py-2" method="GET">
                    <button type="submit" class="btn btn-success">add</button>
                </form>
            </div>
            <div class="d-flex gap-2" style="width: 30%">
                <form action="{{ route('student_search') }}" method="GET">
                    <div class="input-group mb-3">
                        <input type="text" name="search" class="form-control" placeholder="Search by name" value="{{ request('search') }}">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
                @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('delete'))
            <div class="alert alert-danger">
                {{ session('delete') }}
            </div>
        @endif
        <table class="table">
            <thead>
                <th>No</th>
                <th>Name</th>
                <th>dob</th>
                <th>Phone</th>
                <th class="">Action</th>
            </thead>
            <tbody>
                @if($students->isEmpty())
                <tr>
                    <td colspan="5" class="text-center">No students found.</td>
                </tr>
                @else
                @foreach($students as $index=>$student)
                    <tr >
                        <td>{{$index + 1}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->dob}}</td>
                        <td>{{$student->phone}}</td>
                        <td class="d-flex gap-2">
                            <form action="{{ route('student_delete', $student->id) }}" method="POST" id="delete-form-{{ $student->id }}">
                                @csrf
                                @method("DELETE")
                                <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $student->id }})">Delete</button>
                            </form>
                            <a href="{{route('student_create')}}">
                                <button type="button" class="btn btn-success">add</button>
                            </a>

                            <a href="{{ route('student_edit', $student->id) }}">
                                <button type="button" class="btn btn-warning">Edit</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
                @endif
            </tbody>
        </table>



        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            function confirmDelete(studentId) {
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Submit the form after confirmation
                        document.getElementById('delete-form-' + studentId).submit();
                        Swal.fire({
                            title: "Deleted!",
                            text: "The student has been deleted.",
                            icon: "success"
                        });
                    }
                });
            }
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
