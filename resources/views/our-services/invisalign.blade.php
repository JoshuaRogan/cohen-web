@extends('skeleton.base')
@extends('skeleton.header')
@extends('skeleton.footer')

@section('title', 'Invisalign')
@section('pageclass', 'page-inv')

@section('styles')
    @parent
@stop

@section('lazyscripts')
    @parent
@stop

@section('content')

@include('skeleton.banner');
<div class="container">
    @include('mixins.breadcrumbs',array('current' => 'Invisalign', 'pages' => array('/our-services' => 'Our Services') ))
    
    <div class="row content-section">
        <main class='main-content'>
            <h1>Invisalign</h1>
            <h2>Invisalign® “Braceless” Aligners</h2>
            <p>Consider Invisalign for the straight, attractive smile you’ve always wanted – without metal braces. A complimentary consultation with <a href='/meet-your-team'>Dr. Cohen</a>, a Premier Invisalign Provider, can determine if Invisalign is right for you. He’s been working with removable appliances for 25 years.</p>
            <p>Invisalign uses a series of comfortable, removable aligners that no one can tell you’re wearing. You can enjoy your smile even during your amazing transformation. Aligners are made using 3D scanner technology eliminating the need for messy, conventional mouth impressions.</p>
            <p>To learn more, call to schedule your FREE consultation.</p>

            <h3>Invisalign’s many advantages</h3>
            <ul>
                <li>Invisalign aligners are removable. You can take them out to eat, brush and floss.</li>
                <li>3-D scanning technology allows you to get started without messy impressions.</li>
                <li>Invisalign works. In most cases it moves teeth as well as metal braces.</li>
                <li>Invisalign is discreet. No one has to know you’re wearing them except you and Dr. Cohen.</li>
                <li>Invisalign is comfortable. The trays are custom-made for a perfect fit.</li>
                <li>Invisalign is efficient. You have fewer office visits and spend less time getting adjustments.</li>
                <li>Invisalign is preferred by patients. Patient satisfaction is overwhelming.</li>
            </ul>

            <p>During treatment, you’ll visit us about once every six weeks to ensure that everything is progressing as planned. Your total treatment time may take from 9 to 20 months, though it varies from person to person.</p>
            @include( 'mixins.footer', array( 'placer' => 'Fixing one smile at a time, Dr. Mitchell Cohen is your all-around smile guy.' ) )

        </main>



        @include('mixins.sidebar')
        
    </div>
</div>
@stop
