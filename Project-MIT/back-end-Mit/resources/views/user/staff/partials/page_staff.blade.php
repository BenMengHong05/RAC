<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
            @if (Session::has('staffs'))
            <div class="alert alert-success">
                {{ Session::get('staffs') }}
            </div>
        @endif
        @if (Session::has('delete'))
            <div class="alert alert-danger">
                {{ Session::get('delete') }}
            </div>
        @endif
            <div class="car-header d-flex align-items-center justify-content-between" style="min-height: 7vh">
                <div class="add d-flex align-items-center " style="width: 60%">
                    <h5 class="m-0 p-0 ps-2" style="font-family: sans-serif;">Staff</h5>
                    <form action="{{ route('staff_create')}}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-success ps-4 px-4 mx-2">
                            Add
                        </button>
                    </form>
                </div>
                <form action="{{ route('staff_search') }}" method="GET" class="d-flex">
                    <input type="text" class="form-control " name="search" value="{{ request('search') }}" id="search" placeholder="Search..." style="width: 100%">
                    <button class="btn btn-primary mx-2 " type="submit">Search</button>

                </form>

            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Img</th>
                            <th>Name</th>
                            <th>Sex</th>
                            <th>Dob</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0 overflow-auto">
                        @if($staffs->isEmpty())
                        <tr>
                            <td colspan="7" class="text-center">No teachers found.</td>
                        </tr>
                        @else
                        @foreach ($staffs as $index => $staff)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td><img src="{{ asset('images/' . $staff->image) }}" alt="" class="" style="width: 10vh;height: 10vh"></td>
                                <td>{{ $staff->name }}</td>
                                <td>{{ $staff->sex }}</td>
                                <td>{{ $staff->dob }}</td>
                                <td>{{ $staff->email }}</td>
                                <td>{{ $staff->phone }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('staff_show', $staff->id) }}"><i class="bx bx-duplicate me-1"></i>View</a>
                                            <a class="dropdown-item" href="{{route('staff_edit', $staff->id)}}"><i class="bx bx-edit-alt me-1"></i>Edit</a>
                                            <form id="delete-form-{{ $staff->id }}" action="{{ route('staff_delete', ['id' => $staff->id]) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="dropdown-item" onclick="confirmDelete({{ $staff->id }})">
                                                    <i class="bx bx-trash me-1"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmDelete(teacherId) {
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
                document.getElementById('delete-form-' + teacherId).submit();
                Swal.fire({
                    title: "Deleted!",
                    text: "The teacher has been deleted.",
                    icon: "success"
                });
            }
        });
    }
</script>
