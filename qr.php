<?php
require 'home/home.php';

use BaconQrCode\Renderer\Image\Png;
use BaconQrCode\Writer;

// Define the login credentials
$email = 'table1@gmail.com';
$password = '456';

// Combine the email and password into a single string
$loginInfo = "Email: $email\nPassword: $password";

// Generate the QR code
$renderer = new Png();
$renderer->setWidth(300);
$renderer->setHeight(300);
$writer = new Writer($renderer);
$qrCode = $writer->writeString($loginInfo);

// Output the QR code image
echo '<img src="data:image/png;base64,' . base64_encode($qrCode) . '" alt="QR Code">';
?>
