<div class="col-lg-4 col-md-2 col-xs-12 team-member-wrapper">
    <p>
        <img src="{{ $avatar }}" alt="{{ $name }}" title="{{ $name }}" class="hover-scale responsive-img team-photo" />
    </p>
    <h3>{{ $name }}</h3>
    <h6>{{ $position }}</h6>
    <p>
        {{ $bio }}
    </p>
    <div class="social-links">
        {{--  @forelse ($links as $link)
            <a href="{{ $link['url'] }}" target="_blank" alt="{{ $link['name'] }}" title="{{ $link['name'] }}">
                <i class="fa {{ $link['icon'] }}"></i> {{ $link['name'] }}
            </a>
        @empty
        @endforelse  --}}

        <div class="social-media-links" style="padding-bottom: 30px;">
                <ul>
                    <li class="sm-wrapper sm-icon">
                        <a href="https://twitter.com/BAKDme" target="_blank" alt="Twitter" title="Twitter" data-toggle="tooltip" data-placement="bottom">
                            <img src="/images/icons/social-media-2/png/twitter.png" />
                        </a>
                    </li>
                    <li class="sm-wrapper sm-icon">
                        <a href="https://discord.gg/rADpPXp" target="_blank" alt="LinkedIn" title="LinkedIn" data-toggle="tooltip" data-placement="bottom">
                            <img src="/images/icons/social-media-2/png/linkedin.png" />
                        </a>
                    </li>
                    <li class="sm-wrapper sm-icon">
                        <a href="https://bitcointalk.org/index.php?topic=4952711" target="_blank" alt="BitcoinTalk" title="BitcoinTalk" data-toggle="tooltip" data-placement="bottom">
                            <img src="/images/icons/social-media-2/png/bitcoin.png" />
                        </a>
                    </li>
                </ul>
            </div>



    </div>
</div>