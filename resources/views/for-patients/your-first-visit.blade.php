@extends('skeleton.base')
@extends('skeleton.header')
@extends('skeleton.footer')

@section('title', 'Your First Visit')
@section('pageclass', 'page-for-patients-sub')

@section('styles')
    @parent
@stop

@section('lazyscripts')
    @parent
@stop

@section('content')

@include('skeleton.banner');
<div class="container">
	@include('mixins.breadcrumbs',array('current' => 'Your First Visit', 'pages' => array('/for-patients/faqs' => 'For Patients') ))
	
    <div class="row content-section">
    	<main class='main-content'>
            <h1> Your First Visit </h1>
            <p>When it comes to creating beautiful smiles, there’s only one name that comes to mind. With over 25 years of experience and thousands of happy, healthy smiles, Dr. Mitchell Cohen is the one to trust.</p>
            <p>Once you experience Dr. Cohen’s friendly and warm approach, you’ll understand why generations of families come back to see him. Treating people like family, with kindness and respect, keeps people coming back.</p>
            <h2>Appointments: </h2>
            <p>Our staff is always ready to help with your scheduling, insurance or anything else you may need during your time with us. We will take extra care to listen to your concerns, answer all your questions and thoroughly explain your treatment options. To schedule an appointment, please call us in <a href='/contact#scranton'>Scranton</a> at <a href='tel:+15703462132' class='tel'>570-346-2132</a>, in <a href='/contact#pittston'>Pittston</a> at <a href='tel:+15706547117' class='tel'>570-654-7117</a> and in<a href='/contact#wilkes'> Wilkes-Barre</a> at <a href='tel:+15708227700' class='tel'>570-822-7700</a>or you can use our online <a href='/request-an-appointment'>Request an Appointment</a> form.</p>
            <p>If at any time you are unable to keep your appointment, please notify us at least 24 hours in advance. We will be glad to reschedule your appointment at a more favorable time. We greatly appreciate your time and consideration and look forward to seeing you.</p>
            <h2>New Patient Forms: </h2>
            <p>If you have made your initial appointment, you can preregister by clicking on the links below to download our New Patient Forms. Please print and complete the forms prior to your arrival. This will help to speed up the new patient registration process.</p>
                <ul>
                    <li><a href='http://www.thanksdrcohen.com/pdf/Online Patient Questionnaire.pdf' target='_blank'>Patient Questionnaire</a>
                    <li><a href='http://www.thanksdrcohen.com/pdf/Online Patient Health History Form.pdf' target='_blank'>Patient Health History</a>
                </ul>
            <h2>Insurance: </h2>
            <p>We accept most insurance plans. Please call us to verify that we are participating with a particular insurance company.</p>
            <h2>Billing and Financial Responsibility: </h2>
            <p>We make every effort to explore all available financing options. All fees will be discussed at time of consultation. Please call our office if you have any questions, we will be happy to assist you.</p>
            <ul class='credit-accepted'> 
                    <li><i class="fa fa-cc-visa"></i></li>
                    <li><i class="fa fa-cc-mastercard"></i></li>
                    <li><i class="fa fa-cc-discover"></i></li>
            </ul>
            <h2>Emergencies:</h2>
            <p>In case of emergency contact Dr. Cohen; the following link will take you to the American Orthodontic Association where you will find some additional information.</p>



            @include( 'mixins.footer')

    	</main>



    	@include('mixins.sidebar')
    	
    </div>
</div>
@stop
