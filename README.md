# Raydium Framework

**A micro-infrastructure framework that enhances WordPress with modern development practices and multi-tenancy support.**

## Overview

Raydium is a **micro-infrastructure framework** that merges the traditional strengths of WordPress with the efficiencies of modern development frameworks. It's a **tiny, smart layer** that sits *in front* of your project and gives you modern development tools without fighting the core.

Think of it as a thin "middleware-engine" that helps you:

- **Organize request flow** via middleware (checks, guards, transforms)
- **Define clean routes** and controllers for APIs
- **Manage settings & secrets** through a simple `.env` file
- **Wire up services** (templating, caching, mail) with minimal boilerplate
- **Support multiple sites** (multi‑tenant mode) from one codebase

> In short, it enhances your project with composer‑driven, PSR‑compliant patterns while preserving all the admin UI, plugins, and themes.

## Who It's For

- **Agency developers** building a dozen client sites that share structure
- **Plugin authors** who want a clean, testable foundation
- **Headless/REST** projects where you need tight control over API responses
- **SaaS builders** running multiple "tenants" under one roof

If you've ever wanted to combine WordPress's flexibility with modern PHP development patterns, Raydium bridges that gap beautifully.

## Prerequisites

Before installing Raydium, ensure you have:

- **PHP 7.4 or higher** - Verify with `php -v`
- **Composer** - For dependency management
- **MySQL or MariaDB database** - With credentials ready
- **Terminal access** - To execute commands
- **Text editor** - Supporting PHP/WordPress development

## Installation

Choose the installation option that best fits your needs:

### Core Raydium (Recommended)
The solid foundation for secure, scalable, and modular applications:
```bash
composer create-project devuri/raydium your-project-name
```

### RaydiumX (Extended Template)
Extended template with more opinionated setups and additional tooling:
```bash
composer create-project devuri/raydiumx your-project-name
```

### RaydiumXE (Minimal Version)
Stripped-down base for starting from scratch with only essential components:
```bash
composer create-project devuri/raydiumxe your-project-name
```

## Quick Start

1. **Create Project**
   ```bash
   composer create-project devuri/raydium my-project
   cd my-project
   ```

2. **Configure Environment**

   The framework will auto-generate a `.env` file on first boot if none exists. Edit it with your settings:
   ```env
   # Basic Configuration
   HOME_URL='https://yourdomain.com'
   WP_SITEURL="${HOME_URL}/wp"
   ENVIRONMENT_TYPE='dev'

   # Database Settings
   DB_NAME='your_db_name'
   DB_USER='your_db_user'
   DB_PASSWORD='your_db_password'
   DB_HOST='localhost'
   DB_PREFIX='wp_'
   ```

3. **Start Local Server**
   ```bash
   php -S localhost:8000 -t public -c .user.ini
   ```

4. **Complete Setup**

   Visit `http://localhost:8000` and follow the installation wizard.

## Project Structure

Raydium provides an optimized file structure for security and organization:

```
├── .env                    # Environment variables (excluded from web root)
├── composer.json          # Dependencies and scripts  
├── configs/               # Configuration files
│   ├── app.php           # Application configuration
│   └── tenancy.json      # Multi-tenant settings (if enabled)
├── vendor/               # Composer dependencies (secure, outside web root)
└── public/               # Web root directory
    ├── index.php         # Main entry point
    ├── wp-config.php     # WordPress configuration
    ├── wp/              # WordPress core files
    └── wp-content/      # WordPress content
        ├── mu-plugins/  # Must-use plugins
        ├── plugins/     # Regular plugins
        └── themes/      # Themes
```

**Key Security Features:**
- `.env` file stored outside public directory
- `vendor/` directory not web-accessible
- WordPress core separated in `wp/` directory
- Clean separation of public and private files

## Environment Configuration

### Environment Types

Raydium supports multiple environment types with specific behaviors:

- **`prod` / `production`** - Optimized for production with caching, minimal debug
- **`sec` / `secure`** - Security-hardened production with restricted file modifications
- **`staging`** - Mirror of production with some debug capabilities
- **`dev` / `development`** - Development with full debugging, unminified scripts
- **`debug` / `deb`** - Intensive debugging with verbose logging
- **`local`** - Local development variant

### Environment File Loading

