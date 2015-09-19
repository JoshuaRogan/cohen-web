@section('header')
<header>
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#">Home </a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Early Care &amp; Adult Orthodontic</a></li>
                            <li><a href="#">Traditional Braces</a></li>
                            <li><a href="#">Invisalign</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">For Patients <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">FAQs</a></li>
                        </ul>
                    </li>
                    <li><a href="#">About Us </a></li>
                    <li><a href="#">Smile Gallery </a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Locations <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Scranton</a></li>
                            <li><a href="#">Pittston</a></li>
                            <li><a href="#">Wilkes-barre</a></li>
                        </ul>
                    </li>
                </ul>

                </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

            <div class="banner">
                <div class="container">
                  <div class='left'>
                    <img src="/img/components/mitchell_logo.png" alt='mitchell logo'>
                    <ul class='offices'> 
                      <li><strong>Scranton:</strong> 570-346-2132</li>
                      <li><strong>Pittston:</strong> 570-346-2132</li>
                      <li><strong>Wilkes-barre:</strong> 570-346-2132</li>
                    </ul>
                </div>
                
                <div class='right'>
                    <div class="owl-carousel">
                        <img class='item' src="http://placehold.it/550x250&amp;text=1" alt='slider item'>
                        <img class='item' src="http://placehold.it/550x250&amp;text=2" alt='slider item'>
                        <img class='item' src="http://placehold.it/550x250&amp;text=3" alt='slider item'>
                        <img class='item' src="http://placehold.it/550x250&amp;text=4" alt='slider item'>
                        <img class='item' src="http://placehold.it/550x250&amp;text=5" alt='slider item'>
                    </div>
                </div>

                

                
                
                
                
                </div>
            </div>


</header>
@stop