@extends('layouts.admin')

@section('title')
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fadeup">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Admin Dashboard</h2>
            <p class="dashboard-subtitle">
                This is Toko Obat Berizin Ahza Administrator Panel
            </p>
        </div>
    </div>
    <div class="dashboard-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card-mb-2">
                        <div class="card-body" style="background-color: #fff;">
                            <div class="dashboard-card-title">
                                Customer
                            </div>
                            <div class="dashboard-card-subtitle">
                                {{ $customer }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-mb-2">
                        <div class="card-body" style="background-color: #fff;">
                            <div class="dashboard-card-title">
                                Pendapatan
                            </div>
                            <div class="dashboard-card-subtitle">
                                Rp {{ $revenue }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-mb-2">
                        <div class="card-body" style="background-color: #fff;">
                            <div class="dashboard-card-title">
                                Transaksi
                            </div>
                            <div class="dashboard-card-subtitle">
                                {{ $transaction }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
