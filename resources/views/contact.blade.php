@extends('skeleton.base')
@extends('skeleton.header')
@extends('skeleton.footer')

@section('title', 'Contact Us')
@section('pageclass', 'page-contact')

@section('styles')
    @parent
@stop

@section('lazyscripts')
    @parent
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbWSBKdJK3RKLTqkchltV_OKGmiE-wSgw&amp;callback=initMap"></script>
@stop

@section('content')
<div class="map-container">
	<section id='google-map'></section>
</div>

<div class="container">
	   @include('mixins.breadcrumbs',array('current' => 'Contact Us' ))



    <div class="row content-section">
    	<main class='main-content full'>
	        <h1> Contact Us </h1>
	        <h2> You can visit Dr. Mitchell Cohen at these locations:</h2>

            <section class="location" id='scranton'>
                <h3> Scranton Office </h3>
                <section class="map">
                    <section class='loader'>@include('mixins.spinner')</section>
                    <iframe height='400' frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place%2FDr.%2BMitchell%2BS.%2BCohen%2C%2BDDS%2F&amp;key=AIzaSyCbWSBKdJK3RKLTqkchltV_OKGmiE-wSgw" allowfullscreen></iframe>
                </section>
                <section class="vcard">
                    <p class="fn"><h4><i class="fa fa-building"></i> Office Details</h4><p>
                    <p class="adr">
                        <span class="street-address">225 Scranton Carbondale Highway, </span><br>
                        <span class="region">Scranton, PA 18508</span><br>
                        <span class="details">Across from the Viewmont Mall in The Fashion Mall</span>
                    </p>
                    <section class='meta'>
                        <a href='tel:+15703462132' class='tel'><i class='fa fa-mobile'></i>  570-346-2132</a> 
                        <a href='https://goo.gl/39MCZH' target='_blank' class='directions'> <i class='fa fa-map'></i> Directions </a>
                        <a href="http://www.yelp.com/biz/mitchell-cohen-orthodontics-scranton" target='_blank' class='yelp'><i class="fa fa-yelp"></i> Check us on Yelp</a>
                    </section>
                </section>
            </section>

            

            <section class="location" id='pittston'>
                <h3> Pittston Office </h3>
                <section class="map">
                    <section class='loader'>@include('mixins.spinner')</section>
                    <iframe height='400' frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJE85PQTsfxYkRYf4CTetThPs&amp;key=AIzaSyCbWSBKdJK3RKLTqkchltV_OKGmiE-wSgw" allowfullscreen></iframe>
                </section>
                <section class="vcard">
                    <p class="fn"><h4><i class="fa fa-building"></i> Office Details</h4></a><p>
                    <p class="adr">
                        <span class="street-address">100 Kennedy Boulevard,  </span><br>
                        <span class="region">Pittston, PA 18640 </span><br>
                        <span class="details">Between the Fort Jenkins and Water Street Bridges Next to Rite-Aid</span>
                    </p>
                    <section class='meta'>
                        <a href='tel:+15706547117' class='tel'><i class='fa fa-mobile'></i>  570-654-7117</a> 
                        <a href='https://goo.gl/8qor6P' target='_blank' class='directions'> <i class='fa fa-map'></i> Directions </a>
                        <a href="http://www.yelp.com/biz/mitchell-cohen-orthodontics-pittston" target='_blank' class='yelp'><i class="fa fa-yelp"></i> Check us on Yelp</a>
                    </section>
                </section>
            </section>

            <section class="location" id='wilkes'>
                <h3> Wilkes-Barre Office  </h3>
                <section class="map">
                    <section class='loader'>@include('mixins.spinner')</section>
                    <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=900%20Schechter%20Dr%2C%20Wilkes-Barre%20Township%2C%20PA%2018702&amp;key=AIzaSyCbWSBKdJK3RKLTqkchltV_OKGmiE-wSgw" allowfullscreen></iframe>
                </section>
                <section class="vcard">
                    <p class="fn"><h4><i class="fa fa-building"></i> Office Details</h4><p>
                    <p class="adr">
                        <span class="street-address">900 Schechter Drive,  </span><br>
                        <span class="region">Wilkes-Barre, PA 18702 </span><br>
                        <span class="details">Across from the Mohegan Sun Arena at Casey Plaza</span>
                    </p>
                    <section class='meta'>
                        <a href='tel:+15708227700' class='tel'><i class='fa fa-mobile'></i>  570-822-7700</a> 
                        <a href='https://goo.gl/cpAFqH' target='_blank' class='directions'> <i class='fa fa-map'></i> Directions </a>
                        <a href="http://www.yelp.com/biz/mitchell-cohen-orthodontics-wilkes-barre-township" target='_blank' class='yelp'><i class="fa fa-yelp"></i> Check us on Yelp</a>
                    </section>
                </section>
            </section>

            <section class='catering'> 
                <h3> Catering to your convenience </h3>
                <p>Our talented, experienced and enthusiastic staff is committed to making your family’s orthodontic treatment as convenient as possible by offering participation with most insurance companies, including CHIP. We make it easier for you with:</p>
                <ul>
                    <li>Insurance predetermination and filing</li>
                    <li>Flexible, interest-free payment plans</li>
                    <li>Visa, MasterCard and Discover accepted</li>
                    <li>Flexible scheduling</li>
                    <li>Morning, lunchtime and early evening appointments</li>
                    <li>Appointments seen promptly</li>
                    <li>24-hour access for emergencies</li>
                    <li>Handicapped-accessible</li>
                    <li>Ample free parking</li>
                    <li>On bus route</li>
                    <li>Habla español</li>
                    <li>TV in reception area</li>
                    <li>Fun drawings and prize raffles</li>
                    <li>Video games  </li>
                </ul>

                @include('mixins.footer')


                <ul class='credit-accepted'> 
                    <li><i class="fa fa-cc-visa"></i></li>
                    <li><i class="fa fa-cc-mastercard"></i></li>
                    <li><i class="fa fa-cc-discover"></i></li>
                </ul>
            </section>
    	</main>
    </div>
</div>
@stop
