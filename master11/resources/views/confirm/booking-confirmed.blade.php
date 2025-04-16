@component('mail::message')
# تم تأكيد حجزك!

**الخدمة:** {{ $booking->service->name }}  
**التاريخ:** {{ $booking->date->format('Y-m-d') }}  
**الوقت:** {{ $booking->time }}  
**المجموع:** ${{ number_format($booking->price, 2) }}

@component('mail::button', ['url' => route('my.bookings'))
عرض الحجوزات
@endcomponent

شكرًا لاستخدامك خدماتنا!
@endcomponent