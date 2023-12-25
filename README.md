Project Information:
- Final exam for Advanced Web Development subject at VNUK Institute for Research and Executive Education
- Student: Bùi Minh Quân
- Student ID: 21020005
- Lecturer: Nguyễn Hữu Quyền

Integrated Kits:
- Laravel Breeze & Livewire
- Laravel Sanctum
- Scramble & Telescope
- Tailwind CSS (via Vite)

Features: 
- Basic Todos application with CRUD functions
- Login and register function
- Managing todo tasks
- User profile management by Breeze kit

Dev features: 
- Database migration and models to create schema
- Database seeder using factories
- Implement Livewire using Blade as layout
- Service providers such as Scramble to create API document
- Monitor requests via Telescope

Demo video:
https://drive.google.com/file/d/1hxIjx6mQGm-kOaoAYC50zYMaXJ_6wdZP/view?usp=sharing

Installation:
- Clone this repository:
    + git clone (https://github.com/WuanBui/Todo-Application-with-Authentication.git)
- Install dependencies:
    + composer install
    + npm install
- Database migrate and seed (Check your database config in .env and config/database.php before processing)
    + php artisan migrate --seed
- Run Laravel application
    + php artisan serve
- Run Vite (for Tailwind CSS)
    + npm run dev

