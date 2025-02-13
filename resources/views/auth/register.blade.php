<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ثبت نام</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{ asset('plugins/global/plugins.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />

</head>

<body style="direction: rtl">
    <div class="container">
        <div class="card mt-7">
            <div class="card-header">
                <div class="card-title mb-12 mt-12">
                    <span class="me-4">
                        <i class="fas fa-edit text-black"></i>
                    </span>
                    <h2>ثبت نام</h2>
                </div>
            </div>
            <div class="card-body pt-5">
                <form id="main_form" class="form" method="post" action="{{ route('user.register') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div id="user_create_inputs">
                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                            <div class="col">
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span class="required">نام</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="نام کوچک (اجباری)"></i>
                                    </label>
                                    <input type="text" class="form-control form-control-solid" name="name"
                                        id="name" />
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span class="required">نام خانوادگی</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="نام خانوادگی (اجباری)"></i>
                                    </label>
                                    <input type="text" class="form-control form-control-solid" name="family"
                                        id="family" />
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                            <div class="col">
                                <div class="mb-7">
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span class="required">نام کاربری</span>
                                    </label>
                                    <input type="text" class="form-control form-control-solid" name="username"
                                        id="username" />
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-7">
                                    <label class="fs-6 fw-bold mb-3">
                                        <span class="required">رمزعبور</span>
                                    </label>
                                    <input type="password" class="form-control form-control-solid" name="password"
                                        id="password" placeholder="رمزعبور جدید خود را وارد کنید">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                            <div class="col">
                                <div class="mb-7">
                                    <label class="fs-6 fw-bold mb-3">
                                        <span class="required">تکرار رمزعبور</span>
                                    </label>
                                    <input type="password" class="form-control form-control-solid"
                                        name="password_confirmation" id="confirmPassword"
                                        placeholder="تکرار رمزعبور خود را وارد کنید">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-7">
                                    <label class="fs-6 fw-bold mb-3">
                                        <span>تصویر کاربر</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title=" file types: png, jpg, jpeg."></i>
                                    </label>
                                    <input class="form-control form-control-solid" type="file" name="pic"
                                        id="pic">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="separator mb-6"></div>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('login') }}">
                            <button type="button" data-kt-contacts-type="cancel"
                                class="btn btn-light me-3">بازگشت</button>
                        </a>
                        <button id="form_submit" type="button" data-kt-contacts-type="submit"
                            class="btn btn-primary">
                            <span class="indicator-label">ذخیره</span>
                            <span class="indicator-progress">لطفا صبر کنید...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('js/library/register.js') }}"></script>
    <script>
        @if (Session::exists('status'))
            Swal.fire({
                html: `{{ Session::get('status')['message'] }}`,
                icon: @if (Session::pull('status')['status'] == 200)
                    "success"
                @else
                    "error"
                @endif ,
                buttonsStyling: false,
                showCancelButton: true,
                showConfirmButton: false,
                cancelButtonText: "باشه",
                customClass: {
                    cancelButton: "btn btn-primary",
                }
            });
        @endif
    </script>
</body>

</html>
