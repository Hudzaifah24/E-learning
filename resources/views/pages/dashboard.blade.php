@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
<!-- Section Content -->
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
    <div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Dashboard</h2>
        <p class="dashboard-subtitle">Look what you have made today!</p>
    </div>
    <div class="mt-3 dashboard-content">
        <div class="grid grid-cols-4 gap-3">
            <div class="col-span-1">
                <div class="mb-2 card">
                    <div class="card-body">
                        <div class="dashboard-card-title">Subjects</div>
                        <div class="dashboard-card-subtitle">{{ number_format($subjects) }} S</div>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <div class="mb-2 card">
                    <div class="card-body">
                        <div class="dashboard-card-title">Theories</div>
                        <div class="dashboard-card-subtitle">{{ number_format($theories) }} T</div>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <div class="mb-2 card">
                    <div class="card-body">
                        <div class="dashboard-card-title">Videos</div>
                        <div class="dashboard-card-subtitle">{{ number_format($videos) }} V</div>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <div class="mb-2 card">
                    <div class="card-body">
                        <div class="dashboard-card-title">Reviews</div>
                        <div class="dashboard-card-subtitle">{{ number_format($reviews) }} V</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
