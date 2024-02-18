# WP Example Project

This Composer project, `devuri/wp-example`, is designed for building robust WordPress applications, leveraging the power of `devuri/wp-framework` and a suite of essential plugins and themes for WordPress development. It's structured to facilitate easy development, deployment, and maintenance of WordPress sites.

## Features

- Integrated with `devuri/wp-framework` for enhanced WordPress development.
- Includes a variety of plugins for functionality ranging from code highlighting to security and SEO.
- Bundles popular themes like Kadence, Hello Elementor, and Twenty Twenty-Three for design flexibility.
- Configured with a custom WordPress install directory and installer paths for mu-plugins, plugins, and themes.

## Requirements

- PHP 7.4 or higher
- Composer

## Installation

1. **Clone the Project**

   Begin by cloning this project into your local development environment:

   ```sh
   git clone https://github.com/your-username/wp-example.git
   cd wp-example
   ```

2. **Install Dependencies**

   Run Composer to install the required PHP packages:

   ```sh
   composer install
   ```

3. **WordPress Configuration**

   After installing the dependencies, configure your WordPress installation as you would normally. The WordPress core will be located in the `public/wp` directory.

4. **Activating Plugins and Themes**

   Activate the required plugins and themes through the WordPress admin dashboard or WP-CLI.

## Structure

- `public/wp`: WordPress core installation directory.
- `public/mu-plugins`: Directory for Must-Use plugins.
- `public/plugins`: Standard WordPress plugins directory.
- `public/app/themes`: WordPress themes directory.

## Plugins Included

- Easy Code Highlighter
- Advanced Custom Site Status
- Application Passwords Manager
- ... and more, offering a wide range of functionality from SEO optimization to security enhancements.

## Themes Included

- Kadence
- Hello Elementor
- Twenty Twenty-Three

## Customization

Feel free to customize the Composer `require` section to include or exclude plugins and themes as per your project requirements.

## Contributing

Contributions to the project are welcome! Please follow the standard GitHub pull request process to propose changes.

## License

This project is open-sourced software licensed under the MIT License. See the LICENSE file for more information.