The framework searches for environment files in this order (first found wins):

1. `env`
2. `.env`  
3. `.env.secure`
4. `.env.prod`
5. `.env.staging`
6. `.env.dev`
7. `.env.debug`
8. `.env.local`

### Environment Variables

Key environment variables and their defaults:

| Variable | Example | Description |
|----------|---------|-------------|
| `HOME_URL` | `https://domain.local` | Base URL of your site |
| `WP_SITEURL` | `${HOME_URL}/wp` | WordPress admin URL |
| `ENVIRONMENT_TYPE` | `prod` | Controls environment behavior |
| `DB_NAME` | `local` | Database name |
| `DB_USER` | `root` | Database username |
| `DB_PASSWORD` | `password` | Database password |
| `DB_HOST` | `localhost` | Database host |
| `DB_PREFIX` | `wp_` | Table prefix |
| `MEMORY_LIMIT` | `256M` | PHP memory limit |
| `FORCE_SSL_ADMIN` | `false` | Force SSL in admin |

## How It Works

### 1. Middleware Pipeline
A stack of "before/after" handlers lets you inject auth checks, maintenance modes, JSON formatting, or anything else into the request lifecycle.

### 2. Service Container & DI
Pull in services (mailer, templating, Redis cache) by name.

### 3. .env & Configs
All your database credentials, API keys, feature toggles, and tenant settings live in an environment file and central config PHP files.

### 4. Multi‑Tenant Magic  
Point different domains at the same codebase and Raydium automatically loads the right database, plugins, and settings for each site.

## Configuration System

### Application Configuration (`configs/app.php`)

The framework uses a flexible configuration system where you only override what you need:

```php
return [
    'error_handler' => [
        'class' => Whoops\Handler\PrettyPageHandler::class,
        'quit'  => true,
        'logs'  => true,
    ],
    'security' => [
        'brute-force' => true,
        'two-factor' => true,
        'restrict_wpadmin' => [
            'enabled' => true,
            'allowed' => ['admin-ajax.php']
        ]
    ],
    'redis' => [
        'disabled' => false,
        'host' => '127.0.0.1',
        'port' => 6379,
        'database' => 0
    ]
];
```

### Key Configuration Sections

- **Error Handler** - Whoops integration for better error display
- **Database Admin (Adminer)** - Built-in database management
- **Health Status** - Health check endpoints with secret protection
- **Security Settings** - Brute-force protection, 2FA, admin restrictions
- **Redis Cache** - Object caching configuration
- **Directory Structure** - Customizable paths
- **Email (SMTP)** - Multiple provider support
- **Headless Mode** - API-only optimization
- **Login Guard** - Advanced authentication protection
- **Spam Detection** - Multilingual spam filtering

## Multi-Tenant Architecture

### Overview

Multi-tenancy in Raydium enables managing multiple independent websites within a single installation, ideal for:

- SaaS platforms where each client has their own instance
- Regional websites for a single organization  
- Network of blogs or ecommerce stores with unique settings
- Agency developers managing multiple client sites

### Key Benefits

- **Efficiency** - Shared infrastructure reduces resource duplication
- **Flexibility** - Tenant-specific configurations with unified base
- **Scalability** - Easy tenant addition without significant overhead
- **Maintainability** - Centralized updates and patches

### Enable Multi-Tenancy

Add to your `composer.json`:

```json
{
  "extra": {
    "multitenant": {
      "is_active": true,
      "isolated": false,
      "hash": false,
      "uuid": "unique_installation_id"
    }
  }
}
```

### Tenant Configuration

Global settings in `configs/tenancy.json`:

```json
{
  "require-config": false,
  "web-root": "public",
  "database": {
    "use_env": true,
    "isolation": "database",
    "default": "mysql"
  },
  "tenant-management": {
    "isolation": "database",
    "creation-strategy": "auto"
  },
  "cache": {
    "enabled": true,
    "adapter": "redis",
    "prefix": "tenant_cache"
  }
}
```

Tenant-specific configurations in `configs/tenant/{tenant_id}/`:

```
configs/tenant/alpha/
├── .env              # Tenant environment variables
├── app.php          # Tenant application config
└── constants.php    # Tenant constants
```

## Security Features

Raydium includes comprehensive security enhancements:

