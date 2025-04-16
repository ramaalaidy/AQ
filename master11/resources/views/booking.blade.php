@extends('layout.home')

@section('content')
<div class="banner-hotel">
    <div class="hotel-title">
        <!-- <span>hotel</span> -->
    </div>
</div>


<<!-- ========== قسم الفنادق ========== -->
{{-- <section class="hotels">
<h2><strong>Popular</strong> Hotels & Rooms</h2>
<div class="hotel-list">
    <div class="hotel-card">
        <img src="./img/movenpick.jpg" alt="Movenpick Aqaba Hotel">
        <h3>🏨 Hotel Movenpick Aqaba</h3>
        <p class="price">$120 <span>/night</span></p>
        <p class="rating">⭐⭐⭐⭐ 9.2 Rating</p>
        <p class="description">Direct view of the Red Sea with a private beach and luxury swimming pools.</p>
        <p class="location">📍 Aqaba, Jordan</p>
        <button class="book-btn">Book Now</button>
    </div>
    <div class="hotel-card">
        <img src="./img/Kempinski.webp" alt="Kempinski Aqaba Hotel">
        <h3>Kempinski Hotel Aqaba</h3>
        <p class="price">$150 <span>/night</span></p>
        <p class="rating">⭐⭐⭐⭐⭐ 9.5 Rating</p>
        <p class="description">Modern design with panoramic Red Sea views.</p>
        <p class="location">📍 Aqaba, Jordan</p>
        <button class="book-btn">Book Now</button>
    </div>
    <div class="hotel-card">
        <img src="./img/intercontinental.avif" alt="InterContinental Aqaba Hotel">
        <h3>InterContinental Aqaba</h3>
        <p class="price">$110 <span>/night</span></p>
        <p class="rating">⭐⭐⭐⭐ 8.8 Rating</p>
        <p class="description">Luxury resort with a private sandy beach.</p>
        <p class="location">📍 Aqaba, Jordan</p>
        <button class="book-btn">Book Now</button>
    </div>
    <div class="hotel-card">
        <img src="./img/7-club.jpeg" alt="Hyatt Regency Aqaba">
        <h3>Hyatt Regency Aqaba Ayla Resort</h3>
        <p class="price">$140 <span>/night</span></p>
        <p class="rating">⭐⭐⭐⭐ 9.0 Rating</p>
        <p class="description">Part of the Ayla Oasis with a private marina.</p>
        <p class="location">📍 Aqaba, Jordan</p>
        <button class="book-btn">Book Now</button>
    </div>
    <div class="hotel-card">
        <img src="./img/المناره.jpg" alt="Al Manara Hotel">
        <h3>Al Manara, a Luxury Collection Hotel</h3>
        <p class="price">$160 <span>/night</span></p>
        <p class="rating">⭐⭐⭐⭐⭐ 9.3 Rating</p>
        <p class="description">Arabesque-inspired luxury architecture.</p>
        <p class="location">📍 Aqaba, Jordan</p>
        <button class="book-btn">Book Now</button>
    </div>
</div>
</section> --}}

