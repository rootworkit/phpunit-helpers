# PHPUnit Helpers
Helper traits for PHPUnit

_"You can touch your privates and you can touch your friends' privates
but you can't touch your children's privates... unless they're protected."_
- Unknown

## Installation

Install composer in a common location or in your project:

```bash
curl -s http://getcomposer.org/installer | php
```

Create the composer.json file as follows:

```json
{
    "require": {
        "rootwork/phpunit-helpers": "dev-master"
    }
}
```

Run the composer installer:

```bash
php composer.phar install
```

## Usage

```php
namespace Test;

use Rootwork\PHPUnit\Helper\Accessor;

class MyTest extends \PHPUnit_Framework_TestCase
{
    use Accessor;

    public function testThings()
    {
        $sut = new MyThing();

        // Set a non-public property
        $this->setPropertyValue($sut, 'someNonPublicProperty', 'foo');

        // Get a non-public property
        $result = $this->getPropertyValue($sut, 'someNonPublicProperty'); // foo

        // Invoke a non-public method
        $this->invokeMethod($sut, 'someNonPublicMethod', ['foo', 'bar']);

        // Invoke a non-public method with arguments
        $this->invokeMethod($sut, 'someNonPublicMethod', ['foo', 'bar']);
    }
}
```
