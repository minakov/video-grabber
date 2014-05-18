
## Testing

Tests are powered by PHPUnit. You have several options.

- Run `phpunit` if PHPUnit is installed globally.
- Install dependencies (requires [Composer](https://getcomposer.org/download)).
  Run `php composer.phar --dev install` or `composer --dev install`. Then `bin/vendor/phpunit` to run version
  installed by Composer. This ensures that you are running a version compatible with the test suite.
