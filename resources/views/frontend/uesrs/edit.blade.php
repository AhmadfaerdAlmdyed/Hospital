@extends('frontend.uesrs.layouts')
@section('cont')
<div class="col-xl-9 col-lg-8">
  <div class="requests-section">
      <h4>البيانات الشخصية</h4>
      <div class="profile-form form">
          <form action="{{ route('profail.update',$user->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
              <div class="upload-img">  
              <figure>  
                    <img  style="height: 100%; width: 100%;"
                    src="{{Storage::url('users/'.$user ->cover )}}" alt="" srcset="">
                  </figure>
                  
    
              </div>
              <div class="row">
                  <div class="col-lg-6">
                      <div class="form-group">
                          <label for="recipient-name" class="col-form-label">الاسم كاملا:</label>
                          <div class="icon-input">
                              <span class="icon-i">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                      <g id="vuesax_bulk_profile" data-name="vuesax/bulk/profile" transform="translate(-108 -252)">
                                        <g id="profile">
                                          <path id="Vector" d="M4.75,0a4.746,4.746,0,0,0-.12,9.49.807.807,0,0,1,.22,0h.07A4.746,4.746,0,0,0,4.75,0Z" transform="translate(115.25 254)" fill="#d3d3d8"></path>
                                          <path id="Vector-2" data-name="Vector" d="M12.12,1.395a9.929,9.929,0,0,0-10.15,0A3.947,3.947,0,0,0,0,4.625a3.914,3.914,0,0,0,1.96,3.21,9.239,9.239,0,0,0,5.08,1.41,9.239,9.239,0,0,0,5.08-1.41,3.945,3.945,0,0,0,1.96-3.23A3.937,3.937,0,0,0,12.12,1.395Z" transform="translate(112.96 264.755)" fill="#868692"></path>
                                          <path id="Vector-3" data-name="Vector" d="M0,0H24V24H0Z" transform="translate(108 252)" fill="none" opacity="0"></path>
                                        </g>
                                      </g>
                                    </svg>                                                          
                              </span>                                                                                              
                              <input  name="name" value="{{ $user->name }}"
                               type="text"class="form-control custom-input" id="recipient-name" placeholder="أدخل الاسم كاملا">
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
                                          <path id="Vector" d="M0,0H24V24H0Z" transform="translate(556 252)" fill="none" opacity="0"></path>
                                          <path id="Vector-2" data-name="Vector" d="M15,17H5c-3,0-5-1.5-5-5V5C0,1.5,2,0,5,0H15c3,0,5,1.5,5,5v7C20,15.5,18,17,15,17Z" transform="translate(558 255.5)" fill="#d3d3d8"></path>
                                          <g id="Group">
                                            <path id="Vector-3" data-name="Vector" d="M5.753,4.626a3.717,3.717,0,0,1-2.34-.79l-3.13-2.5a.747.747,0,1,1,.93-1.17l3.13,2.5a2.386,2.386,0,0,0,2.81,0l3.13-2.5a.738.738,0,0,1,1.05.12.738.738,0,0,1-.12,1.05l-3.13,2.5A3.67,3.67,0,0,1,5.753,4.626Z" transform="translate(562.247 260.244)" fill="#868692"></path>
                                          </g>
                                        </g>
                                      </g>
                                    </svg>                                                              
                              </span>                                        
                              <input  value="{{ $user->email }}" name="email"
                              type="email" class="form-control custom-input"  id="email" placeholder="أدخل البريد الالكتروني">
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
                                          <path id="Vector" d="M12.24,0H3.76C1,0,0,1,0,3.81V16.19C0,19,1,20,3.76,20h8.47C15,20,16,19,16,16.19V3.81C16,1,15,0,12.24,0Z" transform="translate(112 382)" fill="#d3d3d8"></path>
                                          <path id="Vector-2" data-name="Vector" d="M4.75,1.5h-4A.755.755,0,0,1,0,.75.755.755,0,0,1,.75,0h4A.755.755,0,0,1,5.5.75.755.755,0,0,1,4.75,1.5Z" transform="translate(117.25 384.75)" fill="#868692"></path>
                                          <path id="Vector-3" data-name="Vector" d="M3.5,1.75A1.75,1.75,0,1,1,1.75,0,1.75,1.75,0,0,1,3.5,1.75Z" transform="translate(118.25 395.8)" fill="#868692"></path>
                                          <path id="Vector-4" data-name="Vector" d="M0,0H24V24H0Z" transform="translate(108 380)" fill="none" opacity="0"></path>
                                        </g>
                                      </g>
                                    </svg>                                                      
                              </span>                                                
                              <input value="{{ $user->phone }}"name="phone" 
                              type="text" class="form-control custom-input" id="number_phone" placeholder="أدخلرقم الجوال">
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="form-group">
                          <label for="recipient-name" class="col-form-label">الدولة:</label>
                          <div class="icon-input">
                              <span class="icon-i">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                      <g id="vuesax_bulk_location" data-name="vuesax/bulk/location" transform="translate(-428 -188)">
                                        <g id="location">
                                          <path id="Vector" d="M17.5,6.7A8.626,8.626,0,0,0,8.88,0H8.87A8.624,8.624,0,0,0,.25,6.69C-.92,11.85,2.24,16.22,5.1,18.97a5.422,5.422,0,0,0,7.55,0C15.51,16.22,18.67,11.86,17.5,6.7Z" transform="translate(431.12 189.75)" fill="#d3d3d8"></path>
                                          <path id="Vector-2" data-name="Vector" d="M6.3,3.15A3.15,3.15,0,1,1,3.15,0,3.15,3.15,0,0,1,6.3,3.15Z" transform="translate(436.85 195.16)" fill="#868692"></path>
                                          <path id="Vector-3" data-name="Vector" d="M0,0H24V24H0Z" transform="translate(428 188)" fill="none" opacity="0"></path>
                                        </g>
                                      </g>
                                    </svg>                                                                                                        
                              </span>
                                <select name="country" id="status" class="form-control custom-input">
                                  <option value="0">اختر دولة </option>
                                  <option value="1">نركيا </option>
                                  <option value="2">فلسطين</option>
                                  <option value=" 3">مصر</option>
                                  <option value="4">جباليا</option>
                                  <option value="5">امريكا</option>
                              </select>                                                  
                          </div>
                  </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="mb-3">
                          <label for="address" class="col-form-label">تعديل كلمة المرور:</label>
                          <div class="icon-input">
                              <span class="icon-i">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                      <g id="vuesax_bulk_lock" data-name="vuesax/bulk/lock" transform="translate(-108 -316)">
                                        <g id="lock">
                                          <path id="Vector" d="M0,0H24V24H0Z" transform="translate(108 316)" fill="none" opacity="0"></path>
                                          <path id="Vector-2" data-name="Vector" d="M13.5,6.75v2.1a12.984,12.984,0,0,0-1.5-.1v-2C12,3.6,11.11,1.5,6.75,1.5S1.5,3.6,1.5,6.75v2a12.984,12.984,0,0,0-1.5.1V6.75C0,3.85.7,0,6.75,0S13.5,3.85,13.5,6.75Z" transform="translate(113.25 317.25)" fill="#868692"></path>
                                          <path id="Vector-3" data-name="Vector" d="M20,5V7c0,4-1,5-5,5H5c-4,0-5-1-5-5V5C0,1.66.7.41,3.25.1A12.984,12.984,0,0,1,4.75,0h10.5a12.984,12.984,0,0,1,1.5.1C19.3.41,20,1.66,20,5Z" transform="translate(110 326)" fill="#d3d3d8"></path>
                                          <g id="Group">
                                            <path id="Vector-4" data-name="Vector" d="M1,2a1,1,0,0,1-.38-.08,1.032,1.032,0,0,1-.33-.21A1.052,1.052,0,0,1,0,1,1,1,0,0,1,.08.619,1.155,1.155,0,0,1,.29.289,1.032,1.032,0,0,1,.62.079a1,1,0,0,1,1.09.21,1.155,1.155,0,0,1,.21.33A1,1,0,0,1,2,1a1.052,1.052,0,0,1-.29.71A1.052,1.052,0,0,1,1,2Z" transform="translate(115 331.001)" fill="#868692"></path>
                                          </g>
                                          <g id="Group-2" data-name="Group">
                                            <path id="Vector-5" data-name="Vector" d="M1,1.988A1.033,1.033,0,0,1,.29,1.7a1.155,1.155,0,0,1-.21-.33A1,1,0,0,1,0,.988,1.033,1.033,0,0,1,.29.278a1.047,1.047,0,0,1,1.42,0A1.033,1.033,0,0,1,2,.988a1,1,0,0,1-.08.38,1.155,1.155,0,0,1-.21.33A1.052,1.052,0,0,1,1,1.988Z" transform="translate(119 331.013)" fill="#868692"></path>
                                          </g>
                                          <g id="Group-3" data-name="Group">
                                            <path id="Vector-6" data-name="Vector" d="M1,1.988A1.052,1.052,0,0,1,.29,1.7,1.033,1.033,0,0,1,0,.988,1.033,1.033,0,0,1,.29.278a1.047,1.047,0,0,1,1.42,0c.04.05.08.1.12.16a.556.556,0,0,1,.09.17.636.636,0,0,1,.06.18,1.5,1.5,0,0,1,.02.2,1.052,1.052,0,0,1-.29.71A1.052,1.052,0,0,1,1,1.988Z" transform="translate(123 331.013)" fill="#868692"></path>
                                          </g>
                                        </g>
                                      </g>
                                    </svg>                                                          
                              </span>
                              <input name="password"
                               type="password" class="form-control custom-input" placeholder="أدخل كلمة المرور">
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="address" class="col-form-label">تعديل صورة </label>
                        <div class="icon-input">
                            <input name="cover"
                             type="file" class="form-control custom-input" placeholder="أدخل كلمة المرور">
                          
                            </div>

                             <span style="color: red">
                               @error('cover')
                              {{$message}}
                             @enderror
                          </span>    
                    </div>
                </div>
                  <div class="offset-lg-3 col-lg-6 mt-4">
                      <button type="submit" class="btn cs-btn v2 w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          حفظ البيانات
                      </button>
                  </div>
              </div>
          </form>
      </div>
  </div>

  
</div>
@endsection