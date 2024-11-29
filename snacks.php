<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>
    <style>
        /* General styling for product pages */
body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    color: #333;
    margin: 0;
    padding: 0;
}

header {
    background-color: #343a40;
    color: #fff;
    text-align: center;
    padding: 1rem;
}

.product-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    padding: 20px;
}

.product-item {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    width: 200px;
    padding: 16px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s;
}

.product-item img {
    max-width: 100%;
    height: auto;
    border-radius: 4px;
}

.product-item h2 {
    font-size: 1.2rem;
    margin: 0.5rem 0;
}

.product-item p {
    font-size: 1rem;
    color: #555;
}

.add-to-cart-btn {
    background-color: #28a745;
    color: #fff;
    border: none;
    padding: 10px 15px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.2s;
}

.add-to-cart-btn:hover {
    background-color: #218838;
}

.product-item:hover {
    transform: scale(1.05);
}
</style>
</head>
<body>
    <header>
        <h1>Snacks</h1>
    </header>
    <section class="product-grid">
        <div class="product-item">
            <img src="assets/img/chips.jpg" alt="Chips">
            <h2>Chips</h2>
            <p>Price: $1.99</p>
            <button class="add-to-cart-btn">Add to Cart</button>
        </div>
        <!-- Add more products as needed -->
    </section>
</body>
</html>
