# Laravel Gift Shop Website

A Laravel-based gift shop with an admin panel to manage products, categories, and orders. Customers can browse items, add them to the cart, and place orders.

## Features
- 🛒 Shopping cart with order management  
- 🛠 Admin panel to manage products & categories  
- 🔐 User authentication  
- 🎨 Bootstrap-integrated responsive UI  

## Installation & Setup

1. Clone the repository:
   ```sh
   git clone https://github.com/yoni-54/laravel-giftshop.git
   cd laravel-giftshop
2. Install dependencies
   composer install
   npm install
3. Set up the environment file
   cp .env.example .env
   php artisan key:generate
4. Run migrations
   php artisan migrate
5. Start the development server
   php artisan serve

## Usage
- Visit `http://127.0.0.1:8000` in your browser.
- To access the admin panel, change the `usertype` to `admin` in the 
  database for a user. 
- Admins can log in to manage products, categories, and orders.
- Customers can browse, add items to the cart, and place orders.

## Technologies Used
- Laravel 10
- Bootstrap 5
- MySQL
- JavaScript 
