@extends('layout.app')

@section('header-content')
<a class="navbar-brand text-dark" href="{{url('/')}}">To Do List</a>
@endsection

@section('nav-content')
<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapseNavbar"><i class="fa fa-bars"></i></button>
	<div class="collapse navbar-collapse" id="collapseNavbar">
	<ul class="navbar-nav offset-md-2">
		<li class="nav-item">
			<a class="nav-link text-dark" href="{{url('/list')}}">Home</a>
		</li>
	</ul>
	</div>
@endsection

@section('center-content')
<br><br><br><div class="container col-md-5 text-center modal-centered bg-white" style="box-shadow:0px 0px 8px rgba(0,0,0,0.1);border-radius:5px;">
	<br><h2 class="text-dark pull-left">Edit Task</h2><br><br>
	<form class="form" method="post" action="{{action('ListController@update', $id)}}">
	@csrf
		<input type="hidden" name="_method" value="PATCH">
		<div class="form-group input-group">
			<div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-calendar"></i></span></div>
			<input type="date" class="form-control" name="taskDate" id="tkDate" value="{{$lists->taskDate}}">
		</div>
		<div class="form-group input-group">
			<div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user-circle"></i></span></div>
			<input type="text" class="form-control" name="taskAuthor" id="tkAuthor" placeholder="Author name" value="{{$lists->taskAuthor}}">
		</div>
		<div class="form-group input-group">
			<div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-edit"></i></span></div>
			<input type="text" class="form-control" name="taskTitle" id="tkTitle" placeholder="Title name" value="{{$lists->taskTitle}}">
		</div>
		<div class="form-group input-group">
			<div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-edit"></i></span></div>
			<textarea type="text" class="form-control" name="taskDescription" id="tkDescription" placeholder="Describe task">{{$lists->taskDescription}}</textarea>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-success" value="Save" id="btnCreate">
		</div>
	</form><br>
</div>
@endsection

@section('valid-script')
<script>
$("#btnCreate").click(function(){
	//alert("You clicked me");
	var date = $("#tkDate").val();
	var author = $("#tkAuthor").val();
	var title = $("#tkTitle").val();
	var description = $("#tkDescription").val();
	// alert(date);
	if(date==""){
		swal({title:"Select Date",type:"error",showConfirmButton:false,timer:2000});
		$("#tkDate").css({"borderColor":"#cd201f","transition":".5s"});
		return false;
	}$("#tkDate").css({"borderColor":"#ccc","transition":".5s"});
	if(author==""){
		swal({title:"Enter author",type:"error",showConfirmButton:false,timer:2000});
		$("#tkAuthor").css({"borderColor":"#cd201f","transition":".5s"});
		return false;
	}$("#tkAuthor").css({"borderColor":"#ccc","transition":".5s"});
	if(title==""){
		swal({title:"Enter title",type:"error",showConfirmButton:false,timer:2000});
		$("#tkTitle").css({"borderColor":"#cd201f","transition":".5s"});
		return false;
	}$("#tkTitle").css({"borderColor":"#ccc","transition":".5s"});
	if(description==""){
		swal({title:"Enter Description",type:"error",showConfirmButton:false,timer:2000});
		$("#tkDescription").css({"borderColor":"#cd201f","transition":".5s"});
		return false;
	}$("#tkDescription").css({"borderColor":"#ccc","transition":".5s"});
});
</script>
@endsection