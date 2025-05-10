# Livewire Dashboard

A modern dashboard built with Laravel and Livewire.

## Development Setup

This project uses Laravel Sail for Docker development. Follow these steps to get started:

1. Create a `.env` file from `.env.example`:
```bash
cp .env.example .env
```

2. Start Laravel Sail:
```bash
./vendor/bin/sail up -d
```

3. Install dependencies and generate application key:
```bash
./vendor/bin/sail composer install
./vendor/bin/sail artisan key:generate
```

4. Run migrations:
```bash
./vendor/bin/sail artisan migrate
```

5. Access the application at http://localhost

## Development Commands

- Start Sail: `./vendor/bin/sail up -d`
- Stop Sail: `./vendor/bin/sail down`
- View logs: `./vendor/bin/sail logs`
- Run artisan commands: `./vendor/bin/sail artisan`
- Run composer commands: `./vendor/bin/sail composer`
- Run npm commands: `./vendor/bin/sail npm`
- Access MySQL: `./vendor/bin/sail mysql`

## Features

- Modern dashboard with Livewire components
- User authentication system
- Password reset functionality
- Email verification
- Responsive design with Tailwind CSS
