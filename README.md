### Trait
Add **HasTrans** trait to your Enum to add ```trans(): string``` function.

```php
namespace App\Enums;

use Atin\LaravelTransEnum\Traits\HasTrans;

enum Smoking: string
{
    use HasTrans, …
```