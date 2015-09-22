@extends('skeleton.base')
@extends('skeleton.header')
@extends('skeleton.footer')

@section('title', 'Patient Reviews')
@section('pageclass', 'page-patient-reviews')

@section('styles')
    @parent
@stop

@section('lazyscripts')
    @parent
@stop

@section('content')

@include('skeleton.banner');
<div class="container">
	@include('mixins.breadcrumbs',array( 'current' => 'Patient Reviews' ))
	
    <div class="row content-section">
    	<main class='main-content'>
	        <h1> Patient Reviews </h1>
	        <div style="text-align:center">
			<h3>To write a review, please click on the icon below</h3>
			<iframe frameborder="no" scrolling="no" height="105px" allowtransparency="true" width="200px" align="top" src="http://icheckup.com/Seal.aspx?pid=1300843&amp;fc=1"></iframe>
			</div>
            <section class='reviews'>
            	<iframe height="765px" width="670px" allowtransparency="true" frameborder="0" src="http://icheckup.com/Testimonials.aspx?pid=1300843&amp;format=1"></iframe>
    		</section>
    	</main>

    	@include('mixins.sidebar')
    	
    </div>
</div>
@stop
