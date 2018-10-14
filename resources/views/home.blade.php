<!DOCTYPE html>
<html>

@include('partials.head')

<body class="animated fadeIn">
    
    @include('partials.preloader-bakd')

    <header class="header jumbotron-wrapper bakd-header wow fadeIn">
        {{--  <div id="particles-js"></div>  --}}
        
        @include('partials.navbar')

        <div class="container-fluid info mCustomScrollbar">
            <h1 class="animated fadeIn">Building Your <span class="orange">Dream</span> Project<br />Just Got A Little Bit <span class="orange">Easier</span></h1>
            <h2 class="animated fadeIn">Better Yet, Investing Just Got A Little Bit <em>Safer</em></h2>
            <div class="info-slider text-center">
                <p class="explainer">
                    <strong>BAKD</strong> is a censorship-free, revolutionary new way to fund your next cryptocurrency project. <strong>BAKD</strong> not only helps entrepreneurs crowdsource the funding needed to build their dream project, but it's also
                    a place where entrepreneurs can connect with mentors for advice when times get rough.
                </p>
                <p class="explainer">
                    <strong>BAKD</strong> Project Owners may choose to become either vetted, or non-vetted. Project funds are disbursed either in weekly or monthly stipends. Everyday employee expenses can be reported, tracked and processed -- all within
                    the
                    <strong>BAKD</strong> Platform. If unexpected costs arise, the BAK'ers or Project Owners may call a vote to ammend the disbursement agreement.
                </p>
                <p class="explainer">
                    <strong>BAKD</strong> Project Campaigns are essentially <em>DAICO's</em>. BAK'ers must invest using the <strong>BAKD</strong> Token. If the project begins to miss pre-defined major milestones, a vote to rescind the remaining project
                    funds may be called by the project BAK'ers.
                </p>
                <p class="explainer">
                    Whether you need funds, team members, or just plain advice, <strong>BAKD</strong> has you covered. All the tools entrepreneurs need to succeed available under one roof. Handle your finances, social media, team building, contests, company
                    announcements, accounting, and more with the <strong>BAKD</strong> Platform & Social Network!
                </p>
            </div>
            @include('partials.newsletter', ['formName' => 'subscriber_form'])
            @include('partials.social-icons')
            @include('partials.donations-button')
        </div>
        @include('partials.countdown')
    </header>

    <main>
            @include('sections.about')
            @include('sections.roadmap')
            @include('sections.team')
            {{--  @include('sections.features-web')  --}}
            {{--  @include('sections.features-protocol')  --}}
            @include('sections.pre-mine')
            @include('sections.contact')    
    </main>

    @include('partials.footer')


    @include('partials.slideout')
    @include('modals.alpha-access')
    @include('modals.donations')
    @include('partials.javascript')
</body>

</html>