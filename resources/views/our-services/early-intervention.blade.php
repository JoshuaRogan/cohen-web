@extends('skeleton.base')
@extends('skeleton.header')
@extends('skeleton.footer')

@section('title', 'Early Intervention')
@section('pageclass', 'page-early-intervention')

@section('styles')
    @parent
@stop

@section('lazyscripts')
    @parent
@stop

@section('content')

@include('skeleton.banner');
<div class="container">
	@include('mixins.breadcrumbs',array('current' => 'Early Intervention', 'pages' => array('/our-services' => 'Our Services') ))
	
    <div class="row content-section">
    	<main class='main-content'>
            <h1> Early Intervention </h1>
            <p>If you have questions about the way your child’s smile is developing, schedule a complimentary consultation with us today. We’ll be happy to discuss whether this orthodontic treatment is right for your child’s smile. We are always happy to discuss your options and work out the right treatment plan for your child. Just contact our office nearest you.</p>
            <p>Please view our Patient Information Pamphlet</p>

            @include( 'mixins.footer', array( 'placer' => 'For beautiful smiles at friendly rates,' ) )

    	</main>



    	@include('mixins.sidebar')
    	
    </div>
</div>
@stop
