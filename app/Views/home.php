<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gourmet Bites | Restaurant App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #f8f9fa; }
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=2070&auto=format&fit=crop');
            background-size: cover; background-position: center; color: white; padding: 100px 0; text-align: center;
        }
        .feature-card { transition: transform 0.3s; border: none; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        .feature-card:hover { transform: translateY(-5px); box-shadow: 0 8px 25px rgba(0,0,0,0.1); }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">🍔 Gourmet Bites</a>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/cart">Menu & Cart</a></li>
                    <li class="nav-item"><a class="nav-link" href="/orders">Order History</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <h1 class="display-4 fw-bold">Delicious Food, Delivered Fast.</h1>
            <p class="lead mt-3">Experience the best dining from the comfort of your home.</p>
            <a href="/cart" class="btn btn-danger btn-lg mt-4 px-5 rounded-pill">Order Now</a>
        </div>
    </div>

    <!-- Features -->
    <div class="container py-5">
        <div class="row text-center">
            <div class="col-md-6 mb-4">
                <div class="card feature-card h-100 p-4">
                    <h3>🛒 Interactive Cart</h3>
                    <p class="text-muted">Add items, change quantities, and see tax calculations in real-time.</p>
                    <a href="/cart" class="btn btn-outline-dark mt-auto">Go to Cart</a>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card feature-card h-100 p-4">
                    <h3>📜 Order History</h3>
                    <p class="text-muted">View past orders with complete item details and payment status.</p>
                    <a href="/orders" class="btn btn-outline-dark mt-auto">View Orders</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>