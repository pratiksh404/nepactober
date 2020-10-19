//*****Document Ready Event***********
$(document).ready(function () {
    $('#msg').fadeIn('slow');
});
//The ready event occurs when the DOM (document object model) has been loaded.
//Good Habit:always start with ready or load(prefered) event handler when writing jquery code.

//************load event*************

$(window).on('load', function () {
    alert('loaded');
});




//The Difference between $(document).ready() and $(window).load() functions is that the code included inside $(window).load() will run once the entire page(images, iframes, stylesheets,etc) are loaded whereas the document ready event fires before all images,iframes etc. are loaded, but after the whole DOM itself is ready ...


$(window).on('unload', function () {
    console.log('you left the page');
});
//unload fires when you leave the page

//*************selector***********


/*var count = $('*').length;
alert(count);
this selects all the element in DOM and in this case it cal the no of element

*/

var c = $('#hey').find('*').length;
alert(c);
$('h1').text('drh2s04');

//$('h1:first').text('first dr');

$(':button').click(function () {
        alert('hello');
        $(":button").attr('value', 'please wait');
    }

);
$(':text').focusin(function () {
    $(this).css("background-color", "red").fadeIn('slow');
});
$(':text').blur(function () {
    $(this).css("background-color", "#ffffff").fadeIn('slow');
});
$(':button').click(function () {
    $('p').css("background-color", "black").css("color", "white");
});
$("input[name='btnnn'],#para").click(function () {
    alert("multiple selector triggered.");
});
$(document).ready(function () {
    $('#OE p:even').addClass('color');
});


//selector criteria for type is starting from : like above
//in this case it counts the element of specified element
//find function serach for that particular element

/* *****note*****
val =  return the cotent of value;
text() = returns the cont(text) inside that specified element
confirm() = its boolean function usally used when confirming something it takes 0 and 1 as returned value
click() = fires when clicked
focusin() = The focusin event occurs when an element (or any elements inside it) gets focus.
blur() = The blur event occurs when an element loses focus.
*/
$(document).ready(function () {
    $('#search').keyup(function () {
        searchName = $(this).val();

        $('#names li:contains(" ' + searchName + '")').addClass('highlight');



    });
});

/*******Basic form field selection**************/
$('#meroForm').on('load', function () {
        $('this type:text').focusin(function () {
            $(this).addClass('inputColor').fadeIn('slow');
        });
        $('this type:text').blur(function () {
            $(this).removeClass('inputColor').fadeOut('slow');
        });

    })
    .submit(function () {
        var user_email = $('#user_email').val();
        alert('email send to ' + user_email + ' sucesfully');
    });
//submit()=fires when clicked submit

/******************Font size switcher**************************/
$(document).ready(function () {
    $('#big').click(function () {
        $('#para').css('fontSize', '60px');
    });
    $('#small').click(function () {
        $('#para').css('fontSize', '10px');
    });
});


/******************Enable submit button after file selected******/
$(document).ready(function () {
    $('#file').change(function () {
        $('#upload').removeAttr('disabled');
    });

});

/**********hide show***************/
$(document).ready(function () {
    $('#hideBtn').click(function () {
        $('#hideContent').hide();
    });
    $('#showBtn').click(function () {
        $('#hideContent').show();
    });
});
/*************double click****************/
$(document).ready(function () {
    $('#menu_link').dblclick(function () {
        $('#menu').show();
    });
});

/**************KeyUp/down************************/
$(document).ready(function () {
    $('#feedback_text').keyup(function () {
        var userFeedBack = $(this).val();
        $('#user_feedback').html(userFeedBack);
    });
});
//KeyUp event is fired when you release a key that just pressed. keyPress event is little special,the keyPress event is fired when you press down on a key that display a character (letter,number etc.) for example if you press and release a character key such as Y, you will see keyDown,keyPress and keyUp event is fired.

/*****************TOOGLE*********************/
$(document).ready(function () {
    $('#toggle-btn').toggle(
        function () {
            $('#toggle-para').hide(1000);
        },
        function () {
            $('#toggle-para').show(1000);
        }
    );
});

