@extends('skeleton.base')
@extends('skeleton.header')
@extends('skeleton.footer')

@section('title', 'Traditional Braces')
@section('pageclass', 'page-services')

@section('styles')
    @parent
@stop

@section('lazyscripts')
    @parent
@stop

@section('content')

@include('skeleton.banner');
<div class="container">
	@include('mixins.breadcrumbs',array('current' => 'Traditional Braces', 'pages' => array('/our-services' => 'Our Services') ))
	
    <div class="row content-section">
    	<main class='main-content'>
            <h1> Traditional Braces </h1>
            <p>Traditional braces have come a long way becoming smaller, more efficient and comfortable. Space-age material and sophisticated techniques have kept this "tried and true" approach as a favored treatment option. Braces can be constructed with clear plastic and ceramic to be less noticeable. We can even use tooth-colored wires.</p>
            <p>Light hearted kids and adults love changing the color of their braces for holidays and occasions.</p>
            <p>Dr. Mitchell Cohen will be happy to explain all of your teeth-straightening options –  including traditional braces, self-ligating braces, clear braces and removable appliances such as Invisalign®. He'll be happy to show you how he can straighten your teeth regardless of your age, and discuss which of the many options now available will best suit your needs.</p>
    
            @include( 'mixins.footer', array( 'placer' => 'Let Dr. Mitchell Cohen straighten your teeth for a more beautiful smile. ' ) )

    	</main>



    	@include('mixins.sidebar')
    	
    </div>
</div>
@stop
