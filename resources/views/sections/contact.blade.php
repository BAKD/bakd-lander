<section class="section contact-section">
        <div class="container">

    <div class="col-xs-12">
            <h1>Get In Touch With <strong>BAKD</strong>
                <p class="about-tagline text-center">
                    Send us any inquiries you may have and we'll get back to you ASAP
                </p>
            </h1>
            <div class="contact-wrapper">
                <form action="{{ route('contact.send') }}" method="POST" name="contact_form" class="form-vertical" id="contact_form">
                    <div class="form-group">
                        <i class="fa fa-user"></i>
                        <input type="text" name="name"  placeholder="Name" class="form-control" maxlength="200" required />
                    </div>
                    <div class="form-group">
                        <i class="fa fa-at"></i>
                        <input type="text" name="email" placeholder="Email Address" class="form-control" maxlength="200" required />
                    </div>
                    <div class="form-group">
                        <i class="fa fa-phone"></i>
                        <input type="text" name="phone" placeholder="Phone Number (Optional)" mmaxlength="20" class="form-control" />
                    </div>
                    <div class="form-group">
                        <select name="department" class="form-control">
                            <option value="General" selected>Support/General</option>
                            <option value="Developers">Developers/Jobs</option>
                            <option value="Investors">Investors/Donations</option>
                            <option value="Advisors">Advisors/Partners</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea name="message" class="form-control" rows="10" placeholder="Enter your message..." minlength="10" maxlength="3000" required></textarea>
                    </div>
                    <div class="btn-group">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-envelope"></i> SEND MESSAGE
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>