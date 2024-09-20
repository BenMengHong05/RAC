<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="car-header d-flex align-items-center justify-content-between" style="min-height: 7vh">
                <h5 class="m-0 p-0 ps-2">Table Innovation</h5>
                <a href="#" class="mx-2 ">
                    <input type="button" value="Add" class="btn btn-success" style="border-radius: 0;">
                </a>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0 ">
                        <tr>
                            <td>
                                1
                            </td>
                            <td>title 1</td>
                            <th>description 1</th>
                            <td>
                                <input type="file" name="image" id="image">
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
