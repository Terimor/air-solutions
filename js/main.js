jQuery(function ($) {

	'use strict';
    


	// -------------------------------------------------------------
    // Sticky Menu
    // -------------------------------------------------------------
	    
        function menuSticky() { 
            var navHeight = $("#box").height();
            ($(window).scrollTop() > navHeight) ? $('nav').addClass('sticky') : $('nav').removeClass('sticky');
        }



    // -------------------------------------------------------------
    //  	Offcanvas Menu
    // -------------------------------------------------------------

        
        (function () {
            var menutoggle = $(".menu-toggle");
            var offcanvasmenu = $("#offcanvas-menu");
            var closemenu = $(".close-menu");

            menutoggle.on("click" ,function(){
                offcanvasmenu.addClass("toggled");
                return false;
            });

            closemenu.on("click" ,function() {
                offcanvasmenu.removeClass("toggled");
                return false;
            });
        }());



    // -------------------------------------------------------------
    //  Offcanvas Menu Sub-menu
    // -------------------------------------------------------------
        if ( $('.dropBar').length) {
            $('.dropBar').on("click" ,function(){
                $(this).parent().find('ul').slideToggle();
                return false;
            });
        }


    
    // -------------------------------------------------------------
    // Sub-menu
    // -------------------------------------------------------------
        if ( $('.dropmenu').length) {
            $('.dropmenu').on("click" ,function(){
                $(this).parent().find('ul').slideToggle();
                return false;
            });
        }



    // -------------------------------------------------------------
    //      Single-Page-Menu-Scrolling  Easy Plugin
    // -------------------------------------------------------------

        function singlePageScroll() {
            $('a.page-scroll').on('click', function(event) {
                var $anchor = $(this);
                $('html, body').stop().animate({
                     scrollTop: $($anchor.attr('href')).offset().top 
                }, 1500, 'easeInOutExpo');
                event.preventDefault();
            });
        }




    // -------------------------------------------------------------
    //      Search Bar
    // -------------------------------------------------------------

        (function () {
            var openbar = $(".open-bar");
            var searchbar = $("#search-bar");
            var closebar = $(".close-bar");

            openbar.on("click" ,function(){
                searchbar.addClass("active");
                return false;
            });

            closebar.on("click" ,function() {
                searchbar.removeClass("active");
                return false;
            });
        }());

    


    // -------------------------------------------------------------
    //      Map/Contact-Box-Remove
    // -------------------------------------------------------------

        (function () {
            var mapview = $(".map-view");
            var contactsection = $(".contact-section-one");
            var formview = $(".form-view");

            mapview.on("click" ,function() {
                contactsection.fadeOut('3000');
                return false;
            });

            formview.on("click" ,function() {
                contactsection.fadeIn('3000');
                return false;
            });
        }());



    // -------------------------------------------------------------
    //      Cart-Box-Open/Remove
    // -------------------------------------------------------------

        (function() {
            var openclose = $(".cart-wrapper");

            openclose.on("click" ,function() {
                return $(this).toggleClass("open");
            });

        }());




    // -------------------------------------------------------------
    //      LightBox-Js
    // -------------------------------------------------------------

        if ($('#lightBox').length) {
            $('#lightBox').poptrox({
                usePopupCaption: true,
                usePopupNav: true,
                popupPadding: 0
            });
        }



    // -------------------------------------------------------------
    //      Client-Slider
    // -------------------------------------------------------------

        if ($('.client-carousel').length) {
            $('.client-carousel').owlCarousel({
                loop:true,
                autoplay:true,
                autoplayTimeout: 3000,
                margin:10,
                dots:false,
                nav:true,
                responsive:{
                    0:{
                        items:1,
                        nav:false,
                    },
                    600:{
                        items:3,
                        nav:false,
                    },
                    1000:{
                        items:5
                    }
                }
            });
        }

        


    // -------------------------------------------------------------
    //  	expert-Slider
    // -------------------------------------------------------------

        if ($('.expert-carousel').length) {
            $('.expert-carousel').owlCarousel({
                loop:true,
                autoplay:true,
                margin:20,
                items:3,
                nav:false,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:3
                    }
                }
            });
        }



    // -------------------------------------------------------------
    //      service-Slider
    // -------------------------------------------------------------

        if ($('.service-carousel').length) {
            $('.service-carousel').owlCarousel({
                loop:true,
                autoplay:true,
                margin:20,
                items:3,
                nav:false,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:3
                    }
                }
            });
        }



    // -------------------------------------------------------------
    //      service-Slider
    // -------------------------------------------------------------

        if ($('#testimonial-carousel').length) {
            $('#testimonial-carousel').carousel({
                interval: 0
            });
        }



    // -------------------------------------------------------------
    //      Progress Bar
    // -------------------------------------------------------------
     
        function progressBar() {
            $('.progressSection').on('inview', function(event, visible, visiblePartX, visiblePartY) {
                if (visible) {
                    $.each($('div.progress-bar'),function(){
                        $(this).css('width', $(this).attr('aria-valuenow')+'%');
                    });
                    $(this).off('inview');
                }
            });
        }




    /*------------------------------------------
         STYLE SWITCHER
    -------------------------------------------*/  
        // HTML FOR COLOR SWITCHER
        // var switcherHtml = '<div class="style-switcher-box"><div class="switcher-inner"><h5>Style Switcher</h5><div class="main-list"><div class="list"><span class="list-title">Skin color</span><div class="sublist"><ul class="color-changer"><li class="color-default"></li><li class="color-style1"></li><li class="color-style2"></li><li class="color-style3"></li><li class="color-style4"></li><li class="color-style5"></li><li class="color-style6"></li><li class="color-style7"></li><li class="color-style8"></li><li class="color-style9"></li><li class="color-style10"></li></ul></div></div><div class="list pattern-bg"><span class="list-title">Skin pattern</span><div class="sublist"><ul class="pattern-changer"><li class="pattern-one"></li><li class="pattern-two"></li><li class="pattern-three"></li><li class="pattern-four"></li><li class="pattern-five"></li><li class="pattern-six"></li><li class="pattern-seven"></li><li class="pattern-eight"></li><li class="pattern-nine"></li><li class="pattern-ten"></li></ul></div></div><div class="list layout"><span class="list-title">Layout</span><div class="sublist"><ul class="layout-sw"><li>Full width</li><li class="box">Box</li></ul></div></div></div><p><span>Note: </span> This template is build with SASS. The skin color is only demo. You can change the color scheme as your like. </p> </div><button class="toggle-btn"><i class="fa fa-cog"></i></button> </div>';
        // var blankStyleInject = '<link href="assets/css/blank-color.css" rel="stylesheet" title="switchstyle">';
        // var htmlHead = $("head");

        //     $("body").append(switcherHtml);
        //     htmlHead.append(blankStyleInject);


        // function styleSwitcher() {
        //     if ($(".style-switcher-box").length) {
        //         var switcherHolder = $(".style-switcher-box"),
        //             btn = switcherHolder.find(".toggle-btn"),
        //             colorChangerBtn = $(".style-switcher-box .color-changer li"),
        //             layoutChangerBtn = $(".style-switcher-box .layout-sw li"),
        //             links = document.getElementsByTagName("link");
        //         var body = $("body");

        //         for (var i = 0; i <= links.length; i++){
        //             var title = links[i].getAttribute("title");
        //             if ( title == "switchstyle") {
        //                 var targetLink = links[i];
        //                 var href = links[i].getAttribute("href");
        //                 break;
        //             }
        //         }


        //         btn.on("click", function() {
        //             switcherHolder.toggleClass("toggle-switcherbox");
        //         })

        //         colorChangerBtn.on("click", function() {
        //             var $this = $(this);
        //             var styleFileName = $this.attr("class");
        //             targetLink.href = "assets/css/" + styleFileName + ".css";
        //         });

        //         layoutChangerBtn.on("click", function(e) {
        //             var $this = $(this);
        //             if ( $this.hasClass("box") ) {
        //                 body.addClass("box-layout");
        //             } else {
        //                 body.removeClass("box-layout");
        //             }
        //         })
        //     }
        // }

        // styleSwitcher();



    //-------------------------------------------------------
    //  	counter Section
    //-------------------------------------------------------
       
        function funFactCounting() {
            if ($('.counting-section').length) {
                $('.counting-section').on('inview', function(event, visible, visiblePartX, visiblePartY) {
                    if (visible) {
                        $(this).find('.timer').each(function () {
                            var $this = $(this);
                            $({ Counter: 0 }).animate({ Counter: $this.text() }, {
                                duration: 2000,
                                easing: 'swing',
                                step: function () {
                                    $this.text(Math.ceil(this.Counter));
                                }
                                
                            });
                        });
                        $(this).unbind('inview');
                    }
                });
            }
        }




    // -------------------------------------------------------------
    //      Google Map
    // -------------------------------------------------------------

        if ($('#googleMap').length) {
            google.maps.event.addDomListener(window, 'load', init);
            
            function init() {
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 12,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(38.581572, -121.494400), // New York

                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType": "all","elementType": "labels.text.fill","stylers": [{"saturation": 36},{"color": "#333333"},{"lightness": 40}]},
                            {"featureType": "all","elementType": "labels.text.stroke","stylers": [{"visibility": "on"},{"color": "#ffffff"},{"lightness": 16}]},
                            {"featureType": "all","elementType": "labels.icon","stylers": [{"visibility": "off"}]},
                            {"featureType": "administrative","elementType": "geometry.fill","stylers": [{"color": "#fefefe"},{"lightness": 20}]},
                            {"featureType": "administrative","elementType": "geometry.stroke","stylers": [{"color": "#fefefe"},{"lightness": 17},{"weight": 1.2}]},
                            {"featureType": "landscape","elementType": "geometry","stylers": [{"color": "#f5f5f5"},{"lightness": 20}]},
                            {"featureType": "poi","elementType": "geometry","stylers": [{"color": "#f5f5f5"},{"lightness": 21}]},
                            {"featureType": "poi.park","elementType": "geometry","stylers": [{"color": "#dedede"},{"lightness": 21}]},
                            {"featureType": "road.highway","elementType": "geometry.fill","stylers": [{"color": "#ffffff"},{"lightness": 17}]},
                            {"featureType": "road.highway","elementType": "geometry.stroke","stylers": [{"color": "#ffffff"},{"lightness": 29},{"weight": 0.2}]},
                            {"featureType": "road.arterial","elementType": "geometry","stylers": [{"color": "#ffffff"},{"lightness": 18}]},
                            {"featureType": "road.local","elementType": "geometry","stylers": [{"color": "#ffffff"},{"lightness": 16}]},
                            {"featureType": "transit","elementType": "geometry","stylers": [{"color": "#f2f2f2"},{"lightness": 19}]},
                            {"featureType": "water","elementType": "geometry","stylers": [{"color": "#e9e9e9"},{"lightness": 17}]},
                            {"featureType": "water","elementType": "geometry.fill","stylers": [{"color": "#00b3fe"}]}]};

                            // Get the HTML DOM element that will contain your map 
                            var mapElement = document.getElementById('googleMap');

                            // Create the Google Map using our element and options defined above
                            var map = new google.maps.Map(mapElement, mapOptions);

                            // Let's also add a marker while we're at it
                            var marker = new google.maps.Marker({
                                position: new google.maps.LatLng(38.581572, -121.494400),
                                map: map,
                                title: 'Snazzy!'
                            });
            }
        }



    // -------------------------------------------------------------
    // Back To Top
    // -------------------------------------------------------------

        function backToTopBtnAppear() {
            if ($("#toTop").length) {
                var windowpos = $(window).scrollTop(),
                    backToTopBtn = $("#toTop");

                if (windowpos > 300) {
                    backToTopBtn.fadeIn();
                } else {
                   backToTopBtn.fadeOut();
                }
            }
        }

        function backToTop() {
            if ($("#toTop").length) {
                var backToTopBtn = $("#toTop");
                backToTopBtn.on("click", function() {
                    $("html, body").animate({
                        scrollTop: 0
                    }, 1000);
                    
                    return false;
                })
            }
        }




	// -------------------------------------------------------------
    // 		Preloader
    // -------------------------------------------------------------

        function preloader() {
            if ($('#preloader').length) {
                $('#preloader').delay(500).fadeOut('slow');
            }
        }
 



    // -------------------------------------------------------------
    //      WHEN WINDOW LOAD
    // -------------------------------------------------------------

        $(window).on("load", function() {

            backToTop();

            preloader();

            //new WOW().init();

            funFactCounting();

            progressBar();
        })



    // -------------------------------------------------------------
    //      WHEN WINDOW SCROLL
    // -------------------------------------------------------------
        $(window).on("scroll", function() {

            backToTopBtnAppear();

            menuSticky();

            singlePageScroll();
        });

});   // Jquery-End