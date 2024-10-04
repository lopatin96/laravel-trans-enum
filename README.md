### Install
When you have an enums like ```App\Enums\Smoking.php```, create an ```\lang\en\enums\smoking.php``` file with locals.

```php
<?php

namespace App\Enums;

enum Smoking: string
{
    case Never = 'never';

    case Occasional = 'occasional';

    case Often = 'often';
}
```

```php
<?php

return [

    'never:title' => 'Never',
    'never:description' => 'Some description for Never',

    'occasional:title' => 'Occasional smoker',

    'often:title' => 'Often',

];
```

### Trait
Add **HasTrans** trait to your Enum to add ```trans(): string``` function.

```php
namespace App\Enums;

use Atin\LaravelTransEnum\Traits\HasTrans;

enum Smoking: string
{
    use HasTrans, …
```

### Usage
```php
echo Smoking::Never->title();
echo Smoking::Never->description();
```
