@section('header')
<header>
    <nav>
        <div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
            </div>

            <div class="menu">
            	<ul>
            		<li><a href="#">Home</a></li>
            		<li><a href="#">About us</a></li>
            		<li><a href="#">Meet Your Team</a></li>
            		<li class='dropdown'>
            			 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Services <span class="caret"></span></a>
            			 <ul>
	            			 <li><a href="#">Action</a></li>
	            			 <li><a href="#">Action</a></li>
	            			 <li><a href="#">Action</a></li>
            			 </ul>
            		</li>
                    <li><a href="#">For Patients</a></li>
                    <li><a href="#">Contact Us</a></li>
            	</ul>
            </div>

        </div>
    </nav>
</header>
@stop