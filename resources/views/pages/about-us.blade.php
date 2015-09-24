@extends('skeleton.base')
@extends('skeleton.header')
@extends('skeleton.footer')

@section('title', 'Our Team')
@section('pageclass', 'page-about-us')

@section('styles')
    @parent
@stop

@section('lazyscripts')
    @parent
@stop

@section('content')

@include('skeleton.banner');
<div class="container">
    @include('mixins.breadcrumbs',array( 'current' => 'About Us' ))
	
    <div class="row content-section">

        <main class='main-content'>
            <h1> About Us </h1>
            <h2>Delivering greater comfort</h2>
            <a href='/meet-your-team' class="meet-team-wrap">
                @include('icons.meet') 
                <h3> Meet Your Team </h3>
            </a>
            <p>The latest technological advances and carefully designed treatment plans make orthodontic treatment more technically and personally comfortable than ever.</p>
            <p>We constantly survey our profession to combine tried-and-true techniques and materials with the <strong>most effective new technology</strong>. We sort out the fads from the foundations of orthodontics. And we never get tired of hearing "that didn’t hurt at all."</p>
            <p>The greatest leap in patient comfort has come with the advent of <strong>Invisalign®</strong> and <strong>3-D scanning</strong>. We can now straighten your teeth without braces, wires and messy, uncomfortable impressions. Orthodontics really has gone digital! <a href='/meet-your-team'>Dr. Cohen</a> is a<strong> Premier Invisalign Provider</strong></p>

            <h2>Technical and personal comfort</h2>
            <p>Every patient is precious to us. All the technology in the world is no substitute for the great relationships we have with our patients and their families. Here, the patient is always number-one. Everything we do is with the <strong>comfort</strong>, the <strong>convenience</strong> and the best possible treatment outcome in mind. We make sure our patients are fully informed every step of the way.</p>
            <p>Our ultimate goal is to help you live healthier, look better and feel better about yourself. You’ll find us flexible and very accommodating. We are always here in the rare event you need us in an emergency. We will do whatever it takes to make your orthodontic experience a pleasant one.</p>


            <section class="slider">
                <h2><a href='/contact#pittston'><i class="fa fa-map-marker"></i> Pittston</a></h2>
                <div class="owl-carousel">
                    <img src='/img/gallery/pittston/pittston.jpg' class='item' alt='pittston image'>
                    <img src='/img/gallery/pittston/Pittston_335-b.jpg' class='item' alt='pittston image'>
                    <img src='/img/gallery/pittston/Pittston_340.jpg' class='item' alt='pittston image'>
                    <img src='/img/gallery/pittston/Pittston_355.jpg' class='item' alt='pittston image'>
                    <img src='/img/gallery/pittston/Pittston_358.jpg' class='item' alt='pittston image'>
                    <img src='/img/gallery/pittston/Pittston_362.jpg' class='item' alt='pittston image'>
                </div>
            </section>

            <section class="slider">
                <h2><a href='/contact#scranton'><i class="fa fa-map-marker"></i> Scranton</a></h2>
                <div class="owl-carousel">
                    <img src='/img/gallery/scranton/Scanton_374.jpg' class='item' alt='scranton image'>
                    <img src='/img/gallery/scranton/scranton1.jpg' class='item' alt='scranton image'>
                    <img src='/img/gallery/scranton/scranton2.jpg' class='item' alt='scranton image'>
                    <img src='/img/gallery/scranton/scranton3.jpg' class='item' alt='scranton image'>
                    <img src='/img/gallery/scranton/Scranton_894.jpg' class='item' alt='scranton image'>
                </div>
            </section>

            <section class="slider">
                <h2><a href='/contact#wilkes'><i class="fa fa-map-marker"></i> Wilkes Barre</a></h2>
                <div class="owl-carousel">
                    <img src='/img/gallery/wilkes/Wilkes-barre_470-b.jpg' alt='slider item' class='item'>
                    <img src='/img/gallery/wilkes/Wilkes-barre_484.jpg' alt='slider item' class='item'>
                    <img src='/img/gallery/wilkes/Wilkes-barre_496.jpg' alt='slider item' class='item'>
                    <img src='/img/gallery/wilkes/WilkesBarre_503.jpg' alt='slider item' class='item'>
                    <img src='/img/gallery/wilkes/WilkesBarre_515.jpg' alt='slider item' class='item'>
                    <img src='/img/gallery/wilkes/wilksbarre.jpg' alt='slider item' class='item'>
                </div>
            </section>
    	</main>



    	@include('mixins.sidebar')
    	
    </div>
</div>
@stop
