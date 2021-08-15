<div class="table-responsive">
    <table class="table" id="plansPicings-table">
        <thead>
            <tr>
                <th>Offer Type</th>
        <th>Annually Pric</th>
        <th>Monthly Price</th>
        <th>Offer</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($plansPicings as $plansPicing)
            <tr>
                <td>{{ $plansPicing->offer_type }}</td>
            <td>{{ $plansPicing->annually_pric }}</td>
            <td>{{ $plansPicing->monthly_price }}</td>
            <td>{{ $plansPicing->offer }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['plansPicings.destroy', $plansPicing->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('plansPicings.show', [$plansPicing->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('plansPicings.edit', [$plansPicing->id]) }}" class='btn btn-default btn-xs'>
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
