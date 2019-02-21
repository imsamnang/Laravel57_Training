@extends('layouts.backend.master')

@section('pagetitle','List Posts')

@push('css')
	{{-- expr --}}
@endpush

@section('main-content')	

	<!-- Widget ID (each widget will need unique ID)-->
	<div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
	<header>
		<span class="widget-icon"> <i class="fa fa-table"></i> </span>
		<h2>Post List &nbsp;&nbsp;<span><a href="{{ route('post.create') }}" class="btn btn-primary btn-xs">Add New</a></span></h2>

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
						<th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Post Title</th>
						<th data-hide="phone"><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i> Post By</th>
						<th>Image</th>
						<th data-hide="phone,tablet"><i class="fa fa-fw fa-map-marker txt-color-blue hidden-md hidden-sm hidden-xs"></i> Is Approve</th>
						<th data-hide="phone,tablet"><i class="fa fa-fw fa-map-marker txt-color-blue hidden-md hidden-sm hidden-xs"></i> Status</th>
						<th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i> Created At</th>
						<th data-hide="phone,tablet">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($posts as $key => $row)
						<tr>
							<td>{{ ++$key }}</td>
							<td>{{$row->title}}</td>
							<td>{{$row->user->name}}</td>
							<td>
								<img src="{{asset('uploads/1/posts/')}}/{{$row->image}}" class="img-responsive thumbnail" style="width: 50px; height: 50px;" alt="{{$row->image}}">
							</td>
							<td style="text-align: center;">
								@if ($row->is_approved==true)
			            <span class="label label-primary">Approved</span>
			          @else
			            <span class="label label-danger">Pending</span>
			          @endif
							</td>						
							<td style="text-align: center;">
								@if ($row->is_active==true)
			            <span class="label label-primary">Published</span>
			          @else
			            <span class="label label-danger">Unpublish</span>
			          @endif
							</td>
							<td>{{$row->created_at}}</td>
							<td>
								<a href="{{ route('post.edit',$row->id) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil-square-o"></i></a>
								<button class="btn btn-danger btn-xs" onclick="deletePost({{ $row->id }})"><i class="fa fa-trash"></i></button>
								<form id="delete-form-{{$row->id}}" action="{{ route('post.destroy',$row->id) }}" 
	                method="POST" style="display: none">
	                {{ csrf_field() }}
	                {{ method_field('DELETE') }}
	              </form>
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
	<script type="text/javascript">
		function deletePost(id){
			Swal.fire({
			  title: 'Are you sure?',
			  text: "You won't be able to revert this!",
			  type: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
			  if (result.value) {
					event.preventDefault();
        	document.getElementById('delete-form-'+id).submit();

			  }
			})
     }
	</script>
@endpush