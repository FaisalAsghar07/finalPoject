@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Welcome to Tonnys Pizza</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h3>Statistics</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div>
                <h5>Total Earning</h5>
                <p>{{ number_format($orders->sum('total'), 2) }} USD</p>
                <a href="{{ url('/orders') }}">Visit Orders</a>
            </div>
        </div>

        <div class="col-md-9">
            <div class="row">
                <div class="col-md-3">
                    <div>
                        <h5>Customers</h5>
                        <p>{{ $customers->count() }}</p>
                        <a href="{{ url('/customers') }}">Visit Customers</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div>
                        <h5>Drivers</h5>
                        <p>{{ $drivers->count() }}</p>
                        <a href="{{ url('/drivers') }}">Visit Drivers</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div>
                        <h5>Pizzas</h5>
                        <p>{{ $pizzas->count() }}</p>
                        <a href="{{ url('/pizzas') }}">Visit Pizzas</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div>
                        <h5>Orders</h5>
                        <p>{{ $orders->count() }}</p>
                        <a href="{{ url('/orders') }}">Visit Orders</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12">
            <h3>Latest Orders</h3>
            @include('orders.table')
        </div>
    </div>
</div>
@endsection
