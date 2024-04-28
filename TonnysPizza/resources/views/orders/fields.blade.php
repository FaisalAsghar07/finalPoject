<!-- Customer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_id', 'Customer:') !!}
    <select name="customer_id" id="customer_id" class="form-control">
        <option value="">Select Customer</option>
        @if (!$customers->isEmpty())
            @foreach ($customers as $customer)
                <option value="{{$customer->id}}" @isset($orders) {{$orders->customer_id==$customer->id?'selected':''}}  @endisset>{{$customer->name}}</option>
            @endforeach
        @endif
    </select>
</div>

<!-- Pizza Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pizza_id', 'Pizza:') !!}
    <select name="pizza_id" id="pizza_id" class="form-control">
        <option value="">Select Pizza</option>
        @if (!$pizzas->isEmpty())
            @foreach ($pizzas as $pizza)
                <option value="{{$pizza->id}}" @isset($orders){{$orders->pizza_id==$pizza->id?'selected':''}}  @endisset>{{$pizza->name}}</option>
            @endforeach
        @endif
    </select>
</div>

<!-- Driver Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('driver_id', 'Driver:') !!}
    <select name="driver_id" id="driver_id" class="form-control">
        <option value="">Select Driver</option>
        @if (!$drivers->isEmpty())
            @foreach ($drivers as $driver)
                <option value="{{$driver->id}}" @isset($orders) {{$orders->driver_id==$driver->id?'selected':''}}  @endisset>{{$driver->name}}</option>
            @endforeach
        @endif
    </select>
</div>

<!-- Order Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('order_date', 'Order Date:') !!}
    {!! Form::date('order_date', isset($orders) ? $orders->order_date :null, ['class' => 'form-control','id'=>'order_date']) !!}
</div>

<!-- Delivery Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('delivery_date', 'Delivery Date:') !!}
    {!! Form::date('delivery_date', isset($orders) ? $orders->delivery_date :null, ['class' => 'form-control','id'=>'delivery_date']) !!}
</div>

@push('js_scripts')
    
@endpush
