<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="car-header d-flex align-items-center justify-content-between" style="min-height: 7vh">
                <h5 class="m-0 p-0 ps-2">Staff</h5>
                <button type="submit" class="btn btn-success ps-4 px-4 mx-2"><a href="/add"
                        class="text-white">Staff</a></button>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Img</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0 ">
                        <tr>
                            <td>
                                1
                            </td>
                            <td>Reth Virak</td>
                            <td><img src="{{ asset('img/elements/2.jpg') }}" class="m-0 p-0 img-fluid"
                                    alt="Placeholder image" style="width: 5vh"></td>
                            <td>
                                rethvirak@gmail.com
                            </td>
                            <td>
                                0960308944
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="/add"><i class="bx bx-duplicate me-1"></i>Add
                                        </a>
                                        <a class="dropdown-item" href="/edit"><i
                                                class="bx bx-edit-alt me-1"></i>Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>Seng Sopul</td>
                            <td>
                                <img src="{{ asset('img/elements/1.jpg') }}" class="m-0 p-0 img-fluid"
                                    alt="Placeholder image" style="width: 5vh">
                            </td>
                            <td>
                                sengsopul@gmail.com
                            </td>
                            <td>
                                0960308934
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="/add"><i class="bx bx-duplicate me-1"></i>Add
                                        </a>
                                        <a class="dropdown-item" href="/edit"><i
                                                class="bx bx-edit-alt me-1"></i>Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
