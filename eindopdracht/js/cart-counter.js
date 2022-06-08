var click = document.getElementById("shopingcard-btn");
var cart = document.getElementById("cart_item_count");
var count = 0;

click.addEventListener("click", function () {
    count++;
    cart.innerHTML = count;
});
