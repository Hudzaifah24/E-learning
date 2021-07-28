@extends('layouts.admin')

@section('title', 'Store Dashboard Admin')

@section('content')
<!-- Section Content -->
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
    <div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Admin Dashboard</h2>
        <p class="dashboard-subtitle">This is BWAStore Administrator Panel</p>
    </div>
    <div class="dashboard-content">
        <div class="row">
        <div class="col-md-4">
            <div class="card mb-2">
            <div class="card-body">
                <div class="dashboard-card-title">Customer</div>
                <div class="dashboard-card-subtitle">15,209</div>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-2">
            <div class="card-body">
                <div class="dashboard-card-title">Revenue</div>
                <div class="dashboard-card-subtitle">$931,290</div>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-2">
            <div class="card-body">
                <div class="dashboard-card-title">Transaction</div>
                <div class="dashboard-card-subtitle">22,409,399</div>
            </div>
            </div>
        </div>
        </div>

        <div class="row mt-3">
        <div class="col-12 mt-2">
            <h5 class="mb-3">
            Recent Transactions
            <a
                href="/dashboard-transactions-details.html"
                class="card card-list d-block"
            >
                <div class="card-body">
                <div class="row">
                    <div class="col-md-1">
                    <img
                        src="/images/dashboard-icon-product-1.png"
                        class="w-100"
                        alt=""
                    />
                    </div>
                    <div class="col-md-4">Shirup Marzzan</div>
                    <div class="col-md-3">Angga Risky</div>
                    <div class="col-md-3">12 Januari, 2020</div>
                    <div class="col-md-1 d-none d-md-block">
                    <img
                        src="/images/dashboard-arrow-right.svg"
                        alt=""
                    />
                    </div>
                </div>
                </div>
            </a>

            <a
                href="/dashboard-transactions-details.html"
                class="card card-list d-block"
            >
                <div class="card-body">
                <div class="row">
                    <div class="col-md-1">
                    <img
                        src="/images/dashboard-icon-product-2.png"
                        class="w-100"
                        alt=""
                    />
                    </div>
                    <div class="col-md-4">LeBrone X</div>
                    <div class="col-md-3">Masayoshi</div>
                    <div class="col-md-3">11 January, 2020</div>
                    <div class="col-md-1 d-none d-md-block">
                    <img
                        src="/images/dashboard-arrow-right.svg"
                        alt=""
                    />
                    </div>
                </div>
                </div>
            </a>

            <a
                href="/dashboard-transactions-details.html"
                class="card card-list d-block"
            >
                <div class="card-body">
                <div class="row">
                    <div class="col-md-1">
                    <img
                        src="/images/dashboard-icon-product-3.png"
                        class="w-100"
                        alt=""
                    />
                    </div>
                    <div class="col-md-4">Soffa Lembutte</div>
                    <div class="col-md-3">Shayna</div>
                    <div class="col-md-3">11 January, 2020</div>
                    <div class="col-md-1 d-none d-md-block">
                    <img
                        src="/images/dashboard-arrow-right.svg"
                        alt=""
                    />
                    </div>
                </div>
                </div>
            </a>
            </h5>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection
