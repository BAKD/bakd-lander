<!DOCTYPE html>
<html>

@include('partials.head')

<body class="animated fadeIn">
    
    @include('partials.navbar', ['dark' => true])

    <main style="padding-top: 110px;">
        <section class="section about-section wow fadeIn">
            <div class="container">
                <h1 class="text-center">Thanks!</h1>
                    {{--  <p class="about-tagline text-center">
                        "Building your dream project just got a little bit easier, better yet -- investing in crypto just got a little bit safer"
                    </p>     --}}
                {{--  </h1>  --}}
                <div class="row about-wrapper">
                    <div class="col-lg-12 col-xs-12 text-center branding-wrapper">
                        <img data-src="/images/icon.png" alt="BAKD ICO Management &amp; Networking Platform" title="BAKD ICO Management &amp; Networking Platform" class="about-branding lazy">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xs-12 about-details text-center">
                        <h3 style="color: #000; padding-top: 20px;">
                            Successfully subscribed to the Future Development Updates Newsletter
                        </h3>
                        <div class="text-center about-links">
                            <p style="padding-top: 10px;">    
                                <a href="/" style="margin: 0 auto;" title="Home" class="btn btn-primary my-2 my-sm-0" ><i class="fa fa-home"></i> HOME</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--  @include('sections.about')  --}}
        {{--  @include('sections.contact')      --}}
    </main>

    @include('partials.footer')

    @include('partials.slideout')
    @include('modals.donations')
    @include('partials.javascript')
</body>

</html>