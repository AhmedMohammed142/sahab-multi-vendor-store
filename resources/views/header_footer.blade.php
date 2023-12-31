<!-- @format -->

<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>أكورد | @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />
    @yield('style_css')
  </head>
  <body>
    <div class="header-line"></div>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
        <div class="d-flex align-items-center justify-content-center">
          <a class="navbar-brand ps-0" href="{{ route('index') }}"
            ><img src="{{ asset('assets/img/logo.png') }}" width="140" alt=""
          /></a>
          <div class="dropdown dropdown-top mx-3 mt-2">
            <a
              class="dropdown-toggle"
              data-bs-toggle="dropdown"
              aria-expanded="false">
              التصنيفات
            </a>
            <div class="dropdown-menu" id="website_categories">
              <div class="row">
                <div class="col-md-12 pr-0">
                  <span class="dropdown-item-direction position-absolute"
                    ><i class="fa fa-angle-double-up"></i>
                  </span>
                  <div
                    class="dropdown-item parent text-start fst-normal fw-bold ms-2"
                    data-id="1"
                    data-action="getChildrenCategory">
                    الأثاث المنزلي
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <a class="dropdown-item child" href="#" data-id="240"
                        >فرشات نوم</a
                      >
                    </div>
                    <div class="col-md-4">
                      <a class="dropdown-item child" href="#" data-id="274"
                        >ملحقات</a
                      >
                    </div>
                    <div class="col-md-4">
                      <a class="dropdown-item child" href="#" data-id="273"
                        >فرش عربي</a
                      >
                    </div>
                    <div class="col-md-4">
                      <a class="dropdown-item child" href="#" data-id="268"
                        >طاولات</a
                      >
                    </div>
                    <div class="col-md-4">
                      <a class="dropdown-item child" href="#" data-id="229"
                        >أطقم كنب</a
                      >
                    </div>
                    <div class="col-md-4">
                      <a class="dropdown-item child" href="#" data-id="96"
                        >أطقم نوم</a
                      >
                    </div>
                  </div>
                </div>

                <div class="col-md-12 pr-0">
                  <div class="col-md-3 pr-0">
                    <span class="dropdown-item-direction position-absolute"
                      ><i class="fa fa-angle-double-up"></i>
                    </span>
                    <div
                      class="dropdown-item parent text-start fw-normal fw-bold ms-2"
                      data-id="2"
                      data-action="getChildrenCategory">
                      الأجهزة الكهربائية
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-4">
                        <a class="dropdown-item child" href="#" data-id="275"
                          >جوالات</a
                        >
                      </div>
                      <div class="col-md-4">
                        <a class="dropdown-item child" href="#" data-id="269"
                          >فروش غاز</a
                        >
                      </div>
                      <div class="col-md-4">
                        <a class="dropdown-item child" href="#" data-id="153"
                          >الثلاجات</a
                        >
                      </div>
                      <div class="col-md-4">
                        <a class="dropdown-item child" href="#" data-id="155"
                          >الغسالات</a
                        >
                      </div>
                      <div class="col-md-4">
                        <a class="dropdown-item child" href="#" data-id="211"
                          >شاشات التلفاز</a
                        >
                      </div>
                      <div class="col-md-4">
                        <a class="dropdown-item child" href="#" data-id="162"
                          >مكيفات</a
                        >
                      </div>
                      <div class="col-md-4">
                        <a class="dropdown-item child" href="#" data-id="146"
                          >أفران</a
                        >
                      </div>
                      <div class="col-md-4">
                        <a class="dropdown-item child" href="#" data-id="148"
                          >خلاطات ومفارم</a
                        >
                      </div>
                      <div class="col-md-4">
                        <a class="dropdown-item child" href="#" data-id="242"
                          >دفايات</a
                        >
                      </div>
                      <div class="col-md-4">
                        <a class="dropdown-item child" href="#" data-id="154"
                          >فريزر</a
                        >
                      </div>
                      <div class="col-md-4">
                        <a class="dropdown-item child" href="#" data-id="156"
                          >مكواة</a
                        >
                      </div>
                      <div class="col-md-4">
                        <a class="dropdown-item child" href="#" data-id="161"
                          >مكنسة كهربائية</a
                        >
                      </div>
                      <div class="col-md-4">
                        <a class="dropdown-item child" href="#" data-id="241"
                          >شفاطات</a
                        >
                      </div>
                      <div class="col-md-4">
                        <a class="dropdown-item child" href="#" data-id="243"
                          >كمكم</a
                        >
                      </div>
                      <div class="col-md-4">
                        <a class="dropdown-item child" href="#" data-id="244"
                          >سخان المياه</a
                        >
                      </div>
                      <div class="col-md-4">
                        <a class="dropdown-item child" href="#" data-id="266"
                          >ملحقات</a
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-12 pr-0">
                  <div class="col-md-3 pr-0">
                    <span class="dropdown-item-direction position-absolute"
                      ><i class="fa fa-angle-double-up"></i>
                    </span>
                    <div
                      class="dropdown-item parent text-start fw-normal fw-bold ms-2"
                      data-id="3"
                      data-action="getChildrenCategory">
                      صالات الأفراح
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-4">
                        <a class="dropdown-item child" href="#" data-id="233"
                          >قاعة سهرة شباب</a
                        >
                      </div>
                      <div class="col-md-4">
                        <a class="dropdown-item child" href="#" data-id="232"
                          >قاعة حنة</a
                        >
                      </div>
                      <div class="col-md-4">
                        <a class="dropdown-item child" href="#" data-id="231"
                          >قاعة خطوبة</a
                        >
                      </div>
                      <div class="col-md-4">
                        <a class="dropdown-item child" href="#" data-id="21"
                          >قاعة أفراح</a
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-12 pr-0">
                  <div class="col-md-3 pr-0">
                    <span class="dropdown-item-direction position-absolute"
                      ><i class="fa fa-angle-double-up"></i>
                    </span>
                    <div
                      class="dropdown-item parent text-start fw-normal fw-bold ms-2"
                      data-id="4"
                      data-action="getChildrenCategory">
                      بدل الزفاف
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-4">
                        <a class="dropdown-item child" href="#" data-id="60"
                          >ملحقات</a
                        >
                      </div>
                      <div class="col-md-4">
                        <a class="dropdown-item child" href="#" data-id="109"
                          >بدل فرح</a
                        >
                      </div>
                      <div class="col-md-4">
                        <a class="dropdown-item child" href="#" data-id="40"
                          >بدلة خطوبة\حنة</a
                        >
                      </div>
                      <div class="col-md-4">
                        <a class="dropdown-item child" href="#" data-id="107"
                          >فساتين سهرة</a
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-12 pr-0">
                  <div class="col-md-3 pr-0">
                    <span class="dropdown-item-direction position-absolute"
                      ><i class="fa fa-angle-double-up"></i>
                    </span>
                    <div
                      class="dropdown-item parent text-start fw-normal fw-bold ms-2"
                      data-id="5"
                      data-action="getChildrenCategory">
                      الكوافيرات
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-4">
                        <a class="dropdown-item child" href="#" data-id="176"
                          >خطوبة/حنة</a
                        >
                      </div>
                      <div class="col-md-4">
                        <a class="dropdown-item child" href="#" data-id="17"
                          >عروسة</a
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-12 pr-0">
                  <div class="col-md-3 pr-0">
                    <span class="dropdown-item-direction position-absolute"
                      ><i class="fa fa-angle-double-up"></i>
                    </span>
                    <div
                      class="dropdown-item parent text-start fw-normal fw-bold ms-2"
                      data-id="6"
                      data-action="getChildrenCategory">
                      بطاقات الأفراح
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-4">
                        <a class="dropdown-item child" href="#" data-id="235"
                          >دعوات ثانوية</a
                        >
                      </div>
                      <div class="col-md-4">
                        <a class="dropdown-item child" href="#" data-id="132"
                          >دعوات فرح</a
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-12 pr-0">
                  <div class="col-md-3 pr-0">
                    <span class="dropdown-item-direction position-absolute"
                      ><i class="fa fa-angle-double-down"></i>
                    </span>
                    <div
                      class="dropdown-item parent text-start fw-normal fw-bold ms-2"
                      data-id="7"
                      data-action="getChildrenCategory">
                      تزيين الورود
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="row"></div>
                  </div>
                </div>

                <div class="col-md-12 pr-0">
                  <div class="col-md-3 pr-0">
                    <span class="dropdown-item-direction position-absolute"
                      ><i class="fa fa-angle-double-down"></i>
                    </span>
                    <div
                      class="dropdown-item parent text-start fw-normal fw-bold ms-2"
                      data-id="8"
                      data-action="getChildrenCategory">
                      تأجير الباصات
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="row"></div>
                  </div>
                </div>

                <div class="col-md-12 pr-0">
                  <div class="col-md-3 pr-0">
                    <span class="dropdown-item-direction position-absolute"
                      ><i class="fa fa-angle-double-down"></i>
                    </span>
                    <div
                      class="dropdown-item parent text-start fw-normal fw-bold ms-2"
                      data-id="9"
                      data-action="getChildrenCategory">
                      استوديوهات التصوير
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="row"></div>
                  </div>
                </div>

                <div class="col-md-12 pr-0">
                  <div class="col-md-3 pr-0">
                    <span class="dropdown-item-direction position-absolute"
                      ><i class="fa fa-angle-double-down"></i>
                    </span>
                    <div
                      class="dropdown-item parent text-start fw-normal fw-bold ms-2"
                      data-id="10"
                      data-action="getChildrenCategory">
                      المطابخ
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="row"></div>
                  </div>
                </div>

                <div class="col-md-12 pr-0">
                  <div class="col-md-3 pr-0">
                    <span class="dropdown-item-direction position-absolute"
                      ><i class="fa fa-angle-double-down"></i>
                    </span>
                    <div
                      class="dropdown-item parent text-start fw-normal fw-bold ms-2"
                      data-id="11"
                      data-action="getChildrenCategory">
                      الفنادق
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="row"></div>
                  </div>
                </div>

                <div class="col-md-12 pr-0">
                  <div class="col-md-3 pr-0">
                    <span class="dropdown-item-direction position-absolute"
                      ><i class="fa fa-angle-double-down"></i>
                    </span>
                    <div
                      class="dropdown-item parent text-start fw-normal fw-bold ms-2"
                      data-id="13"
                      data-action="getChildrenCategory">
                      فنون استعراضية
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="row"></div>
                  </div>
                </div>

                <div class="col-md-12 pr-0">
                  <div class="col-md-3 pr-0">
                    <span class="dropdown-item-direction position-absolute"
                      ><i class="fa fa-angle-double-down"></i>
                    </span>
                    <div
                      class="dropdown-item parent text-start fw-normal fw-bold ms-2"
                      data-id="14"
                      data-action="getChildrenCategory">
                      المسارح
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="row"></div>
                  </div>
                </div>

                <div class="col-md-12 pr-0">
                  <div class="col-md-3 pr-0">
                    <span class="dropdown-item-direction position-absolute"
                      ><i class="fa fa-angle-double-down"></i>
                    </span>
                    <div
                      class="dropdown-item parent text-start fw-normal fw-bold ms-2"
                      data-id="16"
                      data-action="getChildrenCategory">
                      بدل رجالي
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="row"></div>
                  </div>
                </div>

                <div class="col-md-12 pr-0">
                  <div class="col-md-3 pr-0">
                    <span class="dropdown-item-direction position-absolute"
                      ><i class="fa fa-angle-double-down"></i>
                    </span>
                    <div
                      class="dropdown-item parent text-start fw-normal fw-bold ms-2"
                      data-id="245"
                      data-action="getChildrenCategory">
                      حلويات الأفراح
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="row"></div>
                  </div>
                </div>

                <div class="col-md-12 pr-0">
                  <div class="col-md-3 pr-0">
                    <span class="dropdown-item-direction position-absolute"
                      ><i class="fa fa-angle-double-down"></i>
                    </span>
                    <div
                      class="dropdown-item parent text-start fw-normal fw-bold ms-2"
                      data-id="248"
                      data-action="getChildrenCategory">
                      مفروشات
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="row"></div>
                  </div>
                </div>

                <div class="col-md-12 pr-0">
                  <div class="col-md-3 pr-0">
                    <span class="dropdown-item-direction position-absolute"
                      ><i class="fa fa-angle-double-down"></i>
                    </span>
                    <div
                      class="dropdown-item parent text-start fw-normal fw-bold ms-2"
                      data-id="283"
                      data-action="getChildrenCategory">
                      أدوات منزلية
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="row"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button
          class="navbar-toggler p-0"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <i
            class="fas fa-bars menu-icon d-flex align-items-center justify-content-center"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul
            class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center text-wrap">
            <li class="nav-item">
              <a class="nav-link btn-plus" aria-current="page" href="#"
                ><button
                  class="btn-login-as-vendor d-flex align-items-center justify-content-between border-0 text-white">
                  <i
                    class="fa fa-plus plus-icon me-1 text-white"
                    aria-hidden="true"></i>
                  سجل كمورد
                </button></a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link align-items-center justify-content-center flex-column plus"
                href="#"
                ><i class="fa fa-plus plus-icon" aria-hidden="true"></i>
                <p class="text">سجل كمورد</p></a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link align-items-center justify-content-center flex-column search"
                href="{{ route('searchPage') }}"
                ><i class="fa fa-search" aria-hidden="true"></i>
                <p class="text">البحث</p></a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link align-items-center justify-content-center flex-column fav position-relative"
                href="#"
                aria-disabled="true"
                ><i class="fa fa-heart" aria-hidden="true"></i>
                <p class="text">المفضلة</p>
                <span
                  class="number position-absolute start-0 top-0 text-white rounded-circle text-center"
                  >0</span
                ></a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link align-items-center justify-content-center flex-column cart position-relative"
                href="#"
                aria-disabled="true"
                ><i class="fas fa-shopping-cart"></i>
                <p class="text">سلة المشتريات</p>
                <span
                  class="number position-absolute start-0 top-0 text-white rounded-circle text-center"
                  >0</span
                ></a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link align-items-center justify-content-center flex-column login"
                href="{{ route('loginPage') }}"
                aria-disabled="true"
                ><i class="fa fa-user" aria-hidden="true"></i>
                <p class="text">تسجيل الدخول</p></a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

    @yield('content')

    <div class="header-line mb-3" style="height: 10px"></div>

    <div class="footer mt-3">
      <div class="container">
        <div class="row">
          <div class="col-12 col-xl-4">
            <h5>للاتصال بنا</h5>
            <p>يسرنا تواصلك معنا من خلال أي من القنوات المتاحة.</p>
            <div class="row mt-2">
              <div class="col">
                <div>
                  <h3 class="fw-bold text-uppercase">أرقام التواصل</h3>
                  <p class="fw-400 m-0">1700400600</p>
                </div>
                <div>
                  <h3 class="fw-bold text-uppercase">العنوان</h3>
                  <p class="fw-400 m-0">
                    فلسطين، غزة، مقابل البوابة<br />الشمالية لجامعة الأزهر،
                    <br />مجمع الرؤيا التجاري
                  </p>
                </div>
              </div>
              <div class="col">
                <div>
                  <h3 class="fw-bold text-uppercase">البريد الإلكتروني</h3>
                  <p class="fw-400 m-0">info@accord.ps</p>
                </div>
                <div>
                  <h3 class="fw-bold text-uppercase">ساعات العمل</h3>
                  <p class="fw-400 m-0">السبت - الخميس</p>
                  <p class="fw-400 m-0">9:00 صباحاً - 3:30 مساءً</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3 col-xl-2">
            <h5>المعلومات</h5>
            <a href="#"><p>من نحن؟</p></a>
            <a href="#"><p>سياسة الخصوصية</p></a>
            <a href="#"><p>للاتصال بنا</p></a>
            <a href="#"><p>الأسئلة الشائعة</p></a>
            <a href="#"><p>مورد جديد</p></a>
          </div>
          <div class="col-6 col-md-3 col-xl-2">
            <h5>الملف الشخصي</h5>
            <a href="#"><p>التسجيل</p></a>
            <a href="#"><p>تسجيل الدخول</p></a>
            <a href="#"><p>المفضلة</p></a>
            <a href="#"><p>سلة المشتريات</p></a>
            <a href="#"><p>البحث</p></a>
          </div>
          <div class="col-12 col-md-6 col-xl-4">
            <h5>قائمة الواتس أب</h5>
            <p>
              انضم إلى قائمة الواتس أب الخاصة بالمنصة للبقاء على إطلاع بأحدث
              الخصومات والعروض الخاصة.
            </p>
            <div class="input-sub d-flex align-items-center">
              <input
                type="text"
                placeholder="رقم الواتس آب..."
                class="whatsapp-input w-100" />
              <button class="sub-btn border-0 text-nowrap text-white">
                الإشتراك
              </button>
            </div>
            <p class="text-social-media mb-0">وسائل التواصل الإجتماعي</p>
            <div class="icons-contact d-flex align-items-center text-white">
              <a href="https://www.facebook.com" target="_blank"
                ><i class="fab fa-facebook-f facebook-icon icon text-white"></i
              ></a>
              <a href="https://www.instagram.com" target="_blank"
                ><i class="fab fa-instagram instagram-icon icon text-white"></i
              ></a>
            </div>
          </div>
        </div>
        <h4 class="end-footer text-center">
          Powered by Accord - Accord Group for Marketing & Trade
        </h4>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('assets/js/search.js') }}"></script>
  </body>
</html>
