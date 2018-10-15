<div class="navbar-bottom">
    <h2 id="countdown-main-title" class="animated fadeInDown"><i class="fa fa-clock"></i> <span class="hidden-mobile">Countdown to next </span><span class="orange">Alpha</span> Feature Set Launch</h2>
    
    <div class="launch-news-wrapper" id="launch-div" style="display: none;">
        <h3 class="new-features-title">
            We're Deploying New Features <span class="orange">Right Now</span>!
        </h3>
        <a href="https://bakd.me" target="_blank">
            <i class="fa fa-chart-line"></i> Visit <strong class="orange">BAKD.me</strong> - Crowdfunding & Professional Networking Alpha
        </a>
        <h5>
            We'll post another update to let you know as soon as they're done!
        </h5>
    </div>
    
    <div class="alpha-countdown animated fadeIn">
        <div class="countdown-container unselectable" id="alpha-countdown"></div>
    </div>
    <script type="text/template" id="alpha-countdown-template">
        <div class="time <%= label %>">
            <span class="count curr top"><%= curr %></span>
            <span class="count next top"><%= next %></span>
            <span class="count next bottom"><%= curr %></span>
            <span class="count curr bottom"><%= next %></span>
            <span class="label"><%= label.length < 6 ? label : label.substr(0, 3)  %></span>
        </div>
    </script>
</div>
<script src="/node_modules/moment/min/moment-with-locales.min.js" type="text/javascript"></script>
<script src="/bower_components/jquery.countdown/dist/jquery.countdown.min.js" type="text/javascript"></script>
<script src="/js/countdown.js" type="text/javascript"></script>