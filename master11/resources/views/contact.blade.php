@extends('layout.home')

@section('content')

<div class="banner-contact">
    <div class="contact-title">
        <span>Contact us</span>
    </div>
</div>

<!-- ----------------------------- Contact Info -->
<section class="info-section">
    <div class="info-main">
        <div class="about-heading">
            <span>Our</span>
            <span class="bold-text">Information</span>
        </div>
        <div class="contact-div">
            <div class="contact-box">
                <div class="circle">
                    <i class="fa-solid fa-location-dot contact-icon"></i>
                </div>
                <span>Location</span>
                <p>King Hussein Street<br />
                    Aqaba,<br />
                    Jordan
                </p>
            </div>

            <div class="contact-box">
                <div class="circle">
                    <i class="fa-solid fa-phone contact-icon"></i>
                </div>
                <span>Phone</span>
                <p>+962 3 2012345</p>
                <p>+962 7 98765432</p>
            </div>

            <div class="contact-box">
                <div class="circle">
                    <i class="fa-regular fa-envelope contact-icon"></i>
                </div>
                <span>Email</span>
                <p>aqaba@gmail.com</p>
            </div>
        </div>
    </div>
</section>

<!-- ----------------------------- Map Section -->
<section class="map-section">
    <div class="map-main">
        <div class="about-heading">
            <span class="bold-text">Locate</span>
            <span>us</span>
        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3398.517524241741!2d35.00633627552623!3d29.532081675188595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x150070edf5e6ccdf%3A0x35a40dc7cd6ef77f!2sAqaba!5e0!3m2!1sen!2sjo!4v1712990500000!5m2!1sen!2sjo"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" class="map">
            </iframe>
        </div>
    </div>
</section>

<!-- ----------------------------- Message Form -->
<section class="map-section">
    <div class="map-main">
        <div class="about-heading">
            <span>Send us a</span>
            <span class="bold-text">Message</span>
        </div>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('contact') }}" class="message-data">
            @csrf
            <input type="text" name="name" placeholder="Name" class="name-input" required>
            <input type="email" name="email" placeholder="Email" class="name-input" required>
            <input type="text" name="phone" placeholder="Phone" class="name-input">
            <textarea name="message" placeholder="Message" class="name-input textarea" required></textarea>
            <button type="submit" class="send-btn">Send</button>
        </form>
    </div>
</section>

@endsection
