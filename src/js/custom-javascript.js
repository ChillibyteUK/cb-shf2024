/**
 * postcode form redirect
 **/

function redirectToForm() {
    var postcodes = document.getElementsByName("postcode");
    var postcodeValue = "";

    for (var i = 0; i < postcodes.length; i++) {
        if (postcodes[i].value.trim() !== "") {
            postcodeValue = postcodes[i].value.trim();
            break; // Exit the loop once the first filled input is found
        }
    }

    if (postcodeValue) {
        var url = "/free-cash-offer?postcode=" + encodeURIComponent(postcodeValue);
        window.location.href = url;
    }

}

window.redirectToForm = redirectToForm; // Make sure it's accessible globally


/**
 * hide navigation
 **/

document.addEventListener('DOMContentLoaded', function() {
    // var topNav = document.querySelector('.prenav');
    var mainNav = document.querySelector('header');
    var lastScrollTop = 0;

    window.addEventListener('scroll', function() {
        var scrollTop = window.scrollY || document.documentElement.scrollTop;

        if (scrollTop > lastScrollTop) {
            // Scrolling down
            // topNav.classList.add('hidden');
            mainNav.classList.add('hidden');
        } else {
            // Scrolling up
            mainNav.classList.remove('hidden');
            // if (scrollTop === 0) {
            //     topNav.classList.remove('hidden');
            // }
        }

        lastScrollTop = scrollTop;
    });

});
