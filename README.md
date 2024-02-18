# WPFramework

Seamlessly launch a fully-equipped WordPress site with `devuri/wpframework`, specifically engineered for the rapid development and deployment of secure, scalable WordPress applications. Inspired by the ease of modern development frameworks, it delivers a frictionless setup process infused with industry-leading best practices from the outset.

## Features

- **Instant Setup**: Kickstart a WordPress project instantly with a single command.
- **Best Practices**: Comes configured with modern development practices and standards.
- **Built for Scalability**: Ideal for crafting everything from personal blogs to expansive, [multi-tenant](https://devuri.github.io/wp-framework/multi-tenant/) web applications.
- **Security-First Design**: Pre-configured with security best practices to keep your site safe.
- **Developer Tools**: Integrated tools for debugging, testing, and deployment to enhance your workflow.
  
- **Modular Framework**: Encourages a structured approach to WordPress development, allowing efficient management and reusability of code through modules or packages.
- **Efficient Dependency Management**: Utilizes Composer for streamlined management of plugins, themes, and libraries, for simple dependency inclusion and updates.
- **Flexible Environment Configuration**: Leverages `.env` files for environment-specific configurations, facilitating easy management of database connections, API keys, and more across various deployment stages.
- **Security Measures**: Enhances security by relocating sensitive files outside the web root, safeguarding critical components from unauthorized access.
- **Version Control Integration**: Promotes the use of version control systems like Git, enabling precise tracking of custom code changes while keeping WordPress core files separate.
- **Modern Development**: Supports the integration of modern build tools and frontend technologies, streamlining the development workflow for efficiency and innovation.
- **Multi-Tenancy Support**: Features robust multi-tenant capabilities, allowing for the management of distinct websites within a shared framework, each with its own database, settings, and customizations for unparalleled flexibility.

## Getting Started

### Prerequisites

- PHP version 7.4 or newer
- Composer
- MySQL or MariaDB database

### Launching Your Project

#### Installation

Execute the following command in your terminal to create a new project:

```shell
composer create-project devuri/wpframework your-project-name
```
> Remember to replace `your-project-name` with the desired name for your project directory.

Upon installation completion, a new `.env` file appears in your project directory, populated with essential environment variables.

**Project Configuration**:

```bash
cd your-project-name
```

Edit the `.env` file to configure your database and site URL:

```shell
WP_HOME='https://yourdomain.com'
WP_SITEURL="${WP_HOME}/wp"

DB_NAME=your_db_name
DB_USER=your_db_user
DB_PASSWORD=your_db_password
DB_HOST=localhost
```

Ensure **WP_HOME** is updated to reflect your site's URL.

#### WordPress Installation

Access your project's URL in a web browser to initiate the WordPress setup, or employ WP-CLI for installation. Customize your WordPress application to meet your specific requirements through the available settings.

## Documentation

Dive into the [WPFramework Documentation](#) for detailed setup instructions, feature overviews, and best practices to maximize your project's potential.

## Contributing

We welcome your contributions! For feature suggestions, bug fixes, or code contributions, please consult our [Contributing Guidelines](#) for more information.

## Support

Need help or have a question? Open an issue on our [GitHub repository](https://github.com/devuri/wpframework/issues)

## License

WPFramework is open-source software, available under the [MIT License](LICENSE), fostering an open and collaborative development environment.