### Built-in Protection
- **Brute-force login protection** with configurable limits
- **Two-factor authentication** support
- **Pwned password prevention** against data breach databases
- **Admin IP restrictions** for enhanced access control
- **WP-Admin access restrictions** with whitelist capabilities

### Advanced Security
- **Login Guard** with Redis rate limiting and AbuseIPDB threat intelligence
- **Spam Detection** with Cyrillic character and keyword pattern matching
- **File access restrictions** preventing unauthorized access to sensitive files

### Configuration Example
```php
'security' => [
    'restrict_wpadmin' => [
        'enabled' => true,
        'secure' => true,
        'allowed' => ['admin-ajax.php']
    ],
    'brute-force' => true,
    'two-factor' => true,
    'no-pwned-passwords' => true,
    'admin-ips' => ['192.168.1.100']
]
```

## Performance Features

### Caching Systems
- **Redis object caching** with tenant isolation
- **Built-in cache management** with TTL configuration
- **Static asset optimization** with CDN support

### Optimization Modes
- **Headless mode** for API-only deployments
- **SHORTINIT mode** for minimal initialization

### Configuration Example
```php
'redis' => [
    'disabled' => false,
    'maxttl' => 3600,
    'host' => env('REDIS_HOST', '127.0.0.1'),
    'port' => env('REDIS_PORT', 6379),
    'prefix' => env('REDIS_PREFIX', 'raydium')
]
```

## Use Cases

Raydium is perfect for various applications:

### Development Scenarios
- **Personal and Professional Blogs** with enhanced performance
- **Business Websites** with custom functionality requirements
- **E-Commerce Platforms** needing advanced security and scalability  
- **Educational and Non-Profit Websites** with complex content management
- **Multi-Tenant Web Platforms** for SaaS applications
- **Headless CMS** backends for modern frontend frameworks

### Developer Types
- Agency developers building multiple client sites
- Plugin authors wanting a clean, testable foundation
- Developers building headless/REST projects
- SaaS builders needing multi-tenant capabilities

Raydium enhances your projects while maintaining compatibility fully embracing core strengths and ecosystem:

- **Core Intact** - All standard features remain
- **Plugin Compatibility** - Works with existing plugins
- **Theme Support** - Full theme system compatibility
- **Admin Interface** - Standard admin unchanged


## Deployment

### Local Development
```bash
# Start local server
php -S localhost:8000 -t public -c .user.ini

# Or with specific PHP version
/usr/bin/php8.1 -S localhost:8000 -t public -c .user.ini
```

### Production Deployment
1. **Upload entire project** excluding `vendor` directory
2. **Set public directory** as web root
3. **Install dependencies** on server:
   ```bash
   composer install --no-dev --optimize-autoloader
   ```
4. **Configure environment** with production settings
5. **Set proper file permissions**

### Web Server Configuration

#### Nginx Example
```nginx
server {
    listen 80;
    server_name yourdomain.com;
    root /var/www/html/public;
    index index.php;

    location / {
        try_files $uri $uri/ /index.php?$args;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
        fastcgi_index index.php;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    }
}
```

## Developer Tools

### Built-in Tools
- **Whoops Error Handler** - Better error pages for debugging
- **Adminer Database Interface** - Web-based database management
- **Health Check Endpoints** - Application monitoring
- **Debug Mode** - Comprehensive logging and error reporting

### Configuration Access
Use the global `configs()` helper in your code:

```php
// Access configuration values
$debug_enabled = configs()->app()->config['app']->get('error_handler.logs');
$redis_host = configs()->app()->config['app']->get('redis.host');
```

## Contributing

We welcome contributions to make Raydium better:

- **Bug Reports** - Submit issues on GitHub
- **Feature Requests** - Propose new functionality  
- **Pull Requests** - Submit code improvements
- **Documentation** - Help improve guides and examples

## Community and Support

- **Documentation** - [Full Documentation](https://devuri.github.io/raydium-ddocs/)
- **GitHub Repository** - [Source Code](https://github.com/devuri/raydium)
- **Issues** - Report bugs and request features on GitHub
- **Community** - Join discussions and get support

## License

Raydium is open-source software released under the MIT License.

---

**Enhance your development** with Raydium's modern infrastructure.
