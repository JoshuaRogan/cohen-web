@extends('skeleton.base')
@extends('skeleton.header')
@extends('skeleton.footer')

@section('title', 'Our Team')
@section('pageclass', 'page-our-team')

@section('styles')
    @parent
@stop

@section('lazyscripts')
    @parent
@stop

@section('content')

@include('skeleton.banner');
<div class="container">
	@include('mixins.breadcrumbs',array( 'current' => 'Meet Your Team' ))
	
    <div class="row content-section">
    	<main class='main-content'>
	        <section class="team">
            <h1> Meet Your Team </h1>
                <section>
                    <h2>Mitchell S. Cohen, DDS, MSD</h2>
                    <img src="/img/team/mitch.png" alt="Dr. mitchell">
                    <p>"I’ve always been fascinated with anything mechanical and especially by how people benefit from machines and technology. So it seemed very logical that I progressed from working as a truck mechanic to earning physics and chemistry degrees, to dentistry, orthodontics and a Master of Science degree in Dentistry. I love working with my hands, and I’m passionate about improving people’s lives."</p>
                    <p>"The uniqueness of orthodontics is what initially drew me to the profession. It’s like no other job in healthcare. Orthodontics is based solely on helping others help themselves. It’s similar to the partnership forged between a coach and a player. I’m the coach and I give patients the tools to perform. The most enjoyable aspect of my job is changing lives for the better and knowing that I’ve made such a positive long-term impact on their health and well-being. I am very proud of my nature to put people at ease, make good, logical decisions and simplify difficult and complex problems. I have a reputation for taking a very conservative approach to orthodontics and I am often called upon by parents and dentists to offer second opinions."</p>
                    <p>"They say when you love what you do, you will never work a day in your life, and I have had the pleasure of not working a single day over the past 25 years. I love the daily interaction with people and enjoy building friendships. It’s an honor to be so integrated in the community."</p>
                    <p>"My office is a very warm and informal place. I want patients to feel as if they’re going to visit a friend rather than a doctor’s office. I am available to my patients 100% of the time. My home phone number is listed, and everyone gets my cell phone number. I hope to give my patients a pleasurable experience while ultimately contributing to their confidence, self-esteem and dental health, all while focused on a positive, friendly attitude. I believe in our mission of providing ‘priceless smiles.’ Simply put, we want everyone to feel like they got a bargain."</p>
                    Much of Dr. Cohen’s free time is spent restoring old cars and trucks. He fabricates, builds, modifies and restores anything mechanical. He loves everything outdoors – especially hiking, biking and kayaking. He is also a rescue SCUBA diver and has recently taken up mountain climbing (he successfully climbed Mount Rainier). And he enjoys coaching youth sports as well as playing sports with his children.
                    <p><strong>MS:</strong> Orthodontics, Temple University, Philadelphia, PA</p>
                    <p><strong>DDS:</strong> SUNY, Buffalo, NY (Minor in Pediatric Dentistry)</p>
                    <p><strong>BA:</strong> Chemistry, Binghamton University, Binghamton, NY</p>
                    <p><strong>BA:</strong> Physics (Research in Laser Spectroscopy and Membrane Physiology)</p>
                    <p><strong>Member:</strong> American Association of Orthodontists, Omicron Kappa Upsilon Dental Honor Society</p>
                </section>

                <section>
                    <h2>Diana, Orthodontic Technician</h2>
                    <img src="/img/team/diana.jpg" alt="headshot">
                    <p>"I enjoy working at Dr. Cohen’s office because it has both a friendly and comfortable atmosphere. It is wonderful working at an office where everyone gets along so well and where the work you do is acknowledged and appreciated. It is very rewarding when you see how happy patients are when they see the results of their orthodontic treatment. Knowing that I played a part in their happiness is one of the main reasons I love my job. In my spare time I enjoy doing home projects, gardening and spending time with my family."</p>
                    
                </section>
       
                <section>
                    <h2>Audrey, Orthodontic Technician</h2>
                    <img src="/img/team/audrey.jpg" alt="headshot">
                    <p>"I enjoy working at Dr. Cohen’s office because it is a very warm and friendly atmosphere. Dr. Cohen not only makes his patients feel special, but also his employees. I enjoy working in the orthodontic field because everyday you get to meet all different types of people. I like the fact that there are various jobs during the course of the day that you can rotate to. I have been doing this for many years and it never seems to get boring. I still love what I do. When not at work, I like to spending time with my family, going shopping, out to dinner and I love going to the theater with my granddaughter."</p>
                </section>
       
                <section>
                    <h2>Jenn, Orthodontic Technician</h2>
                    <img src="/img/team/jen-m.jpg" alt="headshot">
                    <p>"I enjoy working at Dr. Cohen’s because of the friendly and comfortable environment created for patients and staff. Every member of the staff works extremely well together and we get along great. I enjoy working in the orthodontic field because every day we are able to meet new people and help them better their smile. It is very rewarding knowing you can be a part in building a person’s self-esteem. In my spare time I enjoy doing anything that has to do with the outdoors."</p>
                    
                </section>
       
                <section>
                    <h2>Peggy, Orthodontic Technician</h2>
                    <img src="/img/team/peggy.jpg" alt="headshot">
                    <p>"I enjoy working at Dr. Cohen’s office because not only do I enjoy my job itself but, also that we have created a cohesive team that has a great rapport with each other. I enjoy working in this field because it is very rewarding to help people. It is great to know that I have a positive impact on their lives by building their confidence and making them look and feel better about themselves with their new happy and healthy smiles. When not working, I enjoy spending time with my friends and family."</p>
                    
                </section>
       
                <section>
                    <h2>Julie, Orthodontic Technician</h2>
                    <img src="/img/team/julie.jpg" alt="headshot">
                    <p>"Everyone in our office has a unique personality, but we compliment each other well. We work as a team with a goal of providing the best patient experience possible. I think you should know you are making a difference that counts in a profession and I believe I’ve found that in mine. Helping children and adults smile confidently is truly amazing.
In my spare time, I love spending time with my children. Our favorites are softball or baseball games. I also enjoy crafts and painting.</p>
                    
                </section>
       
                <section>
                    <h2>Gina, Office Manager</h2>
                    <img src="/img/team/gina.jpg" alt="headshot">
                    <p>"The office is very easy going and both the doctor and staff make it a pleasure to come to work. The best part of my day is seeing the look on each patients face when they see their end results. My husband and I have three children so most of our spare time is spent volunteering at the various sports or theatre events."</p>
                    
                </section>

            </section>

            <p class="footer-text">Introduce your family to priceless smiles at affordable fees with Dr. Mitchell Cohen’s help. Call us in Scranton at 570-346-2132, in Pittston at 570-654-7117 and in Wilkes-Barre at 570-822-7700. You can also use our online Request an Appointment form to schedule your free initial consultation. Se Hablemos Espanol.</p>
            
    	</main>

    	@include('mixins.sidebar')
    	
    </div>
</div>
@stop
