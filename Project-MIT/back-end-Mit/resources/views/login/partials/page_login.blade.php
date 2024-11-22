<div class="container-xxl ">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Register -->

            <div class="card">
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

                <div class="card-body">
                    <!-- Logo -->
                    <div class="alert">

                    </div>
                    <div class="app-brand justify-content-center">
                        <a href="index.html" class="app-brand-link">
                            <img src="{{ asset('img/rac_logo_admin.png') }}" class="img-fluid" alt=""
                                style="height: 15vh;object-fit: cover">
                        </a>
                    </div>
                    <!-- /Logo -->
                    <form id="formAuthentication" class="mb-3" action="{{ route('login.post') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                 
                            <label for="email" class="form-label">Email or Username</label>
                            <input type="text" class="form-control" id="email" name="email"
                                placeholder="Enter your email or username" autofocus required />
                            @if ($errors->has('email'))
                                <span class="text-danger">
                                    {{ $errors->first('email') }}
                                </span>
                            @endif
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password">Password</label>
                                <a href="auth-forgot-password-basic.html">
                                    <small>Forgot Password?</small>
                                </a>
                            </div>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" name="password"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password" required />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                @if ($errors->has('password'))
                                    <span class="text-danger">
                                        {{ $errors->first('password') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember-me" />
                                <label class="form-check-label" for="remember-me"> Remember Me </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary d-grid w-100">
                                <span>Sign</span>
                            </button>
                        </div>
                    </form>

                    <p class="text-center">
                        <span>New on our platform?</span>
                        <a href="/register">
                            <span>Create an account</span>
                        </a>
                    </p>
                </div>
            </div>
            <!-- /Register -->
        </div>
    </div>
</div>
