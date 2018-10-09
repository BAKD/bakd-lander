<section class="section team-section">
    <div class="container">
        <div class="col-xs-12">
                <h1>Meet the <strong>BAKD</strong> Team</h1>

                <div class="row team-photos">
                    {{--  MATT/CEO  --}}
                    @include('partials.team-member', [
                        'name' => 'Matthew Rankin',
                        'position' => 'CEO/Co-Founder',
                        'bio' => '',
                        'avatar' => '/images/team-placeholder.png',
                        'links' => [
                            ['name' => 'LinkedIn', 'icon' => 'fa-linkedin', 'url' => ''],
                            ['name' => 'Twitter', 'icon' => 'fa-twitter', 'url' => ''],
                            ['name' => 'BitcoinTalk', 'icon' => 'fa-btc', 'url' => ''],
                        ]
                    ])

                    {{--  TOM/CTO  --}}
                    @include('partials.team-member', [
                        'name' => 'Thomas Grenier',
                        'position' => 'CTO/Co-Founder & Lead Developer',
                        'bio' => '',
                        'avatar' => '/images/team-placeholder.png',
                        'links' => []
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
                        'avatar' => '/images/team-placeholder.png',
                        'links' => []
                    ])

                    {{--  FRANKLIN/INFOGRAPHICS  --}}
                    @include('partials.team-member', [
                        'name' => 'Franklin Calles',
                        'position' => 'Designer/Infographics',
                        'bio' => '',
                        'avatar' => '/images/team-placeholder.png',
                        'links' => []
                    ])

                    {{--  MARCO/PROTOCOL DEV  --}}
                    @include('partials.team-member', [
                        'name' => 'Marco Carvalho',
                        'position' => 'Web & C/C++ Developer',
                        'bio' => '',
                        'avatar' => '/images/team-placeholder.png',
                        'links' => []
                    ])

                    {{--  AUROBOROS/Social Media  --}}
                    @include('partials.team-member', [
                        'name' => 'Alimin Alfi Ardhi Hikayah',
                        'position' => 'Social Media Manager',
                        'bio' => '',
                        'avatar' => '/images/team-placeholder.png',
                        'links' => []
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
                        'avatar' => '/images/team-placeholder.png',
                        'links' => []
                    ])

                </div>

            </div>
        </div>
    </div>
</section>