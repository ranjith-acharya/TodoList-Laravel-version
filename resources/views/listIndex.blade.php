@extends('layout.app')

@section('header-content')
<a class="navbar-brand text-dark" href="{{url('/')}}">To Do List</a>
@endsection

@section('nav-content')
<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapseNavbar"><i class="fa fa-bars"></i></button>
	<div class="collapse navbar-collapse" id="collapseNavbar">
	<ul class="navbar-nav offset-md-2">
		<li class="nav-item">
			<a class="nav-link text-dark" href="{{url('/list/create')}}">Create</a>
		</li>
	</ul>
	</div>
@endsection

@section('center-content')
<br><br><br><div class="modal-centered bg-white col-md-8 container" style="box-shadow:0px 0px 8px rgba(0,0,0,0.1);border-radius:5px;">
<br>
@if(count($lists) > 0)
	@foreach($lists as $list)
		<div class="card" id="newTask{{$list->id}}">
			<div class="card-body" id="desc{{$list->id}}">
			<div class="dropdown">
				<button class="close" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></button>
				<div class="dropdown-menu dropdown-menu-right">
					<a class="dropdown-item" onclick="mark(this)"><button class="btn btn-white btn-sm">Mark</button></a>
					<a class="dropdown-item" href="{{action('ListController@edit',$list->id)}}">
						<button class="btn btn-white btn-sm" type="submit">Edit</button>
					</a>
					<a class="dropdown-item">
					<form method="post" action="{{action('ListController@destroy', $list->id)}}">
					@csrf
					<input type="hidden" name="_method" value="DELETE">
					<button class="btn btn-white btn-sm text-danger" type="submit">Delete</button>
					</form>
					</a>
				</div>
			</div>{{$list->taskDate}}
				<br>Title : {{$list->taskTitle}}<br>
				Description : {{$list->taskDescription}}<br><br><br>
				<p> --- {{$list->taskAuthor}}</p>
			</div>
		</div><br>
	@endforeach
@endif
@if(count($lists)==0)
	<h3 class="text-center">Nothing to Display</h3><br>
	<div class="text-center"><a href="{{url('list/create')}}"><button class="btn btn-primary">Create</button></a></div><br>
@endif
</div><br>
@endsection

@section('valid-script')
<script>
function mark(a){
	$(a).parent().parent().parent().parent().css("text-decoration","line-through");
	//alert(content);
}
</script>
@endsection