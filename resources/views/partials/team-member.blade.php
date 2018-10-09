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
    </div>
</div>