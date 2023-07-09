@extends('frontend.uesrs.layouts')
@section('cont')
<div class="col-xl-9 col-lg-8">
    <div class="requests-section">
        <h4>طلبات عرض السعر</h4>
        <table class="table table-hover">
            <thead>
              <tr>
                  <th style="width: 30%;">اسم المستشفى</th>
                  <th>تاريخ الإرسال</th>
                  <th>رقم الطلب</th>
                  <th>التخصص</th>
                  <th>حالة الطلب</th>
                  <th>الاجراءات</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                  <td>
                    <div class="d-flex align-items-center gap-2">
                      <figure class="mb-0">
                          <img src="#" alt="" srcset="">
                      </figure> 
                    </div>
                  </td>
                  <td></td> 
                  <td></td>
                  <td></td>
                  <td>
                      <div class="status bg-warning">
                      </div>
                  </td>
                  <td>
                      <div class="d-flex gap-3">
                          <div class="cs-action">
                              <a href="#">
                                  <svg id="vuesax_bulk_document-text" data-name="vuesax/bulk/document-text" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                      <g id="document-text" transform="translate(-492 -252)">
                                        <path id="Vector" d="M0,0H24V24H0Z" transform="translate(492 252)" fill="none" opacity="0"></path>
                                        <path id="Vector-2" data-name="Vector" d="M18,5V15c0,3-1.5,5-5,5H5c-3.5,0-5-2-5-5V5C0,2,1.5,0,5,0h8C16.5,0,18,2,18,5Z" transform="translate(495 254)" fill="rgba(37,55,81,0.4)"></path>
                                        <g id="Group">
                                          <path id="Vector-3" data-name="Vector" d="M4.75,5.5h-2A2.748,2.748,0,0,1,0,2.75v-2A.755.755,0,0,1,.75,0,.755.755,0,0,1,1.5.75v2A1.25,1.25,0,0,0,2.75,4h2a.75.75,0,0,1,0,1.5Z" transform="translate(505.75 255.75)" fill="#253751"></path>
                                        </g>
                                        <g id="Group-2" data-name="Group">
                                          <path id="Vector-4" data-name="Vector" d="M4.75,1.5h-4A.755.755,0,0,1,0,.75.755.755,0,0,1,.75,0h4A.755.755,0,0,1,5.5.75.755.755,0,0,1,4.75,1.5Z" transform="translate(499.25 264.25)" fill="#253751"></path>
                                        </g>
                                        <g id="Group-3" data-name="Group">
                                          <path id="Vector-5" data-name="Vector" d="M8.75,1.5h-8A.755.755,0,0,1,0,.75.755.755,0,0,1,.75,0h8A.755.755,0,0,1,9.5.75.755.755,0,0,1,8.75,1.5Z" transform="translate(499.25 268.25)" fill="#253751"></path>
                                        </g>
                                        <path id="Vector-6" data-name="Vector" d="M0,0H24V24H0Z" transform="translate(492 252)" fill="none" opacity="0"></path>
                                      </g>
                                    </svg>
                                    
                              </a>
                              <p>عرض</p>
                          </div>
                          <div class="cs-action">
                              <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                      <g id="trash" transform="translate(-108 -188)">
                                        <path id="Vector" d="M18.824,3.98c-1.61-.16-3.22-.28-4.84-.37V3.6l-.22-1.3c-.15-.92-.37-2.3-2.71-2.3H8.434C6.1,0,5.884,1.32,5.724,2.29l-.21,1.28c-.93.06-1.86.12-2.79.21l-2.04.2a.748.748,0,1,0,.14,1.49l2.04-.2a79.729,79.729,0,0,1,15.82.21h.08a.757.757,0,0,0,.75-.68A.766.766,0,0,0,18.824,3.98Z" transform="translate(110.246 189.25)" fill="#ff4040"></path>
                                        <path id="Vector-2" data-name="Vector" d="M14.8.39a1.264,1.264,0,0,0-.91-.39H1.252a1.248,1.248,0,0,0-.91.39A1.288,1.288,0,0,0,0,1.33l.62,10.26c.11,1.52.25,3.42,3.74,3.42h6.42c3.49,0,3.63-1.89,3.74-3.42l.62-10.25A1.3,1.3,0,0,0,14.8.39Z" transform="translate(112.428 195.75)" fill="#ffe2e2"></path>
                                        <path id="Vector_Stroke_" data-name="Vector (Stroke)" d="M0,.75A.75.75,0,0,1,.75,0H4.08a.75.75,0,0,1,0,1.5H.75A.75.75,0,0,1,0,.75Z" transform="translate(117.58 204.25)" fill="#ff4040"></path>
                                        <path id="Vector_Stroke_2" data-name="Vector (Stroke)" d="M0,.75A.75.75,0,0,1,.75,0h5a.75.75,0,0,1,0,1.5h-5A.75.75,0,0,1,0,.75Z" transform="translate(116.75 200.25)" fill="#ff4040"></path>
                                        <path id="Vector-3" data-name="Vector" d="M0,0H24V24H0Z" transform="translate(108 188)" fill="none" opacity="0"></path>
                                      </g>
                                    </svg>                                                      
                              </a>
                              <p>حذف</p>
                          </div>
                      </div>
                  </td>
              </tr>
            </tbody>
          </table>
    </div>
</div>
@endsection