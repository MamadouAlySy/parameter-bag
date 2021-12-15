# parameter-bag

A simple php parameter bag

### Usage

```php
<?php

require_once './vendor/autoload.php';

$bag = new \MamadouAlySy\ParameterBag();

$bag->add('name', 'Mamadou');
$bag->has('name') // return true
count($bag) // return 1;
```