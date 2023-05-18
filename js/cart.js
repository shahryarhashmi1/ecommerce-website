// Function to update the total price
function updateTotalPrice() {
  let totalPrice = 0;
  const items = document.querySelectorAll('.cart-item');

  items.forEach((item) => {
    const priceElement = item.querySelector('.item-price');
    const quantityInput = item.querySelector('.item-quantity input');
    const itemTotalElement = item.querySelector('.item-total');

    const price = parseFloat(priceElement.textContent.replace('$', ''));
    const quantity = parseInt(quantityInput.value);
    const itemTotal = price * quantity;

    itemTotalElement.textContent = '$' + itemTotal.toFixed(2);
    totalPrice += itemTotal;
  });

  const subtotalAmount = document.querySelector('.subtotal-amount');
  subtotalAmount.textContent = '$' + totalPrice.toFixed(2);

  // Check if the cart is empty
  const cartItems = document.querySelector('.cart-items');
  const checkoutBtn = document.querySelector('.checkout-btn');

  if (items.length === 0) {
    cartItems.innerHTML = '<p>Your cart is empty.</p>';
    checkoutBtn.style.display = 'none';
  }
}

// Function to handle quantity changes
function handleQuantityChange(event) {
  const quantityInput = event.target;
  const item = quantityInput.closest('.cart-item');
  const priceElement = item.querySelector('.item-price');
  const price = parseFloat(priceElement.textContent.replace('$', ''));
  const quantity = parseInt(quantityInput.value);

  const itemTotalElement = item.querySelector('.item-total');
  const itemTotal = price * quantity;
  itemTotalElement.textContent = '$' + itemTotal.toFixed(2);

  updateTotalPrice();
}

// Function to remove an item from the cart
function removeItem(event) {
  const item = event.target.closest('.cart-item');
  item.remove();
  updateTotalPrice();
}

// Attach event listeners
const quantityInputs = document.querySelectorAll('.item-quantity input');
quantityInputs.forEach((input) => {
  input.addEventListener('change', handleQuantityChange);
});

const removeButtons = document.querySelectorAll('.remove-item');
removeButtons.forEach((button) => {
  button.addEventListener('click', removeItem);
});
