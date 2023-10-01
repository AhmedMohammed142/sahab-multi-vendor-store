  @extends('header_footer')

  @section('title')

  صفحة البحث

  @endsection

  @section('style_css')
  
  <link rel="stylesheet" href="{{ asset('assets/css/search.css') }}" />
  
  @endsection

  @section('content')

    <div class="contianer-fluid section-search w-100 h-100">
      <div class="container">
        <div class="form-group position-relative">
          <span class="fa fa-search position-absolute"></span>
          <input
            type="text"
            class="form-control"
            id="productSearch"
            placeholder="البحث ..." />
        </div>
      </div>
    </div>

    <div class="container-fluid categories p-4">
      <div class="container">
      @include('items_categories')
      </div>
    </div>

    <div class="container-fluid advertising p-5 pt-0">
      <div class="container advs-section">
        <div
          id="carouselExampleSlidesOnly"
          class="carousel slide"
          data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="{{ asset('assets/img/adv-search1.jpg') }}"
                class="d-block w-100 h-100"
                alt="" />
            </div>
            <div class="carousel-item">
              <img
                src="{{ asset('assets/img/adv-search2.jpg') }}"
                class="d-block w-100 h-100"
                alt="" />
            </div>
            <div class="carousel-item">
              <img
                src="{{ asset('assets/img/adv-search3.jpg') }}"
                class="d-block w-100 h-100"
                alt="" />
            </div>
            <div class="carousel-item">
              <img
                src="{{ asset('assets/img/adv-search4.jpg') }}"
                class="d-block w-100 h-100"
                alt="" />
            </div>
            <div class="carousel-item">
              <img
                src="{{ asset('assets/img/adv-search5.jpg') }}"
                class="d-block w-100 h-100"
                alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid products-section p-5 pt-3 pb-1 mb-5">
      <div class="container">
        <div class="row">
          <div class="col-md-9 cols">
            <div class="filtering d-flex align-items-center position-relative">
              <div class="dropdown dropdown-bottom mb-2">
                <span>الترتيب حسب</span>
                <button
                  class="btn btn-filter dropdown-toggle"
                  type="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">الأقل سعراً</a></li>
                  <li><a class="dropdown-item" href="#">الأعلى سعراً</a></li>
                  <li>
                    <a class="dropdown-item" href="#">الأكثر خصومات</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">الأحدث</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">الأقدم</a>
                  </li>
                </ul>
              </div>
              <div class="filter_price_from_to">
                <div class="form-group from-to mb-1">
                  <span
                    class="span-filter-price-from-to d-flex align-items-center">
                    <input
                      class="form-control"
                      type="text"
                      placeholder="الأقل سعراً" />
                    <span class="to px-2">إلى</span>
                    <input
                      class="form-control"
                      type="text"
                      placeholder="الأعلى سعراً" />
                  </span>
                </div>
              </div>
              <div class="total-items position-absolute end-0">4264 صنف</div>
            </div>
            <div class="products mt-3">
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/e19de6e1cd2909120094fe88053abcf8-thumb.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">كوافيرات </span></a
                        >
                        <span>-</span>
                        <a href="#"><span class="card-title"> عروسة</span></a>
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">باقة - 5 خدمات</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            ( كوافير جاردن هاوس )
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          مكياج، تسريحة شعر، دهن جسم، مناكير، بدكير ومنكير
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/03123f6b01a70166cd2656db490c3e52-thumb.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title"> تزيين الورود </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> مسكة عروس</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">مسكة عروس 55</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            ( فرح روز لمستلزمات الافراح )
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          ورد فلين ،حجم كبير ،غير مرجع
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-adv my-3">
                <img src="{{ asset('assets//img/adv-home.jpg') }}" width="100%" height="100%" alt="" />
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/e19de6e1cd2909120094fe88053abcf8-thumb.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">كوافيرات </span></a
                        >
                        <span>-</span>
                        <a href="#"><span class="card-title"> عروسة</span></a>
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">باقة - 5 خدمات</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            ( كوافير جاردن هاوس )
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          مكياج، تسريحة شعر، دهن جسم، مناكير، بدكير ومنكير
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/03123f6b01a70166cd2656db490c3e52-thumb.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title"> تزيين الورود </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> مسكة عروس</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">مسكة عروس 55</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            ( فرح روز لمستلزمات الافراح )
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          ورد فلين ،حجم كبير ،غير مرجع
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product">
                <div class="card mb-3 w-100 h-100 p-2">
                  <div class="row g-0">
                    <div
                      class="col-md-3 d-flex align-items-center justify-content-center">
                      <div class="image">
                        <img
                          src="{{ asset('assets/img/product-img.jpg') }}"
                          class="img-fluid rounded-start"
                          alt="" />
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body position-relative">
                        <a href="#"
                          ><span class="card-title">صالات الأفراح </span></a
                        >
                        <span>-</span>
                        <a href="#"
                          ><span class="card-title"> قاعة أفراح</span></a
                        >
                        <div class="d-flex align-items-baseline mt-2">
                          <a href="#"
                            ><h4 class="product-name">صالة اللوتس</h4></a
                          >
                          <h6
                            class="supplier-name ps-2"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            (صالة اللوتس للأفراح)
                          </h6>
                        </div>
                        <!-- Modal -->
                        <div
                          class="modal fade"
                          id="exampleModal"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title fs-5"
                                  id="exampleModalLabel">
                                  أهلاً وسهلاً بك في أكورد
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                                أكورد
                              </div>
                              <div class="modal-footer">
                                <a href="login.html"
                                  ><button
                                    type="button"
                                    class="btn btn-login"
                                    data-bs-dismiss="modal">
                                    تسجيل الدخول
                                  </button>
                                  <button type="button" class="btn btn-login">
                                    تسجيل
                                  </button></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="card-text mb-3">
                          من شهر 11 إلى شهر 4، غزة، مكيَف، 600 كرسي، 68 طاولة
                        </p>
                        <p class="card-text">
                          <small class="text-body">₪4605</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="icons">
                        <i
                          class="far fa-heart"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"></i>
                      </div>
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                أهلاً وسهلاً بك في أكورد
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع
                              أكورد
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-login"
                                data-bs-dismiss="modal">
                                تسجيل الدخول
                              </button>
                              <button type="button" class="btn btn-login">
                                تسجيل
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-adv my-3">
                <img src="{{ asset('assets/img/adv-home.jpg') }}" width="100%" height="100%" alt="" />
              </div>

              <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">8</a></li>
                  <li class="page-item"><a class="page-link" href="#">7</a></li>
                  <li class="page-item"><a class="page-link" href="#">6</a></li>
                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">...</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item">
                    <a class="page-link page-1" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link next" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="col-md-3 cols">
            <div class="ads-products">
              <div class="ads">
                <div class="ad">
                  <div class="image position-relative">
                    <img
                      src="{{ asset('assets/img/7db108b78439315a53c31d89dabbb8a2-thumb.jpg') }}"
                      alt="" />
                  </div>
                  <div class="descriptions">
                    <div class="name-ads">طاولة وسط_20026</div>
                    <div class="d-flex">
                      <div class="price">₪1636</div>
                      <div class="original-price">
                        <del class="original-price">₪1800</del>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="ad">
                  <div class="image position-relative">
                    <img
                      src="{{ asset('assets/img/7db108b78439315a53c31d89dabbb8a2-thumb.jpg') }}"
                      alt="" />
                  </div>
                  <div class="descriptions">
                    <div class="name-ads">طاولة وسط_20026</div>
                    <div class="d-flex">
                      <div class="price">₪1636</div>
                      <div class="original-price">
                        <del class="original-price">₪1800</del>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="ad">
                  <div class="image position-relative">
                    <img
                      src="{{ asset('assets/img/7db108b78439315a53c31d89dabbb8a2-thumb.jpg') }}"
                      alt="" />
                  </div>
                  <div class="descriptions">
                    <div class="name-ads">طاولة وسط_20026</div>
                    <div class="d-flex">
                      <div class="price">₪1636</div>
                      <div class="original-price">
                        <del class="original-price">₪1800</del>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="ad">
                  <div class="image position-relative">
                    <img
                      src="{{ asset('assets/img/7db108b78439315a53c31d89dabbb8a2-thumb.jpg') }}"
                      alt="" />
                  </div>
                  <div class="descriptions">
                    <div class="name-ads">طاولة وسط_20026</div>
                    <div class="d-flex">
                      <div class="price">₪1636</div>
                      <div class="original-price">
                        <del class="original-price">₪1800</del>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="other-ads-products">
              <div class="text-center pt-1 pb-2">شركة آت هوم للأثاث العصري</div>
              <div class="ads">
                <div class="ad p-2">
                  <div class="d-flex">
                    <div class="image">
                      <img
                        src="{{ asset('assets/img/ab0bc4b9440562bfaf2b1049b1aa5dda-thumb.jpg') }}"
                        alt="" />
                    </div>
                    <div class="descriptions">
                      <div class="d-flex">
                        <div class="price">₪3900</div>
                        <div class="original-price">
                          <del class="original-price">₪4200</del>
                        </div>
                      </div>
                      <div class="name">غرفة نوم اسطنبول - 2010058</div>
                      <div class="supplier-name">
                        ( شركة آت هوم للأثاث العصري )
                      </div>
                    </div>
                  </div>
                  <div class="details">
                    <span>ساندويش + mdf، </span>
                    <span>محلي، </span>
                    <span>قشرة زان، </span>
                    <span>6 قطعة</span>
                  </div>
                </div>
                <hr class="mt-1 mb-1" />
                <div class="ad p-2">
                  <div class="d-flex">
                    <div class="image">
                      <img
                        src="{{ asset('assets/img/ab0bc4b9440562bfaf2b1049b1aa5dda-thumb.jpg') }}"
                        alt="" />
                    </div>
                    <div class="descriptions">
                      <div class="d-flex">
                        <div class="price">₪3900</div>
                        <div class="original-price">
                          <del class="original-price">₪4200</del>
                        </div>
                      </div>
                      <div class="name">غرفة نوم اسطنبول - 2010058</div>
                      <div class="supplier-name">
                        ( شركة آت هوم للأثاث العصري )
                      </div>
                    </div>
                  </div>
                  <div class="details">
                    <span>ساندويش + mdf، </span>
                    <span>محلي، </span>
                    <span>قشرة زان، </span>
                    <span>6 قطعة</span>
                  </div>
                </div>
                <hr class="mt-1 mb-1" />
                <div class="ad p-2">
                  <div class="d-flex">
                    <div class="image">
                      <img
                        src="{{ asset('assets/img/ab0bc4b9440562bfaf2b1049b1aa5dda-thumb.jpg') }}"
                        alt="" />
                    </div>
                    <div class="descriptions">
                      <div class="d-flex">
                        <div class="price">₪3900</div>
                        <div class="original-price">
                          <del class="original-price">₪4200</del>
                        </div>
                      </div>
                      <div class="name">غرفة نوم اسطنبول - 2010058</div>
                      <div class="supplier-name">
                        ( شركة آت هوم للأثاث العصري )
                      </div>
                    </div>
                  </div>
                  <div class="details">
                    <span>ساندويش + mdf، </span>
                    <span>محلي، </span>
                    <span>قشرة زان، </span>
                    <span>6 قطعة</span>
                  </div>
                </div>
                <hr class="mt-1 mb-1" />
                <div class="ad p-2">
                  <div class="d-flex">
                    <div class="image">
                      <img
                        src="{{ asset('assets/img/ab0bc4b9440562bfaf2b1049b1aa5dda-thumb.jpg') }}"
                        alt="" />
                    </div>
                    <div class="descriptions">
                      <div class="d-flex">
                        <div class="price">₪3900</div>
                        <div class="original-price">
                          <del class="original-price">₪4200</del>
                        </div>
                      </div>
                      <div class="name">غرفة نوم اسطنبول - 2010058</div>
                      <div class="supplier-name">
                        ( شركة آت هوم للأثاث العصري )
                      </div>
                    </div>
                  </div>
                  <div class="details">
                    <span>ساندويش + mdf، </span>
                    <span>محلي، </span>
                    <span>قشرة زان، </span>
                    <span>6 قطعة</span>
                  </div>
                </div>
                <hr class="mt-1 mb-1" />
              </div>
            </div>
            <img class="adv-call-center" src="{{ asset('assets/img/adv-callcenter.jpg') }}" alt="" />
          </div>
        </div>
      </div>
    </div>

    @endsection
