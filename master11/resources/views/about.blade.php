@extends('layout.home')
@section('content')

<div class="banner-about">
    <div class="about-title">
        <span>About us</span>
    </div>
</div>

<!-- -----------------------second white -->
<section class="second-sec-about">
    <div class="second-main-about">

        <div class="about-heading">
            <span></span>Welcome to
            <span class="bold-text">Aqaba</span>
        </div>

        <div class="about-content">
            <p>Aqaba is a gateway to adventure, relaxation, and rich history. Nestled along the Red Sea, this vibrant city offers stunning coral reefs, golden beaches, and a blend of ancient and modern attractions. Whether you're diving into crystal-clear waters, exploring historic sites, or indulging in local flavors, Aqaba promises an unforgettable experience for every traveler.</p>
        </div>
        <div class="photo-section-content">
            <div class="about-photo1">
                <div class="card-about-photo1">
                    <img src="./img/0.jpg" alt="" width="100%" height="100%">
                </div>
                <div class="card-about-photo2">
                    <img src="./img/1.jpeg" alt="" width="100%" height="100%">
                </div>
                <div class="card-about-photo3">
                    <img src="./img/3.jpg" alt="" width="100%" height="100%">
                </div>
            </div>

            <div class="right-photo-content">
                <div class="commitment-title">Our Commitment to 

                    <span class="bold-text"> Aqaba</span>
                </div>
                <p>We are dedicated to promoting sustainable and responsible tourism in Aqaba. By respecting its rich history, preserving its stunning marine life, and supporting local communities, we strive to ensure that Aqaba remains a breathtaking destination for generations to come. Our goal is to inspire mindful travel that leaves a lasting, positive impact on both the city and its people.







                </p>

                <div class="commitment-title">Our Vision for 

                    <span class="bold-text">Aqaba</span>
                </div>

                <p>
                    Our vision is to showcase Aqaba as a premier destination where travelers can experience joy, discovery, and cultural enrichment. We aim to highlight its natural beauty, historical significance, and vibrant local life, making every visit an unforgettable journey.
                </p>
                <p>
                    We strive to be the ultimate resource for travelers seeking meaningful and enriching experiences in Aqaba. Whether you're planning a short escape or an extended adventure, our goal is to provide the insights and inspiration needed to make your journey truly unforgettable.
                </p>
            </div>
        </div>

    </div>
</section>

<!-- ---------------our services -->

<section id="services">
    <div class="service-overlay">


        <div class="service-main">
            <div class="service-title">Our
                <span class="bold-text"> Services</span>
                <p> We offer the following services</p>
            </div>
            <div class="service-content">
                <div class="service-box1">
                    <i class="fa-solid fa-plane-departure"></i>
                    <div class="inner-div">
                        <span>Air Ticketing</span>
                        <p>Our user-friendly interfaces makes it simple to search, compare,and book flights in just a few clicks. </p>
                        <a href=""><span>
                                Learn more
                            </span>
                        </a>
                    </div>
                </div>
                <div class="service-box1">
                    <i class="fa-solid fa-ship"></i>
                    <div class="inner-div">
                        <span>Cruises
                        </span>
                        <p>Sail to beautiful destinations worldwide, enjoy top-notch amenities and services on board our modern cruise ships. </p>
                        <a href=""><span>Learn more</span>
                        </a>
                    </div>
                </div>
                <div class="service-box1">
                    <i class="fa-solid fa-briefcase"></i>
                    <div class="inner-div">
                        <span>Tour Packages</span>
                        <p>Enjoy a hassle-free vacation with packages that incluse accomodation, transportation, meals and guided tours.</p>
                        <a href=""><span>
                                Learn more
                            </span>
                        </a>
                    </div>
                </div>
                <div class="service-box1">
                    <i class="fa-solid fa-hotel"></i>
                    <div class="inner-div">
                        <span>Hotel Accomodations</span>
                        <p>Hotel Accomodations
                            Choose form thousands of hotels worldwide, from 5-star luxary resorts to cozy boutique hotels and budget-friendly inns. </p>
                        <a href=""><span>
                                Learn more
                            </span>
                        </a>
                    </div>
                </div>
                <div class="service-box1">
                    <i class="fa-solid fa-sailboat"></i>
                    <div class="inner-div">
                        <span>Sea Explorations</span>
                        <p>Wheather you're a beginner or a experienced diver, we have explorationssuited to every skill level.</p>
                        <a href=""><span>
                                Learn more
                            </span>
                        </a>
                    </div>
                </div>
                <div class="service-box1">
                    <i class="fa-solid fa-person-skiing-nordic"></i>
                    <div class="inner-div">
                        <span>Ski Experiences</span>
                        <p>Enjoy top-notch amenities and services at premier ski resorts around the globe. </p>
                        <a href=""><span>
                                Learn more
                            </span>
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<section id="book">
    <div class="book-main">
        <div class="service-title">
            <span class="bold-text"> Want To </span>Travel With
            <span class="bold-text"> Us</span> <span class="bold-text ques-mark"> ?</span>
        </div>
        <a href="{{ route('booking') }}" class="send-btn">Book Now</a>
    </div>

</section>

@endsection