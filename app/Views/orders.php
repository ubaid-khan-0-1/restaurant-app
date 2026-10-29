<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #f4f6f9; }
        .table-custom { background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        .table-custom thead { background-color: #343a40; color: white; }
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
                    <li class="nav-item"><a class="nav-link" href="/cart">Menu & Cart</a></li>
                    <li class="nav-item"><a class="nav-link active" href="/orders">Order History</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h2 class="mb-4 fw-bold">Order History</h2>
        
        <div class="table-responsive table-custom">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th>Order No.</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Payment</th>
                        <th>Total (£)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($orders)): ?>
                        <?php foreach($orders as $row): ?>
                        <tr>
                            <td class="fw-bold"><?= esc($row['order_number']) ?></td>
                            <td><?= esc($row['order_date']) ?></td>
                            <td>
                                <span class="badge bg-success"><?= esc($row['status']) ?></span>
                            </td>
                            <td>
                                <?= esc($row['payment_method'] ?? 'N/A') ?> 
                                <br><small class="text-muted"><?= esc($row['pay_status'] ?? '') ?></small>
                            </td>
                            <td class="fw-bold">£<?= number_format($row['total_amount'], 2) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr><td colspan="5" class="text-center py-4">No orders found.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <!-- Server Side Pagination Links -->
     
        <div class="mt-4 d-flex justify-content-center">
            <?= $pager->links('default', 'default_full') ?>
        </div>
    </div>
</body>
</html>