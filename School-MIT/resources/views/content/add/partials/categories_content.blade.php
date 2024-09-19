<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
      <div class="row  g-4 mb-5">
        <div class="col-lg-12">
          <div class="card h-100 p-4">
            <h3>Add PC </h3>
              <p class="card-text">
                <form action="#" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="#" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image" id="image">
                    </div>
                    <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                      <label for="content" class="form-label">Description</label>
                      <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </form>
              </p>
            </div>
          </div>
        </div>
      </div>
    <!-- / Content -->
    <div class="content-backdrop fade"></div>
  </div>
