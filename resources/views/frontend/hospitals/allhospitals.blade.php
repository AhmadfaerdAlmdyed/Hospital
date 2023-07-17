@extends('frontend.layouts')
@section('content')
<div class="side-overlay"></div>    
<!-- Main header -->
<div class="body-content hospitals-page">
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
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="6.811" height="12.121"
                        viewBox="0 0 6.811 12.121">
                        <path id="Arrow_-_Right" data-name="Arrow - Right" d="M10,0,5,5,0,0"
                            transform="translate(5.75 1.061) rotate(90)" fill="none" stroke="#727a83"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                    </svg>

                </span>
                <li class="breadcrumb-item active" aria-current="page">المستشفيات</li>
            </ol>
        </nav>
        <div class="main-title">
            <h2>مستشفيات ذات جودة عالية</h2>
        </div>
    </div>
    <div class="hospitals-filter">
        <div class="container">
            <div class="content">
                <div class="d-flex justify-content-between">
                    <h3>عوامل الفلترة</h3>
                    <a href="#" class="clear-all">امسح الكل</a>
                </div>
                <div class="form">
                    <form action="#" method="get">
                        <div class="row row align-items-end">
                            <div class="col-lg-auto col-md-6">
                                <div class="form-group">
                                    <label for="">المستشفى</label>
                                    <div class="cs-search-input mt-1">
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
                                            placeholder="ابحث عن مستشفى">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-auto col-md-6">
                                <div class="form-group">
                                    <label for="">التخصص الأساسي</label>
                                    <div class="cs-search-input mt-1">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                                <g id="Stethoscope" transform="translate(-2 -2)">
                                                  <path id="Path_808" data-name="Path 808" d="M8,12a1,1,0,0,1,1,1v2.495a4.49,4.49,0,1,0,8.981,0V14a1,1,0,1,1,2,0v1.5A6.486,6.486,0,1,1,7,15.493V13A1,1,0,0,1,8,12Z" transform="translate(0.032 0.021)" fill="#d3d3d8" fill-rule="evenodd"/>
                                                  <path id="Path_809" data-name="Path 809" d="M4.661,4A.665.665,0,0,0,4,4.661V7.987a3.992,3.992,0,1,0,7.983,0V4.661A.665.665,0,0,0,11.313,4h-.333a1,1,0,1,1,0-2h.333a2.661,2.661,0,0,1,2.661,2.661V7.987A5.987,5.987,0,1,1,2,7.987V4.661A2.661,2.661,0,0,1,4.661,2h.333a1,1,0,0,1,0,2Z" transform="translate(0 0)" fill="#868692" fill-rule="evenodd"/>
                                                  <path id="Path_810" data-name="Path 810" d="M18.994,12.992a1,1,0,1,0-1-1A1,1,0,0,0,18.994,12.992Zm0,2A2.994,2.994,0,1,0,16,11.994,2.994,2.994,0,0,0,18.994,14.987Z" transform="translate(0.013 0.006)" fill="#868692" fill-rule="evenodd"/>
                                                </g>
                                              </svg>                                                  
                                        </span>
                                        <select name="" id=""class="form-select custom-input">
                                            <option value="">اختر التخصص</option>
                                        </select>
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-auto col-md-6">
                                <div class="form-group">
                                    <label for="">التخصص الفرعي</label>
                                    <div class="cs-search-input mt-1">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                                <g id="Stethoscope" transform="translate(-2 -2)">
                                                  <path id="Path_808" data-name="Path 808" d="M8,12a1,1,0,0,1,1,1v2.495a4.49,4.49,0,1,0,8.981,0V14a1,1,0,1,1,2,0v1.5A6.486,6.486,0,1,1,7,15.493V13A1,1,0,0,1,8,12Z" transform="translate(0.032 0.021)" fill="#d3d3d8" fill-rule="evenodd"/>
                                                  <path id="Path_809" data-name="Path 809" d="M4.661,4A.665.665,0,0,0,4,4.661V7.987a3.992,3.992,0,1,0,7.983,0V4.661A.665.665,0,0,0,11.313,4h-.333a1,1,0,1,1,0-2h.333a2.661,2.661,0,0,1,2.661,2.661V7.987A5.987,5.987,0,1,1,2,7.987V4.661A2.661,2.661,0,0,1,4.661,2h.333a1,1,0,0,1,0,2Z" transform="translate(0 0)" fill="#868692" fill-rule="evenodd"/>
                                                  <path id="Path_810" data-name="Path 810" d="M18.994,12.992a1,1,0,1,0-1-1A1,1,0,0,0,18.994,12.992Zm0,2A2.994,2.994,0,1,0,16,11.994,2.994,2.994,0,0,0,18.994,14.987Z" transform="translate(0.013 0.006)" fill="#868692" fill-rule="evenodd"/>
                                                </g>
                                              </svg>                                                  
                                        </span>
                                        <select name="" id=""class="form-select custom-input">
                                            <option value="">اختر التخصص</option>
                                        </select>
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-auto col-md-6">
                                <div class="form-group">
                                    <label for="">التخصص الفرعي</label>
                                    <div class="cs-search-input mt-1">
                                        <span>
                                            <svg id="vuesax_bulk_location" data-name="vuesax/bulk/location" xmlns="http://www.w3.org/2000/svg" width="17.75" height="20.5" viewBox="0 0 17.75 20.5">
                                                <g id="location">
                                                  <path id="Vector" d="M17.5,6.7A8.626,8.626,0,0,0,8.88,0H8.87A8.624,8.624,0,0,0,.25,6.69C-.92,11.85,2.24,16.22,5.1,18.97a5.422,5.422,0,0,0,7.55,0C15.51,16.22,18.67,11.86,17.5,6.7Z" fill="#d3d3d8"/>
                                                  <path id="Vector-2" data-name="Vector" d="M6.3,3.15A3.15,3.15,0,1,1,3.15,0,3.15,3.15,0,0,1,6.3,3.15Z" transform="translate(5.73 5.41)" fill="#868692"/>
                                                </g>
                                              </svg>                                                                                            
                                        </span>
                                        <select name="" id=""class="form-select custom-input">
                                            <option value="">اختر المدينة</option>
                                        </select>
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-auto col-md-6 me-lg-0 ms-lg-auto mx-auto mt-lg-0 mt-3">
                                <button type="button" class="btn cs-btn v2">بحث</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="content">
            <div class="row mt-5">
                @foreach ($hospitals as $hospital )
                <div class="col-lg-auto col-md-6">
                    <div class="hospital-media">   
                        <figure class="main-img">
                            <img src="{{Storage::url('hospitals/'.$hospital->cover)}}" alt="" srcset="">
                        </figure>
                        <div class="hospital-media-body">
                            <div class="hospital-media-body_title">
                                <figure>
                                    <img src="" alt="" srcset="">
                                </figure>
                                <div>
                                    <h2>{{$hospital->name}}</h2>
                                    <div class="d-flex align-items-center">
                                        <div class="rate">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.63" height="20" viewBox="0 0 21.63 20">
                                                    <g id="Star" transform="translate(-3.355 -2.05)">
                                                      <path id="Path" d="M9.865.622a1.036,1.036,0,0,1,1.9,0L14.02,5.827a1.034,1.034,0,0,0,.87.619l5.783.445a1.029,1.029,0,0,1,.579,1.822L16.9,12.29a1.028,1.028,0,0,0-.346,1.042L17.9,18.719a1.033,1.033,0,0,1-1.529,1.135L11.34,16.907a1.038,1.038,0,0,0-1.05,0L5.263,19.854a1.033,1.033,0,0,1-1.529-1.135l1.339-5.387a1.028,1.028,0,0,0-.346-1.042L.377,8.713A1.029,1.029,0,0,1,.956,6.891L6.74,6.446a1.034,1.034,0,0,0,.87-.619Z" transform="translate(3.355 2.05)" fill="#ffc542"/>
                                                    </g>
                                                  </svg>  
                                                  5.0                                                
                                            </span>
                                            <p class="mb-0">(55) تقييم</p>
                                        </div>
                                       <div class="address">
                                            <span>
                                                <svg id="vuesax_bulk_location" data-name="vuesax/bulk/location" xmlns="http://www.w3.org/2000/svg" width="17.75" height="20.5" viewBox="0 0 17.75 20.5">
                                                    <g id="location">
                                                    <path id="Vector" d="M17.5,6.7A8.626,8.626,0,0,0,8.88,0H8.87A8.624,8.624,0,0,0,.25,6.69C-.92,11.85,2.24,16.22,5.1,18.97a5.422,5.422,0,0,0,7.55,0C15.51,16.22,18.67,11.86,17.5,6.7Z" fill="#d3d3d8"/>
                                                    <path id="Vector-2" data-name="Vector" d="M6.3,3.15A3.15,3.15,0,1,1,3.15,0,3.15,3.15,0,0,1,6.3,3.15Z" transform="translate(5.73 5.41)" fill="#868692"/>
                                                    </g>
                                                </svg>                                                  
                                            </span>
                                            <p class="mb-0">{{$hospital->location}}</p>
                                       </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hospital-media-body_description">
                                {{ $hospital->info }}
                            </div>
                            <div class="hospital-media-body_footer">
                              <div>
                                    <div class="info">
                                        <span class="me-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20.75" viewBox="0 0 18 20.75">
                                                <g id="vuesax_bulk_calendar" data-name="vuesax/bulk/calendar" transform="translate(-495 -189.25)">
                                                <g id="calendar">
                                                    <path id="Vector" d="M13.711,2.31V.75a.75.75,0,0,0-1.5,0v1.5h-6.5V.75a.75.75,0,0,0-1.5,0V2.31A4.248,4.248,0,0,0,0,6.56a.5.5,0,0,0,.5.53h16.92a.5.5,0,0,0,.5-.53A4.248,4.248,0,0,0,13.711,2.31Z" transform="translate(495.039 189.25)" fill="#868692"/>
                                                    <path id="Vector-2" data-name="Vector" d="M17,0a1,1,0,0,1,1,1V7.16c0,3-1.5,5-5,5H5c-3.5,0-5-2-5-5V1A1,1,0,0,1,1,0Z" transform="translate(495 197.84)" fill="#d3d3d8"/>
                                                    <g id="Group">
                                                    <path id="Vector-3" data-name="Vector" d="M1,2a1.052,1.052,0,0,1-.71-.29A1.052,1.052,0,0,1,0,1,1.052,1.052,0,0,1,.29.289,1,1,0,0,1,1.38.079a.933.933,0,0,1,.33.21A1.052,1.052,0,0,1,2,1a1.052,1.052,0,0,1-.29.71A1.052,1.052,0,0,1,1,2Z" transform="translate(499.5 201.001)" fill="#868692"/>
                                                    </g>
                                                    <g id="Group-2" data-name="Group">
                                                    <path id="Vector-4" data-name="Vector" d="M1,2a1.052,1.052,0,0,1-.71-.29A1.052,1.052,0,0,1,0,1,1.052,1.052,0,0,1,.29.289.933.933,0,0,1,.62.079a1,1,0,0,1,1.09.21A1.052,1.052,0,0,1,2,1a1.052,1.052,0,0,1-.29.71l-.15.12a.757.757,0,0,1-.18.09.636.636,0,0,1-.18.06A1.355,1.355,0,0,1,1,2Z" transform="translate(503 201.001)" fill="#868692"/>
                                                    </g>
                                                    <g id="Group-3" data-name="Group">
                                                    <path id="Vector-5" data-name="Vector" d="M1,2a1.052,1.052,0,0,1-.71-.29A1.052,1.052,0,0,1,0,1,1.052,1.052,0,0,1,.29.29,1.032,1.032,0,0,1,.62.08.956.956,0,0,1,1.2.02a.636.636,0,0,1,.18.06.757.757,0,0,1,.18.09l.15.12A1.052,1.052,0,0,1,2,1a1.052,1.052,0,0,1-.29.71l-.15.12a.757.757,0,0,1-.18.09.636.636,0,0,1-.18.06A1.5,1.5,0,0,1,1,2Z" transform="translate(506.5 201)" fill="#868692"/>
                                                    </g>
                                                    <g id="Group-4" data-name="Group">
                                                    <path id="Vector-6" data-name="Vector" d="M1,2a1,1,0,0,1-.38-.08,1.032,1.032,0,0,1-.33-.21A1.052,1.052,0,0,1,0,1,1.052,1.052,0,0,1,.29.29,1.032,1.032,0,0,1,.62.08.956.956,0,0,1,1.2.02a.636.636,0,0,1,.18.06.757.757,0,0,1,.18.09l.15.12A1.052,1.052,0,0,1,2,1a1.052,1.052,0,0,1-.29.71,1.576,1.576,0,0,1-.15.12.757.757,0,0,1-.18.09.636.636,0,0,1-.18.06A1.355,1.355,0,0,1,1,2Z" transform="translate(499.5 204.5)" fill="#868692"/>
                                                    </g>
                                                    <g id="Group-5" data-name="Group">
                                                    <path id="Vector-7" data-name="Vector" d="M1,1.987A1.052,1.052,0,0,1,.29,1.7,1.052,1.052,0,0,1,0,.987,1.052,1.052,0,0,1,.29.278a1.047,1.047,0,0,1,1.42,0A1.052,1.052,0,0,1,2,.987a1.052,1.052,0,0,1-.29.71A1.052,1.052,0,0,1,1,1.987Z" transform="translate(503 204.513)" fill="#868692"/>
                                                    </g>
                                                    <g id="Group-6" data-name="Group">
                                                    <path id="Vector-8" data-name="Vector" d="M1,1.987A1.052,1.052,0,0,1,.29,1.7,1.052,1.052,0,0,1,0,.987,1.052,1.052,0,0,1,.29.278a1.047,1.047,0,0,1,1.42,0A1.052,1.052,0,0,1,2,.987a1.052,1.052,0,0,1-.29.71A1.052,1.052,0,0,1,1,1.987Z" transform="translate(506.5 204.513)" fill="#868692"/>
                                                    </g>
                                                </g>
                                                </g>
                                            </svg>
                                            
                                        </span>
                                        <h6 class="me-1">سنة التأسيس: </h6>
                                        <h5>{{ $hospital->created_at }}</h5>
                                     </div>
                                    <div class="info">
                                    <span class="me-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="15.666" viewBox="0 0 24 15.666">
                                            <g id="bed_1_" data-name="bed (1)" transform="translate(-1 -21.8)">
                                            <path id="Path_42150" data-name="Path 42150" d="M23.5,36.166H8.177a3.648,3.648,0,0,1-2.585-1.083L3.508,32.995a1.638,1.638,0,0,0-.656-.387,1.187,1.187,0,0,0-.733,0,1.638,1.638,0,0,0-.656.387A1.386,1.386,0,0,0,1,34.078v4.68A1.55,1.55,0,0,0,2.543,40.3s3.241.039,3.473.039v2.669A1.08,1.08,0,0,0,7.1,44.094a1.105,1.105,0,0,0,1.08-1.083V40.343h10.3v2.669a1.08,1.08,0,0,0,1.08,1.083,1.105,1.105,0,0,0,1.08-1.083V40.343h2.894c.81,0,1.466-.773,1.466-2.088C24.923,37.133,24.305,36.166,23.5,36.166Z" transform="translate(0 -6.629)" fill="#d3d3d8"/>
                                            <path id="Path_42151" data-name="Path 42151" d="M32.266,27.765a1.039,1.039,0,0,0-1.227.805l-.153.767a.783.783,0,0,1-.767.613H28.394a2.423,2.423,0,0,1-.805-.192,18.9,18.9,0,0,0-7.476-1.61h-.92a1.993,1.993,0,0,0,0,3.987H31.116a.568.568,0,0,0,.268-.038,1.874,1.874,0,0,0,1.035-.5l.038-.038.345-1.342.268-1.265c0-.077.038-.153.038-.23A1.143,1.143,0,0,0,32.266,27.765Z" transform="translate(-9.835 -3.664)" fill="#868692"/>
                                            <circle id="Ellipse_11686" data-name="Ellipse 11686" cx="1.955" cy="1.955" r="1.955" transform="translate(3.454 21.8)" fill="#868692"/>
                                            </g>
                                        </svg>                                          
                                    </span>
                                    <h6 class="me-1">عدد الأسرة: </h6>
                                    <h5>1400</h5>
                                    </div>
                                    <div class="info">
                                        <span class="me-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                                <g id="Stethoscope" transform="translate(-2 -2)">
                                                <path id="Path_808" data-name="Path 808" d="M8,12a1,1,0,0,1,1,1v2.495a4.49,4.49,0,1,0,8.981,0V14a1,1,0,1,1,2,0v1.5A6.486,6.486,0,1,1,7,15.493V13A1,1,0,0,1,8,12Z" transform="translate(0.032 0.021)" fill="#d3d3d8" fill-rule="evenodd"/>
                                                <path id="Path_809" data-name="Path 809" d="M4.661,4A.665.665,0,0,0,4,4.661V7.987a3.992,3.992,0,1,0,7.983,0V4.661A.665.665,0,0,0,11.313,4h-.333a1,1,0,1,1,0-2h.333a2.661,2.661,0,0,1,2.661,2.661V7.987A5.987,5.987,0,1,1,2,7.987V4.661A2.661,2.661,0,0,1,4.661,2h.333a1,1,0,0,1,0,2Z" transform="translate(0 0)" fill="#868692" fill-rule="evenodd"/>
                                                <path id="Path_810" data-name="Path 810" d="M18.994,12.992a1,1,0,1,0-1-1A1,1,0,0,0,18.994,12.992Zm0,2A2.994,2.994,0,1,0,16,11.994,2.994,2.994,0,0,0,18.994,14.987Z" transform="translate(0.013 0.006)" fill="#868692" fill-rule="evenodd"/>
                                                </g>
                                            </svg>                                                                             
                                        </span>
                                        <h6 class="me-1">عدد الأطباء: </h6>
                                        <h5>50</h5>
                                    </div>
                              </div>
                              <div class="d-flex flex-wrap gap-2 align-items-center flex-lg-grow-0 flex-grow-1">
                                <a href="{{route('frontend.hospital',$hospital->id)}}" class="btn cs-btn cs-w-h">عرض التفاصيل</a>
                                <a href="#" class="btn cs-btn v2 cs-w-h">طلب عرض سعر</a>
                              </div>
                            </div>
                        </div>
                       
                    </div>
             
                   {{--  --}}
                </div>
                @endforeach
              
                
                <div class="col-lg-12 ">
                    <nav class="cs-pagination">
                        <ul class="pagination">
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="6.811" height="12.121" viewBox="0 0 6.811 12.121">
                                    <path id="Arrow_-_Right" data-name="Arrow - Right" d="M10,5,5,0,0,5" transform="translate(6.061 1.061) rotate(90)" fill="none" stroke="#aeaeb1" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                  </svg>  
                              </span>
                              <span class="sr-only">Previous</span>
                            </a>
                          </li>
                          <li class="page-item active"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">4</a></li>
                          <li class="page-item"><a class="page-link" href="#">5</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                              <span aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="6.811" height="12.121" viewBox="0 0 6.811 12.121">
                                    <path id="Arrow_-_Right" data-name="Arrow - Right" d="M10,0,5,5,0,0" transform="translate(5.75 1.061) rotate(90)" fill="none" stroke="#05060f" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                  </svg>
                                                                    
                              </span>
                              <span class="sr-only">Next</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                   </div>
            </div>
        </div>
    </div>
</div>
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
