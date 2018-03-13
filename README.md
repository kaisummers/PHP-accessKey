# PHP intEncode
The PHP intEncode class is a very simple substitution cypher, used to encode and decode whole numbers into obfuscated strings. Good for obfuscating db id's.

# Example Usage
// Include class file containing PHP intEncode

include("classes.php");


// Encode

$int = 3452;

$enc = intEncode::encode($int);


// Decode

$dec = intEncode::decode($enc);


// Example Output

echo $enc." decoded is ".$dec;

# Example Output
4J8W decoded is 3452

