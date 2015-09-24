@extends('skeleton.base')
@extends('skeleton.header')
@extends('skeleton.footer')
@section('title', 'Sitemap')
@section('pageclass', 'page-sitemap')
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
            <h1> Sitemap </h1>
            <ul class='sitemap'>
                <li> <a href='/'>Home </a> </li>
                <li> <a href='/about-us'>About Us </a> 
                    <ul> 
                        <li><a href='/contact'>Locations</a></li>
                        <li><a href='/meet-your-team'>Meet Your Team</a></li>
                    </ul>
                </li>
                <li> <a href='/our-services/'>Our Services </a> 
                    <ul>
                        <li> <a href='/our-services/invisalign'>Invisalign</a></li>
                        <li> <a href='/our-services/adult-orthodontics'>Adult Orthodontics</a></li>
                        <li> <a href='/our-services/early-intervention'>Early Intervention</a></li>
                        <li> <a href='/our-services/invisalign-teen'>Invisalign Teen</a></li>
                        <li> <a href='/our-services/traditional-braces'>Traditional Braces</a></li>
                    </ul>
                </li>

                <li> <a href='/for-patients/'>For Patients </a>
                    <ul>
                        <li><a href='/for-patients/faqs'>FAQs </a></li>
                        <li><a href='/for-patients/your-first-visit'>Early Intervention </a></li>
                        <li><a href='/before-and-after-gallery'>Before and After Gallery</a></li>
                    </ul>
                </li>
                <li> <a href='/contact'>Contact Us </a> </li>
                <li> <a href='physician-referral'>Dentist/Physician Referral </a> </li>
                <li> <a href='request-an-appointment'>Request an Appointment </a> </li>
                {{-- <li> <a href='#'>What's Happening! </a> </li> --}}
                {{-- <li> <a href='#'>Dental Library </a> </li> --}}
                {{-- <li> <a href='#'>eBrochure </a> </li> --}}
            </ul>
        </main>
        @include('mixins.sidebar')
    </div>
</div>
@stop