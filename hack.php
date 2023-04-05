<?php
// Beolvassuk a titkositott.txt állományt
$file = file_get_contents('password.txt');

// Az eltolási kulcs
$key = array(5,-14,31,-9,3);

// Visszafejtjük a karaktereket a kulcs segítségével
$decoded = "";
$rows = explode("\n", $file);
foreach ($rows as $row) {
    $decoded_row = "";
    for ($i=0; $i<strlen($row); $i++) {
        $decoded_row .= chr(ord($row[$i]) - $key[$i%5]);
    }
    $decoded .= $decoded_row . "\n"; // hozzáadunk egy sortörést minden sor végéhez
}

// Kiírjuk a readable.txt állományba
file_put_contents('readable.txt', $decoded);
?>
