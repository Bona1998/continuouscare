<div class="table-responsive">
    <table class="table" id="reviwes-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Jop Description</th>
        <th>What Say</th>
        <th>Image Url</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($reviwes as $reviwes)
            <tr>
                <td>{{ $reviwes->name }}</td>
            <td>{{ $reviwes->jop_description }}</td>
            <td>{{ $reviwes->what_say }}</td>
            <td><img height="50" src="{{ $reviwes->image_url }}" alt="image"></td>
                <td width="120">
                    {!! Form::open(['route' => ['reviwes.destroy', $reviwes->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('reviwes.show', [$reviwes->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('reviwes.edit', [$reviwes->id]) }}" class='btn btn-default btn-xs'>
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
