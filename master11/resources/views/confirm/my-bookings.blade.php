@extends('layout.home')

@section('content')

<div class="container my-bookings">
    <h1>حجوزاتي</h1>
    
    @foreach($bookings as $booking)
    <div class="booking-card">
        <div class="booking-header">
            <h3>{{ $booking->service->name }}</h3>
            <span class="status {{ $booking->status }}">{{ $booking->status }}</span>
        </div>
        
        <div class="booking-details">
            <p>التاريخ: {{ $booking->date->format('Y-m-d') }}</p>
            <p>الوقت: {{ $booking->time }}</p>
            <p>عدد الأشخاص: {{ $booking->people }}</p>
            <p class="price">المجموع: ${{ number_format($booking->price, 2) }}</p>
        </div>
    </div>
    @endforeach
</div>
@endsection