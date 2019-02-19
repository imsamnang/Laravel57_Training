@extends('layouts.backend.master')

@section('pagetitle','Add new category')

@push('css')
	{{-- expr --}}
@endpush

@section('main-content')	

	<!-- Widget ID (each widget will need unique ID)-->
	<div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
	<header>
		<span class="widget-icon"> <i class="fa fa-table"></i> </span>
		<h2>Standard Data Tables </h2>				
	</header>				
	<!-- widget div-->
	<div>				
		<!-- widget edit box -->
		<div class="jarviswidget-editbox">
			<!-- This area used as dropdown edit box -->	
		</div>
		<!-- end widget edit box -->				
		<!-- widget content -->
		<div class="widget-body no-padding">				
			<table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
				<thead>			                
					<tr>
						<th data-hide="phone">ID</th>
						<th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Name</th>
						<th data-hide="phone"><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i> Slug</th>
						<th>Image</th>
						<th data-hide="phone,tablet"><i class="fa fa-fw fa-map-marker txt-color-blue hidden-md hidden-sm hidden-xs"></i> Status</th>
						<th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i> Created At</th>
						<th data-hide="phone,tablet">Action</th>
					</tr>
				</thead>
				<tbody>

			@foreach ($categories as $key => $row)
					<tr>
						<td>{{ ++$key }}</td>
						<td>{{$row->name}}</td>
						<td>{{$row->slug}}</td>
						<td>{{$row->image}}</td>
						<td>{{$row->is_active}}</td>
						<td>{{$row->created_at}}</td>
						<td>
							<a href="{{ route('category.edit',$row->id) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil-square-o"></i></a>
							<button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
						</td>
					</tr>
			@endforeach

				</tbody>
			</table>
		</div>
		<!-- end widget content -->
	</div>
	<!-- end widget div -->
	</div>
	<!-- end widget -->				

@endsection

@push('js')
{{-- 	<script type="text/javascript">
		$(function(){
	    $(".check").click(function(){
	        $("#is_active").prop("checked", true);
	    });
	    $(".uncheck").click(function(){
	        $("#is_active").prop("checked", false);
	    });			
		});
	</script> --}}
@endpush