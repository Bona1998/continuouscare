<div class="table-responsive">
    <table class="table" id="services-table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Patient name</th>
                <th>Email</th>
                <th>phone</th>
                <th>Address</th>
                <th>Gender</th>
                <th>State</th>
                <th>Blood Group</th>
                <th>Age</th>
                <th>Height</th>
                <th>Weight</th>
                <th>Date</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        {{-- @foreach($services as $services) --}}
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->user_phone}}</td>
                <td>{{$data->address}}</td>
                <td>{{$data->gender->type}}</td>
                <td>{{$data->state->name}}</td>
                <td>{{$data->patient->blood_group}}</td>
                <td>{{$data->patient->date_of_birth}}</td>
                <td>{{$data->patient->height}}</td>
                @foreach ($data->weights as $item)
                   <th>{{$item->weight}}</td>
                   <th>{{$item->date}}</td>
                 @endforeach
                    {!! Form::open(['route' => ['profile.destroy', $data->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('profile.show', [$data->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="#" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        {{-- @endforeach --}}
        </tbody>
    </table>
</div>
