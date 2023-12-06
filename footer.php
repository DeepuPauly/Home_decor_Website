 <!-- footer -->
    <footer class="w3l-footer-16 py-5">
        <div class="container pt-md-5 pt-sm-4 pb-sm-2">
            <div class="row">
                <div class="col-lg-4">
                    <a class="footer-logo d-flex align-items-center" href="">
                        Gleaming<span>House</span></a>
                    <p class="mt-3">We brings you closer the most beautiful decor items. Reasonable pricing with promising service to enchance the shopping experience of every customer. Get updated with what's new in the decor cart with the one stop solution for all.</p>
                   <!--  <div class="columns-2 mt-4">
                        <ul class="social">
                            <li><a href="#facebook"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li><a href="#linkedin"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li><a href="#twitter"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li><a href="#google"><i class="fab fa-google-plus-g"></i></a>
                            </li>
                            <li><a href="#github"><i class="fab fa-github"></i></a>
                            </li>
                        </ul>
                    </div> -->
                </div>
                <div class="col-lg-5 mt-lg-0 mt-5">
                    <div class="row">
                        <div class="col-xl-5 col-6 column">
                            <h3 class="">Quick Link</h3>
                            <ul class="footer-gd-16">
                                <li><a href="login.php">Home</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="faq.php">FAQ</a></li>
                                <!-- <li><a href="#blog">Blog Posts</a></li>
                                <li><a href="contact.html">Contact Us</a></li> -->
                            </ul>
                        </div>
                        <div class="col-xl-5 col-6 column px-xxl-0">
                            <h3 class="">Contact Info</h3>
                            <ul class="footer-contact-list">
                                <li class="">Gleaming house, Rajagiri Valley, Kakkanad, Kerala</li>
                                <li class="mt-2"><a href="tel:+12 23456790">+91 7510289032</a></li>
                                <li class="mt-2"><a href="mailto:info@example.com">gleaminghouse@gmail.com</a></li>
                                <li class="mt-2"><a href="mailto:info@example.com">www.gleaminghouse.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-7 col-8 column mt-lg-0 mt-4">
                    <h3 class="">Opening Hours</h3>
                    <ul class="list-footer-block">
                        <li>
                            Monday
                            <span>9:00 - 18:00</span>
                        </li>
                        <li>
                            tuesday
                            <span>10:00 - 19:00</span>
                        </li>
                        <li>
                            Wednesday
                            <span>8:00 - 17:00</span>
                        </li>
                        <li>
                            Thursday
                            <span>10:00 - 19:00</span>
                        </li>
                        <li>
                            Friday
                            <span>10:00 - 19:00</span>
                        </li>
                        <li>
                            Saturday
                            <span>10:00 - 19:00</span>
                        </li>
                        <li>
                            Sunday
                            <span>closed</span>
                        </li>
                    </ul>
                </div> -->
            </div>
            <div class="below-section text-center pt-4 mt-5">
                <p class="copy-text">&copy; 2012 Gleaming House. All rights reserved. Design by <a
                        href="https://w3layouts.com/" target="_blank"> Group 24</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- banner slick slider -->
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/script.js"></script>
    <!-- //banner slick slider -->

    <!-- magnific-popup javascript -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });
    </script>
    <!-- //magnific-popup javascript -->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap -->
    <!-- //Js scripts -->
</body>

</html>