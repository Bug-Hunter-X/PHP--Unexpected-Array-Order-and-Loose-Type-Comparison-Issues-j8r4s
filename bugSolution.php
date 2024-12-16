To address the array order inconsistency, use `ksort()` or `asort()` to explicitly sort the array based on keys or values, respectively:

```php
$myArray = [];
$myArray["key1"] = "value1";
$myArray[1] = "value2";

ksort($myArray); //Sort by keys

echo count($myArray); // Outputs 2

foreach ($myArray as $key => $value) {
    echo "Key: " . $key . ", Value: " . $value . "\n";
}
```

For loose type comparisons, employ strict comparison operators (`===` and `!==`) to ensure that both the value and type are matched. This eliminates ambiguities.

```php
function myFunc($param) {
  if ($param === '0') {
    echo 'String 0';
  } else if ($param === 0) {
    echo 'Integer 0';
  } else {
    echo 'Something else';
  }
}
myFunc('0'); //Outputs 'String 0'
myFunc(0); // Outputs 'Integer 0'
```

Using these techniques, you can enhance the predictability and reliability of your PHP code, avoiding confusion and potential errors related to array order and type handling.