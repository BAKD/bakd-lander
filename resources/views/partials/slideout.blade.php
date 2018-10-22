
<!-- Mobile Slideout Menu-->
<div id="mobile_menu">
    <div class="mobile-inner">
        <div class="mobile-header text-center">
            <a href="#" class="close close-slideout" id="close_slideout">
                <i class="fa fa-times"></i>
            </a>
            <div class="logo-circle-bg">
                <img src="/images/icon.png" alt="BAKD.io" title="BAKD.io" />
            </div>
        </div>
        <div class="mobile-body">
            <ul class="link-list">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-chevron-right"></i> Onepager
                        </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item disabled" data-toggle="tooltip" data-placement="right" title="Coming Soon" href="#">Version 0.0.1a <span class="type">(Graphic)</span></a>
                        <a class="dropdown-item" href="{{ $onepager['text'] }}" target="_blank">Version 0.0.1a <span class="type">(Text)</span></a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-chevron-right"></i> Roadmap
                        </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ $roadmap['graphic'] }}" target="_blank">Version 0.0.2a <span class="type">(Graphic)</span></a>
                        <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1YNkjUePG6YPQydSf3YQPIPDhUQJ9f56XkDwbk2gaNLA/edit?usp=sharing" target="_blank" title="UPDATED!" data-toggle="tooltip" data-placement="right">Version 1.0.2 <span class="type">(Text)</span></a>
                    </div>
                </li>
                <li class="nav-item features dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-chevron-right"></i> Features
                        </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="https://docs.google.com/document/d/1HAFt1VOcWOl4OSGRdHfX7xth2_4aQule0NLLuzrXiyU/edit?usp=sharing">Website Features (Version 1.0.1a)</a>
                        <a class="dropdown-item" href="https://drive.google.com/open?id=1Azam6FyWX-MufgpV1CDdVclrR4m71jUTYNJNNo9ML-A">Protocol Features (Version 1.0.1)</a>
                    </div>
                </li>
                <li class="nav-item whitepaper dropdown">
                    <a class="nav-link disabled dropdown-toggle" title="Coming Soon" data-toggle="tooltip" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-chevron-right"></i> Whitepaper
                        </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Version 0.0.1a <span class="type">(Graphic)</span></a>
                        <a class="dropdown-item" href="#">Version 0.0.1a <span class="type">(Text)</span></a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-chevron-right"></i> Jobs
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @include('partials.jobs-dropdown')
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-target="#donations_modal" data-toggle="modal">
                        <i class="fa fa-chevron-right"></i> Donate
                    </a>
                </li>
            </ul>
        </div>
        <div class="mobile-footer">
            <div class="text-center my-2 my-lg-0">
                <a href="https://bakd.me" target="_blank" class="btn btn-primary my-2 my-sm-0"><i class="fa fa-chart-bar"></i> VIEW ALPHA PROGRESS</a>
            </div>
        </div>

    </div>
</div>

