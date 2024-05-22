function slider() {
    function i() {
        $(".main_visual").delay(100).queue(function(i) {
                $(this).addClass("act"),
                    $(".main_txt").delay(500).fadeIn(600)
            }),
            a.eq(l).addClass("act").stop(!0, !0).queue(new Function).delay(1500).queue(function() {
                e && (a.removeClass("init"),
                    a.eq(n).removeClass("act"),
                    n++)
            }).dequeue(),
            l++,
            d++,
            r++,
            n > t && (n = 0),
            s > t && (s = 0),
            o > t && (o = 0),
            l > t && (l = 0),
            d > t && (d = 0),
            r > t && (r = 0)
    }
    var e = !1,
        a = $(".slider").children("li"),
        t = a.length - 1,
        n = 0,
        s = 0,
        o = 0,
        l = 0,
        d = 1,
        r = 2;
    setInterval(function() {
        e = !0,
            i()
    }, 6e3);
    i()
}

function loopslider() {
    $("#loopslider").each(function() {
        function i() {
            $("#loopslider_wrap").css({
                    left: "0"
                }),
                $("#loopslider_wrap").stop().animate({
                    left: "-" + a + "px"
                }, 4e4, "linear"),
                setTimeout(function() {
                    i()
                }, 4e4)
        }
        $(this).width();
        var e = $(this).height();
        $(this).children("ul").wrapAll('<div id="loopslider_wrap"></div>');
        var a = $("#loopslider_wrap").children("ul").children("li").width() * $("#loopslider_wrap").children("ul").children("li").length;
        $("#loopslider_wrap").css({
                top: "0",
                left: "0",
                width: 2 * a,
                height: e,
                overflow: "hidden",
                position: "absolute"
            }),
            $("#loopslider_wrap ul").css({
                width: a
            }),
            i(),
            $("#loopslider_wrap ul").clone().appendTo("#loopslider_wrap")
    })
}

loopslider();
setTimeout(function() {
    $(".Splash--home-01").addClass('fadein');
    setTimeout(function() {
        $("#loopslider").addClass('fadein');
    }, 300);
}, 1000);
if($('.work-list-slider').length > 0) {
    $('.work-list-slider').owlCarousel({
        loop: false,
        margin: 30,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            }
        }
    });
}


// New Javascript
// Detect request animation frame
var scroll = window.requestAnimationFrame ||
    function(callback) { window.setTimeout(callback, 1000 / 60) };

var effectImg = document.querySelectorAll('.EffectImg');
var splashAnim = document.querySelectorAll('.Splash');
var titleAnim = document.querySelectorAll('.sec-title-ja');
var countAnim = document.querySelectorAll('.jscount_ani');

function loop() {
    Array.prototype.forEach.call(countAnim, function(element) {
        if (isElementInViewport(element)) {
            if(element.classList.contains('count_done')) {
            } else {
                counter(element);
                element.classList.add('count_done');
            }
        } else {
            // element.classList.remove('is-visible');
        }
    });
    Array.prototype.forEach.call(effectImg, function(element) {
        if (isElementInViewport(element)) {
            if (element.classList.contains('sec-top-thumb-inner')) {
                setTimeout(() => {
                    element.classList.add('fadein');
                }, 2000);
            } else {
                setTimeout(() => {
                    element.classList.add('fadein');
                }, 1000 / 3);
            }
        } else {
            // element.classList.remove('is-visible');
        }
    });
    Array.prototype.forEach.call(splashAnim, function(element) {
        if (isElementInViewport(element)) {
            setTimeout(() => {
                element.classList.add('fadein');
            }, 1000 / 3);
        } else {
            // element.classList.remove('is-visible');
        }
    });
    Array.prototype.forEach.call(titleAnim, function(element) {
        if (isElementInViewport(element)) {
            setTimeout(() => {
                element.classList.add('fadein');
                setTimeout(() => {
                    element.classList.add('out');
                }, 490);
            }, 1000 / 3);
        } else {
            // element.classList.remove('is-visible');
        }
    });
    scroll(loop);
}
function counter(obj) {
    let start = 0;
    let end = parseInt(obj.textContent);
    let current = start;
    let range = end - start;
    let increment = Math.floor(range / 100);
    if(increment <= 0) {
        increment = 1;
    }
    let timer = setInterval(() => {
        current += increment;
        if(current > end) {
            current = end;
        }
        obj.textContent = current;
        if (current >= end) {
            clearInterval(timer);
        }
    }, 10);
}
function counter_fullparam(id, start, end, duration) {
    let obj = document.getElementById(id);
    current = start;
    range = end - start;
    increment = end > start ? 1 : -1;
    step = Math.abs(Math.floor(duration / range));
    timer = setInterval(() => {
        current += increment;
        obj.textContent = current;
        if (current == end) {
            clearInterval(timer);
        }
    }, step);
}
// Call the loop for the first time
loop();

// Helper function from: http://stackoverflow.com/a/7557433/274826
function isElementInViewport(el) {
    // special bonus for those using jQuery
    if (typeof jQuery === "function" && el instanceof jQuery) {
        el = el[0];
    }
    var rect = el.getBoundingClientRect();
    return (
        (rect.top <= 100 &&
            rect.bottom >= 100) ||
        (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.top <= (window.innerHeight || document.documentElement.clientHeight)) ||
        (rect.top >= 100 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
    );
}