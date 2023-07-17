@extends('frontend.layouts')
@section('content')
@isset($doctors)
<div class="body-content blogs-page">
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
            <li class="breadcrumb-item active" aria-current="page">الأخصائيين</li>
        </ol>
    </nav>
    <section class="specialists-section">
        <div class="container">
            <div class="main-title d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                <h2>نخبة من الأخصائيين</h2>
            </div>
            <div class="content">
                <div class="row">
                    @foreach ($doctors as $doctor )
                    <div class="col-lg-3 col-md-6">
                        <div class="general-card specialist-card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                            <figure>
                                <img style="width: 100% ;height:100% ;"
                                src="{{Storage::url('doctors/'.$doctor->cover)}}"alt="" srcset="">
                            </figure>
                            <div class="general-card-body">
                                <h4>{{$doctor->name}}</h4>
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
                                    {{$doctor ->descrption}}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </div>
        <div class="row mt-5 mb-5" style="justify-content: center;">
            <a href="#" 
            class="btn cs-btn" style="height: 44px; width: 215px">عرض كل الأخصائيين</a>
        </div>
    </section>
</div>
@endisset
@endsection