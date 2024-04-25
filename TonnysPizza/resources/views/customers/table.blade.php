<div class="table-responsive">
    <table class="table" id="customers-table">
        <thead>
        <tr>
            <th>Name</th>
        <th>Phone Number</th>
        <th>Address</th>
        <th>Order Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->name }}</td>
            <td>{{ $customer->phone_number }}</td>
            <td>{{ $customer->address }}</td>
            <td>{{ $customer->order_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['customers.destroy', $customer->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('customers.show', [$customer->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('customers.edit', [$customer->id]) }}"
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
