@extends('layout.home')

@section('content')
<div class="container confirmation-container">
    <h2>تأكيد الحجز</h2>
    
    <div class="booking-details">
        <p><strong>الخدمة:</strong> {{ $booking->service->name }}</p>
        <p><strong>التاريخ:</strong> {{ $booking->date->format('Y-m-d') }}</p>
        <p><strong>الوقت:</strong> {{ $booking->time }}</p>
        <p><strong>عدد الأشخاص:</strong> {{ $booking->people }}</p>
        <p><strong>المجموع:</strong> ${{ number_format($booking->price, 2) }}</p>
    </div>

    <form method="POST" action="{{ route('bookings.finalize', $booking) }}">
        @csrf
        <button type="submit" class="btn btn-success">تأكيد الحجز النهائي</button>
    </form>
</div>
@endsection