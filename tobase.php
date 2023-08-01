<?php
//this convert image to base64 
$image = "./img/sherek.jpeg";

// Bild als Bytes lesen
$imageBytes = file_get_contents($image);

// Bild in Base64-Text umwandeln
$base64Text = base64_encode($imageBytes);

?>

<img height="300px" src=<?=$image?> />

<hr>
<h1>hier ist base64:</h1>

<?=$base64Text?>