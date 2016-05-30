<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ URL::to('/') }}">
                <img src="img/vrlogo2.png" alt="VR Modus" height="50" />
            </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">
                <li><a href="{{ URL::to('/') }}">HOME</a></li>
                <li><a href="{{ URL::to('solutions') }}">SOLUTIONS</a></li>
                <li><a href="{{ URL::to('services') }}">SERVICES</a></li>
                <li><a href="{{ URL::to('work') }}">WORK</a></li>
                <li><a href="{{ URL::to('about') }}">ABOUT</a></li>
            </ul>
        </div>
    </div>
</div>