<!-- قسم الفنادق -->
<section class="hotels">
    <h2><strong>Popular</strong> Hotels & Rooms</h2>
    <div class="hotel-list">
        <div class="hotel-card">
            <img src="./img/movenpick.jpg" alt="Movenpick Aqaba Hotel">
            <h3>🏨 Hotel Movenpick Aqaba</h3>
            <p class="price">$120 <span>/night</span></p>
            <p class="rating">⭐⭐⭐⭐ 9.2 Rating</p>
            <p class="description">Direct view of the Red Sea with a private beach and luxury swimming pools.</p>
            <p class="location">📍 Aqaba, Jordan</p>
            <button class="book-btn" data-hotel-name="Hotel Movenpick Aqaba">Book Now</button>
        </div>

        <div class="hotel-card">
            <img src="./img/Kempinski.webp" alt="Kempinski Aqaba Hotel">
            <h3>Kempinski Hotel Aqaba</h3>
            <p class="price">$150 <span>/night</span></p>
            <p class="rating">⭐⭐⭐⭐⭐ 9.5 Rating</p>
            <p class="description">Modern design with panoramic Red Sea views.</p>
            <p class="location">📍 Aqaba, Jordan</p>
            <button class="book-btn">Book Now</button>
        </div>
        <div class="hotel-card">
            <img src="./img/intercontinental.avif" alt="InterContinental Aqaba Hotel">
            <h3>InterContinental Aqaba</h3>
            <p class="price">$110 <span>/night</span></p>
            <p class="rating">⭐⭐⭐⭐ 8.8 Rating</p>
            <p class="description">Luxury resort with a private sandy beach.</p>
            <p class="location">📍 Aqaba, Jordan</p>
            <button class="book-btn">Book Now</button>
        </div>
        <div class="hotel-card">
            <img src="./img/7-club.jpeg" alt="Hyatt Regency Aqaba">
            <h3>Hyatt Regency Aqaba Ayla Resort</h3>
            <p class="price">$140 <span>/night</span></p>
            <p class="rating">⭐⭐⭐⭐ 9.0 Rating</p>
            <p class="description">Part of the Ayla Oasis with a private marina.</p>
            <p class="location">📍 Aqaba, Jordan</p>
            <button class="book-btn">Book Now</button>
        </div>
        <div class="hotel-card">
            <img src="./img/المناره.jpg" alt="Al Manara Hotel">
            <h3>Al Manara, a Luxury Collection Hotel</h3>
            <p class="price">$160 <span>/night</span></p>
            <p class="rating">⭐⭐⭐⭐⭐ 9.3 Rating</p>
            <p class="description">Arabesque-inspired luxury architecture.</p>
            <p class="location">📍 Aqaba, Jordan</p>
            <button class="book-btn">Book Now</button>
        </div>
        <!-- كرر نفس الكود لبقية الفنادق مع تغيير البيانات -->
    </div>
</section>

