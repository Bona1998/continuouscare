{{-- @extends('layouts.mainlayout')

@section('content')
    <div>
        <ul>
          
                Name:<p>{{$data->name}}</p>
                Email:<p>{{$data->email }}</p>
                phone:<p>{{$data->user_phone}}</p>
                Address:<p>{{$data->address}}</p>
                Gender:<p>{{$data->gender->type}}</p>
                State:<p>{{$data->state->name}}</p> 
                Blood Group:<p>{{$data->patient->blood_group}}</p>
                Date_of_birth:<p>{{$data->patient->date_of_birth}}</p>
                Height:<p>{{$data->patient->height}}</p>
                @foreach ($data->weights as $item)
                Weight:<p>{{$item->weight}}</p>
                Date:<p>{{$item->date}}</p>
                @endforeach
                
                
        </ul>
    </div>
@endsection --}}
{{-- <?php $currentPage = 'patient.index';?>
@extends('custom.layouts.app')

@section('content')

<div class="container-xl">
	@if(count($errors) > 0)
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>
				{{$error}}
			</li>
			@endforeach
		</ul>
	</div>
	@endif
	@if(\Session::has('success'))
	<div class="alert alert-success">
		<p>{{\Session::get('success')}}</p>
		
	</div>
	@endif
    
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-md-12">
						<div class="card shadow p-3 mb-5 bg-white rounded">
                            <div class="card-body">
								<h5>Patients</h5><a href="#">Patients</a> <i style="color: black"> » Manage Patients</i>
								<a href="#"><i class="fa fa-user-plus" aria-hidden="true" style="margin-left: 34rem;"></i></a>
								<a href="#"><i class="fa fa-envelope" aria-hidden="true" style="margin-left: 2rem;"></i></a>
								<a href="#"><i class="nav-icon fa fa-question-circle "style="margin-left: 2rem;"></i></a>

							</div>
                          </div>
					</div>

				</div>
			</div>
			<div class="card shadow p-3 mb-5 bg-white rounded">
				<div class="card-body">
					<div class="container" style="margin: 15px auto">
						<form id="myform" method="post">
							<pre id="view-rows"></pre>
							<pre id="view-form"></pre>
							<table id="mytable" class="table table-bordered table-striped table-hover">
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
									</tr>
								</thead>
								<tfoot>
								  <tr>
                                    <th>No.</th>
                                    <th>{{$data->id}}</th>
                                    <th>{{$data->email}}</th>
                                    <th>{{$data->user_phone}}</th>
                                    <th>{{$data->address}}</th>
                                    <th>{{$data->gender->type}}</th>
                                    <th>{{$data->state->name}}</th>
                                    <th>{{$data->patient->blood_group}}</th>
                                    <th>{{$data->patient->date_of_birth}}</th>
                                    <th>{{$data->patient->height}}</th>
                                    @foreach ($data->weights as $item)
                                       <th>{{$item->weight}}</th>
                                       <th>{{$item->date}}</th>
                                     @endforeach
								  </tr>
								</tfoot>
							</table>
						</form>
					</div>
				</div>
		</div>
	</div>        
</div>




@endsection
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script src="js/jquery.checkboxes.min.js"></script>
<script>
    $(document).ready(function()){
        var mytable =$(#mytable).DataTable({
            ajax: 'data.json',
        columnDefs: [
            {
                targets: 0,
                checkboxes: {
                    seletRow: true

                }
            }
        ];
        select:{
            style: 'multi'
        };
        order: [[1, 'asc']]
        })
        $(#myform).on('submit', function(e)
        var form = this
        var rowsel = mtytable.column(0).checkboxes.selected();
        $.each(rowsel, function(index, rowId){
            $(form).append(
               $('<input>').attr('type', 'hidden').attr('name').val(roewId)
            )

        })
        $("#view-rows").text(rowsel.join(","))
        $("view-form").text($(form).serialize())
        $('input[name="id\[\]"]', form).remove
        e.preventDefault()
        )}

</script> --}}
@extends('custom.layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Patient</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="#">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('profile.table')

                <div class="card-footer clearfix float-right">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
