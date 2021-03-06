@extends('skeleton.base')
@extends('skeleton.header')
@extends('skeleton.footer')

@section('title', 'Request an Appointment')
@section('pageclass', 'page-request-appointment')

@section('styles')
    @parent
@stop

@section('lazyscripts')
    @parent
@stop

@section('content')

@include('skeleton.banner');
<div class="container">
	@include('mixins.breadcrumbs',array( 'current' => 'Request an Appointment' ))
	
    <div class="row content-section">
    	<main class='main-content'>
	        <h1> Request an Appointment </h1>
            @include('mixins.spinner')
            <section class="form-stack">
                <script type="text/javascript" src="https://www.formstack.com/forms/js.php?1487423-i0aVQ0jgig-v2"></script>
            </section>
    	</main>

    	@include('mixins.sidebar')
    	
    </div>
</div>
@stop
