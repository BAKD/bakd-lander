<div class="navbar-bottom animated fadeInUp">
    <h2 class="animated fadeInDown"><i class="fa fa-clock"></i> <span class="hidden-mobile">Countdown to next </span><span class="orange">Alpha</span> Feature Set Launch</h2>
    <div class="alpha-countdown">
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