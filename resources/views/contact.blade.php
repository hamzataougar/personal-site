<!-- Contact Subpage -->
<section data-id="contact" class="animated-section">
<div class="page-title">
    <h2>Contact</h2>
</div>

<div class="section-content">

    <div class="row">
    <!-- Contact Info -->
    <div class="col-xs-12 col-sm-4">
        <div class="lm-info-block gray-default">
        <i class="lnr lnr-map-marker"></i>
        <h4>{{$profile->residence}}</h4>
        <span class="lm-info-block-value"></span>
        <span class="lm-info-block-text"></span>
        </div>

        <div class="lm-info-block gray-default">
        <i class="lnr lnr-phone-handset"></i>
        <h4>{{$profile->phone}}</h4>
        <span class="lm-info-block-value"></span>
        <span class="lm-info-block-text"></span>
        </div>

        <div class="lm-info-block gray-default">
        <i class="lnr lnr-envelope"></i>
        <h4>{{$profile->email}}</h4>
        <span class="lm-info-block-value"></span>
        <span class="lm-info-block-text"></span>
        </div>

        <div class="lm-info-block gray-default">
        <i class="lnr lnr-checkmark-circle"></i>
        <h4>Freelance Available</h4>
        <span class="lm-info-block-value"></span>
        <span class="lm-info-block-text"></span>
        </div>


    </div>
    <!-- End of Contact Info -->

    <!-- Contact Form -->
    <div class="col-xs-12 col-sm-8">
        <div id="map" class="map"></div>
        <div class="block-title">
            <h3>How Can I <span>Help You?</span></h3>
        </div>
        @if(session()->has('message'))
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                {{ session()->get('message') }}
            </button>              
        @endif
    
        <form  class="contact-form" action="/store" method="POST">
            @csrf

    
        <div class="messages"></div>
    
        <div class="controls two-columns">
            <div class="fields clearfix">
            <div class="left-column">
                <div class="form-group form-group-with-icon">
                <input id="form_name" type="text" name="name" class="form-control" placeholder="" required="required" data-error="Name is required.">
                <label>Full Name</label>
                <div class="form-control-border"></div>
                <div class="help-block with-errors"></div>
                </div>
    
                <div class="form-group form-group-with-icon">
                <input id="form_email" type="email" name="email" class="form-control" placeholder="" required="required" data-error="Valid email is required.">
                <label>Email Address</label>
                <div class="form-control-border"></div>
                <div class="help-block with-errors"></div>
                </div>
    
                <div class="form-group form-group-with-icon">
                <input id="form_subject" type="text" name="subject" class="form-control" placeholder="" required="required" data-error="Subject is required.">
                <label>Subject</label>
                <div class="form-control-border"></div>
                <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="right-column">
                <div class="form-group form-group-with-icon">
                <textarea id="form_message" name="message" class="form-control" placeholder="" rows="7" required="required" data-error="Please, leave me a message."></textarea>
                <label>Message</label>
                <div class="form-control-border"></div>
                <div class="help-block with-errors"></div>
                </div>
            </div>
            </div>
    
            <input type="submit" class="button btn-send" value="Send message">
        </div>
        </form>
    </div>
    <!-- End of Contact Form -->
    </div>

</div>
</section>
<!-- End of Contact Subpage -->