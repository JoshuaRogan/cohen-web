@extends('skeleton.base')
@extends('skeleton.header')
@extends('skeleton.footer')

@section('title', 'Our Team')
@section('pageclass', 'page-our-services')

@section('styles')
    @parent
@stop

@section('lazyscripts')
    @parent
@stop

@section('content')

@include('skeleton.banner');
<div class="container">
    @include('mixins.breadcrumbs',array( 'current' => 'Our Services' ))
	
    <div class="row content-section">
    	<main class='main-content'>
            <h1> Our Services </h1>
            <h2> Delivering confidence, self-esteem and great smiles</h2>
            <p>Ever since <a href='/meet-your-team'>Dr. Mitchell Cohen</a> became an orthodontist over 25 years ago, he has never wavered from his commitment to provide “priceless smiles at affordable fees.” It has become much more than a slogan for him. It has become his daily mantra for improving the lives of thousands of children, teens and adults. </p>
            <p>Dr. Cohen's ultimate goal is to help you live healthier, look better and feel better about yourself. You’ll find him and his staff flexible and very accommodating. We are always here for you in the rare event you need us in an emergency. We will do whatever it takes to make your orthodontic experience a pleasant one. And we will provide you with comprehensive orthodontic services that include:</p>

            <ul>
                <li> <a href="#">Early Intervention </a></li>
                <li> <a href="#">Tradtional Braces </a></li>
                <li> <a href="#">Invisalign Teen </a></li>
                <li> <a href="#">Invisalign </a></li>
                <li> <a href="#">Adult Orthodontics </a></li>
            </ul>
            @include( 'mixins.footer', array( 'placer' => 'For priceless smiles at affordable fees,' ) )
    	</main>



    	@include('mixins.sidebar')
    	
    </div>
</div>
@stop
