  @extends('header_footer')

  @section('title')

  صالة اللوتس للأفراح - صالة اللوتس

  @endsection

  @section('style_css')

  <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}" />
  
  @endsection

  @section('content')

  <hr class="hr-top-header mt-0" />

    <div
        class="container advertising-home d-flex align-items-center justify-content-center">
        <!-- <img src="img/background-image.jpg" alt="" /> -->
    </div>

    <div class="container pt-3">
        <nav class="nav-link d-flex">
          <a href="#" class="links">الصفحة الرئيسية / </a>
          <a href="#" class="links">{{ $category_name }} / </a>
          <a href="#" class="links">{{ $sub_category_name }} / </a>
          <a href="#" class="link active">{{ $name }}</a>
        </nav>
    </div>

    <div class="container mt-2">
        <div class="row">
          <div class="col-lg-8 col-md-8 right-side">
            <div
              id="carouselExampleInterval"
              class="carousel slide"
              data-bs-ride="carousel">
              <div class="carousel-inner">
                @foreach($images as $index => $image)
                <div
                  class="carousel-item w-100 h-100 @if($index == 0) active @endif"
                  data-bs-interval="1000">
                  <div
                    class="image w-100 d-flex align-items-center justify-content-center">
                    <img
                      src='{{ asset("assets/img/$image.jpg") }}'
                      class="d-block w-100 h-100"
                      alt="" />
                  </div>
                  <div class="carousel-caption">
                    <h5
                      class="counter-pages text-white m-auto text-nowrap fw-bold w-25">
                      {{ $index + 1 }} من {{ count($images) }}
                    </h5>
                  </div>
                </div>
                @endforeach
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <div class="item-details">
              <div class="item-id mt-2">#{{ $id }}</div>
              <div class="d-flex align-items-center justify-content-between">
                <h1 class="product-name">{{ $name }}</h1>
                <div class="d-flex align-items-center justify-content-center">
                  <button class="btn-addtocart btns">أضف إلى السلة</button>
                  <button class="btn-save btns">
                    <i class="fa fa-heart" aria-hidden="true"></i> حفظ
                  </button>
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <p class="price">
                  السعر: <span class="price-number">{{ $price }}₪</span>
                </p>
                <button class="btn-share btns">مشاركة الصنف</button>
              </div>
              <p class="vendor-name d-flex align-items-center">
                اسم المورد: <span> {{ $vendor_name }} </span>
                <i
                  class="fa fa-eye ms-2 fs-5"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal"
                  aria-hidden="true"></i>
              </p>

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
                      <h1 class="modal-title fs-5" id="exampleModalLabel">
                        أهلاً وسهلاً بك في أكورد
                      </h1>
                      <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      يجب عليك تسجيل الدخول أولاً أو التسجيل في موقع أكورد
                    </div>
                    <div class="modal-footer">
                      <button
                        type="button"
                        class="btn btn-login"
                        data-bs-dismiss="modal">
                        تسجيل الدخول
                      </button>
                      <button type="button" class="btn btn-login">تسجيل</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="description">
                <h2 class="fs-5">الوصف</h2>
                <p class="fs-6">{{ $description }}</p>
              </div>
              <div class="attributes">
                <h5 class="color-black">المواصفات</h5>
                <table class="table">
                  <thead>
                    <tr>
                      <th>نوع الصفة</th>
                      <th>قيمة الصفة</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($attributes as $key => $attribute)
                      <tr>
                        <td>{{ $key }}</td>
                        <td>{{ $attribute }}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <div class="additional-description">
                <h5 class="color-black">تفاصيل اضافية</h5>
                <p>{{ $extra_details }}</p>
              </div>
            </div>
          </div>
          <!-- <div class="col-lg-1 col-md-1"></div> -->
          <div class="col-lg-3 col-md-3 offset-lg-1 offset-md-1 left-side">
            <div class="images">
              <div>
                <img src="{{ asset('assets/img/04.png') }}" alt="" />
              </div>
              <div>
                <img src="{{ asset('assets/img/03.png') }}" alt="" />
              </div>
              <div>
                <img src="{{ asset('assets/img/05.png') }}" alt="" />
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="more-items">
          <div class="container py-3">
            <h4 class="pb-4 color-black">الأصناف المشابهة</h4>
            <div class="row">
              
            @foreach($photos as $photo)
              <div class="col-lg-3 col-md-3 col-sm-12 p-0 my-2">
                <div class="card border-0 d-block">
                  <div class="image w-100">
                    <img
                      src='{{ asset("assets/img/$photo.jpg") }}'
                      class="card-img-top d-flex justify-content-center align-items-center w-100 h-100"
                      alt="" />
                  </div>
                  <div class="card-body">
                    <h6 class="card-title text-center">{{ $sub_category_name }}</h6>
                    <h5 class="sub-title">قاعة روتانا</h5>
                    <h6 class="supplier-name text-center">( فندق سيتي ستار )</h6>
                    <p class="card-text text-center mb-2">
                      <span>من شهر 1</span>
                      <span>إلى شهر 12، </span>
                      <span>غزة، </span>
                      <span>مكيَف، </span>
                      <span>400 كرسي، </span>
                      <span>30 طاولة</span>
                    </p>
                    <div class="text-center">
                      <span class="price fw-bold">₪1400</span>
                      <span class="discount-original-price fw-bold">
                        <span class="discount">%3.4</span>
                        <span class="origianl-price">
                          <del>₪1450</del>
                        </span>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach

              <!-- <div class="col-lg-3 col-md-3 col-sm-12 p-0 my-2">
                <div class="card border-0 d-block">
                  <div class="image w-100">
                    <img
                      src="{{ asset('assets/img/card2.jpg') }}"
                      class="card-img-top d-flex justify-content-center align-items-center w-100 h-100"
                      alt="" />
                  </div>
                  <div class="card-body">
                    <h6 class="card-title text-center">قاعة أفراح</h6>
                    <h5 class="sub-title">قاعة هيات</h5>

                    <h6 class="supplier-name text-center">( فندق سيتي ستار )</h6>
                    <p class="card-text text-center mb-2">
                      <span>من شهر 1</span>
                      <span>إلى شهر 12، </span>
                      <span>غزة، </span>
                      <span>مكيَف، </span>
                      <span>400 كرسي، </span>
                      <span>30 طاولة</span>
                    </p>
                    <div class="text-center">
                      <span class="price fw-bold">₪1700</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-3 col-sm-12 p-0 my-2">
                <div class="card border-0 d-block">
                  <div class="image w-100">
                    <img
                      src="{{ asset('assets/img/card3.jpg') }}"
                      class="card-img-top d-flex justify-content-center align-items-center w-100 h-100"
                      alt="" />
                  </div>
                  <div class="card-body">
                    <h6 class="card-title text-center">قاعة أفراح</h6>
                    <h5 class="sub-title">
                      قاعة قصر السلطان
                      <h6 class="supplier-name text-center">
                        ( صالة قصر السلطان )
                      </h6>
                    </h5>
                    <p class="card-text text-center mb-2">
                      <span>من شهر 5</span>
                      <span>إلى شهر 8، </span>
                      <span>المغازي، </span>
                      <span>مكيَف، </span>
                      <span>500 كرسي، </span>
                      <span>20 طاولة</span>
                    </p>
                    <div class="text-center">
                      <span class="price fw-bold">₪1875</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-3 col-sm-12 p-0 my-2">
                <div class="card border-0 d-block">
                  <div class="image w-100">
                    <img
                      src="{{ asset('assets/img/card3.jpg') }}"
                      class="card-img-top d-flex justify-content-center align-items-center w-100 h-100"
                      alt="" />
                  </div>
                  <div class="card-body">
                    <h6 class="card-title text-center">قاعة أفراح</h6>
                    <h5 class="sub-title">
                      قاعة قصر السلطان
                      <h6 class="supplier-name text-center">
                        ( صالة قصر السلطان )
                      </h6>
                    </h5>
                    <p class="card-text text-center mb-2">
                      <span>من شهر 12</span>
                      <span>إلى شهر 2، </span>
                      <span>المغازي، </span>
                      <span>مكيَف، </span>
                      <span>500 كرسي، </span>
                      <span>20 طاولة</span>
                    </p>
                    <div class="text-center">
                      <span class="price fw-bold">₪1500</span>
                    </div>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
    </div>

    <div
        class="container advertising-bottom d-flex align-items-center justify-content-center my-3">
        <!-- <img src="img/background-image.jpg" alt="" /> -->
    </div>

  @endsection