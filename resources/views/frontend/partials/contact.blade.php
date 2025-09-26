 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

 <section class="contact-section" id="contact-section">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-7 order-2 order-md-1">
                  <div class="contact-form-box wow fadeInLeft" data-wow-delay=".3s">
                     <div class="section-header">
                        <h2 class="section-title">Let’s work together!</h2>
                        <p>I design and code beautifully simple things and i love what i do. Just simple like that!</p>
                     </div>

                     <div class="tj-contact-form">
                        <form id="contactForm" method="POST" action="{{route('store.contact.message')}}">
                           @csrf
                           <div class="row gx-3">
                              <div class="col-sm-6">
                                 <div class="form_group">
                                    <input type="text" name="fname" id="conName" placeholder="First name"
                                       autocomplete="off" />
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form_group">
                                    <input type="text" name="lname" id="conLName" placeholder="Last name"
                                       autocomplete="off" />
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form_group">
                                    <input type="email" name="email" id="conEmail" placeholder="Email address"
                                       autocomplete="off" />
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form_group">
                                    <input type="tel" name="phone" id="conPhone" placeholder="Phone number"
                                       autocomplete="off" />
                                 </div>
                              </div>
                              @php
                                  $services = App\Models\Service :: all();
                              @endphp
                              <div class="col-12">
                                 <div class="form_group">
                                    <select name="service_id" id="conService" class="tj-nice-select">
                                       <option value="" selected disabled>Choose Service</option>
                                       @foreach ($services as $service)
                                        <option value="{{$service->id}}">{{Str::title($service->service_title)}}</option>
                                       @endforeach
                                    </select>
                                 </div>
                              </div>
                              <div class="col-12">
                                 <div class="form_group">
                                    <textarea name="description" id="conMessage" placeholder="Description"></textarea>
                                 </div>
                              </div>
                              <div class="col-12">
                                 <div class="form_btn">
                                    <button type="submit" class="btn tj-btn-primary">Send Message</button>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>

               @php
                   $siteSettings = App\Models\SiteSetting::findOrFail(1);
               @endphp
               <div class="col-lg-5 offset-lg-1 col-md-5 d-flex flex-wrap align-items-center order-1 order-md-2">
                  <div class="contact-info-list">
                     <ul class="ul-reset">
                        <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight"
                           data-wow-delay=".4s">
                           <div class="icon-box">
                              <i class="flaticon-phone-call"></i>
                           </div>
                           <div class="text-box">
                              <p>Phone</p>
                              <a href="tel:+989107654470">{{$siteSettings->phone}}</a>
                           </div>
                        </li>
                        <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight"
                           data-wow-delay=".5s">
                           <div class="icon-box">
                              <i class="flaticon-mail-inbox-app"></i>
                           </div>
                           <div class="text-box">
                              <p>Email</p>
                              <a href="mailto:{{$siteSettings->email}}?subject=Contact%20from%20website">{{$siteSettings->email}}</a>
                           </div>
                        </li>
                        <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight"
                           data-wow-delay=".6s">
                           <div class="icon-box">
                              <i class="flaticon-location"></i>
                           </div>
                           <div class="text-box">
                              <p>Address</p>
                              <a href="https://www.google.com/maps/search/?api=1&query=Tabriz%2C%20Iran"  target="_blank" rel="noopener noreferrer">{{$siteSettings->address}}</a>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- توست JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    $("#contactForm").on("submit", function(e) {
        e.preventDefault();

        let form = $(this);
        let url = form.attr("action");

        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(),
            success: function(response) {
                toastr.success(response.message); // ✅ پیام موفقیت
                form.trigger("reset");
            },
            error: function(xhr) {
                toastr.error("there is problem to get your message feel free to contact me if its necessary"); // ❌ پیام خطا
            }
        });
    });
</script>
      </section>