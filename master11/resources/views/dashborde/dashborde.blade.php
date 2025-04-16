@extends('dashborde.layout.dash')
@section('contact')

<div class="main-content">
    <div class="top-bar">
        <h1>Welcome, Admin</h1>
        <div class="search-bar">
            <input type="text" placeholder="Search...">
            <i class="fas fa-search"></i>
        </div>
    </div>

    <div class="stats-container">
        <div class="stat-card">
            <h3>Today's Bookings</h3>
            <p>45</p>
            <span class="up">↑ 12%</span>
        </div>
        <div class="stat-card">
            <h3>Pending Requests</h3>
            <p>8</p>
            <span class="down">↓ 3%</span>
        </div>
        <div class="stat-card">
            <h3>New Messages</h3>
            <p>5</p>
            <span class="up">↑ 2%</span>
        </div>
        <div class="stat-card">
            <h3>Revenue</h3>
            <p>12,500 JOD</p>
            <span class="up">↑ 8%</span>
        </div>
    </div>

    <div class="chart-container">
        <canvas id="revenueChart"></canvas>
    </div>
</div>

@endsection