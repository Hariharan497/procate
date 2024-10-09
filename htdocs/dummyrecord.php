<?php
require 'vendor/autoload.php'; // Include Composer autoloader for MongoDB

// MongoDB Client setup
$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->clothingShop->clothes;

// Dummy data for the clothing shop
$categories = ['men', 'women', 'kids'];
$clothingItems = [
    ['name' => 'T-shirt', 'price' => 19.99, 'sizes' => ['S', 'M', 'L', 'XL'], 'colors' => ['red', 'blue', 'green'], 'description' => 'A comfortable cotton T-shirt.'],
    ['name' => 'shirt', 'price' => 49.99, 'sizes' => ['28', '30', '32', '34'], 'colors' => ['denim', 'black'], 'description' => 'Classic blue jeans.'],
    ['name' => 'hoody', 'price' => 99.99, 'sizes' => ['S', 'M', 'L'], 'colors' => ['black', 'brown'], 'description' => 'A stylish winter jacket.'],
    ['name' => 'T-shirt', 'price' => 39.99, 'sizes' => ['S', 'M', 'L', 'XL'], 'colors' => ['red', 'blue', 'green'], 'description' => 'A comfortable cotton T-shirt.'],
    ['name' => 'shirt', 'price' => 59.99, 'sizes' => ['28', '30', '32', '34'], 'colors' => ['denim', 'black'], 'description' => 'Classic blue jeans.'],
    ['name' => 'hoody', 'price' => 79.99, 'sizes' => ['S', 'M', 'L'], 'colors' => ['black', 'brown'], 'description' => 'A stylish winter jacket.'],
    ['name' => 'T-shirt', 'price' => 9.99, 'sizes' => ['S', 'M', 'L', 'XL'], 'colors' => ['red', 'blue', 'green'], 'description' => 'A comfortable cotton T-shirt.'],
    ['name' => 'shirt', 'price' => 339.99, 'sizes' => ['28', '30', '32', '34'], 'colors' => ['denim', 'black'], 'description' => 'Classic blue jeans.'],
    ['name' => 'hoody', 'price' => 899.99, 'sizes' => ['S', 'M', 'L'], 'colors' => ['black', 'brown'], 'description' => 'A stylish winter jacket.'],
    // Add more items if needed
];

// Image URL placeholder (you can replace these with actual image URLs)
$imageUrls = [
    'cloth1.jpg',
    'cloth2.jpg',
    'cloth3.jpg',
    'cloth4.jpg',
    'cloth5.jpg',
    'cloth6.jpg',
    'kids-combo.jpg',
    'kids-nytdress.jpg',
    'kids-top.jpg',
    // Add more image URLs
];

// Generate 50 records
for ($i = 0; $i < 50; $i++) {
    $category = $categories[array_rand($categories)]; // Random category
    $item = $clothingItems[array_rand($clothingItems)]; // Random item
    $image_url = $imageUrls[array_rand($imageUrls)]; // Random image

    // Prepare the document
    $document = [
        'category' => $category,
        'name' => $item['name'],
        'price' => $item['price'],
        'sizes' => $item['sizes'],
        'colors' => $item['colors'],
        'description' => $item['description'],
        'image_url' => ('/files/'.md5($image_url)),
        'stock' => rand(10, 100) // Random stock between 10 and 100
    ];

    // Insert the document into MongoDB
    $collection->insertOne($document);
}

echo "50 records inserted!";
?>
