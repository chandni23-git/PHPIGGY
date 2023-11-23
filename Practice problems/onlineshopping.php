<?php

// Define a Product class
class Product {
    private $name;
    private $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }
}

// Define a ShoppingCart class
class ShoppingCart {
    private $items = [];

    public function addItem(Product $product, $quantity = 1) {
        $this->items[] = ['product' => $product, 'quantity' => $quantity];
        echo "Added {$quantity}x {$product->getName()} to the shopping cart.<br>";
    }

    public function checkout() {
        $total = 0;
        echo "=== Checkout ===<br>";
        foreach ($this->items as $item) {
            $product = $item['product'];
            $quantity = $item['quantity'];
            $subtotal = $product->getPrice() * $quantity;
            echo "{$product->getName()} - Quantity: {$quantity}, Subtotal: \${$subtotal}<br>";
            $total += $subtotal;
        }
        echo "Total: \${$total}<br>";
        echo "Thank you for shopping with us!<br>";
    }
}

// Create products
$product1 = new Product('Laptop', 1200);
$product2 = new Product('Headphones', 80);

// Create a shopping cart
$cart = new ShoppingCart();

// Add items to the cart
$cart->addItem($product1, 2);
$cart->addItem($product2, 1);

// Checkout
$cart->checkout();

?>

