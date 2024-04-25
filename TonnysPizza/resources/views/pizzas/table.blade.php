<div class="table-responsive">
    <table class="table" id="pizzas-table">
        <thead>
        <tr>
            <th>Name</th>
        <th>Description</th>
        <th>Price</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pizzas as $pizza)
            <tr>
                <td>{{ $pizza->name }}</td>
            <td>{{ $pizza->description }}</td>
            <td>{{ $pizza->price }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['pizzas.destroy', $pizza->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pizzas.show', [$pizza->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('pizzas.edit', [$pizza->id]) }}"
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
