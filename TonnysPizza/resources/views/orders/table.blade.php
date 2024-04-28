<div class="table-responsive">
    <table class="table" id="orders-table">
        <thead>
        <tr>
            <th>Customer Id</th>
        <th>Pizza Id</th>
        <th>Driver Id</th>
        <th>Order Date</th>
        <th>Delivery Date</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $orders)
            <tr>
                <td>{{ $orders->customer_id }}</td>
            <td>{{ $orders->pizza_id }}</td>
            <td>{{ $orders->driver_id }}</td>
            <td>{{ $orders->order_date }}</td>
            <td>{{ $orders->delivery_date }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['orders.destroy', $orders->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('orders.show', [$orders->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('orders.edit', [$orders->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
