@extends('auth.Auth')

@section('title')
    <title>Login | Aplikasi</title>
@endsection

@section('form')
    <div class="d-flex flex-column flex-root" id="kt_app_root"
        style="background-color: #E8EDFF; min-height: 100vh; padding: 25px;">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid mx-auto w-100 shadow-lg rounded-4 overflow-hidden"
            style="background-color: #ffffff; height: fit-content; min-height: calc(100vh - 50px);">

            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 bg-white border-end"
                style="border-color: #f1f1f1 !important;">
                <div class="d-flex flex-center flex-column flex-column-fluid p-10 py-lg-15">
                    <div class="w-100" style="max-width: 400px;">

                        <div class="text-center mb-8">
                            <div class="d-flex flex-center">
                                <img alt="Logo" src="{{ asset('assets/media/logos/logo.png') }}" class="h-40px" />
                            </div>
                        </div>

                        <div class="text-center mb-10">
                            <h1 class="fs-1 mb-2" style="color: #3e91fd; font-weight: 800;">Sign In</h1>

                            <div class="text-gray-400 fw-semibold fs-6">
                                Please sign in to your account.
                                <div class="mt-2">
                                    Don't have an account?
                                    <a href="/register" class="fw-bold" style="color: #3e91fd; text-decoration: none;">
                                        Sign up here
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="mb-9">
                            <a href="#"
                                class="btn btn-flex btn-light-primary border-0 fw-bold px-6 py-4 w-100 flex-center"
                                style="background-color: #F0F4FF !important; color: #181C32; border-radius: 12px;">
                                <img alt="Logo"
                                    src="https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/brand-logos/google-icon.svg"
                                    class="h-20px me-3" />
                                Sign In with Google
                            </a>
                        </div>

                        <div class="d-flex align-items-center mb-10">
                            <div class="border-bottom border-gray-200 w-100"></div>
                            <span class="fw-semibold text-gray-400 fs-7 mx-4 text-nowrap">Or sign in with e-mail</span>
                            <div class="border-bottom border-gray-200 w-100"></div>
                        </div>

                        <form class="form w-100" action="/login" method="post">
                            @csrf
                            @if (session()->has('loginError'))
                                <div class="alert alert-danger border-0 bg-light-danger text-danger mb-5 fs-7 rounded-3"
                                    role="alert">
                                    {{ session('loginError') }}
                                </div>
                            @endif

                            <div class="fv-row mb-5">
                                <input type="email" name="email" placeholder="Email"
                                    class="form-control form-control-lg bg-light border-0 @error('email') is-invalid @enderror"
                                    style="background-color: #F6F8FA !important; border-radius: 10px; padding: 1.1rem; box-shadow: inset 2px 2px 5px rgba(0, 0, 0, 0.05); color: #3F4254; font-weight: 500;"
                                     />
                            </div>

                            <div class="fv-row mb-8">
                                <input type="password" name="password" placeholder="Password"
                                    class="form-control form-control-lg bg-light border-0 @error('password') is-invalid @enderror"
                                    style="background-color: #F6F8FA !important; border-radius: 10px; padding: 1.1rem; box-shadow: inset 2px 2px 5px rgba(0, 0, 0, 0.05); color: #3F4254; font-weight: 500;"
                                     />
                            </div>

                            <button type="submit" class="btn btn-lg w-100 mb-8 py-4 shadow-sm"
                                style="background-color: #3e91fd; color: white; border-radius: 10px; font-weight: 700;">
                                Sign In
                            </button>
                        </form>

                        <div class="text-center text-gray-400 fw-medium fs-8 px-5">
                            I agree to abide by templatana's <a href="#"
                                class="text-decoration-underline text-gray-500 fw-bold">Terms of Service</a>
                            and its <a href="#" class="text-decoration-underline text-gray-500 fw-bold">Privacy
                                Policy</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-column flex-lg-row-auto w-lg-50 position-relative"
                style="background-color: #E8EDFF; box-shadow: inset 15px 0 20px -15px rgba(0,0,0,0.05);">

                <div class="d-flex flex-center w-100 h-100 p-10 p-lg-20">
                    <img class="mw-100" src="{{ asset('assets/media/illustrations/sketchy-1/17.png') }}"
                        style="max-height: 550px; width: 85%; object-fit: contain; filter: drop-shadow(10px 10px 30px rgba(0,0,0,0.08));"
                        alt="Illustration" />
                </div>
            </div>

        </div>
    </div>

    <style>
        /* Mengatur jarak outline yang konsisten di semua sisi */
        #kt_app_root {
            padding: 25px !important;
        }

        @media (min-width: 992px) {
            #kt_app_root {
                padding: 40px !important;
                /* Memberikan bingkai biru yang lebih lebar di layar desktop */
            }
        }

        .btn:hover {
            filter: brightness(1.05);
            transform: translateY(-1px);
            transition: all 0.2s;
        }

        a:hover {
            color: #2574d3 !important;
            /* Biru yang sedikit lebih gelap saat di-hover */
            text-decoration: underline !important;
        }
    </style>
@endsection
