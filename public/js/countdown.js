var $countdown = $('#alpha-countdown');
var $countdownTitle = $('#countdown-main-title');
var $launchDiv = $('#launch-div');

// Next feature set launch date (2 week sprints)
var launchDate = moment('2018-11-01T23:45:00-00:00');

$(window).on('load', function() {
    if (moment(launchDate).isAfter(moment())) {
        console.log('Currently before the specified launch date for this feature set. Showing launch countdown.');
        
        var labels = ['weeks', 'days', 'hours', 'minutes', 'seconds'],
            nextYear = launchDate.toDate(),
            template = _.template($('#alpha-countdown-template').html()),
            currDate = '00:00:00:00:00',
            nextDate = '00:00:00:00:00',
            parser = /([0-9]{2})/gi;


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
    } else {
        console.log('Currently after the specified launch date for this feature set. Showing launch div.');
        $launchDiv.show();
        $countdownTitle.hide();
        $countdown.hide();
    }
});