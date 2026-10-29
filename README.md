# Restaurant Order API + Cart (CodeIgniter 4)

## Task 1: Data Findings
1. Order History mein Price×Qty ≠ Total mismatch (dirty data).
2. Float precision issues (2.75698).
3. Missing Order IDs (11, 18, 40).
4. Menu prices are TAX INCLUSIVE (12.5%).
5. Relational: 1 order → many items; 1 order → 1 payment.

## Task 2: API
- Endpoint: `GET /api/orders`
- Response: Orders + Payment + Items (grouped)
- Single JOIN query for performance (N+1 avoided).
- Indexes on foreign keys.
- Throttle filter for security.

## Task 3: Cart
- URL: `/cart`
- Tax inclusive reverse calculation: Base = Total / 1.125, Tax = Total − Base.

## AI Usage
- Migrations boilerplate: AI-assisted.
- Core logic (tax reverse, JOIN grouping, security): manually implemented and tested.

## Setup
```bash
composer install
cp env .env
php spark migrate
php spark db:seed MenuSeeder
php spark db:seed OrderSeeder
php spark serve