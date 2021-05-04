@extends('frontend.layout')
@section('content')
<div class="overlay">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <input type="text" placeholder="enter search and press icon again" id="searchString" />
             <!--<input id="submitSearch" type="submit" value="" />-->
             <button class="sear-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
          </div>
       </div>
    </div>
    <button type="button" class="search-close search-form_close close"><i class="fa fa-times"></i></button>
 </div>
 <div class="banner-text banner-text-reg">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <h4 style="">Contact Us</h4>
          </div>
       </div>
    </div>
 </div>
 <div class="banner-signup">
    <img src="http://myprojectstaging.com/custom/whocares_dev/uploads/faq_page/banner-2.jpg" alt="banner" class="img-fluid">
 </div>

<section class="contact-sec">
<div class="container">
  <div class="row">
    <div class="col-lg-5 col-md-6 col-12">
      <div class="contact-details">
          <div class="contact-hading-sec">
          <h2>WE ARE HERE FOR YOU</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Ipsum has been the industry's standard dummy.</p>
          <div class="contact-sec-line"></div>
      </div>
      <div class="contact-hading-sec2">
          <h4>CONTACT INFORMATION</h4>
      </div>
      <div class="contact-sec-icons">
        <div class="contact-icon">
            <i class="fas fa-map-marker-alt"></i>
        </div>
        <div>
          <h6>Address</h6>
          <p>Lorem Ipsum is simply dummy text
          of the printing</p>
        </div>
      </div>
      <div class="contact-sec-icons">
        <div class="contact-icon">
            <i class="fas fa-phone-alt"></i>
        </div>
        <div class="phone-number">
          <h6>Phone</h6>
          <a href="javascript:;">123 456 789 10</a>
          <a href="javascript:;">123 456 789 10</a>
        </div>
      </div>
      <div class="contact-sec-icons">
        <div class="contact-icon">
            <i class="far fa-envelope"></i>
        </div>
        <div class="email">
          <h6>Email</h6>
          <a href="javascript:;">info@whocares.com</a>
        </div>
      </div>
      </div>
    </div>

    <div class="col-lg-7 col-md-6 col-12">
      <form class="contact-sec-input">
       <h4>GET IN TOUCH WITH US</h4>

          <input type="text" placeholder="Name" class="contact-input">


          <input type="text" placeholder="Phone number" class="contact-input">


          <input type="text" placeholder="Email" class="contact-input">


          <textarea type="text" placeholder="Massage" class="contact-input text-area"></textarea>

        <div class="contact-button-sec">
        <button type="submit" class="btn-send">SEND</button>
        </form>
      </div>
    </div>
  </div>
</div>
</section>

@endsection
