
document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', () => {
        const item = {
            name: button.getAttribute('data-name'),
            price: parseFloat(button.getAttribute('data-price')),
            image: button.getAttribute('data-image'),
            dateAdded: new Date().toLocaleString()
        };

        const cart = JSON.parse(localStorage.getItem("cart")) || [];
        cart.push(item);
        localStorage.setItem("cart", JSON.stringify(cart));

        alert(`${item.name} has been added to your cart.`);
    });
});