const cartButton = document.querySelector('.cart-button');
const closeCart = document.querySelector('.close-cart');
const cartPopup = document.querySelector('.cart-popup');


cartButton.addEventListener('click', () => {
    cartPopup.style.display = 'block';
});

closeCart.addEventListener('click', () => {
    cartPopup.style.display = 'none';
})
const cartData = () => {
   const cart = document.querySelector('cart-block"');
   const productsList = document.querySelector('.cart-items'); 

const addProductToCart = () => {
    productsList.addEventListener('click', (event) => {
        if(event.target.classList.contains('js-buy-button'))
          console.log(1);
    });
  }
  addProductToCart();
}
