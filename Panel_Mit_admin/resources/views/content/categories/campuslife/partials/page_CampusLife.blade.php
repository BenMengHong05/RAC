
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
            @if (Session::has('campuslifes'))
            <div class="alert alert-success">
                {{ Session::get('campuslifes') }}
            </div>
        @endif
        @if (Session::has('delete'))
            <div class="alert alert-danger">
                {{ Session::get('delete') }}
            </div>
        @endif
            <div class="car-header d-flex align-items-center justify-content-between" style="min-height: 7vh">
                <div class="add d-flex align-items-center " style="width: 60%">
                    <h5 class="m-0 p-0  ps-4" style="font-family: sans-serif;">Campuslife</h5>
                    <form action="{{ route('campuslife_create')}}" class="ps-2" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-success ps-4 px-4 mx-2">
                            Add
                        </button>
                    </form>
                </div>
                <form action="{{ route('campuslife_search') }}" method="GET" class="d-flex">
                    <input type="text" class="form-control " name="search" value="{{ request('search') }}" id="search" placeholder="Search..." style="width: 100%">
                    <button class="btn btn-primary mx-2 " type="submit">Search</button>

                </form>

            </div>
            <div class="table-responsive  text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Img</th>
                            <th>Title</th>
                            <th>description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0 overflow-auto">

                        @if ($campuslifes->isEmpty())
                            <tr>
                                <td colspan="5" class="text-center">No campuslifes found.</td>
                            </tr>
                        @else
                            @foreach ($campuslifes as $index => $campuslife)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td><img src="{{ asset('images/' . $campuslife->image) }}" alt=""
                                            style="width: 10vh;height: 10vh"></td>
                                    <td>{{ $campuslife->title }}</td>
                                    <td>{{ $campuslife->description }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                    href="{{ route('campuslife_show', $campuslife->id) }}"><i
                                                        class="bx bx-duplicate me-1"></i>View</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('campuslife_edit', $campuslife->id) }}"><i
                                                        class="bx bx-edit-alt me-1"></i>Edit</a>
                                                <form id="delete-form-{{ $campuslife->id }}"
                                                    action="{{ route('campuslife_delete', ['id' => $campuslife->id]) }}"
                                                    method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="dropdown-item"
                                                        onclick="confirmDelete({{ $campuslife->id }})">
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
    function confirmDelete(campuslifeId) {
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
                document.getElementById('delete-form-' + campuslifeId).submit();
                Swal.fire({
                    title: "Deleted!",
                    text: "The campuslife has been deleted.",
                    icon: "success"
                });
            }
        });
    }
</script>
