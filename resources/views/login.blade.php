<!-- @format -->

<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>أكورد | تسجيل الدخول</title>
    <link
      rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}" />
  </head>
  <body>
    <div class="login-section">
      <div class="container">
        <div class="row g-0">
          <div class="col-lg-6 col-md-6 col-sm-12 right-side">
            <img src="{{ asset('assets/img/logo.png') }}" alt="" class="logo" width="140" />
            <h1 class="title-login text-center">تسجيل الدخول</h1>
            <form>
              <div class="mb-3">
                <label class="form-label inputs">رقم الجوال</label>
                <input
                  type="text"
                  class="form-control phone-number bg-light w-100 input"
                  placeholder=" رقم الجوال " />
              </div>
              <div class="mb-3">
                <label class="form-label inputs">كلمة المرور</label>
                <input
                  type="text"
                  class="form-control fullname bg-light w-100 input"
                  placeholder="كلمة المرور" />
              </div>

              <a href="#" class="forget-password">نسيت كلمة المرور</a> <br />
              <button
                class="btn-login text-center d-flex justify-content-center align-items-center border-0 text-light w-100">
                تسجيل الدخول
              </button>
              <a href="#" class="donot-have-account text-center"
                ><p>ليس لديك حساب؟</p></a
              >
            </form>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 left-side">
            <img
              src="{{ asset('assets/img/login-2.jpg') }}"
              class="img-left-side"
              width="100%"
              height="100%"
              alt="" />
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
