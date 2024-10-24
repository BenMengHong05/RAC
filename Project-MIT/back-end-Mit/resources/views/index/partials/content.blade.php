<div class="container-lg flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-lg-12 mb-4 order-0">
        <div class="card">
          <div class="d-flex align-items-end row">
            <div class="col-sm-7">
              <div class="card-body">
                <h5 class="card-title text-primary"> Welcome in Admint Panel MIT</h5>
                <p class="mb-4">
                  You have done <span class="fw-medium">72%</span> more sales today. Check your new badge in
                  your profile.
                </p>
                <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
              </div>
            </div>
            <div class="col-sm-5 text-center text-sm-left">
              <div class="card-body pb-0 px-0 px-md-4">
                <img
                  src="{{asset('img/illustrations/man-with-laptop-light.png')}}"
                  height="140"
                  alt="View Badge User"
                  data-app-dark-img="illustrations/man-with-laptop-dark.png"
                  data-app-light-img="illustrations/man-with-laptop-light.png" />
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <div class="row d-flex align-items-center justify-content-between">
    <div class="col-lg-4 order-2 order-md-3 order-lg-2 mb-4">
        <div class="card   h-100">
            <div class="total-student p-4 d-flex flex-column align-items-center justify-content-center ">
                <h4 class="card-title m-0 p-0  text-primary " >Total Students</h4>
                <h2 class="card-subtitle m-0 p-0  text-secondary fs-3 mt-4">{{$students}}</h2>
            </div>
        </div>
      </div>
      <div class="col-lg-4 order-2 order-md-3 order-lg-2 mb-4">
        <div class="card  h-100">
            <div class="total-student p-4 d-flex flex-column align-items-center justify-content-center ">
                <h4 class="card-title m-0 p-0   text-primary">Total Staff</h4>
                <h2 class="card-subtitle m-0 p-0  text-secondary fs-3 mt-4">{{ $staffs }}</h2>
            </div>
        </div>
      </div>
      <div class="col-lg-4 order-2 order-md-3 order-lg-2 mb-4">
        <div class="card   h-100">
            <div class="total-student p-4 d-flex flex-column align-items-center justify-content-center ">
                <h4 class="card-title m-0 p-0   text-primary">Total Teacher</h4>
                <h2 class="card-subtitle m-0 p-0  text-secondary fs-3 mt-4">{{$teachers}}</h2>
            </div>
        </div>
      </div>
  </div>
  <div class="row">
    <div class="col-lg-12 order-2 order-md-3 order-lg-2 ">
        <div class="card bg-danger h-100">
            <figure class="m-0 p-0 w-100 order-2">
                <img src="{{asset('images/bannerschool-MIT.jpg')}}" alt="" class="img-fluid" style="width: 100%;height: 40vh;object-fit: cover">
            </figure>
        </div>
      </div>
  </div>
</div>
