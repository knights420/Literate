@extends('layouts.front_app')

@section('content')
<!-- contact breadcrumbs -->
<nav id="breadcrumbs" class="breadcrumbs">
  <div class="container page-wrapper text-center">
    <div class="header-section">
      <h2 class="mb-2">Book Demo</h2>
    </div>
    <a href="index.html">Home</a> » <span class="breadcrumb_last" aria-current="page">Book Demo</span>
  </div>
</nav>
<!-- /contact breadcrumbs -->
<!-- contact-form -->
<section class="w3l-contact" id="contact">
  <div class="contact-infubd py-5">
    <div class="container py-lg-3">
      <div class="contact-grids row">
        <div class="col-lg-6 contact-left">
          <div class="partners">
            <div class="cont-details">
              <h5>Get in touch</h5>
              <p class="mt-3 mb-4">Hi there, We are available 24/7 by fax, e-mail or by phone. Drop us line so we can talk
                futher about that.</p>
            </div>
            <div class="hours">
              <h6 class="mt-4">Email:</h6>
              <p> <a href="mailto:mail@literate.com">
                mail@literate.com</a></p>
              <h6 class="mt-4">Visit Us:</h6>
              <p> 78-80 Upper St Giles St. Norwich NR2 1LT United Kingdom.</p>
              <h6 class="mt-4">Contact:</h6>
              <p class="margin-top"><a href="tel:+44-255-366-88">+44-255-366-88</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-lg-0 mt-5 contact-right">
          <form method="post" action="/request" class="signin-form">
            @csrf
            <div class="form-group">
                <input type="text"  name="name" class="contact-input @error('name') border-danger @enderror" placeholder="Name">
                @error('name')
                  <small class="text-danger">Please Enter Your Name</small>
                @enderror
            </div>
            <div class="form-group">
                <input type="email"  name="email" class="contact-input  @error('email') border-danger @enderror" placeholder="Email">
                @error('email')
                  <small class="text-danger">Please Enter Your Email</small>
                @enderror
            </div>
            <div class="form-group">
                <input type="text"  name="mobile" class="contact-input  @error('mobile') border-danger @enderror" placeholder="Mobile">
                @error('mobile')
                  <small class="text-danger">Please Enter Your Mobile</small>
                @enderror
            </div>
            <div class="form-group">
                <input type="text"  name="school_name" class="contact-input  @error('school_name') border-danger @enderror" placeholder="School Name">
                @error('name')
                  <small class="text-danger">Please Enter School Name</small>
                @enderror
            </div>
            <div class="form-group">
                <input type="text"  name="address" class="contact-input  @error('address') border-danger @enderror" placeholder="Address">
                @error('address')
                  <small class="text-danger">Please Enter School Address</small>
                @enderror
            </div>
            <div class="form-group">
                <input type="number"  name="total_student" class="contact-input  @error('total_student') border-danger @enderror" placeholder="Total Student">
                @error('name')
                  <small class="text-danger">Please Enter No. of Student in Your School</small>
                @enderror
            </div>
            <div class="text-right">
            	<button type="submit" class="btn btn-primary theme-button">Request Demo</button>
			</div>
          </form>
        </div>

      </div>
      <div class="map mt-5 pt-md-5">
        <h5>Map</h5>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387145.86654334463!2d-74.25818682528057!3d40.70531100753592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1493028309728"
          style="border:0" allowfullscreen=""></iframe>
      </div>
    </div>
</section>
<!-- /contact-form -->
@endsection