<div class="table-responsive">
    <table class="table" id="drivers-table">
        <thead>
        <tr>
            <th>Name</th>
        <th>Phone Number</th>
        <th>Order Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($drivers as $driver)
            <tr>
                <td>{{ $driver->name }}</td>
            <td>{{ $driver->phone_number }}</td>
            <td>{{ $driver->order_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['drivers.destroy', $driver->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('drivers.show', [$driver->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('drivers.edit', [$driver->id]) }}"
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
