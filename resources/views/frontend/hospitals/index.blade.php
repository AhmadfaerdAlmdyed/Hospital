@extends('frontend.layouts')
@section('content')

    <div class="body-content hospital-details-page">
        @isset($hospital) 
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">
                            <span class="px-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.02" height="19.998"
                                    viewBox="0 0 20.02 19.998">
                                    <g id="vuesax_bulk_home-2" data-name="vuesax/bulk/home-2"
                                        transform="translate(-621.99 -190.002)">
                                        <g id="home-2">
                                            <path id="Vector"
                                                d="M18.05,4.818,12.29.788A4.853,4.853,0,0,0,6.8.918L1.79,4.828A5.153,5.153,0,0,0,0,8.468v6.9A4.631,4.631,0,0,0,4.62,20H15.4a4.622,4.622,0,0,0,4.62-4.62V8.6A5.1,5.1,0,0,0,18.05,4.818Z"
                                                transform="translate(621.99 190.002)" fill="#e2e2e2" />
                                            <path id="Vector-2" data-name="Vector"
                                                d="M.75,4.5A.755.755,0,0,1,0,3.75v-3A.755.755,0,0,1,.75,0,.755.755,0,0,1,1.5.75v3A.755.755,0,0,1,.75,4.5Z"
                                                transform="translate(631.25 202.25)" fill="#05060f" />
                                        </g>
                                    </g>
                                </svg>
                            </span>
                            <span>الرئيسية</span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="hospitals.html">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="6.811" height="12.121"
                                    viewBox="0 0 6.811 12.121">
                                    <path id="Arrow_-_Right" data-name="Arrow - Right" d="M10,0,5,5,0,0"
                                        transform="translate(5.75 1.061) rotate(90)" fill="none" stroke="#727a83"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                </svg>
            
                            </span>
                            <span>المستشفيات</span>
                        </a>
                    </li>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="6.811" height="12.121"
                            viewBox="0 0 6.811 12.121">
                            <path id="Arrow_-_Right" data-name="Arrow - Right" d="M10,0,5,5,0,0"
                                transform="translate(5.75 1.061) rotate(90)" fill="none" stroke="#727a83"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                        </svg>
    
                    </span>
                    <li class="breadcrumb-item active" aria-current="page">تفاصيل المستشفى</li>
                </ol>
            </nav>
        </div>
        <div class="main-section">
            <div class="container">
                <div class="content">

                  <div class="d-flex align-items-center gap-3">
                    <figure class="mb-0">
                        <img src="assets/images/hospital-details-logo.png" alt="" srcset="">
                    </figure>
                    <div>
                        <h2>{{ $hospital->name }}</h2>
                        <div class="d-flex ">
                            <div class="rate">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21.63" height="20" viewBox="0 0 21.63 20">
                                        <g id="Star" transform="translate(-3.355 -2.05)">
                                        <path id="Path" d="M9.865.622a1.036,1.036,0,0,1,1.9,0L14.02,5.827a1.034,1.034,0,0,0,.87.619l5.783.445a1.029,1.029,0,0,1,.579,1.822L16.9,12.29a1.028,1.028,0,0,0-.346,1.042L17.9,18.719a1.033,1.033,0,0,1-1.529,1.135L11.34,16.907a1.038,1.038,0,0,0-1.05,0L5.263,19.854a1.033,1.033,0,0,1-1.529-1.135l1.339-5.387a1.028,1.028,0,0,0-.346-1.042L.377,8.713A1.029,1.029,0,0,1,.956,6.891L6.74,6.446a1.034,1.034,0,0,0,.87-.619Z" transform="translate(3.355 2.05)" fill="#ffc542"/>
                                        </g>
                                    </svg>                                  
                                </span>
                                5.0
                                <p class="mb-0">(55) تقييم</p>
                            </div>
                            <div class="address">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17.75" height="20.5" viewBox="0 0 17.75 20.5">
                                        <g id="location" transform="translate(0)">
                                        <path id="Vector" d="M17.5,6.7A8.626,8.626,0,0,0,8.88,0H8.87A8.624,8.624,0,0,0,.25,6.69C-.92,11.85,2.24,16.22,5.1,18.97a5.422,5.422,0,0,0,7.55,0C15.51,16.22,18.67,11.86,17.5,6.7Z" fill="#d3d3d8"/>
                                        <path id="Vector-2" data-name="Vector" d="M6.3,3.15A3.15,3.15,0,1,1,3.15,0,3.15,3.15,0,0,1,6.3,3.15Z" transform="translate(5.73 5.41)" fill="#868692"/>
                                        </g>
                                    </svg>                                  
                                </span>
                                 {{ $hospital->location }}
                            </div>
                        </div>
                    </div>
                  </div>
                  <a href="#" class="btn cs-btn v2 cs-w-h">طلب عرض سعر</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-4">
                <div class="col-lg-9">
                    <div class="owl-carousel hospital-details-slider owl-slider mt-32">
                        <figure class="overlay video-img"  href="assets/images/img-hospital-details.png" data-fancybox="">
                            <img src="{{Storage::url('hospitals/'.$hospital ->cover )}}" alt="" srcset="">
                            <div class="play">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22.168" height="25.728" viewBox="0 0 22.168 25.728">
                                    <path id="Shape" d="M5.547.55l14.9,9.224a3.634,3.634,0,0,1,0,6.18l-14.9,9.224A3.634,3.634,0,0,1,0,22.088V3.64A3.634,3.634,0,0,1,5.547.55Z" fill="#05051b"></path>
                                </svg>
                            </div>
                        </figure>
                        <figure class="overlay">
                             <img src="assets/images/img-hospital-details.png" alt="" srcset="">
                        </figure>
                        <figure class="overlay">
                             <img src="assets/images/img-hospital-details.png" alt="" srcset="">
                        </figure>
                        <figure class="overlay">
                             <img src="assets/images/img-hospital-details.png" alt="" srcset="">
                        </figure>
                    </div>
                    <div id="cs-tabs" class="list-group cs-tabs">
                        <a class="list-group-item list-group-item-action" href="#list-item-1">نظرة عامة</a>
                        <a class="list-group-item list-group-item-action" href="#list-item-2">التخصصات</a>
                        <a class="list-group-item list-group-item-action" href="#list-item-3">الأخصائيين</a>
                        <a class="list-group-item list-group-item-action" href="#list-item-4">الخريطة</a>
                    </div>
                      <div data-bs-spy="scroll" data-bs-target="#cs-tabs" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                        <div id="list-item-1" class="tab-section">
                            <h4>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <g id="vuesax_bulk_info-circle" data-name="vuesax/bulk/info-circle" transform="translate(-366 -254)">
                                      <g id="info-circle" transform="translate(366 254)">
                                        <path id="Vector" d="M24,12A12,12,0,1,1,12,0,12,12,0,0,1,24,12Z" fill="#99ebc2"/>
                                        <g id="Group_63665" data-name="Group 63665" transform="translate(0.399 -0.313)">
                                          <path id="Vector-2" data-name="Vector" d="M1,8a.971.971,0,0,0,1-.923V.923A.971.971,0,0,0,1,0,.971.971,0,0,0,0,.923V7.077A.971.971,0,0,0,1,8Z" transform="translate(11 6.313)" fill="#00ce68"/>
                                          <path id="Vector-3" data-name="Vector" d="M2.4.769A1.443,1.443,0,0,0,2.138.356,1.443,1.443,0,0,0,1.725.094a1.25,1.25,0,0,0-.95,0A1.443,1.443,0,0,0,.362.356,1.443,1.443,0,0,0,.1.769a1.244,1.244,0,0,0-.1.475,1.244,1.244,0,0,0,.1.475,1.29,1.29,0,0,0,.263.412,1.443,1.443,0,0,0,.412.263,1.244,1.244,0,0,0,.475.1,1.244,1.244,0,0,0,.475-.1,1.443,1.443,0,0,0,.412-.263A1.29,1.29,0,0,0,2.4,1.719a1.244,1.244,0,0,0,.1-.475A1.244,1.244,0,0,0,2.4.769Z" transform="translate(10.6 16)" fill="#00ce68"/>
                                        </g>
                                      </g>
                                    </g>
                                  </svg>
                                  حول المستشفى                              
    
                            </h4>
                            <p>
                                {{ $hospital->info }}
                            </p>
                            
                            <h6 class="font-16 font500 black-color">
                                الخدمات داخل المستشفى
                            </h6>
                            <div class="d-flex flex-wrap gap-lg-5 gap-3 mt-3">
                                <span class="black-color">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="vuesax_bulk_arrow-circle-right" data-name="vuesax/bulk/arrow-circle-right" transform="translate(-492 -252)">
                                          <g id="arrow-circle-right">
                                            <path id="Vector" d="M0,0H24V24H0Z" transform="translate(492 252)" fill="none" opacity="0"/>
                                            <g id="car" transform="translate(491.953 251.31)">
                                              <path id="Path_42243" data-name="Path 42243" d="M19.545,13.007l.48-1.792a.779.779,0,0,1,.816-.472h1.638a.556.556,0,0,1,.521.78l-.3.8a1.617,1.617,0,0,1-1.062.808C20.707,13.385,19.418,13.484,19.545,13.007Zm-15,0-.48-1.792a.779.779,0,0,0-.816-.472H1.613a.556.556,0,0,0-.52.78l.3.8a1.616,1.616,0,0,0,1.061.808c.934.251,2.224.349,2.1-.127ZM18.08,18.875h1.281a1.827,1.827,0,0,1,1.83,1.831v1.648a1.827,1.827,0,0,1-1.83,1.831H18.08a1.827,1.827,0,0,1-1.831-1.83V20.705a1.827,1.827,0,0,1,1.831-1.831Zm-13.364,0H6a1.827,1.827,0,0,1,1.831,1.831v1.648A1.827,1.827,0,0,1,6,24.184H4.716a1.827,1.827,0,0,1-1.831-1.83V20.705a1.827,1.827,0,0,1,1.831-1.831Z" transform="translate(0 -2.176)" fill="#868692"/>
                                              <path id="Path_42244" data-name="Path 42244" d="M4.927,5.154c-.764,1.726-1.376,5.493-2.189,7.5-1.818,2.94-.206,6.562,1.82,6.562H19.912c2.025,0,3.843-3.623,2.025-6.562-.812-2.006-1.63-5.773-2.394-7.5-.811-1.4-4.41-1.464-7.309-1.464s-6.831.1-7.308,1.464Z" transform="translate(-0.278 0)" fill="#d3d3d8"/>
                                              <path id="Path_42245" data-name="Path 42245" d="M9.169,18.411s-.462-1.6-2.859-1.6H4.644c-.312,0-.725.586-.275,1.364A1.455,1.455,0,0,0,6,19.114H8.481c.692,0,.786-.338.688-.7Zm7.667,0s.462-1.6,2.859-1.6h1.666c.311,0,.725.586.275,1.364a1.454,1.454,0,0,1-1.628.94H17.524c-.692,0-.786-.338-.689-.7Z" transform="translate(-0.964 -4.042)" fill="#f9f9f9"/>
                                              <path id="Path_42246" data-name="Path 42246" d="M8.87,20.756a.913.913,0,0,0-.916.915v1.886H20.386V21.671a.913.913,0,0,0-.916-.915Zm3.652-3h3.3a.823.823,0,1,1,0,1.646h-3.3a.823.823,0,1,1,0-1.646Z" transform="translate(-2.132 -4.332)" fill="#868692" opacity="0.4"/>
                                              <path id="Path_42247" data-name="Path 42247" d="M13.553,5.22c-3.722,0-6.053.471-6.316,1.461l-.992,3.732a.564.564,0,0,0,.54.774h13.53a.568.568,0,0,0,.547-.774L19.87,6.681c-.263-.99-2.6-1.46-6.317-1.46Z" transform="translate(-1.595 -0.472)" fill="#fff"/>
                                            </g>
                                          </g>
                                        </g>
                                      </svg>
                                      خدمات التنقل
                                </span>
                                <span class="black-color">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="vuesax_bulk_translate" data-name="vuesax/bulk/translate" transform="translate(-748 -316)">
                                          <g id="translate">
                                            <path id="Vector" d="M0,0H24V24H0Z" transform="translate(772 340) rotate(180)" fill="none" opacity="0"/>
                                            <path id="Vector-2" data-name="Vector" d="M5.08,10.16a5.08,5.08,0,1,1,5.08-5.08A5.081,5.081,0,0,1,5.08,10.16Z" transform="translate(759.84 327.84)" fill="#d3d3d8"/>
                                            <path id="Vector-3" data-name="Vector" d="M3.02,0H6.94c2.07,0,3.07,1,3.02,3.02V6.94c.05,2.07-.95,3.07-3.02,3.02H3.02C1,10,0,9,0,6.93V3.01C0,1,1,0,3.02,0Z" transform="translate(750 318)" fill="#d3d3d8"/>
                                            <path id="Vector-4" data-name="Vector" d="M4.83,3.84a1.458,1.458,0,0,1-.87-.32,3.823,3.823,0,0,0,.52-1.34h.34a.75.75,0,0,0,0-1.5H3.53a.743.743,0,0,0-1.48,0H.76a.75.75,0,0,0,0,1.5H2.93A2.311,2.311,0,0,1,.75,3.84a.75.75,0,0,0,0,1.5,3.7,3.7,0,0,0,2.18-.72,2.952,2.952,0,0,0,1.89.72.755.755,0,0,0,.75-.75A.747.747,0,0,0,4.83,3.84Z" transform="translate(752.18 320.42)" fill="#868692"/>
                                            <g id="Group">
                                              <g id="Group-2" data-name="Group">
                                                <path id="Vector-5" data-name="Vector" d="M7.75,8.5A7.763,7.763,0,0,1,0,.75.755.755,0,0,1,.75,0,.755.755,0,0,1,1.5.75,6.261,6.261,0,0,0,6.33,6.84l-.27-.45a.751.751,0,1,1,1.29-.77L8.4,7.37a.745.745,0,0,1,.01.75A.781.781,0,0,1,7.75,8.5Z" transform="translate(749.25 330.25)" fill="#868692"/>
                                              </g>
                                              <g id="Group-3" data-name="Group">
                                                <path id="Vector-6" data-name="Vector" d="M7.756,8.5a.755.755,0,0,1-.75-.75,6.261,6.261,0,0,0-4.83-6.09l.27.45a.751.751,0,1,1-1.29.77L.106,1.13A.745.745,0,0,1,.1.38.732.732,0,0,1,.746,0,7.763,7.763,0,0,1,8.5,7.75.741.741,0,0,1,7.756,8.5Z" transform="translate(762.244 317.25)" fill="#868692"/>
                                              </g>
                                            </g>
                                            <path id="Vector-7" data-name="Vector" d="M5.7,4.69,3.562.42A.77.77,0,0,0,2.892,0a.76.76,0,0,0-.67.41L.082,4.68a.745.745,0,0,0,.34,1.01.8.8,0,0,0,.33.08.753.753,0,0,0,.67-.41l.17-.34h2.59l.17.34a.763.763,0,0,0,1.01.34A.745.745,0,0,0,5.7,4.69ZM2.352,3.52,2.9,2.43l.55,1.09Z" transform="translate(762.028 329.64)" fill="#868692"/>
                                          </g>
                                        </g>
                                      </svg>
                                      خدمات الترجمة        
                                </span>
                                <span class="black-color">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="vuesax_bulk_card" data-name="vuesax/bulk/card" transform="translate(-492 -508)">
                                          <g id="card">
                                            <path id="Vector" d="M20,0V7.46a4.144,4.144,0,0,1-4.15,4.14H4.15A4.144,4.144,0,0,1,0,7.46V0Z" transform="translate(494 517)" fill="#d3d3d8"/>
                                            <path id="Vector-2" data-name="Vector" d="M20,4.14V5.6H0V4.14A4.144,4.144,0,0,1,4.15,0h11.7A4.144,4.144,0,0,1,20,4.14Z" transform="translate(494 511.4)" fill="#868692"/>
                                            <path id="Vector-3" data-name="Vector" d="M2.75,1.5h-2A.755.755,0,0,1,0,.75.755.755,0,0,1,.75,0h2A.755.755,0,0,1,3.5.75.755.755,0,0,1,2.75,1.5Z" transform="translate(497.25 523.75)" fill="#868692"/>
                                            <path id="Vector-4" data-name="Vector" d="M4.75,1.5h-4A.755.755,0,0,1,0,.75.755.755,0,0,1,.75,0h4A.755.755,0,0,1,5.5.75.755.755,0,0,1,4.75,1.5Z" transform="translate(501.75 523.75)" fill="#868692"/>
                                            <path id="Vector-5" data-name="Vector" d="M0,0H24V24H0Z" transform="translate(492 508)" fill="none" opacity="0"/>
                                          </g>
                                        </g>
                                      </svg>
                                      الدفع أونلاين                                      
                                </span>
                            </div>
                            <h6 class="mt-4 font-16 font500 black-color">
                                التجهيزات والمرافق
                            </h6>
                            <div class="d-flex flex-wrap gap-lg-5 gap-3 mt-3">
                                <span class="black-color">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="vuesax_bulk_arrow-circle-right" data-name="vuesax/bulk/arrow-circle-right" transform="translate(-492 -252)">
                                          <g id="arrow-circle-right">
                                            <path id="Vector" d="M20,10A10,10,0,1,1,10,0,10,10,0,0,1,20,10Z" transform="translate(494 254)" fill="#d3d3d8"/>
                                            <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z" transform="translate(492 252)" fill="none" opacity="0"/>
                                            <path id="Vector-3" data-name="Vector" d="M2.247,5.5a.742.742,0,0,1-.53-.22l-1.5-1.5a.75.75,0,0,1,1.06-1.06l.97.97L5.718.218a.75.75,0,1,1,1.06,1.06l-4,4A.742.742,0,0,1,2.247,5.5Z" transform="translate(500.503 261.251)" fill="#868692"/>
                                          </g>
                                        </g>
                                      </svg>    
                                      غرف خاصة                                      
                                </span>
                                <span class="black-color">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="vuesax_bulk_arrow-circle-right" data-name="vuesax/bulk/arrow-circle-right" transform="translate(-492 -252)">
                                          <g id="arrow-circle-right">
                                            <path id="Vector" d="M20,10A10,10,0,1,1,10,0,10,10,0,0,1,20,10Z" transform="translate(494 254)" fill="#d3d3d8"/>
                                            <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z" transform="translate(492 252)" fill="none" opacity="0"/>
                                            <path id="Vector-3" data-name="Vector" d="M2.247,5.5a.742.742,0,0,1-.53-.22l-1.5-1.5a.75.75,0,0,1,1.06-1.06l.97.97L5.718.218a.75.75,0,1,1,1.06,1.06l-4,4A.742.742,0,0,1,2.247,5.5Z" transform="translate(500.503 261.251)" fill="#868692"/>
                                          </g>
                                        </g>
                                      </svg>
                                      كافيتيريا/مطعم                                     
                                </span>
                                <span class="black-color">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="vuesax_bulk_arrow-circle-right" data-name="vuesax/bulk/arrow-circle-right" transform="translate(-492 -252)">
                                          <g id="arrow-circle-right">
                                            <path id="Vector" d="M20,10A10,10,0,1,1,10,0,10,10,0,0,1,20,10Z" transform="translate(494 254)" fill="#d3d3d8"/>
                                            <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z" transform="translate(492 252)" fill="none" opacity="0"/>
                                            <path id="Vector-3" data-name="Vector" d="M2.247,5.5a.742.742,0,0,1-.53-.22l-1.5-1.5a.75.75,0,0,1,1.06-1.06l.97.97L5.718.218a.75.75,0,1,1,1.06,1.06l-4,4A.742.742,0,0,1,2.247,5.5Z" transform="translate(500.503 261.251)" fill="#868692"/>
                                          </g>
                                        </g>
                                      </svg>
                                      غرف مزودة بهاتف                               
                                </span>
                                <span class="black-color">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="vuesax_bulk_arrow-circle-right" data-name="vuesax/bulk/arrow-circle-right" transform="translate(-492 -252)">
                                          <g id="arrow-circle-right">
                                            <path id="Vector" d="M20,10A10,10,0,1,1,10,0,10,10,0,0,1,20,10Z" transform="translate(494 254)" fill="#d3d3d8"/>
                                            <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z" transform="translate(492 252)" fill="none" opacity="0"/>
                                            <path id="Vector-3" data-name="Vector" d="M2.247,5.5a.742.742,0,0,1-.53-.22l-1.5-1.5a.75.75,0,0,1,1.06-1.06l.97.97L5.718.218a.75.75,0,1,1,1.06,1.06l-4,4A.742.742,0,0,1,2.247,5.5Z" transform="translate(500.503 261.251)" fill="#868692"/>
                                          </g>
                                        </g>
                                      </svg>
                                      حجز الفندق                         
                                </span>
                                <span class="black-color">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="vuesax_bulk_arrow-circle-right" data-name="vuesax/bulk/arrow-circle-right" transform="translate(-492 -252)">
                                          <g id="arrow-circle-right">
                                            <path id="Vector" d="M20,10A10,10,0,1,1,10,0,10,10,0,0,1,20,10Z" transform="translate(494 254)" fill="#d3d3d8"/>
                                            <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z" transform="translate(492 252)" fill="none" opacity="0"/>
                                            <path id="Vector-3" data-name="Vector" d="M2.247,5.5a.742.742,0,0,1-.53-.22l-1.5-1.5a.75.75,0,0,1,1.06-1.06l.97.97L5.718.218a.75.75,0,1,1,1.06,1.06l-4,4A.742.742,0,0,1,2.247,5.5Z" transform="translate(500.503 261.251)" fill="#868692"/>
                                          </g>
                                        </g>
                                      </svg>
                                      سجلات طبية                 
                                </span>
                                
                            </div>
                            <div class="d-flex flex-wrap gap-lg-4 gap-3 mt-4">
                                <div class="count-card">
                                    <p>{{ $hospital->created_at }}</p>
                                    <p>سنة التأسيس</p>
                                </div>
                                <div class="count-card">
                                    <p>1500</p>
                                    <p>طاقم العمل</p>
                                </div>
                                <div class="count-card">
                                    <p>{{ $doctors->count() }}</p>
                                    <p>عدد الأطباء</p>
                                </div>
                                <div class="count-card">
                                    <p>100,000</p>
                                    <p>عدد العمليات</p>
                                </div>
                                <div class="count-card">
                                    <p>470</p>
                                    <p>عدد الأسرة</p>
                                </div>
                            </div>
                          
                        </div>
                        <div id="list-item-2" class="tab-section">
                            <h4>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <g id="Medical_Case" data-name="Medical Case" transform="translate(-2 -2)">
                                      <path id="Path_775" data-name="Path 775" d="M8,6.8V5.6A3.6,3.6,0,0,1,11.6,2h4.8A3.6,3.6,0,0,1,20,5.6V6.8h2.4A3.6,3.6,0,0,1,26,10.4v12A3.6,3.6,0,0,1,22.4,26H5.6A3.6,3.6,0,0,1,2,22.4v-12A3.6,3.6,0,0,1,5.6,6.8Zm2.4-1.2a1.2,1.2,0,0,1,1.2-1.2h4.8a1.2,1.2,0,0,1,1.2,1.2V6.8H10.4Z" fill="#99ebc2" fill-rule="evenodd"/>
                                      <path id="Path_776" data-name="Path 776" d="M11.625,11.208a1.208,1.208,0,0,1,2.417,0v2.417h2.417a1.208,1.208,0,1,1,0,2.417H14.042v2.417a1.208,1.208,0,0,1-2.417,0V16.042H9.208a1.208,1.208,0,0,1,0-2.417h2.417Z" transform="translate(1.166 1.555)" fill="#00ce68" fill-rule="evenodd"/>
                                    </g>
                                  </svg>
                                  
                                  التخصصات                            
    
                            </h4>
                            <ul class="majors-list">
                                @foreach ($majors as $major )
                                 <li>{{$major->name  }}</li>
                                @endforeach
                               
                            </ul>
                        </div>

                        <div id="list-item-3" class="tab-section">
                            <h4>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <g id="Stethoscope" transform="translate(-2 -2)">
                                      <path id="Path_808" data-name="Path 808" d="M8.2,12a1.2,1.2,0,0,1,1.2,1.2v3a5.4,5.4,0,1,0,10.808,0V14.4a1.2,1.2,0,1,1,2.4,0v1.8A7.806,7.806,0,1,1,7,16.2v-3A1.2,1.2,0,0,1,8.2,12Z" transform="translate(0.987 1.991)" fill="#99ebc2" fill-rule="evenodd"/>
                                      <path id="Path_809" data-name="Path 809" d="M5.2,4.4a.8.8,0,0,0-.8.8v4a4.8,4.8,0,1,0,9.607,0v-4a.8.8,0,0,0-.8-.8h-.4a1.2,1.2,0,0,1,0-2.4h.4a3.2,3.2,0,0,1,3.2,3.2v4A7.205,7.205,0,0,1,2,9.205v-4A3.2,3.2,0,0,1,5.2,2h.4a1.2,1.2,0,0,1,0,2.4Z" transform="translate(0 0)" fill="#00ce68" fill-rule="evenodd"/>
                                      <path id="Path_810" data-name="Path 810" d="M19.6,13.8a1.2,1.2,0,1,0-1.2-1.2A1.2,1.2,0,0,0,19.6,13.8Zm0,2.4A3.6,3.6,0,1,0,16,12.6,3.6,3.6,0,0,0,19.6,16.205Z" transform="translate(2.795 1.397)" fill="#00ce68" fill-rule="evenodd"/>
                                    </g>
                                  </svg>                                  
                                  
                                  الأخصائيين                            
    
                            </h4>
                            
                            <div class="specialists-slider-section">  
                                <div class="owl-carousel specialists-slider owl-slider mt-32">
                                    @foreach ( $doctors as $doctor)
                                    <div class="general-card specialist-card v2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                                        <figure>
                                            <img src="{{Storage::url('doctors/'.$doctor->cover)}}" alt="" srcset="">
                                        </figure>
                                        <div class="general-card-body">
                                            <h4>{{ $doctor->name  }}</h4>
                                            <h6>{{$hospital->name}}</h6>
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
                                        </div>
                                        
                                    </div> 
                                    @endforeach    
                                </div>
                            </div>   
                        </div>
                        
                        <div id="list-item-4" class="tab-section">
                            <h4>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.78" height="24" viewBox="0 0 20.78 24">
                                    <g id="location" transform="translate(-431.12 -189.75)">
                                      <path id="Vector" d="M20.488,7.844A10.1,10.1,0,0,0,10.4,0h-.012A10.1,10.1,0,0,0,.293,7.832c-1.37,6.041,2.33,11.157,5.678,14.377a6.348,6.348,0,0,0,8.839,0C18.158,18.989,21.858,13.885,20.488,7.844Z" transform="translate(431.12 189.75)" fill="#99ebc2"/>
                                      <path id="Vector-2" data-name="Vector" d="M7.374,3.687A3.687,3.687,0,1,1,3.687,0,3.687,3.687,0,0,1,7.374,3.687Z" transform="translate(437.829 196.084)" fill="#00ce68"/>
                                    </g>
                                  </svg>                                                            
                                  الخريطة                            
                            </h4>
                            <figure class="map">
                                <img src="{{ asset('frontend/images/s_4.png') }}/images/Location.png" alt="" srcset="">
                            </figure>
                        </div>
                      
                        
                      </div>
                   
                </div>
                <div class="col-lg-3">
                    <div class="form-hospital">
                        <h2>احصل على استشارة مجانية</h2>
                        <form action="" method="POST">
                            <div class="form-group mb-2">
                                <label for="">الاسم كاملا</label>
                                <input type="text" class="form-control cs-input" name="" id="" placeholder="الاسم كاملا">
                            </div>
                            <div class="form-group mb-2">
                                <label for="">البريد الالكتروني</label>
                                <input type="email" class="form-control cs-input" name="" id="" placeholder="البريد الالكتروني">
                            </div>
                            <div class="form-group mb-2">
                                <label for="">رقم الجوال</label>
                                <input type="text" class="form-control cs-input" name="" id="" placeholder="رقم الجوال">
                            </div>
                            <div class="form-group mb-2">
                                <label for="">التخصص</label>
                              <select name="" id="" class="form-select cs-input">
                                <option value="">اختر التخصص</option>
                              </select>
                            </div>
                            <div class="form-group mb-2">
                                <label for="">المرض</label>
                                <input type="text" class="form-control cs-input" name="" id="" placeholder="ادخل المرض">
                            </div>
                            <div class="form-group mb-2">
                                <label for="">الوصف</label>
                                <textarea name="" id="" class="form-control cs-input" cols="30" rows="5" placeholder="ادخل وصف مختصر..."></textarea>
                            </div>
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    أنا أوافق على <a href="#" class="policy">شروط الإستخدام و
                                        سياسة الخصوصية</a>
                                </label>
                              </div>
                              <button type="button" class="btn cs-btn v2 w-100 mt-4">أرسل الطلب</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="other-hospitals">
            <div class="main-title text-center">
                <h2>مستشفيات أخرى</h2>
            </div>
            <div class="container">
                <div class="row mt-5">
                    @foreach ($hospitals as $hospitals)
                    <div class="col-lg-4 col-md-6">
                        <div class="hospital-card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                            <a href="{{route('frontend.hospital',$hospitals->id)}}">
                            <figure>
                                <img src="{{Storage::url('hospitals/'.$hospitals->cover)}}"" alt="" srcset="">
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
                                <p>(55){{$hospitals->location}}</p>
                            </div>
                            <h4>{{$hospitals->name}}</h4>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
        @endisset
    </div>
 @endsection