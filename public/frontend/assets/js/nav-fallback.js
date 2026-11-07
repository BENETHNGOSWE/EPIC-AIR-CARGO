/* Phone-menu fallback. The drawer is normally built by the theme's own plugin, validnavs.js,
   which marks it by adding .collapse-mobile to .navbar-collapse below its 1024px breakpoint.
   If that script never runs - blocked, or an error thrown by anything earlier in the list - the
   toggle button exists and is visible but does nothing, which is just as useless as no button.

   This waits for the plugin to mark the drawer and only wires the button itself if that never
   happened, so it can never double-bind. The 1023px gate matters: validnavs.css styles
   .collapse-mobile with position:fixed and width:400px outside any media query, so applying that
   class on a desktop viewport would pin the whole menu into a floating panel. */
(function () {
    "use strict";

    var MQ = "(max-width: 1023px)";

    function start() {
        var nav = document.querySelector("nav.validnavs");
        if (!nav) { return; }
        var col = nav.querySelector(".navbar-collapse");
        var btns = nav.querySelectorAll(".navbar-toggle");
        if (!col || !btns.length) { return; }

        var mq = window.matchMedia(MQ);

        function paint(open) {
            col.classList.toggle("collapse-mobile", open && mq.matches);
            col.classList.toggle("show", open && mq.matches);
            if (!mq.matches) { col.classList.remove("collapse-mobile"); col.classList.remove("show"); }
            document.body.classList.toggle("on", open && mq.matches);
            for (var i = 0; i < btns.length; i++) {
                var icon = btns[i].querySelector("i");
                if (icon) { icon.className = "fa " + (open ? "fa-times" : "fa-bars"); }
            }
        }

        setTimeout(function () {
            if (col.classList.contains("collapse-mobile")) { return; }   /* plugin is alive */
            for (var i = 0; i < btns.length; i++) {
                btns[i].addEventListener("click", function (e) {
                    e.preventDefault();
                    paint(!col.classList.contains("show"));
                });
            }
            document.addEventListener("click", function (e) {
                if (!col.classList.contains("show")) { return; }
                if (col.contains(e.target)) { return; }
                for (var i = 0; i < btns.length; i++) { if (btns[i].contains(e.target)) { return; } }
                paint(false);
            });
            var esc = function (e) { if (e.key === "Escape") { paint(false); } };
            document.addEventListener("keydown", esc);
            if (mq.addEventListener) { mq.addEventListener("change", function () { paint(false); }); }
        }, 500);
    }

    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", start);
    } else {
        start();
    }
})();
