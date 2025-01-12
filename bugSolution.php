```php
$file = fopen("myfile.txt", "r");
if ($file) {
    // Process the file
    fclose($file);
} else {
    $error = error_get_last();
    if ($error) {
        // Handle the specific error
        echo "Error opening file: " . $error['message'] . "\n";
    } else {
        echo "Unknown error opening file.\n";
    }
}
```