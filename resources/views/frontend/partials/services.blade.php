 <section class="services-section" id="services-section">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="section-header text-center">
                     <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">My Quality Services</h2>
                     <p class="wow fadeInUp" data-wow-delay=".4s">
                        We put your ideas and thus your wishes in the form of a unique web project that inspires you and
                        your customers.
                     </p>
                  </div>
               </div>
            </div>

            @php
                $services = App\Models\Service::latest()->get();
            @endphp

            <div class="row">
               <div class="col-md-12">
                  <div class="services-widget position-relative">

                     @unless ($services ->isEmpty())
                        @foreach ($services as $key => $service)
                           <div class="service-item current d-flex flex-wrap align-items-center wow fadeInUp"
                              data-wow-delay=".5s">
                              <div class="left-box d-flex flex-wrap align-items-center">
                                 <span class="number">0{{$key+1}}</span>
                                 <h3 class="service-title">{{$service->service_title}}</h3>
                              </div>
                              <div class="right-box">
                                 <p>
                                    {{$service->service_description}}
                                 </p>
                              </div>
                              <i class="flaticon-up-right-arrow"></i>
                           </div> 
                        @endforeach
                     
                     @else
                           <p>No service Found😢</p>
                     @endunless
                     
                     <div class="active-bg wow fadeInUp" data-wow-delay=".5s"></div>
                  </div>
               </div>
            </div>
         </div>
      </section>