/*************hover*********************/
$(document).ready(function () {
    $('#movies').hover(function () {
        $('#menu_feedback').css('color', 'red');
    });
    $('#songs').hover(function () {
        $('#menu_feedback').css('color', 'blue');
    });
    $('#codes').hover(function () {
        $('#menu_feedback').css('color', 'green');
    });
});

/**************SCROLL*********************/
$(document).ready(function () {
    $('#scroll_text').scroll(function () {
        var scrollPosition = $('#scroll_text').scrollTop();
        $('#scroll_position').html('you have scrolled and your scroll position is ' + scrollPosition);
    });
});
//The vertical scroll position is the same as the number of pixels that are hidden from view above the scrollable area. If the scroll bar is at the very top, or if the element is not scrollable, this number will be 0.

/*****************Select***********************/
$(document).ready(function () {
    $('#select_text').select(function () {
        var valSelect = $(this).val();
        $('#select_val').html(valSelect + ' is selected');
    });
});

/***************Live and After******************/
$(document).ready(function () {
    $("#duplicate").on({
        click: function () {
            $(this).after('<button id="duplicate">DUPLICATE</button>');
        }
    });
});

//The live() method was deprecated in jQuery version 1.7, and removed in version 1.9. Use the on() method instead.
//The on() method attaches one or more event handlers for the selected elements and child elements.
//The after() method inserts specified content after the selected elements.


/***********Character Counting Remaining on Textarea***************/
$(document).ready(function () {
    var textmax = 55;
    $('#maxTextArea').keyup(function () {

        var textLength = $(this).val().length;
        var remaining = textmax - textLength;

        $('#textareaCount').html(textmax + '/' + remaining);
    });

});

//length() == error......use length
$(document).ready(function () {
    $('.hoverOver').mousemove(function (e) {
        var toolpit = $(this).attr('hovertext');
        $('.hoverDiv').show().text(toolpit);
        $('.hoverDiv').css('top', e.clientY - 10).css('left', e.clientX - 10);
    });
    $('hoverOver').mouseout(function () {
        $('.hoverDiv').hide();
    });
});
//clientY = tracks the clients y coordinate
//clientX =tracks the clients x coordinate
//mousemove = fires when mouse is moved over them

/**********toggleClass*************/
$(document).ready(function () {
    $('#toogleC').click(function () {
        $(this).toggleClass('highlight style');
    });
});
/*******combine***************/
$(document).ready(function () {
    $('#combine').click(function () {
        var combinedText = '';
        $(':text').each(function () {
            combinedText += $(this).val() + ' ';
            $('#combinedAns').html(combinedText);
        });
    });
});
//The each() method specifies a function to run for each matched element.
$(document).ready(function () {
    $('#namesss').find('li').first().append('(first)');
    $('#namesss').find('li').first().next().append('(second)');
    $('#namesss').find('li').last().append('(last)');


    $('#menusss').find('li').first().addClass('bold').click(function () {
        $(this).nextAll().toggle();
    }).nextAll().hide();

});
/****notes**********/
//The append() method inserts specified content at the end of the selected elements.
//The nextAll() method returns all next sibling elements of the selected element.
//next() - returns the next sibling element of the selected element
//nextUntil() - returns all next sibling elements between two given arguments
//The find() method returns descendant elements of the selected element.A descendant is a child, grandchild, great-grandchild, and so on.
/******************HAS*************************/
$(document).ready(function () {
    $('ul').each(function () {
        thisSel = $(this);

        if (thisSel.has('li').length == 0) {
            thisSel.after("emty menu");
        }
    });
});
//The has() method returns all elements that have one or more elements inside of them, that matches the specified selector.Tip: To select elements that have multiple elements inside of them, use comma (see example below).
/*************SLIDE********************/
$(document).ready(function () {
    $('.slidee').slideDown(3000);
});
$(document).ready(function () {
    $('#imgToggle').click(function () {
        $('#imageToggle').slideToggle(8000);
    });
    $('#imgToggleStop').click(function () {
        $('#imageToggle').stop();
    });
});

