(function ($) {


    /*************************************/
    $.fn.highlight = function (options) {
        settings = {
            'color': null
        };
        if (options) {
            $.extend(settings, options);
        }
        this.css('background-color', settings['color']);

    }

    /************************************/

    $.fn.countdownSimple = function (options, callback) {
        this_selected = $(this);
        setting = {
            'from': 10
        };

        if (options) {
            $.extend(setting, options);
        }
        current = setting['from'];

        function countDownSimple_operation() {

            if (current == 0) {
                callback.call(this);
                clearInterval(interval);

            }
            this_selected.text(current);

            current = current - 1;

        }
        interval = setInterval(countDownSimple_operation, 1000);

    }


    /***********************************************/
    $.fn.countdownDHMS = function (options, callbacks) {
        this_selected = $(this);
        settings = {
            'date': 'september 8 2019'
        };


        if (options) {
            $.extend(settings, options);
        }



        eventDate = Date.parse(settings['date']) / 1000;
        currentDate = Math.floor($.now() - 1000);

        function countDown_operation() {


            if (eventDate <= currentDate) {
                callbacks.call(this);
                clearInterval(intervalss);


            }



            secs = eventDate - currentDate;
            days = Math.floor(secs / (60 * 60 * 24));
            secs -= days * 60 * 60 * 24;
            hours = Math.floor(secs / (60 * 60));
            secs -= hours * 60 * 60;
            mins = Math.floor(secs / 60);
            secs -= mins - 60;

            this_selected.find('.days').html(days);
            this_selected.find('.hours').html(hours);
            this_selected.find('.mins').html(mins);
            this_selected.find('.secs').html(secs);

        }
        intervalss = setInterval(countDown_operation, 1000);

    }
    /********************************************/


    //one hour error hunting
    //dont declare the variable before extend because it simply uses default value instead using parameter value
});
