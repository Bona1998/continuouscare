<div class="table-responsive">
    <table class="table" id="goals-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Discription</th>
        <th>Image Url</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($goals as $goals)
            <tr>
                <td>{{ $goals->name }}</td>
            <td>{{ $goals->discription }}</td>
            <td><img height="50" src="{{ $goals->image_url }}" alt="image"></td>
                <td width="120">
                    {!! Form::open(['route' => ['goals.destroy', $goals->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('goals.show', [$goals->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('goals.edit', [$goals->id]) }}" class='btn btn-default btn-xs'>
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
