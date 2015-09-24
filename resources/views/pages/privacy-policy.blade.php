@extends('skeleton.base')
@extends('skeleton.header')
@extends('skeleton.footer')

@section('title', 'Privacy Policy')
@section('pageclass', 'page-privacy-policy')

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
        <h1>Privacy Policy</h1>

        <p>This notice describes how your medical information may be used or disclosed and how you can gain access to it. Please read this notice carefully.</p>
        <p>The Health Insurance Portability and Accountability Act (HIPAA) of 1996 is a federal program that requires strict confidentiality for all your personal health information. That includes all your medical and dental information used or disclosed by us in any form, whether electronic, written or verbal. The Act gives you significant rights to understand and control how your health information is used. The Act also provides penalties for the misuse of Protected Health Information (PHI).</p>
        <p>PHI is any information about you, including demographic data that identifies you and your past, present or future physical or mental health condition, as well as related healthcare services. This Privacy Policy describes how we may use or disclose your PHI to provide treatment, payment or healthcare operations or other purposes that are permitted or required by law. This policy also describes your rights to access and control your PHI.</p>
        <p>Uses and Disclosures of Protected Health Information</p>
        <p>Your PHI may be used or disclosed by our physician, office staff or others involved in your care and treatment, whether providing healthcare services to you, paying your healthcare bills, supporting the operation of our practice or any other lawful use.</p>
        <p>Treatment: We will use and disclose your PHI to provide, coordinate or manage your healthcare and related services. This includes the coordination or management of your healthcare by a third party. For example, your PHI may be given to a physician you have been referred to in order to ensure that he or she has the necessary information to diagnose or treat you.</p>
        <p>Healthcare Operations: We may use or disclose your PHI to support our business activities. These activities may include quality assessment, employee review and conducting or arranging other business activities. We may also use a sign-in sheet at the registration desk where you will be asked to sign your name and indicate your physician. We may call you by name in our reception area when your physician is ready to see you. We may use or disclose your PHI, as necessary, to contact you to remind you of your appointment. We may phone your home and leave a message (on an answering machine or with the person answering the phone) to remind you of an upcoming appointment, the need to schedule a new appointment or to call our office. We may also mail a postcard reminder or letter to your home address. Please tell us if you prefer that we call or contact you at another phone number or location.</p>
        <p>We may use or disclose your PHI under the following circumstances without your authorization. These include, as required by law:</p>
        <h2>Public Health Issues</h2>
        <p>communicable diseases health oversight abuse or neglect Food and Drug Administration requirements legal proceedings law enforcement coroners, funeral directors and organ donation medical research criminal activity; prison inmates military activity and national security Workers’ Compensation</p>
        <p>Required Uses and Disclosures: The law requires us to disclose to you when we are investigated by the Secretary of the Department of Health and Human Services to determine our compliance with HIPAA. Other permitted and required uses and disclosures will be made only with your consent, authorization or opportunity to object unless required by law. You may revoke this authorization in writing at any time except to the extent that your physician or the physician’s practice has taken action in reliance on the use or disclosure indicated in your authorization.</p>
        <p>Payment: Your PHI will be used, as needed, to obtain payment for healthcare services. For example, obtaining approval for a hospital stay may require that your relevant PHI be disclosed to your health insurance plan to obtain approval for a hospital admission or a health-related procedure.</p>
        <p>Your Rights</p>
        <p>You have the right to inspect and copy your PHI. Under federal law, however, you may not inspect or copy the following records:</p>
        <ul>
            <li>Psychotherapy notes</li>
            <li>Information compiled in reasonable anticipation of, or use in civil, criminal or administrative actions or proceedings</li>
            <li>PHI that is subject to law prohibiting access to said PHI</li>
        </ul>

        <p>You have the right to request a restriction of your health information. This means you may ask us not to use or disclose any part of your PHI for the purposes of treatment, payment or healthcare operations. You may also request nondisclosure of any part of your PHI to family members or friends who may be involved in your care or for notification purposes described in these Privacy Practices. Your request must state the specific restriction and to whom you want the restriction to apply.</p>
        <p>Your physician is not required to agree to your requested restriction. If your physician believes it is in your best interests to permit use and disclosure of your PHI, your PHI will not be restricted. You then have the right to use another healthcare professional.</p>
        <p>You have the right to request to receive confidential communications from us by alternative means or at an alternative location. You have the right to obtain a paper copy of this Notice from us, upon request, even if you have agreed to accept this Notice alternatively (e.g., electronically).</p>
        <p>You have the right to have your physician amend your PHI. If we deny your request for amendment, you have the right to file a statement of disagreement with us and we may prepare a rebuttal to your statement and provide you with a copy of any such rebuttal. You have the right to receive an accounting of certain disclosures we have made, if any, of your PHI.</p>
        <p>We reserve the right to change the terms of this Notice and will inform you of any changes. You then have the right to object or withdraw as provided in this Notice.</p>
       
        <h2>Complaints</h2>
        <p>You may complain to us or to the Secretary of Health and Human Services if you believe your privacy rights have been violated by us. You may file a complaint by notifying our privacy officer at our office and main telephone number. We will not retaliate against you for exercising your right to file a complaint.</p>
        <p>This Notice was published and is effective on or before 6/1/2010.</p>
        
        <address>
            Mitchell S. Cohen, DDS, MSD <br/>
            Mitchell Cohen Orthodontics
        </address>
        <p>
            <a href='/contact#scranton'>Scranton:</a><br/>
            Across from the Viewmont Mall in The Fashion Mall<br/>
            225 Scranton Carbondale Highway, Scranton, PA 18508<br/>
            Call: 570-346-2132<br/><br/>
            <a href='/contact#pittston'>Pittston:</a><br/>
            Between the Fort Jenkins and Water Street Bridges Next to Rite-Aid<br/>
            100 Kennedy Boulevard, Pittston, PA 18640<br/>
            Call: 570-654-7117<br/><br/>
            <a href='/contact#wilkes'>Wilkes-Barre:</a><br/>
            Across from the Mohegan Sun Arena at Casey Plaza<br/>
            900 Schechter Drive, Wilkes-Barre, PA 18702<br/>
            Call: 570-822-7700<br/>
            www.ThanksDrCohen.com
        </p>
    	</main>



    	@include('mixins.sidebar')
    	
    </div>
</div>
@stop
