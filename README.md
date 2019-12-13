# test-manytomany
Minimal code for ManyToMany testing with Codeception failing.

## Installation

```bash
composer install
```

This code installs symfony, doctrine and codeception.

## Reproduction steps
1. Configure .env.test DB environment variable with a valid DB user.
2. Install Database with ``` php bin/console doctrine:database:create --env=test ```
3. Run migrations with ``` php bin/console doctrine:migrations:migrate --env=test ```
4. Run test with ``` php vendor/bin/codecept run ```
