/*price range*/

$('#sl2').slider();


$(function () {
    $("#accordion").accordion();
});

function showCart(cart) {
    $('#cart .modal-body').html(cart);
    $('#cart').modal();
}

function getCart() {
    $.ajax({
        url: '/cart/show',
        type: 'GET',
        success: function (res) {
            if (!res) alert('Error - Empty data ID');
            showCart(res);
        },
        error: function (e) {
            console.log(e.responseText);
        }
    });
}

$('#cart .modal-body').on('click', '.del-item', function () {
    var id = $(this).data('id');
    $.ajax({
        url: '/cart/del-item',
        data: {id: id},
        type: 'GET',
        success: function (res) {
            if (!res) alert('Error - Empty data ID');
            showCart(res);
            $('.mycart').html('(' + document.getElementById("cart_qty").innerText + ')');
        },
        error: function (e) {
            console.log(e.responseText);
        }
    });
});

$('.table-responsive').on('click', '.del-item', function () {
    var id = $(this).data('id');
    $.ajax({
        url: '/cart/del-item',
        data: {id: id},
        type: 'GET',
        success: function (res) {
            if (!res) alert('Error - Empty data ID');
            location.reload();
        },
        error: function (e) {
            console.log(e.responseText);
        }
    });
});

function clearCart() {
    $.ajax({
        url: '/cart/clear',
        type: 'GET',
        success: function (res) {
            if (!res) alert('Error - Empty data ID');
            showCart(res);
            $('.mycart').html('(' + '-' + ')');
        },
        error: function (e) {
            console.log(e.responseText);
        }
    });
}

$('.add-to-cart').on('click', function (e) {
    e.preventDefault();

    var id = $(this).data('id'),
        qty = $('#qty').val();

    $.ajax({
        url: '/cart/add',
        data: {id: id, qty: qty},
        type: 'GET',
        success: function (res) {
            if (!res) alert('Error - Empty data ID');
            showCart(res);

            $('.mycart').html('(' + document.getElementById("cart_qty").innerText + ')');
        },
        error: function (e) {
            console.log(e.responseText);
        }
    });
});


var RGBChange = function () {
    $('#RGB').css('background', 'rgb(' + r.getValue() + ',' + g.getValue() + ',' + b.getValue() + ')')
};

/*scroll to top*/

$(document).ready(function () {
    $(function () {
        $.scrollUp({
            scrollName: 'scrollUp', // Element ID
            scrollDistance: 300, // Distance from top/bottom before showing element (px)
            scrollFrom: 'top', // 'top' or 'bottom'
            scrollSpeed: 300, // Speed back to top (ms)
            easingType: 'linear', // Scroll to top easing (see http://easings.net/)
            animation: 'fade', // Fade, slide, none
            animationSpeed: 200, // Animation in speed (ms)
            scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
            //scrollTarget: false, // Set a custom target element for scrolling to the top
            scrollText: '<i class="fa fa-angle-up"></i>', // Text for element, can contain HTML
            scrollTitle: false, // Set a custom <a> title if required.
            scrollImg: false, // Set true to use image
            activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
            zIndex: 2147483647 // Z-Index for the overlay
        });
    });
});
