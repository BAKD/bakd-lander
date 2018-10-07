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

$(function() {
    $('[data-toggle="tooltip"]').tooltip();
});

setTimeout(function() {
    $('#welcome_preloader').fadeOut();
}, 2500);

var launchDate = moment('2018-10-07T23:45:00-00:00');

$(window).on('load', function() {
    var labels = ['weeks', 'days', 'hours', 'minutes', 'seconds'],
        nextYear = launchDate.toDate(),
        template = _.template($('#alpha-countdown-template').html()),
        currDate = '00:00:00:00:00',
        nextDate = '00:00:00:00:00',
        parser = /([0-9]{2})/gi,
        $countdown = $('#alpha-countdown');


    // Parse countdown string to an object
    function strfobj(str) {
        var parser = /([0-9]{2})/gi;
        var parsed = str.match(parser),
            obj = {};
        labels.forEach(function(label, i) {
            obj[label] = parsed[i]
        });
        return obj;
    }
    // Return the time components that diffs
    function diff(obj1, obj2) {
        var diff = [];
        labels.forEach(function(key) {
            if (obj1[key] !== obj2[key]) {
                diff.push(key);
            }
        });
        return diff;
    }
    // Build the layout
    var initData = strfobj(currDate);
    labels.forEach(function(label, i) {
        $countdown.append(template({
            curr: initData[label],
            next: initData[label],
            label: label
        }));
    });
    // Starts the countdown
    $countdown.countdown(nextYear, function(event) {
        var newDate = event.strftime('%w:%d:%H:%M:%S'),
            data;
        if (newDate !== nextDate) {
            currDate = nextDate;
            nextDate = newDate;
            // Setup the data
            data = {
                'curr': strfobj(currDate),
                'next': strfobj(nextDate)
            };
            // Apply the new values to each node that changed
            diff(data.curr, data.next).forEach(function(label) {
                var selector = '.%s'.replace(/%s/, label),
                    $node = $countdown.find(selector);
                // Update the node
                $node.removeClass('flip');
                $node.find('.curr').text(data.curr[label]);
                $node.find('.next').text(data.next[label]);
                // Wait for a repaint to then flip
                _.delay(function($node) {
                    $node.addClass('flip');
                }, 50, $node);
            });
        }
    });



    $('.mCustomScrollbar').mCustomScrollbar();

    var $subscriberForm = $('#subscriber_form');
    var $alphaAccessForm = $('#alpha_access_form');

    $subscriberForm.on('submit', function(event) {
        event.preventDefault();
        handleNewSubscriber($subscriberForm, false);
        return false;
    });

    $alphaAccessForm.on('submit', function(event) {
        event.preventDefault();
        handleNewSubscriber($alphaAccessForm, true);
        return false;
    });

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