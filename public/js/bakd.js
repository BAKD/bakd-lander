//--------------------------------------
// Main BAKD Landing Page Javascript
// Author: Tom Grenier <tom@bakd.io>
// Created: 09/02/2018
//--------------------------------------
Noty.overrideDefaults({
    layout: 'topRight',
    timeout: 7500,
    progressBar: 'true',
    theme: 'bootstrap-v4',
    closeWith: ['click'],
    animation: {
        open: 'animated fadeInRight',
        close: 'animated fadeOutRight'
    }
});

setTimeout(function() {
    $('#welcome_preloader').fadeOut();
}, 4000);

$(function() {
    new WOW().init();

    // Main content text slider
    $(".info-slider").slick({
        infinite: true,
        slidesToShow: 1,
        autoplay: true,
        speed: 700,
        swipe: true,
        slidesToScroll: 1,
        fade: true,
        arrows: false,
        swipeToSlide: true,
        autoplaySpeed: 5000,
        centerPadding: '0px',
    });

    $('.lazy').Lazy({
        placeholder: "data:image/gif;base64,R0lGODlhEALAPQAPzl5uLr9Nrl8e7...",
        scrollDirection: 'vertical',
        effect: 'fadeIn',
        visibleOnly: false,
        onError: function(element) {
            console.log('Unable to load the following image: ' + element.data('src'));
        }
    });

    $('[data-toggle="tooltip"]').tooltip();

    var $subscriberForm = $('form[name=subscriber_form]');
    var $subscriberFormFooter = $('form[name=subscriber_form_footer]');
    var $alphaAccessForm = $('#alpha_access_form');
    var $contactForm = $('form[name=contact_form]');

    $contactForm.on('submit', function(event) {
        event.preventDefault();
        handleContactFormSubmission($contactForm, false);
        return false;
    });

    $subscriberForm.on('submit', function(event) {
        event.preventDefault();
        handleNewSubscriber($subscriberForm, false);
        return false;
    });

    $subscriberFormFooter.on('submit', function(event) {
        event.preventDefault();
        handleNewSubscriber($subscriberFormFooter, false);
        return false;
    });

    $alphaAccessForm.on('submit', function(event) {
        event.preventDefault();
        handleNewSubscriber($alphaAccessForm, true);
        return false;
    });

    function handleContactFormSubmission($form, closeModal) {
        var $submit = $form.find('button[type=submit]');
        var originalBtnHtml = $submit.html();
        var preloaderHtml = '<i class="fa fa-spin fa-spinner"></i>';

        $submit.html(preloaderHtml);
        $submit.prop('disabled', true);

        $.ajax({
            url: $form.attr('action'),
            method: $form.attr('method'),
            data: $form.serializeArray(),
        }).done(function(response) {
            if (response && response.sent !== true) {
                new Noty({
                    type: 'error',
                    text: '<i class="fa fa-times-circle"></i> Unable to send message. Please try again or contact us directly at support@bakd.io',
                }).show();
                $form.find('input[name=email_address]').focus();
            } else {
                new Noty({
                    type: 'success',
                    text: '<i class="fa fa-check-circle"></i> Your message was successfully sent!',
                }).show();

                $form.find('textarea').val('').focus();
            }
        }).fail(function() {
            new Noty({
                type: 'error',
                text: '<i class="fa fa-times-circle"></i> Error making request. Please try again or contact an administrator if the problem persists.',
            }).show();
        }).always(function() {
            $submit.html(originalBtnHtml);
            $submit.prop('disabled', false);
        });
    }

    function handleNewSubscriber($form, closeModal) {
        var $submit = $form.find('button[type=submit]');
        var originalBtnHtml = $submit.html();
        var preloaderHtml = '<i class="fa fa-spin fa-spinner"></i>';

        $submit.html(preloaderHtml);
        $submit.prop('disabled', true);

        $.ajax({
            url: $form.attr('action'),
            method: $form.attr('method'),
            data: $form.serializeArray(),
        }).done(function(response) {
            if (response && response.status === 'error') {
                new Noty({
                    type: 'error',
                    text: '<i class="fa fa-times-circle"></i> ' + response.message,
                }).show();
                $form.find('input[name=email_address]').focus();
            } else {
                new Noty({
                    type: 'success',
                    text: '<i class="fa fa-check-circle"></i> ' + response.message,
                }).show();

                if (closeModal) {
                    $('.modal').modal('hide');
                } else {
                    // Clear the email input
                    $form.find('input[name=email_address]').val('').focus();
                }
            }
        }).fail(function() {
            new Noty({
                type: 'error',
                text: '<i class="fa fa-times-circle"></i> Error making request. Please try again or contact an administrator if the problem persists.',
            }).show();
            $form.find('input[name=email_address]').focus();
        }).always(function() {
            $submit.html(originalBtnHtml);
            $submit.prop('disabled', false);
        });
    }


    $('.modal').on('shown.bs.modal', function(event) {
        closeSlideout();
    });


    // MOBILE SLIDEOUT
    var $mobileMenuBtn = $('#mobile_menu_btn');
    var $mobileMenu = $('#mobile_menu');
    var $closeSlideout = $('#close_slideout');

    $mobileMenuBtn.on('click', function(event) {
        var $this = $(this);
        if ($mobileMenu.hasClass('open')) {
            closeSlideout();
        } else {
            openSlideout();
        }
    });

    $closeSlideout.on('click', function(event) {
        event.preventDefault();
        closeSlideout();
    });

    function openSlideout() {
        $mobileMenu.animate({
            right: 0,
        }, 750);
        $mobileMenu.addClass('open');
    }

    function closeSlideout() {
        $mobileMenu.animate({
            right: '-' + ($mobileMenu.width() + 20),
        }, 750);
        $mobileMenu.removeClass('open');
    }
});

/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
// particlesJS.load('particles-js', 'js/data/particles.json', function() {
//     // console.log('particles.js config loaded');
// });