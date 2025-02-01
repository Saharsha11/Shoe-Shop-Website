let cart = JSON.parse(localStorage.getItem('cart')) || [];

function addToCart(productName,shoeSize, price) {
    cart.push({ name: productName,size : shoeSize, price: price });
    updateCartUI();
    localStorage.setItem('cart', JSON.stringify(cart));
}

function updateCartUI() {
    const cartCount = document.getElementById('cart-count');
    cartCount.innerText = cart.length;
}

// Initialize cart UI when the page loads
document.addEventListener('DOMContentLoaded', function () {
    updateCartUI(); // This will set the initial cart count

    document.querySelectorAll('.add-to-cart-btn').forEach(button => {
        button.addEventListener('click', function () {
            const product = this.closest('.description');
            const productName = product.querySelector('.product-name').textContent;
            const shoeSize = product.querySelector('.shoe-size').value;
            const price = parseFloat(product.querySelector('.product-price').textContent.replace('Rs ', ''));
            addToCart(productName,shoeSize, price);
        });
    });
});
