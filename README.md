# Goldab

A modern web application built with Laravel 8 and Livewire for dynamic family tree visualization.

## About The Project

Goldab is a sophisticated family tree visualization platform that helps users create, manage, and explore their family history in an interactive and dynamic way. Built with Laravel 8 and Livewire, it provides a seamless experience for users to document and visualize their family connections, relationships, and history.

The application allows users to:
- Create and manage family member profiles
- Build complex family relationships
- Visualize family trees in an interactive format
- Add historical information and documents
- Share family trees with other members
- Export family tree data
- Search and filter family members
- Track family lineage and ancestry

## Features

- **Interactive Family Tree Visualization**
  - Dynamic tree layout and navigation
  - Zoom and pan capabilities
  - Collapsible tree branches
  - Drag-and-drop interface for easy tree manipulation

- **Family Member Management**
  - Detailed profile creation
  - Relationship mapping
  - Document and photo attachments
  - Historical timeline tracking

- **Technical Features**
  - Built with Laravel 8
  - Livewire for dynamic UI components
  - Laravel Sanctum for API authentication
  - SEO optimization with Laravel SEO package
  - CORS support
  - Modern frontend tooling with Laravel Mix
  - Real-time updates and interactions
  - Responsive design for all devices

## Requirements

- PHP >= 7.3 or >= 8.0
- Composer
- Node.js & NPM
- MySQL/PostgreSQL/SQLite

## Installation

1. Clone the repository
```bash
git clone https://github.com/yourusername/goldab.git
```

2. Install PHP dependencies
```bash
composer install
```

3. Install NPM dependencies
```bash
npm install
```

4. Create environment file
```bash
cp .env.example .env
```

5. Generate application key
```bash
php artisan key:generate
```

6. Configure your database in `.env` file
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=goldab
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

7. Run migrations
```bash
php artisan migrate
```

8. Start the development server
```bash
php artisan serve
```

9. In a separate terminal, run Vite for frontend assets
```bash
npm run dev
```

## Testing

Run the test suite:
```bash
php artisan test
```

## Contributing

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgments

- [Laravel](https://laravel.com)
- [Livewire](https://laravel-livewire.com)
- [Laravel Sanctum](https://laravel.com/docs/sanctum)
- [Laravel SEO](https://github.com/romanzipp/Laravel-SEO)
