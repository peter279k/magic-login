## About Magic Login System

It's just a magic login system for the COSCUP 2022. Enjoy it!

## Manual Deployment

- Setup a VPS or virtual machine host.
- Using the `git clone https://github.com/peter279k/magic-login` command to clone the repository to the WWW document root.
- Install the Nginx, PHP 8.1 version and required extensions.
- Install the MySQL server.
- Download the `composer.phar` with `curl -sS https://getcomposer.org/installer | php`.
- Run the `php artisan key:generate` command.
- Set the MySQL DB user name, password and DB name.
- Run the `php artisan migrate` to create the `user` table.
- Run the `php artisan migrate:refresh` command to recreate the `user` table.

## References

- The magic Hash reference
  - https://github.com/spaze/hashes

## License

It's licensed under the [MIT license](https://opensource.org/licenses/MIT).
