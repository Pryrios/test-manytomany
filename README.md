# test-manytomany
Minimal code for ManyToMany testing with Codeception failing.

This code installs symfony, doctrine and codeception.

1. Configure .env.test DB environment variable with a valid DB user.
2. Install Database with $> php bin/console doctrine:database:create
3. Run migrations with $> php bin/console doctrine:migrations:migrate --env=test
4. Run test with $> php vendor/bin/codecept run
