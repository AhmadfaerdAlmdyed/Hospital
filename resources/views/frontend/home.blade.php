@extends('frontend.layouts')
@section('content')
      <!-- banner-section -->
        <section class="banner-section">
            <div class="container">
                <div class="content">
                    <div class="row align-items-center">
                        <div class="col-lg-5 order-lg-0 order-1">
                            <h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">الوجهة الأمثل لرعاية أفضل</h1>
                            <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"> رايت جايد منصة دولية للبحث عن أفضل المستشفيات والأخصائيين
                                ،المتميزين في تركيا لتقديم أفضل خدمات السياحة العلاجية والطبية لك
                                .نعمل بجد كل يوم لجعل الناس أكثر صحة وأكثر سعادة</p>
                          {{--  بحث--}}
                            <form action="#" method="post" class="mt-5 mb-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                                <div class="form-group">
                                    <div class="cs-search-input">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20.003" height="20"
                                                viewBox="0 0 20.003 20">
                                                <g id="search-normal" transform="translate(-430 -190)">
                                                    <path id="Vector"
                                                        d="M19,9.5A9.5,9.5,0,1,1,9.5,0,9.5,9.5,0,0,1,19,9.5Z"
                                                        transform="translate(430 190)" fill="#e2e2e2"></path>
                                                    <path id="Vector-2" data-name="Vector"
                                                        d="M2.552,3.252a.7.7,0,0,1-.49-.2L.2,1.192A.706.706,0,0,1,.2.2a.706.706,0,0,1,.99,0l1.86,1.86a.706.706,0,0,1,0,.99A.738.738,0,0,1,2.552,3.252Z"
                                                        transform="translate(446.747 206.747)" fill="#05060f"></path>
                                                </g>
                                            </svg>
                                        </span> 
                                        <input type="text" class="form-control custom-input"
                                            placeholder="...ابحث عن مستشفى أو أخصائي أو تخصص">
                                        <button type="button" class="btn cs-btn v2">بحث</button>
                                    </div>
                                </div>
                            </form>
                            <div class="suggestions wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                                <h4>إقتراحات</h4>
                                <div class="d-flex flex-wrap gap-1">
                                    <div class="suggestion wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                                        <a href="#">طب الأعصاب</a>
                                    </div>
                                    <div class="suggestion wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                                        <a href="#">مستشفى الأناضول</a>
                                    </div>
                                    <div class="suggestion wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                                        <a href="#">أمراض الكلى</a>
                                    </div>
                                    <div class="suggestion wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                                        <a href="#">جراحة الأعصاب</a>
                                    </div>
                                    <div class="suggestion wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                                        <a href="#">استيتك انترناشونال</a>
                                    </div>
                                    <div class="suggestion wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                                        <a href="#">أمراض السكري</a>
                                    </div>
                                    <div class="suggestion wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                                        <a href="#">أوغور شاهين</a>
                                    </div>
                                    <div class="suggestion wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
                                        <a href="#">أمراض الجهاز الهضمي</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-1  order-0">
                            <figure >
                                <img src="{{asset('frontend/images/h-banner-img.png')}}" class="img-fluid" alt="" srcset="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./banner-section -->
        <!-- majors-section -->
        @isset($majors)
        <section class="majors-section">
            <div class="container">
                <div class="main-title d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h2>التخصصات الطبية</h2>
                </div>
                    <div class="row">
                        @foreach ($majors->take(10) as $majors)
                        <div class="col-lg-auto col-md-4 col-6">
                            <div class="major-card">
                                <figure>
                                    <img style="width: 100% ;height:100% ;"
                                    src="{{Storage::url('majors/'.$majors->cover)}}" class="wow zoomIn" data-wow-duration="1s" data-wow-delay="0.1s" alt="" srcset="">
                                </figure>
                                <h4 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">{{$majors ->name}}</h4>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row mt-5 mb-5" style="justify-content: center;">
                <a href="{{ route('all.major') }}" 
                class="btn cs-btn" style="height: 44px; width: 215px">عرض جميع التخصصات </a>
            </div>
        </section>
        @endisset
        <!-- ./majors-section -->
        <!-- consultation-section -->
        <section class="consulation-section callaction-section">
            <div class="container">
                <div class="content">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <figure>
                                <img src="assets/images/consultation.png" class="wow zoomIn" data-wow-duration="1s" data-wow-delay="0.1s" alt="" srcset="">
                            </figure>
                        </div>
                        <div class="col-lg-12">
                            <h4 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">طلب استشارة</h4>
                            <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                                استشارات طبية مجانية من أطباء مختصين، هل تريد سؤال طبيب؟ احصل على مشورة
                                .طبية ورأي ثان مجاناً، اسأل طبيب وسيتم الرد في نفس اليوم، اطئمن على صحتك
                            </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./consultation-section -->
        <!-- hospital-section -->
        @isset($hospitals) 
        <section class="hospital-section">
            <div class="container">
                <div class="main-title d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h2>مستشفيات ننصح بها</h2>
                </div>
                <div class="content">
                    <div class="row">
                        @foreach ($hospitals->take(3) as $hospital)
                        <div class="col-lg-4 col-md-6">
                            <div class="hospital-card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                                
                                    <figure>
                                        <img src="{{Storage::url('hospitals/'.$hospital->cover)}}" alt="" srcset="">
                                    </figure>
                                    <div class="hospital-rate">
                                        <div class="d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20.08" height="18.567"
                                                viewBox="0 0 20.08 18.567">
                                                <g id="Star" transform="translate(-3.355 -2.05)">
                                                    <path id="Path"
                                                        d="M9.158.578a.962.962,0,0,1,1.764,0L13.016,5.41a.96.96,0,0,0,.808.575l5.369.413a.956.956,0,0,1,.537,1.691l-4.038,3.32a.954.954,0,0,0-.321.967l1.243,5a.959.959,0,0,1-1.419,1.054L10.527,15.7a.964.964,0,0,0-.974,0L4.886,18.432a.959.959,0,0,1-1.419-1.054l1.243-5a.954.954,0,0,0-.321-.967L.35,8.089A.956.956,0,0,1,.888,6.4l5.369-.413a.96.96,0,0,0,.808-.575Z"
                                                        transform="translate(3.355 2.05)" fill="#ffc542" />
                                                </g>
                                            </svg>
                                            <span class="ml-1">5.0</span>
                                        </div>
                                        <p>(55){{$hospital->location}}</p>
                                    </div>
                                    <h4>{{$hospital->name}}</h4>
                                
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row mt-5 mb-5" style="justify-content: center;">
                <a href="{{ route('all.hospitel') }}" 
                class="btn cs-btn" style="height: 44px; width: 215px">عرض كل المستشفيات</a>
            </div>
        </section>
        @endisset   
        <!-- ./hospital-section -->
        <!-- service-request-section -->
        <section class="callaction-section service-request-section">
        <div class="container">
            <div class="content">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <figure>
                            <img src="assets/images/medical-health-services.png" class="wow zoomIn" data-wow-duration="1s" data-wow-delay="0.1s" alt="" srcset="">
                        </figure>
                    </div>
                    <div class="col-lg-7">
                        <h4 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"> تواصل معنا</h4>
                        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                            تحتاج للمساعدة، ونحن هنا لمساعدتك فريق عملنا متواجد دائما على مدار الساعة
                            .طوال أيام الأسبوع لخدمتك والإجابة على جميع أسئلتك واستفساراتك
                        </p>
                    </div>
                    <div class="col-lg-3 mx-auto">
                        <a href="{{route('frontend.messages')}}" class="btn cs-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">ارسل طلب الأن</a>
                    </div>
                </div>
            </div>
        </div>
        </section>
    <!-- service-request-section -->
        <!-- specialists-section -->
        @isset($doctors)
        <section class="specialists-section">
            <div class="container">
                <div class="main-title d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h2>نخبة من الأخصائيين</h2>
                </div>
                <div class="content">
                    <div class="row">
                        @foreach ($doctors->take(4) as $doctors )
                        <div class="col-lg-3 col-md-6">
                            <div class="general-card specialist-card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                                <figure>
                                    <img style="width: 100% ;height:100% ;"
                                    src="{{Storage::url('doctors/'.$doctors->cover)}}"alt="" srcset="">
                                </figure>
                                <div class="general-card-body">
                                    <h4>{{$doctors->name}}</h4>
                                    <h6></h6>
                                    <div class="d-flex align-items-center justify-content-center rate">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20.08" height="18.567"
                                            viewBox="0 0 20.08 18.567">
                                            <g id="Star" transform="translate(-3.355 -2.05)">
                                                <path id="Path"
                                                    d="M9.158.578a.962.962,0,0,1,1.764,0L13.016,5.41a.96.96,0,0,0,.808.575l5.369.413a.956.956,0,0,1,.537,1.691l-4.038,3.32a.954.954,0,0,0-.321.967l1.243,5a.959.959,0,0,1-1.419,1.054L10.527,15.7a.964.964,0,0,0-.974,0L4.886,18.432a.959.959,0,0,1-1.419-1.054l1.243-5a.954.954,0,0,0-.321-.967L.35,8.089A.956.956,0,0,1,.888,6.4l5.369-.413a.96.96,0,0,0,.808-.575Z"
                                                    transform="translate(3.355 2.05)" fill="#ffc542" />
                                            </g>
                                        </svg>
                                        <span class="ml-1">5.0</span>
                                    </div>
                                    <p>
                                        {{$doctors ->descrption}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>

                </div>
            </div>
            <div class="row mt-5 mb-5" style="justify-content: center;">
                <a href="{{ route('all.doctors') }}" 
                class="btn cs-btn" style="height: 44px; width: 215px">عرض كل الأخصائيين</a>
            </div>
        </section>
        @endisset
        <!-- ./specialists-section -->

        <!-- numbers-section -->
        <section class="numbers-section">
            <div class="container">
                <div class="content">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-4">
                            <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">إحصائيات وأرقام</h3>
                            <h6 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">الأرقام تخبرك عنا بشكل أكبر</h6>
                        </div>
                        <div class="col-lg-auto col-md-3 col-6">
                           <div class="number-card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <figure>
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32.727" viewBox="0 0 40 32.727">
                                    <g id="Hospital_Building" data-name="Hospital Building" transform="translate(-1 -3)">
                                      <g id="Group_16" data-name="Group 16" transform="translate(1 3)">
                                        <path id="Path_765" data-name="Path 765" d="M10.451,3A5.453,5.453,0,0,0,5,8.455V33.909a1.818,1.818,0,0,0,1.817,1.818h21.8a1.818,1.818,0,0,0,1.817-1.818V8.455A5.453,5.453,0,0,0,24.986,3Z" transform="translate(2.282 -3)" fill="#99ebc2"/>
                                        <path id="Path_766" data-name="Path 766" d="M4.641,10.82A1.82,1.82,0,1,0,1,10.82v18.2a1.82,1.82,0,1,0,3.641,0Z" transform="translate(-1 1.883)" fill="#99ebc2"/>
                                        <path id="Path_767" data-name="Path 767" d="M21,10.82a1.82,1.82,0,1,1,3.641,0v18.2a1.82,1.82,0,1,1-3.641,0Z" transform="translate(15.359 1.883)" fill="#99ebc2"/>
                                      </g>
                                      <path id="Path_768" data-name="Path 768" d="M14.461,6a1.82,1.82,0,0,0-1.82,1.82v1.82H10.82a1.82,1.82,0,1,0,0,3.641h1.82V15.1a1.82,1.82,0,0,0,3.641,0v-1.82H18.1a1.82,1.82,0,0,0,0-3.641h-1.82V7.82A1.82,1.82,0,0,0,14.461,6Z" transform="translate(6.539 2.451)" fill="#00ce68"/>
                                      <path id="Path_769" data-name="Path 769" d="M10,17.82A1.82,1.82,0,0,1,11.82,16h3.641a1.82,1.82,0,0,1,1.82,1.82V25.1H10Z" transform="translate(7.359 10.625)" fill="#00ce68"/>
                                    </g>
                                  </svg>
                            </figure>
                            <h4>{{$hospitals->count() }}</h4>
                            <h6>مستشفيات</h6>
                           </div>
                        </div>
                        <div class="col-lg-auto col-md-3 col-6">
                           <div class="number-card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                            <figure>
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                    <g id="Stethoscope" transform="translate(-2 -2)">
                                      <path id="Path_808" data-name="Path 808" d="M9,12a2,2,0,0,1,2,2v4.989a8.981,8.981,0,1,0,17.962,0V15.992a2,2,0,1,1,3.992,0v2.994A12.972,12.972,0,0,1,7,18.985V14A2,2,0,0,1,9,12Z" transform="translate(5.064 10.042)" fill="#99ebc2" fill-rule="evenodd"/>
                                      <path id="Path_809" data-name="Path 809" d="M7.322,5.992A1.331,1.331,0,0,0,5.992,7.322v6.652a7.983,7.983,0,1,0,15.966,0V7.322a1.331,1.331,0,0,0-1.331-1.331h-.665a2,2,0,1,1,0-3.992h.665a5.322,5.322,0,0,1,5.322,5.322v6.652A11.975,11.975,0,1,1,2,13.975V7.322A5.322,5.322,0,0,1,7.322,2h.665a2,2,0,0,1,0,3.992Z" transform="translate(0 0)" fill="#00ce68" fill-rule="evenodd"/>
                                      <path id="Path_810" data-name="Path 810" d="M21.987,16.983a2,2,0,1,0-2-2A2,2,0,0,0,21.987,16.983Zm0,3.992A5.987,5.987,0,1,0,16,14.987,5.987,5.987,0,0,0,21.987,20.975Z" transform="translate(14.025 7.013)" fill="#00ce68" fill-rule="evenodd"/>
                                    </g>
                                  </svg>

                            </figure>
                            <h4>{{ $doctors->count() }}</h4>
                            <h6>أخصائيين</h6>
                           </div>
                        </div>
                        <div class="col-lg-auto col-md-3 col-6">
                           <div class="number-card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <figure>
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35">
                                    <g id="Medical_Case" data-name="Medical Case" transform="translate(-2 -2)">
                                      <path id="Path_775" data-name="Path 775" d="M10.75,9V7.25A5.25,5.25,0,0,1,16,2h7a5.25,5.25,0,0,1,5.25,5.25V9h3.5A5.25,5.25,0,0,1,37,14.25v17.5A5.25,5.25,0,0,1,31.75,37H7.25A5.25,5.25,0,0,1,2,31.75V14.25A5.25,5.25,0,0,1,7.25,9Zm3.5-1.75A1.75,1.75,0,0,1,16,5.5h7a1.75,1.75,0,0,1,1.75,1.75V9H14.25Z" fill="#99ebc2" fill-rule="evenodd"/>
                                      <path id="Path_776" data-name="Path 776" d="M13.284,11.761a1.761,1.761,0,0,1,3.523,0v3.523h3.523a1.761,1.761,0,0,1,0,3.523H16.806v3.523a1.761,1.761,0,0,1-3.523,0V18.806H9.761a1.761,1.761,0,0,1,0-3.523h3.523Z" transform="translate(4.455 5.94)" fill="#00ce68" fill-rule="evenodd"/>
                                    </g>
                                  </svg>

                            </figure>
                            <h4>{{ $majors->count() }}</h4>
                            <h6>تخصصات</h6>
                           </div>
                        </div>
                        <div class="col-lg-auto col-md-3 col-6">
                          <div class="number-card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                            <figure>
                                <svg xmlns="http://www.w3.org/2000/svg" width="32.727" height="40" viewBox="0 0 32.727 40">
                                    <g id="User" transform="translate(-3 -1)">
                                      <path id="Path_433" data-name="Path 433" d="M25.175,10.1A9.088,9.088,0,1,1,16.088,1,9.091,9.091,0,0,1,25.175,10.1Z" transform="translate(3.276)" fill="#00ce68"/>
                                      <path id="Path_434" data-name="Path 434" d="M31.76,14.578c-1.121-1.3-3.046-1.233-4.551-.409a16.284,16.284,0,0,1-7.845,2,16.285,16.285,0,0,1-7.845-2c-1.505-.824-3.43-.891-4.551.409A16.312,16.312,0,0,0,3,25.265v1.819a3.637,3.637,0,0,0,3.636,3.638H32.091a3.637,3.637,0,0,0,3.636-3.638V25.265A16.312,16.312,0,0,0,31.76,14.578Z" transform="translate(0 10.278)" fill="#99ebc2" fill-rule="evenodd"/>
                                    </g>
                                  </svg>

                            </figure>
                            <h4>{{ $uesr->count() }}</h4>
                            <h6>مستفيدين</h6>
                          </div>
                        </div>
                        <div class="col-lg-auto col-md-3 col-6">
                            <div class="number-card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                                <figure>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="37.135" viewBox="0 0 40 37.135">
                                        <g id="Star" transform="translate(-1.546 -2.524)">
                                          <path id="Path_1034" data-name="Path 1034" d="M19.789,3.679a1.913,1.913,0,0,1,3.513,0l4.171,9.665a1.913,1.913,0,0,0,1.609,1.149l10.7.826A1.913,1.913,0,0,1,40.848,18.7L32.8,25.343a1.913,1.913,0,0,0-.639,1.935l2.476,10a1.913,1.913,0,0,1-2.828,2.108l-9.3-5.473a1.912,1.912,0,0,0-1.941,0l-9.3,5.473A1.913,1.913,0,0,1,8.45,37.28l2.475-10a1.913,1.913,0,0,0-.639-1.935L2.243,18.7A1.913,1.913,0,0,1,3.314,15.32l10.7-.826a1.913,1.913,0,0,0,1.609-1.149Z" transform="translate(0 0)" fill="#99ebc2"/>
                                          <path id="Path_1035" data-name="Path 1035" d="M15.077,8.607a.961.961,0,0,1,1.787,0l1.559,3.942a.96.96,0,0,0,.813.6l4.131.348a.961.961,0,0,1,.562,1.671l-3.217,2.9a.96.96,0,0,0-.294.927l.97,4.277A.961.961,0,0,1,19.932,24.3l-3.443-2.211a.961.961,0,0,0-1.038,0L12.008,24.3a.961.961,0,0,1-1.456-1.021L11.522,19a.961.961,0,0,0-.294-.927l-3.217-2.9A.961.961,0,0,1,8.573,13.5l4.131-.348a.961.961,0,0,0,.813-.6Z" transform="translate(5.576 4.964)" fill="#00ce68"/>
                                        </g>
                                      </svg>
                                </figure>
                                <h4>150+</h4>
                                <h6>تقييمات</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./numbers-section -->

        <!-- rates-stories-section -->
        <section class="rates-stories-section">
            <div class="container">
                <div class="main-title d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <h2>قصص وتقييمات</h2>
                    <a href="#" class="btn cs-btn">اضافة تقيم </a>
                </div>
                <div class="content">
                <div class="owl-carousel rates-slider owl-slider">
                    <div class="rates-card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="rate">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.854" viewBox="0 0 16 14.854">
                                    <path id="Path" d="M7.3.462A.765.765,0,0,1,8.7.462l1.668,3.866a.765.765,0,0,0,.644.46l4.278.331a.765.765,0,0,1,.428,1.353L12.5,9.128a.765.765,0,0,0-.256.774l.99,4a.765.765,0,0,1-1.131.843L8.388,12.556a.765.765,0,0,0-.776,0L3.893,14.746A.765.765,0,0,1,2.762,13.9l.99-4A.765.765,0,0,0,3.5,9.128L.279,6.471A.765.765,0,0,1,.707,5.118l4.278-.331a.765.765,0,0,0,.644-.46Z" fill="#ffc542"/>
                                    </svg>
                            </span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.854" viewBox="0 0 16 14.854">
                                    <path id="Path" d="M7.3.462A.765.765,0,0,1,8.7.462l1.668,3.866a.765.765,0,0,0,.644.46l4.278.331a.765.765,0,0,1,.428,1.353L12.5,9.128a.765.765,0,0,0-.256.774l.99,4a.765.765,0,0,1-1.131.843L8.388,12.556a.765.765,0,0,0-.776,0L3.893,14.746A.765.765,0,0,1,2.762,13.9l.99-4A.765.765,0,0,0,3.5,9.128L.279,6.471A.765.765,0,0,1,.707,5.118l4.278-.331a.765.765,0,0,0,.644-.46Z" fill="#ffc542"/>
                                    </svg>
                            </span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.854" viewBox="0 0 16 14.854">
                                    <path id="Path" d="M7.3.462A.765.765,0,0,1,8.7.462l1.668,3.866a.765.765,0,0,0,.644.46l4.278.331a.765.765,0,0,1,.428,1.353L12.5,9.128a.765.765,0,0,0-.256.774l.99,4a.765.765,0,0,1-1.131.843L8.388,12.556a.765.765,0,0,0-.776,0L3.893,14.746A.765.765,0,0,1,2.762,13.9l.99-4A.765.765,0,0,0,3.5,9.128L.279,6.471A.765.765,0,0,1,.707,5.118l4.278-.331a.765.765,0,0,0,.644-.46Z" fill="#ffc542"/>
                                    </svg>
                            </span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.854" viewBox="0 0 16 14.854">
                                    <path id="Path" d="M7.3.462A.765.765,0,0,1,8.7.462l1.668,3.866a.765.765,0,0,0,.644.46l4.278.331a.765.765,0,0,1,.428,1.353L12.5,9.128a.765.765,0,0,0-.256.774l.99,4a.765.765,0,0,1-1.131.843L8.388,12.556a.765.765,0,0,0-.776,0L3.893,14.746A.765.765,0,0,1,2.762,13.9l.99-4A.765.765,0,0,0,3.5,9.128L.279,6.471A.765.765,0,0,1,.707,5.118l4.278-.331a.765.765,0,0,0,.644-.46Z" fill="#ffc542"/>
                                    </svg>
                            </span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.854" viewBox="0 0 16 14.854">
                                    <path id="Path" d="M7.3.462A.765.765,0,0,1,8.7.462l1.668,3.866a.765.765,0,0,0,.644.46l4.278.331a.765.765,0,0,1,.428,1.353L12.5,9.128a.765.765,0,0,0-.256.774l.99,4a.765.765,0,0,1-1.131.843L8.388,12.556a.765.765,0,0,0-.776,0L3.893,14.746A.765.765,0,0,1,2.762,13.9l.99-4A.765.765,0,0,0,3.5,9.128L.279,6.471A.765.765,0,0,1,.707,5.118l4.278-.331a.765.765,0,0,0,.644-.46Z" fill="#ffc542"/>
                                    </svg>
                            </span>
                            <h6>5.0</h6>
                        </div>
                        <p>
                            أنا معجب جدا بخدماتكم، لقد أخبرت
                            ،الأصدقاء عن خدماتكم الممتازة
                            .أنصح  المرضى بإستخدام المنصة
                        </p>
                        <div class="rates-card-info">
                            <figure>
                                <img src="assets/images/avatar.png" alt="" srcset="">
                            </figure>
                            <div>
                                <h4>عبدالكريم محمد</h4>
                                <h6>‏12 أغسطس، 2022</h6>
                            </div>
                        </div>
                  </div>
                </div>
              </div>
        </section>
        <!-- ./rates-stories-section -->

        <!-- contact-us-section -->
        <section class="callaction-section contact-us-section">
            <div class="container">
                <div class="content">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <figure>
                                <img src="assets/images/contact-us.png" class="wow zoomIn" data-wow-duration="1s" data-wow-delay="0.1s" alt="" srcset="">
                            </figure>
                        </div>
                        <div class="col-lg-7">
                            <h4 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">تواصل معنا</h4>
                            <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                                تحتاج للمساعدة، ونحن هنا لمساعدتك فريق عملنا متواجد دائما على مدار الساعة
                                .طوال أيام الأسبوع لخدمتك والإجابة على جميع أسئلتك واستفساراتك
                            </p>
                        </div>
                        <div class="col-lg-3 mx-auto">
                            <a href="{{ route('frontend.messages') }}" class="btn cs-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">تواصل معنا الأن</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./contact-us-section -->

        <!-- blog-section -->
        @isset($blogs)
        <section class="blog-section">
            <div class="container">
                <div class="main-title d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h2>من المدونة</h2>
                </div>
                <div class="content">
                    <div class="row">
                        @foreach ($blogs->take(3) as $blog)
                        <div class="col-lg-4 col-md-6">
                            <a href="{{ route('frontend.blogs',$blog->id) }}">
                                <div class="article-card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                                    <figure>
                                        <img style="width: 100% ;height:100% ;" src="{{Storage::url('blogs/'.$blog->cover)}}" alt="" srcset="">
                                    </figure>
                                    <div class="article-card-body">
                                        <h6>{{ $blog->major->name }}</h6>
                                        <h4>{{ $blog->title }}</h4>
                                        <p>{{ $blog->descrption }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row mt-5 mb-5" style="justify-content: center;">
                <a href="{{ route('blogs') }}" 
                class="btn cs-btn" style="height: 44px; width: 215px">عرض كل المقالات</a>
            </div>
        </section>
        @endisset
        
        <!-- ./blog-section -->

         <!-- fqa-section -->
      <section class="fqa-section" id="fqa">
         <div class="container">
            <div class="content">
                    <div class="main-title d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2>الأسئلة الأكثر شيـوعا</h2>
                        <a href="#" class="btn cs-btn">عرض كل الأسئلة</a>
                  </div>
            @foreach ($messages->take(4) as$messages )
            <div id="accordion" class="cs-accordion">
                <div class="card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <div class="d-flex">
                                <button class="btn btn-link"  data-bs-toggle="collapse" data-bs-target="#collapse{{ $messages->id }}" aria-expanded="false" aria-controls="collapse">
                                 {{ $messages->messages }}؟
                                </button>
                                <span class="show">
                                    <svg id="add-circle" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path id="Vector" d="M20,10A10,10,0,1,1,10,0,10,10,0,0,1,20,10Z" transform="translate(2 2)" fill="#cfd0d5"/>
                                        <path id="Vector-2" data-name="Vector" d="M8.75,4H5.5V.75A.75.75,0,0,0,4,.75V4H.75a.75.75,0,0,0,0,1.5H4V8.75a.75.75,0,0,0,1.5,0V5.5H8.75a.75.75,0,0,0,0-1.5Z" transform="translate(7.25 7.25)" fill="#868692"/>
                                        <path id="Vector-3" data-name="Vector" d="M0,0H24V24H0Z" fill="none" opacity="0"/>
                                    </svg>
                                </span>
                                <span class="hide">
                                    <svg id="vuesax_bulk_minus-cirlce" data-name="vuesax/bulk/minus-cirlce" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="minus-cirlce">
                                        <path id="Vector" d="M20,10A10,10,0,1,1,10,0,10,10,0,0,1,20,10Z" transform="translate(2 2)" fill="#d3efd5"/>
                                        <path id="Vector-2" data-name="Vector" d="M8.75,1.5h-8A.755.755,0,0,1,0,.75.755.755,0,0,1,.75,0h8a.75.75,0,0,1,0,1.5Z" transform="translate(7.17 11.25)" fill="#00ce68"/>
                                        <path id="Vector-3" data-name="Vector" d="M0,0H24V24H0Z" fill="none" opacity="0"/>
                                        </g>
                                    </svg>

                                </span>
                            </div>
                        </h5>
                    </div>
                    <div id="collapse{{ $messages->id }}" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordion">
                        <div class="card-body">
                            {{ $messages->reply }}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
          </div>
        </div>
     </section>
        <!-- ./fqa-section -->
        <!-- mailinglist-section -->
        @if( Auth('user')->user())
        @else
        <section class="mailinglist-section">
            <div class="container">
                <div class="content">
                    <h4>إنضم للقائمة البريدية ليصلك كل جديد.</h4>
                    <form action="" method="post">
                        <div class="cs-search-input">
                           
                            <a href="{{  route('profail.create') }}"
                             type="submit" class="btn cs-btn v2 position-relative ">إشتراك</a>
                             
                        </div>
                    </form>
                </div>
            </div>
        </section>
        @endif
        
        <!-- ./mailinglist-section -->

        <!-- contact-us-btn -->
        <div class="contact-us-btn">
            <a href="#">
                <figure>
                    <img src="assets/images/contact-us-icon.svg" alt="" srcset="">
                </figure>
            </a>
            <p>طلب مساعدة</p>
        </div>
        <!-- ./contact-us-btn -->
 @endsection
