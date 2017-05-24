jQuery(function ($) {
    function DeleteActiveClassWithoutImage(first, second, third, fourth, fifth){
        $(first).removeClass('filter-type-active');
        $(second).removeClass('filter-type-active');
        $(third).removeClass('filter-type-active');
        $(fourth).removeClass('filter-type-active');
        $(fifth).removeClass('filter-type-active');
    }

    function DeleteActiveClassWithImage(first, second, third, fourth, fifth, sixth){
        $(first).removeClass('filter-type-active');
        $(second).removeClass('filter-type-active');
        $(third).removeClass('filter-type-active');
        $(fourth).removeClass('filter-type-active');
        $(fifth).removeClass('filter-type-active');
        $(sixth).removeClass('active');
    }

    function DeleteActiveClassInLeftSidebar(first, second, third, fourth){
        $(first).removeClass('tab-active');
        $(second).removeClass('tab-active');
        $(third).removeClass('tab-active');
        $(fourth).removeClass('tab-active');
    }

    $(document).ready(function () {
        if(window.location.pathname == "/profile.php"){
            $('.profile-click').addClass('tab-active');
            if ( $(this).hasClass('tab-active') ) {
            DeleteActiveClassInLeftSidebar('.work-click', '.resume-click', '.blog-click', '.contact-click');
           }
        }

        if(window.location.pathname == "/work.php"){
            $('.work-click').addClass('tab-active');
            if ( $(this).hasClass('tab-active') ) {
                DeleteActiveClassInLeftSidebar('.profile-click', '.resume-click', '.blog-click', '.contact-click');
            }
        }

        if(window.location.pathname == "/resume.php"){
            $('.resume-click').addClass('tab-active');
            if ( $(this).hasClass('tab-active') ) {
                DeleteActiveClassInLeftSidebar('.work-click', '.profile-click', '.blog-click', '.contact-click');
            }
        }

        if(window.location.pathname == "/blog.php"){
            $('.blog-click').addClass('tab-active');
            if ( $(this).hasClass('tab-active') ) {
                DeleteActiveClassInLeftSidebar('.work-click', '.profile-click', '.resume-click', '.contact-click');
            }
        }

        if(window.location.pathname == "/contact.php"){
            $('.contact-click').addClass('tab-active');
            if ( $(this).hasClass('tab-active') ) {
                DeleteActiveClassInLeftSidebar('.work-click', '.profile-click', '.resume-click', '.blog-click');
            }
        }
        
        if(window.location.pathname == "/work.php") {
            $('.grid-work-items').isotope({filter: '*', layoutMode: 'fitRows', masonry: { columnWidth: 400}});
            $('.all-click').addClass('filter-type-active');
            $('.fa.fa-th').addClass('active');
            $('.all-click').click(function () {
                $('.grid-work-items').isotope({filter: '*', layoutMode: 'fitRows'});
                $(this).addClass('filter-type-active');
                $('.fa.fa-th').addClass('active');
                if ( $(this).hasClass('filter-type-active') ) {
                    DeleteActiveClassWithoutImage('.branding-click', '.wallpapers-click', '.photography-click',
                     '.illustrations-click', '.logos-click');
                }
            });
            $('.branding-click').click(function () {
                $('.grid-work-items').isotope({ filter: '.branding', layoutMode: 'fitRows'});
                // $('.grid-work-items').removeClass('last');
                $(this).addClass('filter-type-active');
                if ( $(this).hasClass('filter-type-active') ) {
                    DeleteActiveClassWithImage('.all-click', '.wallpapers-click', '.photography-click',
                        '.illustrations-click', '.logos-click', '.fa.fa-th');
                }
            });
            $('.wallpapers-click').click(function () {
                $('.grid-work-items').isotope({ filter: '.wallpapers', layoutMode: 'fitRows'});
                $('.grid-work-items').removeClass('last');
                $(this).addClass('filter-type-active');
                if ( $(this).hasClass('filter-type-active') ) {
                    DeleteActiveClassWithImage('.branding-click', '.all-click', '.photography-click',
                        '.illustrations-click', '.logos-click', '.fa.fa-th');
                }
            });
            $('.photography-click').click(function () {
                $('.grid-work-items').isotope({ filter: '.photography', layoutMode: 'fitRows'});
                $('.grid-work-items').removeClass('last');
                $(this).addClass('filter-type-active');
                if ( $(this).hasClass('filter-type-active') ) {
                    DeleteActiveClassWithImage('.branding-click', '.wallpapers-click', '.all-click',
                        '.illustrations-click', '.logos-click', '.fa.fa-th');
                }
            });
            $('.illustrations-click').click(function () {
                $('.grid-work-items').isotope({ filter: '.illustrations', layoutMode: 'fitRows'});
                $('.grid-work-items').removeClass('last');
                $(this).addClass('filter-type-active');
                if ( $(this).hasClass('filter-type-active') ) {
                    DeleteActiveClassWithImage('.branding-click', '.wallpapers-click', '.all-click',
                        '.photography-click', '.logos-click', '.fa.fa-th');
                }
            });
            $('.logos-click').click(function () {
                $('.grid-work-items').isotope({ filter: '.logos', layoutMode: 'fitRows'});
                $('.grid-work-items').removeClass('last');
                $(this).addClass('filter-type-active');
                if ( $(this).hasClass('filter-type-active') ) {
                    DeleteActiveClassWithImage('.branding-click', '.wallpapers-click', '.all-click',
                        '.photography-click', '.illustrations-click', '.fa.fa-th');
                }
            });
        }
        // $('i.fa.fa-picture-o').hover(function() {
        //         $('i.fa.fa-picture-o').addClass('active');
        //     });
        if(window.location.pathname == "/blog.php"){
            $('.standart-post-image.gallery').owlCarousel({
                        loop:true,
                        nav:true,
                        dots:true,
                        items:1
                    });
        }

            

        
    });
});


if(window.location.pathname == "/contact.php"){
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        var mapOptions = {
            zoom: 16,
            center: new google.maps.LatLng(-37.818460, 144.965180)
        };
        var mapElement = document.getElementById('google-map');
        var map = new google.maps.Map(mapElement, mapOptions);
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(-37.818460, 144.965180),
            map: map,
            icon: {
                url: "../img/marker.png",
                scaledSize: new google.maps.Size(100, 100)
            }
        });
    }
}

