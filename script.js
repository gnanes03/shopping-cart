let cart = [];

function addToCart(name, price) {
  cart.push({ name, price });
  displayCart();
}

function removeFromCart(index) {
  cart.splice(index, 1);
  displayCart();
}

function displayCart() {
  const cartDiv = document.getElementById("cart");
  cartDiv.innerHTML = '';
  let total = 0;
  cart.forEach((item, index) => {
    total += item.price;
    cartDiv.innerHTML += `<p>${item.name} - ₹${item.price} 
      <button onclick="removeFromCart(${index})">Remove</button></p>`;
  });
  cartDiv.innerHTML += `<strong>Total: ₹${total}</strong>`;
}

function prepareOrder() {
  document.getElementById("orderData").value = JSON.stringify(cart);
  return true;
}
