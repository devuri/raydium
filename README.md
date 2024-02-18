# WPFramework

Effortlessly spin up a fully-configured WordPress site in no time with `devuri/wpframework`, tailored for swift development and deployment of secure scalable WordPress applications. Drawing inspiration from the simplicity of modern frameworks, this offers a seamless setup experience, embedding industry best practices right from the start.

## Features

- **Quick Setup**: Start a new WordPress project with a single command.
- **Best Practices**: Comes configured with modern development practices and standards.
- **Scalable Structure**: Ready-made for building anything from small blogs to large, [multi-tenant](#) web applications.
- **Security Focused**: Pre-configured with security best practices to keep your site safe.
- **Developer Tools**: Integrated tools for debugging, testing, and deployment to enhance your workflow.

- **Modular Structure**: Promotes a modular approach to WordPress development, allowing you to organize your code into separate modules or packages for better code organization and reusability.
- **Dependency Management**: With the help of Composer, allows you to manage your WordPress plugins, themes, and libraries effortlessly. It provides a composer.json file to easily include and update dependencies.
- **Environment Configuration**: Implements the concept of environment-specific configurations using the `.env` file. You can define environment variables for different environments (e.g., development, staging, production) to easily manage database connections, API keys, and other environment-specific settings.
- **Enhanced Security**: By moving sensitive files outside of the web root directory, it helps improve the security of your WordPress installation. Critical files are stored outside the public directory, preventing direct access.
- **Version Control Friendly**: Encourages the use of version control systems like Git. By separating core WordPress files from your project files, it makes it easier to manage and track changes to your custom code while excluding WordPress core files from version control.
- **Modern Development Workflow**: Embraces modern development practices, allowing you to use build tools like Webpack for asset management and build processes. You can easily integrate frontend frameworks or preprocessors into your project for an optimized development workflow.
- **Tenancy** introduces comprehensive [`multi-tenant`](https://devuri.github.io/wp-framework/multi-tenant/) functionality, enabling the support of multiple tenants (websites) within a single environment. Each tenant benefits from its own dedicated database, configuration, and customization options, all while operating on a shared infrastructure. This design ensures maximum flexibility for tailoring solutions to meet specific requirements.

## Getting Started

### Prerequisites

- PHP 7.4 or higher
- Composer
- MySQL or MariaDB database

### Creating a New Project

#### Installation

Run the following command in your terminal:

```shell
composer create-project devuri/wpframework your-project-name
```
> Replace `your-project-name` with your desired project directory.

After the installation process, you will find a new `.env` file in your project directory. This file contains all the necessary environment variables.

**Navigate to Your Project Directory**:

   ```bash
   cd your-project-name
   ```

Open the `.env` file in a text editor of your choice and make the following configurations:

**DB_NAME:** Set the name of your database.

**DB_USER:** Set the database user.

**DB_PASSWORD:** Set the database password.

**DB_HOST:** In most cases, this can remain as 'localhost' if you are using the default database host.

```shell
   WP_HOME='https://yourdomain.com'
   WP_SITEURL="${WP_HOME}/wp"
   
   DB_NAME=your_db_name
   DB_USER=your_db_user
   DB_PASSWORD=your_db_password
```

Update the **WP_HOME** value with the correct URL for your application.

## Run WordPress Installation:

   Navigate to your project's public domain in a web browser to run the WordPress installation, or use WP-CLI to install WordPress.
   > Utilize the extensive customization options to tailor your WordPress application to your needs.

## Documentation

For more detailed instructions and comprehensive documentation, visit [WPFramework Documentation](#).

## Contributing

If you have ideas for improvements or want to contribute code, please follow our [Contributing Guidelines](#).

## Support

Need help or have a question? Open an issue on our [GitHub repository](https://github.com/devuri/wpframework/issues), and we'll be happy to assist.

## License

This project is open-sourced software licensed under the [MIT License](LICENSE).
