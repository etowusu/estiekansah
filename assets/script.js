
document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('menu-toggle');
    const navMenu = document.getElementById('nav-menu');

    if (!menuToggle || !navMenu) return;

    function closeMenu() {
        navMenu.classList.remove('active');
        menuToggle.setAttribute('aria-expanded', 'false');
        menuToggle.setAttribute('aria-label', 'Open navigation menu');
    }

    menuToggle.addEventListener('click', function () {
        const isOpen = navMenu.classList.toggle('active');

        menuToggle.setAttribute('aria-expanded', isOpen);
        menuToggle.setAttribute(
            'aria-label',
            isOpen ? 'Close navigation menu' : 'Open navigation menu'
        );
    });

    // Close menu after clicking a navigation link
    navMenu.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', closeMenu);
    });

    // Close menu when clicking outside
    document.addEventListener('click', function (event) {
        if (
            !menuToggle.contains(event.target) &&
            !navMenu.contains(event.target)
        ) {
            closeMenu();
        }
    });

    // Close menu when pressing Escape
    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            closeMenu();
        }
    });

    // Close menu when switching to desktop screen size
    window.addEventListener('resize', function () {
        if (window.innerWidth >= 768) {
            closeMenu();
        }
    });
});

/* ==================================
   CART + CHECKOUT (LS)
   ================================== */

const CART_KEY = 'delawigs_cart';
const WHATSAPP_NUMBER = '233XXXXXXXXX'; // 

/* ---------- helpers ---------- */
function getCart() {
  try {
    return JSON.parse(localStorage.getItem(CART_KEY)) || [];
  } catch (e) {
    return [];
  }
}

function saveCart(cart) {
  localStorage.setItem(CART_KEY, JSON.stringify(cart));
  updateCartCount();
  // If we're on the cart page, re-render
  if (document.getElementById('cart-items')) {
    renderCartPage();
  }
}

function formatPrice(n) {
  return 'GHS ' + Number(n).toFixed(2);
}

function updateCartCount() {
  const cart = getCart();
  const count = cart.reduce((t, i) => t + i.quantity, 0);
  document.querySelectorAll('.cart-count').forEach(el => {
    el.textContent = count;
  });
}

/* ---------- add / remove ---------- */
function addToCart(product, qty = 1) {
  const cart = getCart();
  const existing = cart.find(i => i.id === product.id);
  if (existing) {
    existing.quantity += qty;
  } else {
    cart.push({ ...product, quantity: qty });
  }
  saveCart(cart);
  alert(product.name + ' added to cart.');
}

function removeFromCart(id) {
  const cart = getCart().filter(i => i.id !== id);
  saveCart(cart);
}

function updateQty(id, delta) {
  const cart = getCart();
  const item = cart.find(i => i.id === id);
  if (!item) return;
  item.quantity += delta;
  if (item.quantity <= 0) {
    removeFromCart(id);
    return;
  }
  saveCart(cart);
}

/* ---------- cart page render ---------- */
function renderCartPage() {
  const wrap = document.getElementById('cart-items');
  const totalEl = document.getElementById('cart-total');
  const emptyEl = document.getElementById('cart-empty');
  const summaryEl = document.getElementById('cart-summary');
  if (!wrap) return;

  const cart = getCart();

  if (cart.length === 0) {
    wrap.innerHTML = '';
    if (emptyEl) emptyEl.style.display = 'block';
    if (summaryEl) summaryEl.style.display = 'none';
    return;
  }

  if (emptyEl) emptyEl.style.display = 'none';
  if (summaryEl) summaryEl.style.display = 'block';

  let total = 0;
  wrap.innerHTML = cart.map(item => {
    const sub = item.price * item.quantity;
    total += sub;
    return `
      <div class="cart-item">
        <img src="assets/images/products/${item.image}" alt="${item.name}">
        <div class="cart-item-info">
          <h3>${item.name}</h3>
          <div class="item-price">${formatPrice(item.price)} each</div>
          <div class="qty-control" style="margin-top:0.4rem;">
            <button onclick="updateQty(${item.id}, -1)">−</button>
            <span>${item.quantity}</span>
            <button onclick="updateQty(${item.id}, 1)">+</button>
          </div>
        </div>
        <div style="text-align:right;">
          <div style="font-weight:700;font-size:0.85rem;">${formatPrice(sub)}</div>
          <button onclick="removeFromCart(${item.id})"
                  style="font-size:0.75rem;text-decoration:underline;margin-top:0.3rem;">
            Remove
          </button>
        </div>
      </div>
    `;
  }).join('');

  if (totalEl) totalEl.textContent = formatPrice(total);
}

/* ---------- WhatsApp checkout ---------- */
function checkoutWhatsApp() {
  const cart = getCart();
  if (cart.length === 0) {
    alert('Your cart is empty.');
    return;
  }

  const name = prompt('Your name:');
  if (!name) return;
  const phone = prompt('Your phone number:');
  if (!phone) return;
  const location = prompt('Delivery location:');
  if (!location) return;

  let total = 0;
  let lines = cart.map((item, i) => {
    const sub = item.price * item.quantity;
    total += sub;
    return `${i + 1}. ${item.name}\n   Quantity: ${item.quantity}\n   Price: ${formatPrice(item.price)}\n   Subtotal: ${formatPrice(sub)}`;
  }).join('\n\n');

  const message =
`Hello Delawigs, I would like to place an order.

ORDER DETAILS

${lines}

TOTAL: ${formatPrice(total)}

CUSTOMER DETAILS

Name: ${name}
Phone: ${phone}
Delivery Location: ${location}

Thank you.`;

  const url = `https://wa.me/${WHATSAPP_NUMBER}?text=${encodeURIComponent(message)}`;
  window.open(url, '_blank');
}

/* ---------- boot ---------- */
document.addEventListener('DOMContentLoaded', () => {
  updateCartCount();
  renderCartPage();
});