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
	
    <div class="row content-section">
    	<main class='main-content'>
	        <h1> Thousands of happy patients one smile at a time! </h1>
	        <h2> Twenty-five years. Thousands of happy, healthy smiles. One person at a time.</h2>
	        <p>Once you experience the <strong>sensitivity, warmth, friendliness</strong> and respect of Dr. Mitchell Cohen and his staff share with their patients, you’ll know you are being treated like family. When our patients finish treatment, you not only see that gorgeous smile on their faces but the happiness in their eyes. Simply put, Dr. Cohen wants every patient to have the best possible orthodontic experience imaginable.</p>
			<p>Ever since <a href="#">Dr. Cohen</a> became an orthodontist 25 years ago, he has never wavered from his commitment to provide “priceless smiles at affordable fees.” It has been much more than a slogan. Improving the lives of thousands of children, teens and adults has been his passion. You can’t put a price on confidence and self-esteem. Everyone deserves the opportunity to enjoy the benefits of a healthy, beautiful smile.</p>
			<p>Are you ready to imagine yourself with that priceless smile we’ve been talking about? Call Dr. Mitchell S. Cohen in Scranton at 570-346-2132, in Pittston at 570-654-7117 and in Wilkes-Barre at 570-822-7700. For your convenience, you can also use our online Request an Appointment form to schedule your free initial consultation.</p>
    	</main>

    	<aside class='sidebar'>
    		<h2> Side Bar Content </h2>
    		<button> Request Appointment </button>
    		<button> Patient Reviews </button>
    	</aside>
    </div>
</div>
@stop