<!-- Popup Modal -->
<div id="bookingModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h1>حجز الخدمة</h1>
        <form id="bookingForm" method="POST" action="{{ route('booking') }}">
            @csrf
            <div class="form-group">
                <label>نوع الخدمة:</label>
                <select name="service_id" class="form-control" required>
                    @foreach($services as $service)
                        <option value="{{ $service->id }}">{{ $service->type }} - {{ $service->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>التاريخ:</label>
                <input type="date" name="date" class="form-control" required>
            </div>
            <div class="form-group">
                <label>الوقت:</label>
                <input type="time" name="time" class="form-control" required>
            </div>
            <div class="form-group">
                <label>عدد الأشخاص:</label>
                <input type="number" name="people" class="form-control" min="1" required>
            </div>
            <div class="form-group">
                <label>الموقع:</label>
                <input type="text" name="location" class="form-control" required>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <button type="submit" class="btn btn-primary">عرض الخيارات</button>
        </form>
    </div>
</div>


<!-- ========== قسم المطاعم ========== -->
<section class="restaurants">
<h2><strong>Popular</strong> Restaurants in Aqaba</h2>
<div class="restaurant-list">
    <div class="restaurant-card">
        <img src="./img/6.jpg" alt="Ali Baba Restaurant">
        <h3>🍽️ Ali Baba Restaurant</h3>
        <p class="cuisine">🌮 Middle Eastern, Seafood</p>
        <p class="rating">⭐⭐⭐⭐ 9.0 Rating</p>
        <p class="description">Famous for its seafood dishes and authentic Jordanian cuisine.</p>
        <p class="location">📍 Aqaba, Jordan</p>
        <button class="book-btn">Reserve Now</button>
    </div>
    <div class="restaurant-card">
        <img src="./img/res.jpeg" alt="Romero Aqaba">
        <h3>Romero Aqaba</h3>
        <p class="cuisine">🍝 Italian, Mediterranean</p>
        <p class="rating">⭐⭐⭐⭐⭐ 9.5 Rating</p>
        <p class="description">Authentic Italian flavors with a sea view dining experience.</p>
        <p class="location">📍 Aqaba, Jordan</p>
        <button class="book-btn">Reserve Now</button>
    </div>
    <div class="restaurant-card">
        <img src="./img/red-sea-grill-is-a-striking.jpg" alt="Syriana Restaurant">
        <h3>Syriana Restaurant</h3>
        <p class="cuisine">🥙 Syrian, Arabic</p>
        <p class="rating">⭐⭐⭐⭐ 8.8 Rating</p>
        <p class="description">A warm atmosphere serving delicious Syrian and Jordanian dishes.</p>
        <p class="location">📍 Aqaba, Jordan</p>
        <button class="book-btn">Reserve Now</button>
    </div>
    <div class="restaurant-card">
        <img src="./img/kabten.jpg" alt="Captain’s Restaurant">
        <h3>Captain’s Restaurant</h3>
        <p class="cuisine">🦞 Seafood, International</p>
        <p class="rating">⭐⭐⭐⭐ 9.0 Rating</p>
        <p class="description">Fresh seafood and a cozy dining experience by the beach.</p>
        <p class="location">📍 Aqaba, Jordan</p>
        <button class="book-btn">Reserve Now</button>
    </div>
    <div class="restaurant-card">
        <img src="./img/000.jpeg" alt="Khubza & Seneya">
        <h3>Khubza & Seneya</h3>
        <p class="cuisine">🍛 Jordanian, Middle Eastern</p>
        <p class="rating">⭐⭐⭐⭐ 9.3 Rating</p>
        <p class="description">Traditional Jordanian dishes in a modern and cozy setting.</p>
        <p class="location">📍 Aqaba, Jordan</p>
        <button class="book-btn">Reserve Now</button>
    </div>
</div>
</section>



<!-- Transportation Section -->
<section class="transportation">
<h2><strong>Best</strong> Transportation in Aqaba</h2>
<div class="transport-list">
    <div class="transport-card">
        <img src="./img/taxe.jpg" alt="Taxi">
        <h3>🚖 Aqaba City Taxi</h3>
        <p class="type">🚕 Private & Shared Taxis</p>
        <p class="rating">⭐⭐⭐⭐ 9.0 Rating</p>
        <p class="description">Affordable and quick transportation across the city and to major destinations.</p>
        <p class="location">📍 Available throughout Aqaba</p>
        <button class="book-btn">Book Now</button>
    </div>

    <div class="transport-card">
        <img src="./img/jeat.jpeg" alt="Bus">
        <h3>🚌 JETT Bus</h3>
        <p class="type">🚍 Long-Distance Bus Service</p>
        <p class="rating">⭐⭐⭐⭐⭐ 9.5 Rating</p>
        <p class="description">Comfortable buses connecting Aqaba with Amman, Petra, and Wadi Rum.</p>
        <p class="location">📍 Aqaba Bus Station</p>
        <button class="book-btn">Book Ticket</button>
    </div>

    <div class="transport-card">
        <img src="./img/taxxx.jpg" alt="Car Rental">
        <h3>🚗 Car Rental Services</h3>
        <p class="type">🚘 Self-Drive & Chauffeur Options</p>
        <p class="rating">⭐⭐⭐⭐ 8.8 Rating</p>
        <p class="description">Explore Aqaba and beyond at your own pace with a rental car.</p>
        <p class="location">📍 Various rental offices in Aqaba</p>
        <button class="book-btn">Rent Now</button>
    </div>

    <div class="transport-card">
        <img src="./img/04.jpg" alt="Scooter Rental">
        <h3>🛵 Scooter & Bike Rentals</h3>
        <p class="type">🏍️ Eco-friendly Transport</p>
        <p class="rating">⭐⭐⭐⭐ 9.0 Rating</p>
        <p class="description">Perfect for short city trips and enjoying the scenic routes of Aqaba.</p>
        <p class="location">📍 Multiple rental spots in the city</p>
        <button class="book-btn">Rent Now</button>
    </div>

    <div class="transport-card">
        <img src="./img/Aqaba_6.jpg" alt="Boat Taxi">
        <h3>⛵ Boat Taxi</h3>
        <p class="type">🚤 Sea Transport</p>
        <p class="rating">⭐⭐⭐⭐⭐ 9.3 Rating</p>
        <p class="description">Scenic water transport to different locations along the Red Sea coast.</p>
        <p class="location">📍 Aqaba Marina</p>
        <button class="book-btn">Book Ride</button>
    </div>
</div>
</section>


<!-- Activities & Events Section -->
<section class="activities">
<h2><strong>Exciting</strong> Activities & Events</h2>
<div class="activity-list">
    <div class="activity-card">
        <img src="./img/17.jpeg" alt="Diving">
        <h3>🤿 Scuba Diving & Snorkeling</h3>
        <p class="rating">⭐⭐⭐⭐⭐ 9.5 Rating</p>
        <p class="description">Explore the breathtaking coral reefs and marine life of the Red Sea.</p>
        <p class="location">📍 South Beach, Aqaba</p>
        <button class="book-btn">Book Now</button>
    </div>
    <div class="activity-card">
        <img src="./img/ph-6-02.jpg" alt="Boat Tour">
        <h3>⛵ Boat & Yacht Trips</h3>
        <p class="rating">⭐⭐⭐⭐ 9.2 Rating</p>
        <p class="description">Relax on a luxury yacht or a traditional boat while enjoying the sea views.</p>
        <p class="location">📍 Aqaba Marina</p>
        <button class="book-btn">Book Now</button>
    </div>
    <div class="activity-card">
        <img src="./img/cruises-and-water-sports.jpg" alt="Water Sports">
        <h3>🌊 Water Sports</h3>
        <p class="rating">⭐⭐⭐⭐ 8.9 Rating</p>
        <p class="description">Jet skiing, parasailing, and paddleboarding for adrenaline lovers.</p>
        <p class="location">📍 Aqaba Beach</p>
        <button class="book-btn">Book Now</button>
    </div>
    <div class="activity-card">
        <img src="./img/IMG_9421.jpg" alt="Desert Safari">
        <h3>🏜️ Wadi Rum Desert Safari</h3>
        <p class="rating">⭐⭐⭐⭐⭐ 9.7 Rating</p>
        <p class="description">Experience jeep tours, camel rides, and stargazing in the magical Wadi Rum.</p>
        <p class="location">📍 Wadi Rum, Jordan</p>
        <button class="book-btn">Book Now</button>
    </div>
    <div class="activity-card">
        <img src="./img/aaaaaaaa.jpeg" alt="Aqaba Festival">
        <h3>🎭 Aqaba Cultural Festivals</h3>
        <p class="rating">⭐⭐⭐⭐ 9.0 Rating</p>
        <p class="description">Enjoy live music, traditional dance, and food festivals throughout the year.</p>
        <p class="location">📍 Various Locations in Aqaba</p>
        <button class="book-btn">Learn More</button>
    </div>
</div>
</section>


{{-- <div class="container booking-container">
    <h1>حجز الخدمة</h1>
    
    <form method="POST" action="{{ route('booking') }}">
        @csrf
        
        <div class="form-group">
            <label>نوع الخدمة:</label>
            <select name="service_id" class="form-control" required>
                @foreach($services as $service)
                    <option value="{{ $service->id }}">{{ $service->type }} - {{ $service->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>التاريخ:</label>
            <input type="date" name="date" class="form-control" required>
        </div>

        <div class="form-group">
            <label>الوقت:</label>
            <input type="time" name="time" class="form-control" required>
        </div>

        <div class="form-group">
            <label>عدد الأشخاص:</label>
            <input type="number" name="people" class="form-control" min="1" required>
        </div>

        <div class="form-group">
            <label>الموقع:</label>
            <input type="text" name="location" class="form-control" required>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <button type="submit" class="btn btn-primary">عرض الخيارات</button>
    </form>

    <!-- سيتم عرض النتائج هنا عبر JavaScript -->
    <div id="results" class="mt-4"></div>
</div> --}}

<style>
/* النمط الأساسي للـ Modal */
.modal {
    display: none; /* مخفي في البداية */
    position: fixed; /* ثابت في الصفحة */
    z-index: 1; /* فوق كل العناصر */
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.4); /* خلفية شفافة داكنة */
}

/* محتوى الـ Modal */
.modal-content {
    background-color: #fff;
    margin: 15% auto; /* تمركز في الوسط */
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 500px;
}

/* زر الإغلاق */
.close {
    color: #aaa;
    font-size: 28px;
    font-weight: bold;
    position: absolute;
    top: 10px;
    right: 25px;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
</style>

<script>
    // الحصول على الـ Modal
    var modal = document.getElementById("bookingModal");

    // الحصول على كل الأزرار "Book Now"
    document.querySelectorAll('.book-btn').forEach(button => {
        button.addEventListener('click', function () {
            // تحديد اسم الفندق
            const hotelName = this.getAttribute('data-hotel-name');

            // ملء حقل الموقع باسم الفندق
            const locationInput = document.querySelector('input[name="location"]');
            locationInput.value = hotelName;

            // عرض الـ Modal
            modal.style.display = "block";
        });
    });

    // إغلاق الـ Modal عند الضغط على زر الإغلاق
    document.querySelector('.close').addEventListener('click', function() {
        modal.style.display = "none";
    });

    // إغلاق الـ Modal إذا ضغط المستخدم خارج الـ Modal
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

@endsection