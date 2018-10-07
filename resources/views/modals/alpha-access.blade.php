
<!-- Alpha Access Modal -->
<div class="modal fade" id="alpha_access_modal" tabindex="-1" role="dialog" aria-labelledby="alpha_access_modal_label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="alpha_access_modal_label">Get Alpha Access</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form" method="POST" action="{{ route('newsletter.subscribe') }}" role="form" name="alpha_access_form" id="alpha_access_form">
                <div class="modal-body">
                    <div class="alert alert-warning alert-dismissable">
                        <i class="fa fa-info-circle"></i> Early registration for access to the upcoming alpha release of the <strong>BAKD</strong> DAICO Crowdfunding & Social Networking Platform is open!
                        <span class="close close-btn" data-dismiss="alert"><i class="fa fa-times"></i></span>
                    </div>
                    <div class="form-group">
                        <label class="control-label">
                            E-Mail Address<span class="required">*</span>
                        </label>
                        <input type="email" name="email_address" placeholder="Email Address" maxlength="255" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label class="control-label">
                            Full Name <span class="small">(Optional)</span>
                        </label>
                        <input type="text" name="full_name" placeholder="Full Name" maxlength="255" minlength="3" class="form-control" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-round">OK</button>
                </div>
            </form>
        </div>
    </div>
</div>
