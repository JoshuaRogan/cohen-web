@extends('skeleton.base')
@extends('skeleton.header')
@extends('skeleton.footer')

@section('title', 'Invisalign Teen')
@section('pageclass', 'page-inv-teen')

@section('styles')
    @parent
@stop

@section('lazyscripts')
    @parent
@stop

@section('content')

@include('skeleton.banner');
<div class="container">
	@include('mixins.breadcrumbs',array('current' => 'Invisalign Teen', 'pages' => array('/our-services' => 'Our Services') ))
	
    <div class="row content-section">
    	<main class='main-content'>
            <h1> Invisalign Teen </h1>
            <h2>Invisalign Teen®</h2>
            <p>Invisalign may not be the best option for everyone, but many times it can be a terrific alternative to traditional braces.</p>
            <p>Invisalign Teen aligners are a perfect fit for your lifestyle because they are:</p>
            <ul>
                <li>Almost invisible</li>
                <li>Easily removable</li>
                <li>Super-comfortable</li>
                <li>Custom-made for a perfect fit</li>
            </ul>
            
            <h2>Popcorn? Peanuts? Apples? No problem!</h2>
            <p>If you have any friends who have had braces, the first thing they’ll tell you is that you can’t eat many of the things you want. With Invisalign Teen, you can eat whatever you want. Unlike traditional metal braces, your Invisalign Teen aligners are removable, which means you can go ahead and eat all the things you love without worries. Peanuts, popcorn, apples and more.</p>

            <h2>Keep control over your life</h2>
            <p>Invisalign aligners are so comfortable, they fit in with all of your activities. So whether you’re playing basketball or trombone.</p>

            @include( 'mixins.footer', array( 'placer' => 'Let your beautiful smile shine through with Dr. Mitchell Cohen’s help.' ) )

    	</main>



    	@include('mixins.sidebar')
    	
    </div>
</div>
@stop
