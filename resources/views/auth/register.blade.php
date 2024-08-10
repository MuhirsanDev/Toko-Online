@include('dashboard.components.header')

<!-- Page CSS -->
<link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}" />
</head>

<body>
    <!-- Content -->
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register Card -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="index.html" class="app-brand-link gap-2">
                                <span class="app-brand-logo demo">
                                    <!-- SVG Logo -->
                                </span>
                                <span class="app-brand-text demo text-body fw-bolder">Fruitables</span>
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-2">Adventure starts here 🚀</h4>
                        <p class="mb-4">Make your app management easy and fun!</p>

                        <form id="formAuthentication" class="mb-3" method="POST" action="{{ route('register') }}">
                            @csrf 
                            <!-- Name -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    name="name"
                                    placeholder="Enter your name"
                                    value="{{ old('name') }}"
                                    autofocus
                                />
                                @if ($errors->has('name'))
                                    <div class="invalid-feedback d-block">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                            </div>

                            <!-- Email Address -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    placeholder="Enter your email"
                                    value="{{ old('email') }}" 
                                />
                                @if ($errors->has('email'))
                                    <div class="invalid-feedback d-block">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>

                            <!-- Password -->
                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="password">Password</label>
                                <div class="input-group input-group-merge">
                                    <input
                                        type="password"
                                        id="password"
                                        class="form-control"
                                        name="password"   
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password"
                                    />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                                @if ($errors->has('password'))
                                    <div class="invalid-feedback d-block">
                                        {{ $errors->first('password') }}
                                    </div>
                                @endif
                            </div>

                            <!-- Confirm Password -->
                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="password_confirmation">Confirm Password</label>
                                <div class="input-group input-group-merge">
                                    <input
                                        type="password"
                                        id="password_confirmation"
                                        class="form-control"
                                        name="password_confirmation"                                    
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password"
                                    />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                                @if ($errors->has('password_confirmation'))
                                    <div class="invalid-feedback d-block">
                                        {{ $errors->first('password_confirmation') }}
                                    </div>
                                @endif
                            </div>

                            <!-- Terms and Conditions -->
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                                    <label class="form-check-label" for="terms-conditions">
                                        I agree to
                                        <a href="#">privacy policy & terms</a>
                                    </label>
                                </div>
                            </div>

                            <button class="btn btn-primary d-grid w-100">Sign up</button>
                        </form>

                        <p class="text-center">
                            <span>Already have an account?</span>
                            <a href="{{ route('login') }}">
                                <span>Sign in instead</span>
                            </a>
                        </p>
                    </div>
                </div>
                <!-- Register Card -->
            </div>
        </div>
    </div>

@include('dashboard.components.footer')
