@extends('skeleton.base')
@extends('skeleton.header')
@extends('skeleton.footer')

@section('title', 'FAQs')
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
	@include('mixins.breadcrumbs',array('current' => 'FAQs', 'pages' => array('/for-patients/faqs/' => 'For Patients') ))
	
    <div class="row content-section">
    	<main class='main-content'>
            <h1> FAQs </h1>
            <h2>Frequently Asked Questions</h2>

    <h3>At what age should a child first see an orthodontist? </h3>
    <p>Rates of development can vary. However, the American Association of Orthodontics recommends age 6 as an appropriate time for a child’s first evaluation by an orthodontic specialist. Early diagnosis and treatment can help guide tooth eruption and facial growth, avoiding more serious problems. Addressing certain problems early on can make further orthodontics more efficient and economical.</p>
    <h3>What are some early signs of orthodontic problems?</h3>
    <ul>
        <li>Overlapping or crowding of erupting permanent teeth</li>
        <li>Flaring of front teeth</li>
        <li>Difficulty chewing</li>
        <li>Thumb- or finger-sucking after age 6</li>
        <li>Open mouth-breathing</li>
        <li>Obvious abnormal bite or facial profile</li>
    </ul>
    <h3>How will a child benefit from orthodontics?</h3>
    Properly aligned teeth are easier to clean and maintain. Correcting bite problems can improve speech, chewing and swallowing. Straightening the teeth can also prevent excessive wear and stress on the teeth, gums and surrounding tissue.
    <h3>Can adults benefit from orthodontic treatment?</h3>
    <p> Adults seek orthodontic treatment for many reasons:</p>
        <ul>
            <li>Years of frustration, not being able to resolve their smile problems at a younger age</li>
            <li>Difficulty chewing</li>
            <li>Aiding in the repair of bones and gums</li>
            <li>Preparation for tooth restoration and replacement</li>
            <li>Improving self-esteem, self-confidence and quality of life</li>
        </ul>
    <h3>Why see a specialist?</h3>
    Orthodontic problems can be quite complex, involving the growth and development of teeth, soft tissue and facial bones. Teeth and sometimes faces are permanently changed by orthodontic treatment. Orthodontists receive extensive specialty training and utilize the most advanced techniques available today. Specialists can apply the most cost-effective, time-efficient methods and materials, tailoring treatment plans to specific problems.
    <h3>What specialty training has Dr. Cohen received?</h3>
    Dr. Mitchell Cohen is an orthodontist specially trained during a residency program in orthodontics, following his degree in general dentistry. His areas of concentrated study are in orthodontics, pediatric dentistry, biomechanics and physics. He is a member of the American Association of Orthodontists.
    <h3>What can we expect from your practice?</h3>
    Our practice focuses on always being responsive to your needs. We make orthodontic treatment as pleasant and convenient as possible. We continue to grow through the recommendations from enthusiastic patients and parents and never forget that the patient is the most important part of our practice.
    <h3>What should I expect at my first office visit?</h3>
    At the initial visit, an orthodontic evaluation will be performed. Dr. Cohen will evaluate growth and development, the facial profile, the bite and alignment of teeth. If treatment is indicated, a set of orthodontic records will be obtained.
    <h3>What are orthodontic records?</h3>
    Orthodontic records usually include X-rays, photos and models of the teeth. After a thorough and complete evaluation of these records, an appropriate treatment plan will be developed.
    <h3>Is orthodontic care affordable?</h3>
    We strive to keep our fees among the most reasonable in the area. We also make every effort to provide flexible payment plans. There is no fee for the initial consult and something unique to our practice, there is no fee for the orthodontic records. We want all who are in need to share the lifetime of benefits orthodontics can offer.
    <h3>Do you accept my orthodontic insurance?</h3>
    We participate with most insurance plans and are eager to assist you to get the maximum benefits available from your coverage. Please remember, most plans only cover a portion of the fee and are based on a lifetime maximum.
    <h3>How long is the average treatment?</h3>
    Active treatment time is approximately two years. This can vary depending on the difficulty of the case, treatment plan and patient cooperation. Patient cooperation can become one of the most important issues when determining the length of treatment time. After active treatment, all patients should expect some type of retention phase.
    <h3>Does it hurt to get braces?</h3>
    There is no discomfort associated with the placement of braces. Minor discomfort is sometimes felt for a short period of time after routine adjustments. The soreness is a result of the tooth movement that occurs. Whatever you take for a headache should be more than enough to handle any discomfort from orthodontic tooth movement.
    <h3>Do you use needles?</h3>
    No!! There are no procedures done at our office that require the use of needles.
    <h3>Why is retention so important?</h3>
    Retention is a means of preserving the new position of the teeth and bite while the bone and gum stabilize. Retention is equally as important as active treatment.
    <h3>When will my appointments be scheduled?</h3>
    We share your concerns about missing school or work. We try to minimize the number of appointments that are necessary in the morning and always provide written excuses when necessary.
    <h3>How often will my appointments be scheduled?</h3>
    On average, patients are seen every five weeks during active treatment. During the retention phase of treatment, appointments are progressively spaced farther apart.
    <h3>What if I have a problem with my braces and the office is closed?</h3>
    Orthodontic emergencies seldom occur but if they do, Dr. Cohen is always available. Both his cell phone and house phone numbers are readily available to all patients.
    <h3>Should I continue to see my general or pediatric dentist while in braces?</h3>
    Absolutely! While under orthodontic treatment, regular dental checkups become even more important to prevent and detect tooth decay. Healthy teeth and surrounding tissue make tooth movement more comfortable and efficient. Regular professional examinations and cleanings are critical to any successful orthodontic treatment plan.
    <h3>What is Invisalign?</h3>
    Invisalign uses a series of clear removable aligners to straighten your teeth without metal wires or brackets. We proudly offer Invisalign as a treatment option.
    <h3>What is 3D scanning? </h3>
    Using brand-new technology, we are excited to offer impression-free digital scans, allowing for more precise record with no discomfort to better serve our Invisalign patients.
            @include( 'mixins.footer', array('placer' => 'Are you ready to imagine yourself with that priceless smile we’ve been talking about? '))

    	</main>



    	@include('mixins.sidebar')
    	
    </div>
</div>
@stop
