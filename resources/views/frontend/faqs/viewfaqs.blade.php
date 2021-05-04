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
             <h4 style="">FAQ </h4>
          </div>
       </div>
    </div>
 </div>
 <div class="banner-signup">
    <img src="http://myprojectstaging.com/custom/whocares_dev/uploads/faq_page/banner-2.jpg" alt="banner" class="img-fluid">
 </div>
<section style="margin: 90px 0;">
<div class="container">
<div class="accordion">
 <dl>
           <dt>
     <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger">Is this a paid service?</a>
   </dt>
   <dd class="accordion-content accordionItem is-collapsed" id="accordion1" aria-hidden="true">
     <p>Our services are free of cost and are here to serve a bigger purpose. We do not care about money, we want to be able to help people. If you have been inflicted with a terrible turn of events or are going through a positive life change, your family and friends should be there to support you. We want to link loved ones together, especially in their time of need and we do this free of charge.</p>
   </dd>
           <dt>
     <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger">How can I sign up to avail your services?</a>
   </dt>
   <dd class="accordion-content accordionItem is-collapsed" id="accordion1" aria-hidden="true">
     <p>There are two ways you can sign up for our services:&nbsp;<br />
i) If you are a patient in need of help then you can set up your profile on our site and have it on standby in case there is a need for immediate help<br />
ii) If you are a concerned loved one or family member you can sign up and respond to a patient&rsquo;s request for assistance, whether in need or celebration and be there for their help<br />
Once you have signed up, we will link you to another family and build a strong community of helpful people.</p>
   </dd>
           <dt>
     <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger">I am worried about my friend/relative as they are going through a tough time and I want to help. What can I do?</a>
   </dt>
   <dd class="accordion-content accordionItem is-collapsed" id="accordion1" aria-hidden="true">
     <p>We will provide you with everything you need to make sure your loved one is being taken care of. Once you understand what they are going through, you can look through the kind of help we offer and choose the one that best suits your needs. You will be able to reach your loved one any time they need you and give them they full support they require during their hardship.</p>
   </dd>
           <dt>
     <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger">How can I sign up for your registry?</a>
   </dt>
   <dd class="accordion-content accordionItem is-collapsed" id="accordion1" aria-hidden="true">
     <p>You can go to our Registry page and fill in the form with all the relevant details. Once we have your basic information, you can then make your selection according to the event you are having.</p>
   </dd>
         </dl>
</div>
</div>
</section>

@endsection
