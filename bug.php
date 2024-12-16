In PHP, a common yet subtle issue arises when dealing with array keys that are not explicitly defined.  Consider this scenario:

```php
$myArray = [];
$myArray["key1"] = "value1";
$myArray[1] = "value2";

echo count($myArray); // Outputs 2

foreach ($myArray as $key => $value) {
    echo "Key: " . $key . ", Value: " . $value . "\n";
}
```

While this seems straightforward, the order of the output may be unexpected. PHP doesn't inherently guarantee the order of array elements, especially when mixing string and integer keys. You might get "Key: key1, Value: value1" followed by "Key: 1, Value: value2", but the order can change depending on the PHP version or internal implementation.

This can lead to inconsistencies and errors, particularly when relying on array traversal for specific order-sensitive operations, such as processing data in a pre-defined sequence or comparing arrays.

Another subtle issue can occur with loosely typed variables.  For example:

```php
function myFunc($param) {
  if ($param == '0') {
    echo 'String 0';
  } else if ($param == 0) {
    echo 'Integer 0';
  } else {
    echo 'Something else';
  }
}
myFunc('0'); //Outputs 'String 0'
myFunc(0); // Outputs 'String 0'
```

This will lead to unexpected behavior in various circumstances.  Loose type comparisons lead to inconsistent behavior that can be difficult to track.