/******************delay*******************/
$(document).ready(function () {
    $('#delay').click(function () {
        $('#delayImage').fadeOut().delay(5000).fadeIn();
    });
});
//The fadeTo() method gradually changes the opacity, for selected elements, to a specified opacity (fading effect).
/**************appendTo*************/
$(document).ready(function () {
    $('#appendBtn').click(function () {
        $('#appended').appendTo('#appendSrc').toggle();
    });
});
//The clone() method makes a copy of selected elements, including child nodes, text and attributes.
//The parseInt() function parses a string and returns an integer.

/*****important******/
/*************Append Option******************/
$(document).ready(function () {
    $('.link').click(function () {
        var appendlist = $(this).text();
        $('#list').append('<option>' + appendlist + '</option>');
    });
});

/**********scrollOnTop*************/
$(document).ready(function () {
    $('#scrollOnTop').click(function () {
        $('html,body').animate({
            scrollTop: 0
        }, 1000);
    });
});
/*The jQuery animate() method is used to create custom animations.

Syntax:

$(selector).animate({params},speed,callback);*/

/************Enablingcheckboxafterscrolling***************/
$(document).ready(function () {
    $('#terms').scroll(function () {
        var textareaHeight = $(this)[0].scrollHeight;
        var scrollHeight = textareaHeight - $(this).height();
        var scrollTop = $(this).scrollTop();

        if (scrollTop == scrollHeight) {
            $('#agreement').removeAttr('disabled');
        }
    });
});

/***************inArray*******************/
$(document).ready(function () {
    var nam = [
        'bruce',
        'superman',
        'wonderwoman'
    ];
    $('#check').click(function () {
        var nme = $('#inArray').val();
        if (jQuery.inArray(nme, nam) != '-1') {
            $('#inArrayfeedback').html(nme + ' is in Array')
        } else {
            $('#inArrayfeedback').html(nme + ' is not in Array')
        }

    });
});
//So if it returns the value of 0 which is index 0 in an array it is the same as returning false aka the code won't work.That's why he uses -1 so the code works.
//The $.inArray() method is similar to JavaScript's native .indexOf() method in that it returns -1 when it doesn't find a match. If the first element within the array matches value, $.inArray() returns 0.

/*****************now***********************/
$(document).ready(function () {
    setInterval(function () {
        var timestamp = jQuery.now();
        $('#time').html(timestamp);
    }, 1);
});
//The setInterval() method calls a function or evaluates an expression at specified intervals (in milliseconds).

/*************Days Untill Event******************/
$(document).ready(function () {
    var eventTime = Date.parse('september 8 2019') / 1000;
    var currentTime = Math.floor(jQuery.now() / 1000);

    var leftSecond = eventTime - currentTime;
    var leftDays = Math.floor(leftSecond / (60 * 60 * 24));

    $('#days').html(leftDays + ' days left for my birthday');
});
//The parse() method parses a date string and returns the number of milliseconds between the date string and midnight of January 1, 1970.
/************loadFile****************/
$(document).ready(function () {
    $('#load').click(function () {
        $('#loadFile').load('HoverOverDescription.html');
    });
});
//The load() method loads data from a server and puts the returned data into the selected element.
/***************SimplecountDown******************/
$(function () {
    $('#countdownSimple').countdownSimple({
        from: 5
    }, function () {
        $(this).window.location = "http://drh2so4.ga/?i=1";
    });
});
/*********************DayHourMinSecCountdown******************/



$(function () {
    $('#countDown').countdownDHMS({
        date: 'september 8 2019'
    }, function () {
        $('#countDown').html('happy birthday Pratik!!');
    });
});

/***************draggable********************/
$(document).ready(function () {
    $('#drag').draggable();
});
/*************hughlight****************/
$(document).ready(function () {
    $('#hl').highlight({
        color: 'red'
    });
});
