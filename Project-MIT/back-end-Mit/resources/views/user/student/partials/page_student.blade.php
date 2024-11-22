<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-4">
            <h2 class="m-0 p-0 text-muted">{{__('messages.Users')}}  / <span class="text-dark">{{__('messages.Students')}} </span></h2>
        </div>
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
            <div class="car-header d-flex mt-3 align-items-center justify-content-between" style="min-height: 7vh">
                <div class="add d-flex align-items-center gap-4 ms-4 " style="width: 60%">
                    <form action="{{ route('student_search') }}" method="GET" class="d-flex">
                        <input type="text" class="form-control " name="search" value="{{ request('search') }}"
                            id="search" placeholder="Search..." style="width: 100%">
                        <button class="btn btn-primary mx-2 ps-3 px-3 " style="white-space: nowrap" type="submit">
                            <i class='bx bx-search-alt'></i>
                            {{__('messages.Search')}}
                        </button>
                    </form>
                </div>
                <form action="{{ route('student_create') }}" class="ps-2 " method="GET">
                    @csrf
                    <button type="submit" class="btn btn-success ps-3 px-3 mx-4">
                        <i class='bx bx-plus'></i>
                        {{__('messages.Add')}}
                    </button>
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
                    <tbody class="table-border-bottom-0 overflow-auto" id="search-table">
                        @if($students->isEmpty())
                        <tr>
                            <td colspan="7" class="text-center">No teachers found.</td>
                        </tr>
                        @else
                        @foreach ($students as $index => $student)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td><img src="{{ asset('images/' . $student->image) }}" alt="" class="" style="width: 10vh;height: 10vh"></td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->sex }}</td>
                                <td>{{ $student->dob }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->phone }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('student_show', $student->id) }}"><i class="bx bx-duplicate me-1"></i>{{__('messages.Detail')}} </a>
                                            <a class="dropdown-item" href="{{route('student_edit', $student->id)}}"><i class="bx bx-edit-alt me-1"></i>{{__('messages.Edit')}} </a>
                                            <form id="delete-form-{{ $student->id }}" action="{{ route('student_delete', ['id' => $student->id]) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="dropdown-item text-danger" onclick="confirmDelete({{ $student->id }})">
                                                    <i class="bx bx-trash me-1"></i> {{__('messages.Delete')}}
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
