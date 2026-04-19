<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cool Shop | Premium Collection</title>
    <!-- Google Fonts -->
    <link href="https://googleapis.com" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cloudflare.com">
    
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        body { background-color: #f4f7f6; color: #333; }

        /* Navbar */
        nav { background: #fff; padding: 20px 5%; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 2px 10px rgba(0,0,0,0.1); position: sticky; top: 0; z-index: 1000; }
        .logo { font-size: 24px; font-weight: 700; color: #2c3e50; }
        .nav-links { list-style: none; display: flex; }
        .nav-links li { margin-left: 25px; }
        .nav-links a { text-decoration: none; color: #555; transition: 0.3s; }
        .nav-links a:hover { color: #3498db; }

        /* Hero Section */
        .hero { height: 400px; background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://unsplash.com'); background-size: cover; background-position: center; display: flex; flex-direction: column; justify-content: center; align-items: center; color: white; text-align: center; }
        .hero h1 { font-size: 50px; margin-bottom: 10px; }

        /* Product Section */
        .container { padding: 50px 5%; }
        .section-title { text-align: center; margin-bottom: 40px; font-size: 30px; }
        
        .product-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; }

        /* Product Card Style */
        .product-card { background: #fff; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: transform 0.3s; position: relative; }
        .product-card:hover { transform: translateY(-10px); }
        .product-img { width: 100%; height: 280px; background: #eee; overflow: hidden; }
        .product-img img { width: 100%; height: 100%; object-fit: cover; }
        
        .product-info { padding: 20px; text-align: center; }
        .category { font-size: 12px; color: #3498db; font-weight: 600; text-transform: uppercase; }
        .product-name { font-size: 18px; margin: 10px 0; font-weight: 600; }
        .price { color: #e74c3c; font-size: 20px; font-weight: 700; }
        
        .buy-btn { display: block; width: 100%; padding: 12px; background: #2c3e50; color: white; text-decoration: none; border-radius: 0 0 15px 15px; transition: 0.3s; }
        .buy-btn:hover { background: #3498db; }

        /* Responsive */
        @media (max-width: 768px) { .hero h1 { font-size: 30px; } }
    </style>
</head>
<body>

    <nav>
        <div class="logo"><i class="fas fa-shopping-bag"></i> COOL<span style="color: #3498db;">SHOP</span></div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">Categories</a></li>
            <li><a href="admin.php">Admin</a></li>
        </ul>
    </nav>

    <div class="hero">
        <h1>Summer Collection 2024</h1>
        <p>Get the best T-shirts, Punjabi & more at best prices.</p>
    </div>

    <div class="container">
        <h2 class="section-title">Featured Products</h2>
        
        <div class="product-grid">
            <!-- Example Product 1 -->
            <div class="product-card">
                <div class="product-img">
                    <img src="https://unsplash.com" alt="T-shirt">
                </div>
                <div class="product-info">
                    <span class="category">T-Shirt</span>
                    <div class="product-name">Premium Cotton White Tee</div>
                    <div class="price">৳ 450</div>
                </div>
                <a href="#" class="buy-btn">Add to Cart</a>
            </div>

            <!-- Example Product 2 -->
            <div class="product-card">
                <div class="product-img">
                    <img src="https://unsplash.com" alt="Polo">
                </div>
                <div class="product-info">
                    <span class="category">Polo T-Shirt</span>
                    <div class="product-name">Blue Luxury Polo</div>
                    <div class="price">৳ 850</div>
                </div>
                <a href="#" class="buy-btn">Add to Cart</a>
            </div>

            <!-- Example Product 3 -->
            <div class="product-card">
                <div class="product-img">
                    <img src="https://unsplash.com" alt="Black T-shirt">
                </div>
                <div class="product-info">
                    <span class="category">Jersey</span>
                    <div class="product-name">Argentina Home Jersey</div>
                    <div class="price">৳ 1200</div>
                </div>
                <a href="#" class="buy-btn">Add to Cart</a>
            </div>
        </div>
    </div>

</body>
</html>
