<?php
header('Content-Type: application/json');

$is_local = ($_SERVER['HTTP_HOST'] === 'localhost');

// Set the correct base URL
$base_url = $is_local ? "http://localhost/SelamaTourism" : "https://selama.e-veterinar.com";


$manifest = [
    "name" => "Selama Tourism",
    "short_name" => "Selama",
    "start_url" => "$base_url/",
    "display" => "standalone",
    "background_color" => "#ffffff",
    "theme_color" => "#007bff",
    "icons" => [
  
        [
            "purpose" => "maskable",
            "src" => "$base_url/assets/img/android-chrome-512x512.png",
            "sizes" => "512x512",
            "type" => "image/png"
        ],
        [
            "purpose" => "any",
            "src" => "$base_url/assets/img/android-chrome-512x512.png",
            "sizes" => "512x512",
            "type" => "image/png"
        ],
    ]
];

echo json_encode($manifest, JSON_PRETTY_PRINT);
