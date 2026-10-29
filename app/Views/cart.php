<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu & Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #f4f6f9; }
        .item-img { height: 180px; object-fit: cover; border-radius: 10px 10px 0 0; }
        .cart-card { border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); border: none; }
        .sticky-summary { position: sticky; top: 20px; }
        .cart-item-row { border-bottom: 1px dashed #ddd; padding: 15px 0; }
        .qty-btn { width: 30px; height: 30px; padding: 0; line-height: 28px; font-weight: bold; }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">🍔 Gourmet Bites</a>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="/cart">Menu & Cart</a></li>
                    <li class="nav-item"><a class="nav-link" href="/orders">Order History</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h2 class="mb-4 fw-bold">Our Menu</h2>
        <div class="row">
            <!-- Menu Items -->
            <div class="col-lg-8 mb-4">
                <div class="row" id="menu">
                    <!-- Item 1 -->
                    <div class="col-md-6 mb-4">
                        <div class="card cart-card h-100">
                            <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?q=80&w=500&auto=format&fit=crop" class="item-img" alt="Item 1">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Item 1 (Premium Salad)</h5>
                                <p class="text-muted small mb-2">Fresh organic ingredients.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fs-5 fw-bold text-danger">£10.00</span>
                                    <button class="btn btn-danger btn-sm px-3 rounded-pill" onclick="addToCart(1,'Item 1',10.00)">Add +</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="col-md-6 mb-4">
                        <div class="card cart-card h-100">
                            <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?q=80&w=500&auto=format&fit=crop" class="item-img" alt="Item 2">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Item 2 (Classic Burger)</h5>
                                <p class="text-muted small mb-2">Beef patty with cheese.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fs-5 fw-bold text-danger">£7.50</span>
                                    <button class="btn btn-danger btn-sm px-3 rounded-pill" onclick="addToCart(2,'Item 2',7.50)">Add +</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="col-md-6 mb-4">
                        <div class="card cart-card h-100">
                            <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?q=80&w=500&auto=format&fit=crop" class="item-img" alt="Item 3">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Item 3 (Margherita Pizza)</h5>
                                <p class="text-muted small mb-2">Classic tomato and mozzarella.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fs-5 fw-bold text-danger">£5.00</span>
                                    <button class="btn btn-danger btn-sm px-3 rounded-pill" onclick="addToCart(3,'Item 3',5.00)">Add +</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 4 -->
                    <div class="col-md-6 mb-4">
                        <div class="card cart-card h-100">
                            <img src="https://images.unsplash.com/photo-1573080496219-bb080dd4f877?q=80&w=500&auto=format&fit=crop" class="item-img" alt="Item 4">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Item 4 (French Fries)</h5>
                                <p class="text-muted small mb-2">Crispy golden fries.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fs-5 fw-bold text-danger">£2.50</span>
                                    <button class="btn btn-danger btn-sm px-3 rounded-pill" onclick="addToCart(4,'Item 4',2.50)">Add +</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 5 -->
                    <div class="col-md-6 mb-4">
                        <div class="card cart-card h-100">
                            <img src="https://images.unsplash.com/photo-1551024709-8f23befc6f87?q=80&w=500&auto=format&fit=crop" class="item-img" alt="Item 5">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Item 5 (Cola Drink)</h5>
                                <p class="text-muted small mb-2">Chilled soft drink.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fs-5 fw-bold text-danger">£3.00</span>
                                    <button class="btn btn-danger btn-sm px-3 rounded-pill" onclick="addToCart(5,'Item 5',3.00)">Add +</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cart Summary (Sticky) -->
            <div class="col-lg-4">
                <div class="card cart-card sticky-summary">
                    <div class="card-header bg-white pb-0 border-0">
                        <h4 class="fw-bold">Order Summary</h4>
                    </div>
                    <div class="card-body" id="cart-items">
                        <p class="text-muted text-center py-4">Your cart is empty. Add some items!</p>
                    </div>
                    <div class="card-footer bg-light border-0 pt-3">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Subtotal:</span>
                            <span class="fw-bold">£<span id="subTotal">0.00</span></span>
                        </div>
                        <div class="d-flex justify-content-between mb-3 text-muted">
                            <span>Tax (12.5%):</span>
                            <span>£<span id="taxAmount">0.00</span></span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mb-3 fs-5">
                            <strong class="fw-bold">Total:</strong>
                            <strong class="fw-bold text-success">£<span id="grandTotal">0.00</span></strong>
                        </div>
                        <button class="btn btn-success w-100 py-2 fw-bold rounded-pill" onclick="alert('Checkout functionality coming soon!')">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let cart = {};
        const TAX_RATE = 0.125;

        function addToCart(id, name, price) {
            if (cart[id]) cart[id].qty += 1;
            else cart[id] = { name, price, qty: 1 };
            renderCart();
        }

        function changeQty(id, delta) {
            if (!cart[id]) return;
            cart[id].qty += delta;
            if (cart[id].qty <= 0) delete cart[id];
            renderCart();
        }

        function renderCart() {
            let html = '', total = 0;
            const keys = Object.keys(cart);
            
            if (keys.length === 0) {
                document.getElementById('cart-items').innerHTML = '<p class="text-muted text-center py-4">Your cart is empty.</p>';
                document.getElementById('subTotal').innerText = '0.00';
                document.getElementById('taxAmount').innerText = '0.00';
                document.getElementById('grandTotal').innerText = '0.00';
                return;
            }

            for (let id in cart) {
                const it = cart[id];
                const line = it.price * it.qty;
                total += line;
                html += `
                    <div class="cart-item-row d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-0 fw-bold">${it.name}</h6>
                            <small class="text-muted">£${it.price.toFixed(2)}</small>
                        </div>
                        <div class="d-flex align-items-center bg-light rounded-pill px-2 py-1">
                            <button class="btn btn-sm btn-outline-dark border-0 qty-btn rounded-circle" onclick="changeQty(${id},-1)">−</button>
                            <span class="mx-3 fw-bold">${it.qty}</span>
                            <button class="btn btn-sm btn-outline-dark border-0 qty-btn rounded-circle" onclick="changeQty(${id},1)">+</button>
                        </div>
                        <div class="fw-bold">£${line.toFixed(2)}</div>
                    </div>`;
            }
            
            document.getElementById('cart-items').innerHTML = html;
            
            const base = total / (1 + TAX_RATE);
            const tax = total - base;
            
            document.getElementById('subTotal').innerText = total.toFixed(2);
            document.getElementById('taxAmount').innerText = tax.toFixed(2);
            document.getElementById('grandTotal').innerText = total.toFixed(2);
        }
    </script>
</body>
</html>