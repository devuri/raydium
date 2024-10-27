# Raydium

Seamlessly launch a fully-equipped WordPress site with `devuri/raydium`, specifically for the rapid development and deployment of secure, scalable WordPress applications. Inspired by the ease of modern development frameworks, it delivers a frictionless setup process infused with industry-leading best practices from the outset.

## Installation

Begin by ensuring you meet the prerequisites needed for a successful installation of Raydium:

- PHP version 7.4 or above is required.
- Composer, for managing PHP dependencies.
- Access to a MySQL or MariaDB database.
- Terminal access for executing commands related to Raydium and other operations.

To install Raydium with Composer, run the following command in your terminal:

```shell
composer create-project devuri/raydium your-project-name
```

After the installation, you can start testing Raydium locally by using this command:

```shell
php -S localhost:8000 -t public -c .user.ini
```

This will serve your project on a local development server at `localhost:8000`.

## Use Template

You can also use [RaydiumX](https://github.com/devuri/radiumx), a template repository with additional features and setup, including deploy actions. 
> The RaydiumX template is optional and includes a base opinionated setup.

## Documentation

Explore the extensive [Raydium Documentation](https://devuri.github.io/wpframework/) to learn about its installation, configuration, and the features it offers.
## License

This project is open-sourced software licensed under the [MIT License](LICENSE).
