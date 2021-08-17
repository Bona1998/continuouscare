<div class="table-responsive">
    <table class="table" id="brifDescriptions-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Description</th>
        <th>Image Url</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($brifDescriptions as $brifDescription)
            <tr>
                <td>{{ $brifDescription->name }}</td>
            <td>{{ $brifDescription->description }}</td>
            <td><img height="50" src="{{ $brifDescription->image_url }}" alt="image"></td>
                <td width="120">
                    {!! Form::open(['route' => ['brifDescriptions.destroy', $brifDescription->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('brifDescriptions.show', [$brifDescription->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('brifDescriptions.edit', [$brifDescription->id]) }}" class='btn btn-default btn-xs'>
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
