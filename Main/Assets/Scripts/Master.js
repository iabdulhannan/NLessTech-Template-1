window.onload = function () {

    $(document).ready(function () {
        var resizeTimer;
        generateLine();
        $(window).resize(function () {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function () {
                // var body_size = $(window).width();
                const nav = $('nav');
                const line = $(".line");
                line.appendTo(nav);
                const active = nav.find('.active');

                if (active.length) {
                    let pos = active.position().left;
                    let wid = active.width();
                    line.css({left: pos, width: wid});
                }
            }, 1);
        });
        function generateLine() {
            const nav = $('nav');
            const line = $('<div />').addClass('line');
            line.appendTo(nav);
            var active = nav.find('.active');
            var pos = 0;
            var wid = 0;
            if (active.length) {
                pos = active.position().left;
                wid = active.width();
                line.css({
                    left: pos,
                    width: wid
                });
            }
            nav.find('ul li a').click(function (e) {
                // e.preventDefault();
                if (!$(this).parent().hasClass('active') && !nav.hasClass('animate')) {

                    nav.addClass('animate');

                    var _this = $(this);

                    nav.find('ul li').removeClass('active');

                    var position = _this.parent().position();
                    var width = _this.parent().width();

                    if (position.left >= pos) {
                        line.animate({
                            width: ((position.left - pos) + width)
                        }, 300, function () {
                            line.animate({
                                width: width,
                                left: position.left
                            }, 150, function () {
                                nav.removeClass('animate');
                            });
                            _this.parent().addClass('active');
                        });
                    } else {
                        line.animate({
                            left: position.left,
                            width: ((pos - position.left) + wid)
                        }, 300, function () {
                            line.animate({
                                width: width
                            }, 150, function () {
                                nav.removeClass('animate');
                            });
                            _this.parent().addClass('active');
                        });
                    }

                    pos = position.left;
                    wid = width;
                }
            });
        }
    });

    $(document).scroll(function () {
        var $nav = $("#fixed-header");
        $nav.toggleClass("navMoved", $(this).scrollTop() > $('section:first-of-type').height());
        // $('#navReqDemoBtn').toggleClass("hidden", $(this).scrollTop() > $('section:first-of-type').height());
        // $nav.toggleClass('stick', $(this).scrollTop() > $nav.height());
        // $("li a").toggleClass('text-white', $(this).scrollTop() > $('#first').height());
        // $("button[type='button']").toggleClass('from-indigo-800 hover:to-blue-500 text-gray-200 ', $(this).scrollTop() > $nav.height());

        var y = $(this).scrollTop();
        let height = $('section:first-of-type').height();
        if (y > height) {

            $('#navReqDemoBtn').removeClass('hidden');
            $('.socialIconsDiv').fadeIn();
            $('#navSiteName').fadeIn();
        } else {
            $('#navReqDemoBtn').addClass('hidden');
            $('.socialIconsDiv').fadeOut();
            $('#navSiteName').fadeOut();
        }


    });


}
