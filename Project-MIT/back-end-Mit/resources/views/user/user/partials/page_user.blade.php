<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-4">
            <h2 class="m-0 p-0  text-muted" >{{__('messages.Users')}}  / <span class="text-dark">{{__('messages.Users')}} </span></h2>
        </div>
        <div class="card">
            @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
            @if (Session::has('users'))
            <div class="alert alert-success">
                {{ Session::get('users') }}
            </div>
        @endif
        @if (Session::has('delete'))
            <div class="alert alert-danger">
                {{ Session::get('delete') }}
            </div>
        @endif
            <div class="car-header d-flex mt-3 align-items-center justify-content-between" style="min-height: 7vh">
                <div class="add d-flex align-items-center gap-4 ms-4 " style="width: 60%">
                    <form action="{{ route('user_search') }}" method="GET" class="d-flex">
                        <input type="text" class="form-control " name="search" value="{{ request('search') }}"
                            id="search" placeholder="{{__('messages.Search')}}" style="width: 100%">
                        <button class="btn btn-primary mx-2 ps-3 px-3 " style="white-space: nowrap" type="submit">
                            <i class='bx bx-search-alt'></i>
                            {{__('messages.Search')}}
                        </button>
                    </form>
                </div>
                <form action="{{ route('user_create') }}" class="ps-2 " method="GET">
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0 overflow-auto" id="search-table">
                        @if($users->isEmpty())
                        <tr>
                            <td colspan="5" class="text-center">No users found.</td>
                        </tr>
                        @else
                        @foreach ($users as $index => $user)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                {{-- <td>{{ $user->password }}</td> --}}
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('user_show', $user->id) }}"><i class="bx bx-duplicate me-1"></i>{{__('messages.Detail')}} </a>
                                            <a class="dropdown-item" href="{{route('user_edit', $user->id)}}"><i class="bx bx-edit-alt me-1"></i>{{__('messages.Edit')}} </a>
                                            <form id="delete-form-{{ $user->id }}" action="{{ route('user_delete', ['id' => $user->id]) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="dropdown-item text-danger " onclick="confirmDelete({{ $user->id }})">
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
    function confirmDelete(userId) {
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
                document.getElementById('delete-form-' + userId).submit();
                Swal.fire({
                    title: "Deleted!",
                    text: "The user has been deleted.",
                    icon: "success"
                });
            }
        });
    }
</script>
