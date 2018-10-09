<div class="col-lg-4 col-md-6 col-xs-12 team-member-wrapper">
    <p>
        <img src="{{ $avatar }}" alt="{{ $name }}" title="{{ $name }}" class="hover-scale responsive-img team-photo" />
    </p>
    <h3>{{ $name }}</h3>
    <h6>{{ $position }}</h6>
    <p>
        {{ $bio }}
    </p>
    <div class="social-links">
        <div class="social-media-links" style="padding-bottom: 30px;">
            <ul>
        @forelse ($links as $link)
                    <li class="sm-wrapper sm-icon">
                        <a href="{{ $link['url'] }}" target="_blank" alt="{{ $link['name'] }}" title="{{ $link['name'] }}" data-toggle="tooltip" data-placement="bottom">
                            <img src="/images/icons/social-media-2/png/{{ $link['icon'] }}" />
                        </a>
                    </li>
                    @empty
                        <li style="font-style: italic;">Links Coming Soon</li>
                    @endforelse
                </ul>
            </div>

    </div>
</div>