@extends('frontend.layouts')
@section('content')
@isset($majors)
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
            <li class="breadcrumb-item active" aria-current="page">التخصصات الطبية</li>
        </ol>
    </nav>
<section class="majors-section">
    <div class="container">
            <div class="row">
                @foreach ($majors as $majors)
                <div class="col-lg-auto col-md-4 col-6">
                  <a href="#">
                    <div class="major-card">
                        <figure>
                            <img style="width: 100% ;height:100% ;"
                            src="{{Storage::url('majors/'.$majors->cover)}}" class="wow zoomIn" data-wow-duration="1s" data-wow-delay="0.1s" alt="" srcset="">
                        </figure>
                        <h4 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">{{$majors ->name}}</h4>
                    </div>
                </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
</div>
@endisset
@endsection