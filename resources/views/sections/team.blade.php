<section class="section team-section">
    <div class="container">
        <div class="col-xs-12">
                <h1>Meet the <strong>BAKD</strong> Team
                    <p class="about-tagline text-center">
                        Meet the team who's disrupting the way cryptocurrency gets invested.
                    </p>
                </h1>

                <div class="row team-photos">
                    {{--  MATT/CEO  --}}
                    @include('partials.team-member', [
                        'name' => 'Matthew Rankin',
                        'position' => 'CEO/Co-Founder',
                        'bio' => '',
                        'avatar' => '/images/team/matt.jpg',
                        'links' => [
                            {{--  ['name' => 'LinkedIn', 'icon' => 'linkedin.png', 'url' => "https://www.linkedin.com/in/matthew-rankin-b8427aa/"],  --}}
                            {{--  ['name' => 'Twitter', 'icon' => 'fa-twitter', 'url' => ''],  --}}
                            ['icon' => 'email.png', 'url' => "mailto: matt@bakd.io", 'name' => 'Email', 'classes' => 'sm-icon'],
                        ]
                    ])

                    {{--  TOM/CTO  --}}
                    @include('partials.team-member', [
                        'name' => 'Thomas Grenier',
                        'position' => 'CTO/Co-Founder & Lead Developer',
                        'bio' => '',
                        'avatar' => '/images/team/tom2.jpg',
                        'links' => [
                            {{--  ['icon' => 'twitter.png', 'url' => "https://www.twitter.com/CryptoCoinForum", 'name' => 'Twitter', 'classes' => 'sm-icon'],  --}}
                            ['icon' => 'linkedin.png', 'url' => "https://www.linkedin.com/in/tgrenier", 'name' => 'LinkedIn', 'classes' => 'sm-icon'],
                            ['icon' => 'telegram.png', 'url' => "https://t.me/BAKDme", 'name' => 'Telegram', 'classes' => 'sm-icon'],
                            ['icon' => 'github.png', 'url' => "https://www.github.com/tomgren", 'name' => 'GitHub', 'classes' => 'sm-icon'],
                            ['icon' => 'email.png', 'url' => "mailto: tom@bakd.io", 'name' => 'Email', 'classes' => 'sm-icon'],
                        ]
                    ])

                    {{--  EUGENE/PM  --}}
                    @include('partials.team-member', [
                        'name' => 'Eugene Chernyshov',
                        'position' => 'Lead Project Manager',
                        'bio' => '',
                        'avatar' => '/images/team-placeholder.png',
                        'links' => [
                            ['icon' => 'email.png', 'url' => "mailto: eugene@bakd.io", 'name' => 'Email', 'classes' => 'sm-icon'],
                        ]
                    ])


                    {{--  TIMO/MM  --}}
                    @include('partials.team-member', [
                        'name' => 'Timo Güntner',
                        'position' => 'Marketing Manager',
                        'bio' => '',
                        'avatar' => '/images/team-placeholder.png',
                        'links' => [
                            ['icon' => 'email.png', 'url' => "mailto: timo@bakd.io", 'name' => 'Email', 'classes' => 'sm-icon'],
                        ]
                    ])

                    {{--  SUYOGA / DESIGN --}}
                    @include('partials.team-member', [
                        'name' => 'Suyoga Purwana',
                        'position' => 'Lead Designer',
                        'bio' => '',
                        'avatar' => '/images/team/suyoga.png',
                        'links' => [
                            {{--  ['icon' => '../../../freelancer-logo.png', 'url' => "https://www.freelancer.com/u/suyogapurwana", 'name' => 'Freelancer.com', 'classes' => 'freelancer-wrapper'],  --}}
                            ['icon' => 'linkedin.png', 'url' => "https://www.linkedin.com/in/suyoga-purwana-358921172/", 'name' => 'LinkedIn', 'classes' => 'sm-icon'],
                            ['icon' => 'facebook.png', 'url' => "https://web.facebook.com/suyoga.purwana", 'name' => 'Facebook', 'classes' => 'sm-icon'],
                            ['icon' => 'foursquare.png', 'url' => "https://www.freelancer.com/u/suyogapurwana", 'name' => 'Freelancer.com', 'classes' => 'sm-icon'],
                            ['icon' => 'email.png', 'url' => "mailto: suyoga@bakd.io", 'name' => 'Email', 'classes' => 'sm-icon'],
                        ]
                    ])

                    {{--  FRANKLIN/INFOGRAPHICS  --}}
                    @include('partials.team-member', [
                        'name' => 'Franklin Calles',
                        'position' => 'Designer & Infographics',
                        'bio' => '',
                        'avatar' => '/images/team/franklin2.jpg',
                        'links' => [
                            ['icon' => 'linkedin.png', 'url' => "https://www.linkedin.com/in/franklin-calles-b19b47166/", 'name' => 'LinkedIn', 'classes' => 'sm-icon'],
                            ['icon' => 'behance.png', 'url' => "https://www.behance.net/franklinje645c", 'name' => 'Behance', 'classes' => 'sm-icon'],
                            ['icon' => 'email.png', 'url' => "mailto: franklin@bakd.io", 'name' => 'Email', 'classes' => 'sm-icon'],
                        ]
                    ])

                    {{--  MARCO/PROTOCOL DEV  --}}
                    @include('partials.team-member', [
                        'name' => 'Marco Carvalho',
                        'position' => 'Web & C/C++ Developer',
                        'bio' => '',
                        'avatar' => '/images/team/marco.jpg',
                        'links' => [
                            ['icon' => 'email.png', 'url' => "mailto: marco@bakd.io", 'name' => 'Email', 'classes' => 'sm-icon'],
                        ]
                    ])

                    {{--  AUROBOROS/Social Media  --}}
                    @include('partials.team-member', [
                        'name' => 'Alimin Alfi Ardhi Hikayah',
                        'position' => 'Social Media Manager',
                        'bio' => '',
                        'avatar' => '/images/team/auroboros.jpg',
                        'links' => [
                            ['icon' => 'linkedin.png', 'url' => "https://www.linkedin.com/in/alimin-alfi-ardhi-hikayah-143651142/", 'name' => 'LinkedIn', 'classes' => 'sm-icon'],
                            ['icon' => 'email.png', 'url' => "mailto: auroboros@bakd.io", 'name' => 'Email', 'classes' => 'sm-icon'],
                        ]
                    ])

                    {{--  JOSIAH/TW  --}}
                    @include('partials.team-member', [
                        'name' => 'Josiah Makori',
                        'position' => 'Technical & Content Writer',
                        'bio' => '',
                        'avatar' => '/images/team/josiah.png',
                        'links' => [
                            ['icon' => 'twitter.png', 'url' => "https://twitter.com/CryptoWriter001 ", 'name' => 'Twitter', 'classes' => 'sm-icon'],
                            ['icon' => 'linkedin.png', 'url' => "https://www.linkedin.com/in/josiah-makori-6b43b2125", 'name' => 'LinkedIn', 'classes' => 'sm-icon'],
                            ['icon' => 'telegram.png', 'url' => "https://t.me/cryptowriter001", 'name' => 'Telegram', 'classes' => 'sm-icon'],
                            ['icon' => 'email.png', 'url' => "mailto: josiah@bakd.io", 'name' => 'Email', 'classes' => 'sm-icon'],
                        ]
                    ])

                </div>

            </div>
        </div>
    </div>
</section>