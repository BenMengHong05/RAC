<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register Card -->
        <div class="card" style="width: 100%;min-height: 65vh">
            @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif

                @if (Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                @endif
          <div class="card-body d-flex flex-column  justify-content-center ">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <a href="index.html" class="app-brand-link gap-2">
                <img src="{{asset('img/rac_logo_admin.png')}}" class="img-fluid" alt="" style="height: 15vh;object-fit: cover">
              </a>
            </div>
            <!-- /Logo -->
            <form id="formAuthentication" class="mb-3" action="{{route("register.post")}}" method="POST">
                @csrf
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input
                  type="text"
                  class="form-control"
                  id="username"
                  name="username"
                  placeholder="Enter your username"
                  autofocus  required />
                  @if ($errors->has('username'))
                    <span class="text-danger">
                        {{ $errors->first('username')}}
                    </span>
                  @endif
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text"
                class="form-control"
                id="email"
                name="email"
                placeholder="Enter your email" required />
                @if ($errors->has('email'))
                    <span class="text-danger">
                        {{ $errors->first('email')}}
                    </span>
                @endif
              </div>
              <div class="mb-3 form-password-toggle">
                <label class="form-label" for="password">Password</label>
                <div class="input-group input-group-merge">
                  <input
                    type="password"
                    id="password"
                    class="form-control"
                    name="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password" required />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    @if ($errors->has('password'))
                        <span class="text-danger">
                            {{ $errors->first('password')}}
                        </span>
                    @endif
                </div>
              </div>
              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                  <label class="form-check-label" for="terms-conditions">
                    I agree to
                    <a href="javascript:void(0);">privacy policy & terms</a>
                  </label>
                </div>
              </div>
              <button class="btn btn-primary d-grid w-100 d-grid w-100" type="submit">
                <span>Sign up</span>
              </button>
            </form>
            <p class="text-center">
              <span>Already have an account?</span>
              <a href="/auth">
                <span>Sign in instead</span>
              </a>
            </p>
          </div>
        </div>
        <!-- Register Card -->
      </div>
    </div>
  </div>
