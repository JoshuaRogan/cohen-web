@extends('skeleton.base')
@extends('skeleton.header')
@extends('skeleton.footer')

@section('title', 'Welcome')
@section('pageclass', 'page-welcome')

@section('styles')
    @parent
@stop

@section('lazyscripts')
    @parent
@stop

@section('content')
<div class="container">
	<div class="breadcrumbs">
		<ol class="breadcrumb">
		  <li><a href="#">Home</a></li>
		  <li><a href="#">Library</a></li>
		  <li class="active">Data</li>
		</ol>
		<ul class='social-icons'>
			<a href="#"><i class="fa fa-facebook-official"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-google-plus-square"></i></a>
			<a href="#"><i class="fa fa-envelope"></i></a>
		</ul>
	</div>
	
    <div class="row">
        <h1> Hello World! </h1>
        <h2> Welcome to Josh Rogan base Laravel Config </h2>
    </div>
</div>
@stop
