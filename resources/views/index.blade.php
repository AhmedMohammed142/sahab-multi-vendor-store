  @extends('header_footer')

  @section('title')

  الصفحة الرئيسية

  @endsection

  @section('style_css')
  <link rel="stylesheet" href="{{ asset('assets/css/homePage.css') }}" />
  @endsection

  @section('content')
    <div class="container-fluid main w-100 position-relative">
        <div class="welcome bg-light position-absolute">
          <h1 class="text-welcome text-center fw-bold">كل المراحب والله</h1>
          <p class="description text-center">
            ضيفوا البيانات مشان تتمتعوا بالعديد من الميزات
          </p>
          <form>
            <div class="mb-2">
              <label class="form-label inputs">رقم الجوال</label>
              <input
                type="text"
                class="form-control phone-number bg-light"
                placeholder="أدخل رقم الجوال الخاص بك" />
            </div>
            <div class="mb-2">
              <label class="form-label inputs">الإسم بالكامل</label>
              <input
                type="text"
                class="form-control fullname bg-light"
                placeholder="أدخل إسمك بالكامل" />
            </div>

            <button type="submit" class="btn send border-0 text-white w-100">
              إرسال
            </button>
          </form>
        </div>
    </div>

    <div class="container-fluid categories p-5">
        <div class="container">
          <h1 class="explore-items fw-bold">اكتشف أصنافنا</h1>
          <a href="#" class="float-end"
            ><p>
              كل التصنيفات <i class="fa fa-angle-left" aria-hidden="true"></i></p
          ></a>
          @include('items_categories')
        </div>
    </div>

    <div class="container-fluid carding p-5 pt-0 pb-3">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 cols my-2">
              <div class="card border-0 bg-light">
                <a href="#"
                  ><img
                    src="{{ asset('assets/img/adv1-2.jpeg') }}"
                    class="card-img-top card-img w-100 h-100"
                    alt=""
                /></a>
                <a href="#"
                  ><div class="card-body">
                    <h5 class="card-title fw-bold">أكورد، القصة، وبناء الثقة</h5>
                    <p class="card-text col-one">
                      ن، تمتلك أكورد مئات الموردين وآلاف المنتجات التي تملأ المنصة
                      الآن من جميع التصنيفات التي تهم المقبلين على الزواج بالإضافة
                      ...
                    </p>
                  </div></a
                >
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 cols my-2">
              <div class="card border-0 bg-light">
                <a href="#"
                  ><img
                    src="{{ asset('assets/img/adv2.jpg') }}"
                    class="card-img-top card-img w-100 h-100"
                    alt=""
                /></a>
                <a href="#"
                  ><div class="card-body">
                    <h5 class="card-title fw-bold">
                      الشراكات، الطريق للراحة والتحكم
                    </h5>
                    <p class="card-text">
                      من خلال إضافة خيار التقسيط إلى خيارات الدفع الكاش المتوفر
                      لدينا، يمكننا توفير تجربة تسوق أكثر شمولية، ومنح عملائنا
                      مزيداً من الراحة والتحكم والوصول إلى خيارات ...
                    </p>
                  </div></a
                >
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 cols my-2">
              <div class="card border-0 bg-light">
                <a href="#"
                  ><img
                    src="{{ asset('assets/img/adv3.jpg') }}"
                    class="card-img-top card-img w-100 h-100"
                    alt=""
                /></a>
                <a href="#"
                  ><div class="card-body">
                    <h5 class="card-title fw-bold">المنتجات وقوة موردينا</h5>
                    <p class="card-text">
                      الأفضل أمام عينك، مع وجود خطة تمكن الفريق من جلب منتجات
                      عديدة بمواصفات حقيقية، كان لابد من وجود العديد من الاعتبارات
                      التي نأخذها ...
                    </p>
                  </div></a
                >
              </div>
            </div>
          </div>
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
                <img src="{{ asset('assets/img/adv-1.jpg') }}" class="d-block w-100 h-100" alt="" />
              </div>
              <div class="carousel-item">
                <img
                  src="{{ asset('assets/img/adv2-mobile.gif') }}"
                  class="d-block w-100 h-100"
                  alt="" />
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/img/adv-2.jpg') }}" class="d-block w-100 h-100" alt="" />
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="container-fluid carding p-5 pt-0 pb-3">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 cols my-2">
              <div class="card border-0 bg-light">
                <a href="#"
                  ><img
                    src="{{ asset('assets/img/art1.jpg') }}"
                    class="card-img-top card-img w-100 h-100"
                    alt=""
                /></a>
                <a href="#"
                  ><div class="card-body">
                    <h5 class="card-title fw-bold">
                      كيف تخطط لحفل زفاف بأفضل التكاليف
                    </h5>
                    <p class="card-text col-one">
                      يحلم الكثير من الشباب بإقامة فرحٍ جميل لا يُنسى، لكن ليس
                      كثيراً منا يستطيع بسبب السيولة المالية. فالحل الأفضل هو
                      إلقاء نظرة جادة على جميع النفقات المرتبطة بيوم ...
                    </p>
                  </div></a
                >
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 cols my-2">
              <div class="card border-0 bg-light">
                <a href="#"
                  ><img
                    src="{{ asset('assets/img/art2.jpg') }}"
                    class="card-img-top card-img w-100 h-100"
                    alt=""
                /></a>
                <a href="#"
                  ><div class="card-body">
                    <h5 class="card-title fw-bold">كيف تدفع لحفل زفافك؟</h5>
                    <p class="card-text">
                      من المهم أن تفهم كيف سيتم تقسيم ميزانيتك. التوفير في حفل
                      الزفاف ليس بالمهمة المستعصية. إليك كيفية التوفير والدفع
                      مقابل يوم الفرح عن طريق الإنفاق بذكاء والاقتطاع قليلاً على
                      طول الطريق ...
                    </p>
                  </div></a
                >
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 cols my-2">
              <div class="card border-0 bg-light">
                <a href="#"
                  ><img
                    src="{{ asset('assets/img/art3.jpg') }}"
                    class="card-img-top card-img w-100 h-100"
                    alt=""
                /></a>
                <a href="#"
                  ><div class="card-body">
                    <h5 class="card-title fw-bold">
                      10 نصائح لشراء منتجات واختيار الخدمات لفرحك
                    </h5>
                    <p class="card-text">
                      إذا كنت ترغب في شراء عفش لمنزلك او إختيار صالة او مسرح لسهرة
                      الشباب، فهناك بعض الأشياء التي يجب مراعاتها قبل الإقدام على
                      عملية الشراء ...
                    </p>
                  </div></a
                >
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="container-fluid carding p-5 pt-0 pb-3">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 cols my-2">
              <div class="card border-0 bg-light">
                <a href="#"
                  ><img
                    src="{{ asset('assets/img/temporary-2.png') }}"
                    class="card-img-top card-img w-100 h-100"
                    alt=""
                /></a>
                <a href="#"
                  ><div class="card-body">
                    <h5 class="card-title text-center fw-bold">
                      باقات أفراح صيف 2023
                    </h5>
                  </div></a
                >
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 cols my-2">
              <div class="card border-0 bg-light">
                <a href="#"
                  ><img
                    src="{{ asset('assets/img/permanent-2.png') }}"
                    class="card-img-top card-img w-100 h-100"
                    alt=""
                /></a>
                <a href="#"
                  ><div class="card-body">
                    <h5 class="card-title text-center fw-bold">أحدث العروض</h5>
                  </div></a
                >
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 cols my-2">
              <div class="card border-0 bg-light">
                <a href="#"
                  ><img
                    src="{{ asset('assets/img/individual-offers.png') }}"
                    class="card-img-top card-img w-100 h-100"
                    alt=""
                /></a>
                <a href="#"
                  ><div class="card-body">
                    <h5 class="card-title text-center fw-bold">العروض الفردية</h5>
                  </div></a
                >
              </div>
            </div>
          </div>
        </div>
    </div>
  @endsection