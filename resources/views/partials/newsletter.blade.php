<h2 class="dev-updates-title">Subscribe to Development Updates</h2>
<div class="d-flex text-center subscribe-section">
    <form class="form-inline mx-auto" method="POST" action="{{ route('newsletter.subscribe') }}" role="form" name="subscriber_form" id="subscriber_form">
        <input type="email" name="email_address" class="form-control" placeholder="Email Address" required />
        <button type="submit" name="subscribe_button" class="btn btn-primary btn-round btn-lg" data-toggle="tooltip" data-title="Get exclusive updates and access to the BAKD Alpha!" data-placement="top">
            <i class="fa fa-envelope"></i>
        </button>
    </form>
</div>