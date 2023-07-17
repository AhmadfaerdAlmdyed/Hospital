@extends('frontend.layouts')
@section('content')
<div class="body-content contact-us-page">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('home') }}">
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
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="6.811" height="12.121"
                        viewBox="0 0 6.811 12.121">
                        <path id="Arrow_-_Right" data-name="Arrow - Right" d="M10,0,5,5,0,0"
                            transform="translate(5.75 1.061) rotate(90)" fill="none" stroke="#727a83"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                    </svg>

                </span>
                <li class="breadcrumb-item active" aria-current="page">تواصل معنا</li>
            </ol>
        </nav>
        <div class="content mt-5">
            <div class="top">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form">
                            <h5>أرسل سؤالك...</h5>
                            <form action="{{ route('messages.store') }}" method="POST"
                             enctype="multipart/form-data">
                             @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">الاسم كاملا:</label>
                                            <div class="icon-input">
                                                <span class="icon-i">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                        <g id="vuesax_bulk_profile" data-name="vuesax/bulk/profile" transform="translate(-108 -252)">
                                                          <g id="profile">
                                                            <path id="Vector" d="M4.75,0a4.746,4.746,0,0,0-.12,9.49.807.807,0,0,1,.22,0h.07A4.746,4.746,0,0,0,4.75,0Z" transform="translate(115.25 254)" fill="#d3d3d8"/>
                                                            <path id="Vector-2" data-name="Vector" d="M12.12,1.395a9.929,9.929,0,0,0-10.15,0A3.947,3.947,0,0,0,0,4.625a3.914,3.914,0,0,0,1.96,3.21,9.239,9.239,0,0,0,5.08,1.41,9.239,9.239,0,0,0,5.08-1.41,3.945,3.945,0,0,0,1.96-3.23A3.937,3.937,0,0,0,12.12,1.395Z" transform="translate(112.96 264.755)" fill="#868692"/>
                                                            <path id="Vector-3" data-name="Vector" d="M0,0H24V24H0Z" transform="translate(108 252)" fill="none" opacity="0"/>
                                                          </g>
                                                        </g>
                                                      </svg>                                                          
                                                </span>                                                                                              
                                                <input type="text" name="name" class="form-control cs-input" id="recipient-name" placeholder="أدخل الاسم كاملا">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="email" class="col-form-label">البريد الالكتروني:</label>
                                            <div class="icon-input">
                                                <span class="icon-i">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                        <g id="vuesax_bulk_sms" data-name="vuesax/bulk/sms" transform="translate(-556 -252)">
                                                          <g id="sms">
                                                            <path id="Vector" d="M0,0H24V24H0Z" transform="translate(556 252)" fill="none" opacity="0"/>
                                                            <path id="Vector-2" data-name="Vector" d="M15,17H5c-3,0-5-1.5-5-5V5C0,1.5,2,0,5,0H15c3,0,5,1.5,5,5v7C20,15.5,18,17,15,17Z" transform="translate(558 255.5)" fill="#d3d3d8"/>
                                                            <g id="Group">
                                                              <path id="Vector-3" data-name="Vector" d="M5.753,4.626a3.717,3.717,0,0,1-2.34-.79l-3.13-2.5a.747.747,0,1,1,.93-1.17l3.13,2.5a2.386,2.386,0,0,0,2.81,0l3.13-2.5a.738.738,0,0,1,1.05.12.738.738,0,0,1-.12,1.05l-3.13,2.5A3.67,3.67,0,0,1,5.753,4.626Z" transform="translate(562.247 260.244)" fill="#868692"/>
                                                            </g>
                                                          </g>
                                                        </g>
                                                      </svg>                                                              
                                                </span>                                        
                                                <input type="email" class="form-control cs-input" name="email" id="email" placeholder="أدخل رقم المحمول">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="number_phone" class="col-form-label">رقم الجوال:</label>
                                            <div class="icon-input">
                                                <span class="icon-i">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                        <g id="vuesax_bulk_mobile" data-name="vuesax/bulk/mobile" transform="translate(-108 -380)">
                                                          <g id="mobile">
                                                            <path id="Vector" d="M12.24,0H3.76C1,0,0,1,0,3.81V16.19C0,19,1,20,3.76,20h8.47C15,20,16,19,16,16.19V3.81C16,1,15,0,12.24,0Z" transform="translate(112 382)" fill="#d3d3d8"/>
                                                            <path id="Vector-2" data-name="Vector" d="M4.75,1.5h-4A.755.755,0,0,1,0,.75.755.755,0,0,1,.75,0h4A.755.755,0,0,1,5.5.75.755.755,0,0,1,4.75,1.5Z" transform="translate(117.25 384.75)" fill="#868692"/>
                                                            <path id="Vector-3" data-name="Vector" d="M3.5,1.75A1.75,1.75,0,1,1,1.75,0,1.75,1.75,0,0,1,3.5,1.75Z" transform="translate(118.25 395.8)" fill="#868692"/>
                                                            <path id="Vector-4" data-name="Vector" d="M0,0H24V24H0Z" transform="translate(108 380)" fill="none" opacity="0"/>
                                                          </g>
                                                        </g>
                                                      </svg>                                                      
                                                </span>                                                
                                                <input type="text" class="form-control cs-input" name="phone" id="number_phone" placeholder="أدخل رقم الجوال">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">سبب سؤال:</label>
                                            <div class="icon-input">
                                                <span class="icon-i">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                        <g id="vuesax_bulk_message-2" data-name="vuesax/bulk/message-2" transform="translate(-492 -316)">
                                                          <g id="message-2">
                                                            <path id="Vector" d="M0,0H24V24H0Z" transform="translate(492 316)" fill="none" opacity="0"/>
                                                            <path id="Vector-2" data-name="Vector" d="M5,16H9l4.45,2.96A1,1,0,0,0,15,18.13V16a4.724,4.724,0,0,0,5-5V5a4.724,4.724,0,0,0-5-5H5A4.724,4.724,0,0,0,0,5v6A4.724,4.724,0,0,0,5,16Z" transform="translate(494 318.43)" fill="#d3d3d8"/>
                                                            <g id="Group">
                                                              <path id="Vector-3" data-name="Vector" d="M7.75,1.5h-7A.755.755,0,0,1,0,.75.755.755,0,0,1,.75,0h7A.755.755,0,0,1,8.5.75.755.755,0,0,1,7.75,1.5Z" transform="translate(499.75 325.75)" fill="#868692"/>
                                                            </g>
                                                          </g>
                                                        </g>
                                                      </svg>                                                      

                                                <input type="text" class="form-control cs-input" name="reason"  placeholder=" ادخل سبب سؤال">
                                                  
                                            </div>
                                    </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="message" class="col-form-label">سؤالك:</label>
                                            <div class="icon-input">
                                                <span class="icon-i">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                        <g id="vuesax_bulk_textalign-right" data-name="vuesax/bulk/textalign-right" transform="translate(-236 -188)">
                                                          <g id="textalign-right">
                                                            <path id="Vector" d="M18.75,1.5H.75A.755.755,0,0,1,0,.75.755.755,0,0,1,.75,0h18a.755.755,0,0,1,.75.75A.755.755,0,0,1,18.75,1.5Z" transform="translate(238.25 191.75)" fill="#05051b"></path>
                                                            <path id="Vector-2" data-name="Vector" d="M10.22,1.5H.75A.755.755,0,0,1,0,.75.755.755,0,0,1,.75,0h9.47a.755.755,0,0,1,.75.75A.755.755,0,0,1,10.22,1.5Z" transform="translate(246.78 196.75)" fill="#c7c9ca"></path>
                                                            <path id="Vector-3" data-name="Vector" d="M18.75,1.5H.75A.755.755,0,0,1,0,.75.755.755,0,0,1,.75,0h18a.755.755,0,0,1,.75.75A.755.755,0,0,1,18.75,1.5Z" transform="translate(238.25 201.75)" fill="#05051b"></path>
                                                            <path id="Vector-4" data-name="Vector" d="M0,0H24V24H0Z" transform="translate(236 188)" fill="none" opacity="0"></path>
                                                            <path id="Vector-5" data-name="Vector" d="M10.22,1.5H.75A.755.755,0,0,1,0,.75.755.755,0,0,1,.75,0h9.47a.755.755,0,0,1,.75.75A.755.755,0,0,1,10.22,1.5Z" transform="translate(246.78 206.75)" fill="#c7c9ca"></path>
                                                          </g>
                                                        </g>
                                                      </svg>

                                                </span> 
                                                <input name="messages" class="form-control cs-input" id="" cols="30" rows="8" placeholder="اكتب نص سؤالك هنا...">
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-md-12 ms-auto me-0 mt-4">
                                        <button type="submit" class="btn cs-btn v2 w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            ارسال سؤال
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-3 mt-lg-0">
                        <figure class="mb-0 map">
                            <img src="{{asset('frontend/images/map - Right.jpg') }}" class="img-fluid" alt="" srcset="">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <h4>معلومات التواصل</h4>
                <p>أهلا بك .. يمكنك التواصل معنا في أي وقت تريد, ونحن على استعداد لخدمتك واستقبال
                    .كافة اقتراحاتك واستفساراتك</p>
                    <div class="row mt-4">
                        <div class="col-lg-4 col-md-6">
                            <div class="info-card mt-4 mt-lg-0">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.995" height="31.995" viewBox="0 0 31.995 31.995">
                                        <g id="vuesax_bulk_sms" data-name="vuesax/bulk/sms" transform="translate(-556 -252)">
                                          <g id="sms" transform="translate(556 252)">
                                            <path id="Vector" d="M0,0H32V32H0Z" fill="none" opacity="0"/>
                                            <path id="Vector-2" data-name="Vector" d="M20,22.663H6.666c-4,0-6.666-2-6.666-6.666V6.666C0,2,2.666,0,6.666,0H20c4,0,6.666,2,6.666,6.666V16C26.663,20.664,24,22.663,20,22.663Z" transform="translate(2.666 4.666)" fill="#99ebc2"/>
                                            <g id="Group" transform="translate(8.328 10.991)">
                                              <path id="Vector-3" data-name="Vector" d="M7.669,6.167A4.956,4.956,0,0,1,4.55,5.114L.377,1.781A1,1,0,0,1,1.617.221L5.789,3.554a3.181,3.181,0,0,0,3.746,0L13.708.221a.984.984,0,0,1,1.4.16.984.984,0,0,1-.16,1.4L10.775,5.114A4.892,4.892,0,0,1,7.669,6.167Z" transform="translate(0 0)" fill="#00ce68"/>
                                            </g>
                                          </g>
                                        </g>
                                      </svg>                              
                                </span>
                                <h5>راسلنا عبر</h5>
                                <h6>guide.right@info.com</h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="info-card mt-4 mt-lg-0">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="vuesax_bulk_call-calling" data-name="vuesax/bulk/call-calling" transform="translate(-172 -188)">
                                          <g id="call-calling">
                                            <path id="Vector" d="M4.37,5.15a.77.77,0,0,1-.77-.77,3.481,3.481,0,0,0-.99-1.81A2.791,2.791,0,0,0,.77,1.54.77.77,0,1,1,.77,0,4.25,4.25,0,0,1,3.74,1.51,4.719,4.719,0,0,1,5.15,4.37.781.781,0,0,1,4.37,5.15Z" transform="translate(185.25 193.6)" fill="#00ce68"/>
                                            <path id="Vector-2" data-name="Vector" d="M7.97,8.75a.77.77,0,0,1-.77-.77A6.438,6.438,0,0,0,.77,1.55.775.775,0,0,1,.76,0,7.989,7.989,0,0,1,8.74,7.98.777.777,0,0,1,7.97,8.75Z" transform="translate(185.26 190)" fill="#00ce68"/>
                                            <path id="Vector-3" data-name="Vector" d="M9.79,12.21,6.52,15.48q-.54-.48-1.05-.99a28.414,28.414,0,0,1-2.79-3.27A17.828,17.828,0,0,1,.72,7.81,8.423,8.423,0,0,1,0,4.54,5.173,5.173,0,0,1,.36,2.61,4.6,4.6,0,0,1,1.51.94,2.93,2.93,0,0,1,3.59,0,1.879,1.879,0,0,1,4.4.18a1.63,1.63,0,0,1,.67.56L7.39,4.01a3.422,3.422,0,0,1,.4.7,1.581,1.581,0,0,1,.14.61,1.357,1.357,0,0,1-.21.71,3.4,3.4,0,0,1-.56.71l-.76.79a.535.535,0,0,0-.16.4.908.908,0,0,0,.03.23c.03.08.06.14.08.2a8.3,8.3,0,0,0,.93,1.28c.45.52.93,1.05,1.45,1.58C9.09,11.57,9.44,11.91,9.79,12.21Z" transform="translate(174 190)" fill="#99ebc2"/>
                                            <path id="Vector-4" data-name="Vector" d="M12.37,4.29a2.54,2.54,0,0,1-.15.85,2.442,2.442,0,0,1-.1.24,4.126,4.126,0,0,1-.68,1.02A4.508,4.508,0,0,1,9.8,7.58c-.01,0-.02.01-.03.01a5.052,5.052,0,0,1-1.92.37,8.334,8.334,0,0,1-3.26-.73A17.564,17.564,0,0,1,1.15,5.25C.76,4.96.37,4.67,0,4.36L3.27,1.09a5.618,5.618,0,0,0,.74.48c.05.02.11.05.18.08a.69.69,0,0,0,.25.04.55.55,0,0,0,.41-.17L5.61.77A3.068,3.068,0,0,1,6.33.21,1.332,1.332,0,0,1,7.04,0a1.6,1.6,0,0,1,.61.13,3.868,3.868,0,0,1,.7.39l3.31,2.35a1.517,1.517,0,0,1,.55.64A2.052,2.052,0,0,1,12.37,4.29Z" transform="translate(181.6 202.04)" fill="#00ce68"/>
                                            <path id="Vector-5" data-name="Vector" d="M0,0H24V24H0Z" transform="translate(172 188)" fill="none" opacity="0"/>
                                          </g>
                                        </g>
                                      </svg>
                                                                
                                </span>
                                <h5>اتصل بنا عبر</h5>
                                <h6>+90 554 854 68 23</h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="info-card mt-4 mt-lg-0">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                        <g id="vuesax_bulk_location" data-name="vuesax/bulk/location" transform="translate(-428 -188)">
                                          <g id="location" transform="translate(428 188)">
                                            <path id="Vector" d="M23.321,8.931A11.5,11.5,0,0,0,11.834,0h-.013A11.493,11.493,0,0,0,.333,8.918C-1.226,15.8,2.985,21.621,6.8,25.287a7.224,7.224,0,0,0,10.061,0C20.669,21.621,24.88,15.809,23.321,8.931Z" transform="translate(4.166 2.337)" fill="#99ebc2"/>
                                            <path id="Vector-2" data-name="Vector" d="M8.412,4.206A4.206,4.206,0,1,1,4.206,0,4.206,4.206,0,0,1,8.412,4.206Z" transform="translate(11.794 9.542)" fill="#00ce68"/>
                                            <path id="Vector-3" data-name="Vector" d="M0,0H32V32H0Z" fill="none" opacity="0"/>
                                          </g>
                                        </g>
                                      </svg>                                                            
                                </span>
                                <h5>مقرنا</h5>
                                <h6>تركيا، إسطنبول، شارع الإستقلال</h6>
                            </div>
                        </div>
                    </div>
              
            </div>
        </div>
    </div>
    @if (session()->has('massage'))
    <div class="modal custom-modal success fade "id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">       
                      <h3>شكرا لك</h3>
                      <p>
                        {{ session()->get('massage')}}
                      </p>
                      <div class="row justify-content-center">
                        <div class="col-6">
                            <a href="{{ route('admin.home') }}" class="btn cs-btn v2 w-100">
                                العودة للرئيسية
                            </a> 
                        </div>
                      </div>
                    
                     
                </div>
                
              </div>
        </div>
    </div>
    @endif
</div>

@endsection