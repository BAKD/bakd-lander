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
                            {{--  ['name' => 'BitcoinTalk', 'icon' => 'fa-btc', 'url' => ''],  --}}
                        ]
                    ])

                    {{--  TOM/CTO  --}}
                    @include('partials.team-member', [
                        'name' => 'Thomas Grenier',
                        'position' => 'CTO/Co-Founder & Lead Developer',
                        'bio' => '',
                        'avatar' => '/images/team/tom2.jpg',
                        'links' => [
                            ['icon' => 'twitter.png', 'url' => "https://www.twitter.com/CryptoCoinForum", 'name' => 'Twitter'],
                            ['icon' => 'linkedin.png', 'url' => "https://www.linkedin.com/in/tgrenier", 'name' => 'LinkedIn'],
                            ['icon' => 'telegram.png', 'url' => "https://t.me/BAKDme", 'name' => 'Telegram'],
                            ['icon' => 'github.png', 'url' => "https://www.github.com/tomgren", 'name' => 'GitHub'],
                        ]
                    ])

                    {{--  EUGENE/PM  --}}
                    @include('partials.team-member', [
                        'name' => 'Eugene Chernyshov',
                        'position' => 'Lead Project Manager',
                        'bio' => '',
                        'avatar' => '/images/team-placeholder.png',
                        'links' => []
                    ])


                    {{--  TIMO/MM  --}}
                    @include('partials.team-member', [
                        'name' => 'Timo Güntner',
                        'position' => 'Marketing Manager',
                        'bio' => '',
                        'avatar' => '/images/team-placeholder.png',
                        'links' => []
                    ])

                    {{--  SUYOGA / DESIGN --}}
                    @include('partials.team-member', [
                        'name' => 'Suyoga Purwana',
                        'position' => 'Lead Designer',
                        'bio' => '',
                        'avatar' => '/images/team/suyoga.png',
                        'links' => []
                    ])

                    {{--  FRANKLIN/INFOGRAPHICS  --}}
                    @include('partials.team-member', [
                        'name' => 'Franklin Calles',
                        'position' => 'Designer & Infographics',
                        'bio' => '',
                        'avatar' => '/images/team/franklin.jpg',
                        'links' => []
                    ])

                    {{--  MARCO/PROTOCOL DEV  --}}
                    @include('partials.team-member', [
                        'name' => 'Marco Carvalho',
                        'position' => 'Web & C/C++ Developer',
                        'bio' => '',
                        'avatar' => '/images/team/marco.jpg',
                        'links' => []
                    ])

                    {{--  AUROBOROS/Social Media  --}}
                    @include('partials.team-member', [
                        'name' => 'Alimin Alfi Ardhi Hikayah',
                        'position' => 'Social Media Manager',
                        'bio' => '',
                        'avatar' => '/images/team/auroboros.jpg',
                        'links' => [
                            ['icon' => 'linkedin.png', 'url' => "https://www.linkedin.com/in/alimin-alfi-ardhi-hikayah-143651142/", 'name' => 'LinkedIn'],
                            ['icon' => 'bitcoin.png', 'url' => "https://bitcointalk.org/index.php?action=profile;u=979644", 'name' => 'BitcoinTalk'],
                        ]
                    ])

                    {{--  EMMANUEL/Marketing Help  --}}
                    @include('partials.team-member', [
                        'name' => 'Emmanuel Scott',
                        'position' => 'Social Media & Community Outreach',
                        'bio' => '',
                        'avatar' => '/images/team-placeholder.png',
                        'links' => []
                    ])

                    {{--  JOSIAH/TW  --}}
                    @include('partials.team-member', [
                        'name' => 'Josiah Makori',
                        'position' => 'Technical & Content Writer',
                        'bio' => '',
                        'avatar' => '/images/team/josiah.png',
                        'links' => [
                            ['icon' => 'twitter.png', 'url' => "https://twitter.com/CryptoWriter001 ", 'name' => 'Twitter'],
                            ['icon' => 'linkedin.png', 'url' => "https://www.linkedin.com/in/josiah-makori-6b43b2125", 'name' => 'LinkedIn'],
                            ['icon' => 'telegram.png', 'url' => "https://t.me/cryptowriter001", 'name' => 'Telegram']
                        ]
                    ])

                </div>

            </div>
        </div>
    </div>
</section>