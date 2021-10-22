<footer>
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 mt-0 m-auto text-center">
                    <div class="mb-4">
                        <img class="w-75 m-auto ms-0" src="Assets/images/HomePage/FooterImg01.png" alt="">
                        <h4>ATLANTA</h4>
                        <ul class="ATLANTA">
                            <li>
                                2133 Lawrenceville-Suwanee Rd, Suite 12-343,
                                Suwanee, GA 30024, USA.
                            </li>
                            <li>
                                +1 (470) 236 5338 (24/7 Support Line).
                            </li>
                            <li>
                                contact@offsourze.com
                            </li>
                        </ul>
                    </div>
                    <img class="w-75 m-auto ms-0" src="Assets/images/HomePage/FooterImg02.png" alt="">
                    <h4>KARACHI</h4>
                    <ul class="KARACHI">
                        <li>
                            2133 Lawrenceville-Suwanee Rd, Suite 12-343,
                            Suwanee, GA 30024, USA.
                        </li>
                        <li>
                            +92 334 2312662 (24/7 Support Line).
                        </li>
                        <li>
                            info@granddigitals.com
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h5>Quick Links</h5>
                    <ul>
                        <li>
                            Home
                        </li>
                        <li>
                            Plans
                        </li>
                        <li>
                            Services
                        </li>
                        <li>
                            Contact Us
                        </li>
                        <li>
                            Blogs
                        </li>
                    </ul>
                    <hr>
                    <h5>Outsourcing Plans</h5>
                    <ul>
                        <li>
                            White Labelling
                        </li>
                        <li>
                            Resource Outsourcing
                        </li>
                        <li>
                            Agency Setup
                        </li>
                        <li>
                            Agency Branding
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 Services">
                    <h5>Services</h5>
                    <ul>
                        <li>
                            Creative Designing
                        </li>
                        <li>
                            Web Development
                        </li>
                        <li>
                            Social Media Marketing
                        </li>
                        <li>
                            Lead Generation
                        </li>
                        <li>
                            Website Traffic
                        </li>
                        <li>
                            Search Engine Optimization
                        </li>
                        <li>
                            App Development
                        </li>
                        <li>
                            VIdeo Development
                        </li>
                        <li>
                            Content Writing
                        </li>
                    </ul>
                    <hr class="w-50 Legal">
                    <h5>Legal</h5>
                    <ul>
                        <li>
                            Terms of Services
                        </li>
                        <li>
                            Refund Policy
                        </li>
                        <li>
                            Privacy Policy
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <img class="FooterImg03" src="Assets/images/HomePage/FooterImg03.png" alt="">
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $('.slider01').slick({
        centerMode: false,
        arrows: false,
        autoplay: true,
        dots: true,
        centerPadding: '0px',
        slidesToShow: 1,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: false,
                    centerPadding: '0px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: false,
                    centerPadding: '0px',
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.slider02').slick({
        centerMode: false,
        arrows: true,
        autoplay: true,
        centerPadding: '0px',
        slidesToShow: 1,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: false,
                    centerPadding: '0px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: false,
                    centerPadding: '0px',
                    slidesToShow: 1
                }
            }
        ]
    });


    $('.slider03').slick({
        centerMode: false,
        arrows: false,
        autoplay: true,
        centerPadding: '0px',
        slidesToShow: 3,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: false,
                    centerPadding: '0px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: false,
                    centerPadding: '0px',
                    slidesToShow: 1
                }
            }
        ]
    });

    $(document).ready(function() {
        $(".dropdown").hover(function() {
            var dropdownMenu = $(this).children(".dropdown-menu");
            if (dropdownMenu.is(":visible")) {
                dropdownMenu.parent().toggleClass("open");
            }
        });
    });
</script>
</body>

</html>