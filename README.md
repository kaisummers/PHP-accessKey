# PHP intEncode
The PHP intEncode class is a very simple substitution cypher, used to encode and decode whole numbers into obsfucated strings. Good for obsfucating db id's.

# Example Usage
// Include class file containing PHP intEncode

include("classes.php");


// 10 randomised characters 

$rnd = "doW4J8l02v";


// Encode

$int = 3452;

$enc = intEncode::encode($int, $rnd);


// Decode

$dec = intEncode::decode($enc, $rnd);


// Example Output

echo $enc." decoded is ".$dec;

# Example Output
4J8W decoded is 3452

