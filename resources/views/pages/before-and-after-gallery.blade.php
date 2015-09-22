@extends('skeleton.base')
@extends('skeleton.header')
@extends('skeleton.footer')

@section('title', 'Before And After Gallery')
@section('pageclass', 'page-before-after')

@section('styles')
    @parent
@stop

@section('lazyscripts')
    @parent
@stop

@section('content')

@include('skeleton.banner');
<div class="container">
    @include('mixins.breadcrumbs',array( 'current' => 'Before And After Gallery' ))
	
    <div class="row content-section">
    	<main class='main-content full'>
            <h1> Before And After Gallery </h1>

            <section class="slider">
                <h2>Smile Gallery</h2>
                <div class="owl-carousel">
                    @for ($i = 1; $i < 44; $i++)
                        <img src='/img/smile-gallery/{{$i}}.jpg' alt='slider item' class='item'>
                    @endfor
                </div>
            </section>
            @include( 'mixins.footer', array( 'placer' => 'For priceless smiles at affordable fees,' ) )
    	</main>

    </div>
</div>
@stop
