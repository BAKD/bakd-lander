<nav class="navbar navbar-fixed navbar-dark navbar-expand-md navbar-expand-sm navbar-expand-xs animated fadeInDown">
    <div class="container">
        <a href="https://bakd.io" class="navbar-brand" alt="BAKD.io - Building your dream project just got a little bit easier." title="BAKD.io - Building your dream project just got a little bit easier.">
            <img src="images/logo-white.png" alt="BAKD.io - Building your dream project just got a little bit easier." title="BAKD.io - Building your dream project just got a little bit easier." height="102" width="322" class="bakd-logo nav-logo d-inline-block align-top"
            />
        </a>
        <div class="collapse inline form-inline navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav navbar-inline mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Onepager
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item disabled" data-toggle="tooltip" data-placement="right" title="Coming Soon" href="#">Version 0.0.1a <span class="type">(Graphic)</span></a>
                        <a class="dropdown-item" href="{{ $onepager['text'] }}" target="_blank">Version 0.0.1a <span class="type">(Text)</span></a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Roadmap
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" data-toggle="tooltip" data-placement="right" title="NEW!" href="{{ $roadmap['graphic'] }}" target="_blank">Version 0.0.2a <span class="type">(Graphic)</span></a>
                        <a class="dropdown-item" href="{{ $roadmap['text'] }}" target="_blank">Version 0.0.1a <span class="type">(Text)</span></a>
                    </div>
                </li>
                <li class="nav-item features dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Features
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="https://docs.google.com/document/d/1HAFt1VOcWOl4OSGRdHfX7xth2_4aQule0NLLuzrXiyU/edit?usp=sharing">Website Features (v1.0.1a)</a>
                        <a class="dropdown-item" href="https://drive.google.com/open?id=1Azam6FyWX-MufgpV1CDdVclrR4m71jUTYNJNNo9ML-A">Protocol Features (v1.0.1)</a>
                    </div>
                </li>
                <li class="nav-item whitepaper dropdown">
                    <a class="nav-link disabled dropdown-toggle" title="Coming Soon" data-toggle="tooltip" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Whitepaper
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Version 0.0.1a <span class="type">(Graphic)</span></a>
                        <a class="dropdown-item" href="#">Version 0.0.1a <span class="type">(Text)</span></a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Jobs
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @include('partials.jobs-dropdown')
                    </div>
                </li>
            </ul>
            <div class="form-inline my-2 my-lg-0">
                <a href="https://bakd.me" style="margin: 0 auto;" target="_blank" title="View The BAKD.me Alpha Development Progress!" class="btn btn-primary my-2 my-sm-0" ><i class="fa fa-chart-bar"></i> VIEW ALPHA PROGRESS</a>
            </div>
        </div>
        <div class="mobile-nav-btn-wrapper">
            <a role="button" href="#" id="mobile_menu_btn"><i class="fa fa-bars"></i></a>
        </div>
    </div>
</nav>