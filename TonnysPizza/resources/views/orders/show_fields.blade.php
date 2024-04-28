<!-- Customer Id Field -->
<div class="col-sm-12">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    <p>{{ $orders->customer_id }}</p>
</div>

<!-- Pizza Id Field -->
<div class="col-sm-12">
    {!! Form::label('pizza_id', 'Pizza Id:') !!}
    <p>{{ $orders->pizza_id }}</p>
</div>

<!-- Driver Id Field -->
<div class="col-sm-12">
    {!! Form::label('driver_id', 'Driver Id:') !!}
    <p>{{ $orders->driver_id }}</p>
</div>

<!-- Order Date Field -->
<div class="col-sm-12">
    {!! Form::label('order_date', 'Order Date:') !!}
    <p>{{ $orders->order_date }}</p>
</div>

<!-- Delivery Date Field -->
<div class="col-sm-12">
    {!! Form::label('delivery_date', 'Delivery Date:') !!}
    <p>{{ $orders->delivery_date }}</p>
</div>

