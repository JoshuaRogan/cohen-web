@extends('skeleton.base')
@extends('skeleton.header')
@extends('skeleton.footer')

@section('title', 'Adult Orthodontics')
@section('pageclass', 'page-adult-orthodontics')

@section('styles')
    @parent
@stop

@section('lazyscripts')
    @parent
@stop

@section('content')

@include('skeleton.banner');
<div class="container">
	@include('mixins.breadcrumbs',array('current' => 'Adult Orthodontics', 'pages' => array('/our-services' => 'Our Services') ))
	
    <div class="row content-section">
    	<main class='main-content'>
            <h1> Adult Orthodontics </h1>
            <h2>It’s your turn to smile!</h2>
            <p>Straightening teeth is no longer just for kids and teens. In fact, the American Association of Orthodontists recently cited that one in five orthodontic patients is now over the age of 21! Many adults are choosing treatment because they understand the importance of maintaining good oral health. They want to feel better about their appearance. And they’re learning that it’s really never too late to straighten their smiles.</p>
            <p>Maybe you’ve been frustrated with orthodontic problems since childhood. Many adults now realize that a healthier mouth goes hand in hand with a healthier lifestyle. Teeth that are crowded or widely spaced can lead to tooth decay and gum disease by harboring harmful bacteria. Recent studies link these oral problems to myriad serious general health issues.</p>
            
            <h2>What treatment options can work for adults?</h2>
            <p>For many adults, the thought of having metal braces is a deal-breaker. But today’s orthodontic treatment options offer a variety of solutions that are comfortable, esthetically pleasing and completely customized to meet your needs. Solutions like:</p>
            <ul> 
                <li>Tooth-colored braces and wires</li>
                <li>Invisalign®</li>
                <li>Removable appliances</li>
            </ul>
            <p>It’s never too late to have a priceless smile you can wear for the rest of your life. To learn how, call us at one of our three convenient locations.</p>
            @include( 'mixins.footer')

    	</main>



    	@include('mixins.sidebar')
    	
    </div>
</div>
@stop
