# 🛒 EcommerceApp - Laravel E-Commerce Platform

A comprehensive e-commerce web application built with Laravel 12, featuring a modern and intuitive interface for both customers and administrators.

![Laravel](https://img.shields.io/badge/Laravel-12-red?style=flat-square&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.2+-blue?style=flat-square&logo=php)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.2.3-purple?style=flat-square&logo=bootstrap)
![MySQL](https://img.shields.io/badge/MySQL-Database-orange?style=flat-square&logo=mysql)

## 🌟 Features

### 🛍️ **Customer Features**
- **Product Browsing**: Browse products by categories with detailed product pages
- **Shopping Cart**: Add products to cart with quantity management
- **User Authentication**: Secure registration and login system
- **Order Management**: Complete checkout process with order tracking
- **Product Reviews**: Rate and review products
- **Product Search**: Advanced search functionality
- **Multiple Product Photos**: View products from different angles

### 👨‍💼 **Admin Features**
- **Product Management**: Add, edit, delete, and manage products
- **Category Management**: Organize products into categories
- **Order Management**: View and process customer orders
- **User Management**: Role-based access control
- **Product Photos**: Upload and manage multiple product images
- **Admin Dashboard**: Comprehensive admin panel

### 🔧 **Technical Features**
- **Responsive Design**: Mobile-friendly interface using Bootstrap 5
- **Image Upload**: Secure file handling with UUID naming
- **Database Relationships**: Properly structured relational database
- **Middleware Protection**: Role-based route protection
- **Session Management**: Secure user session handling

## 🛠️ **Technology Stack**

### **Backend**
- **Framework**: Laravel 12
- **PHP Version**: 8.2+
- **Database**: MySQL
- **Authentication**: Laravel UI

### **Frontend**
- **CSS Framework**: Bootstrap 5.2.3
- **JavaScript**: Vanilla JS with Axios
- **Build Tool**: Vite
- **Styling**: SASS

### **Additional Packages**
- **Laravel UI**: Authentication scaffolding
- **Pusher PHP Server**: Broadcasting support
- **League CommonMark**: Markdown processing

## 📋 **Database Schema**

### **Core Tables**
- **Users**: User authentication and profiles with role-based access
- **Categories**: Product categorization system
- **Products**: Product information, pricing, and inventory
- **Carts**: Shopping cart management for users
- **Orders**: Order processing and customer information
- **Order Details**: Individual order items and quantities
- **Reviews**: Product reviews and ratings system
- **Product Photos**: Multiple product images support

### **Key Relationships**
- Users can have multiple orders and cart items
- Products belong to categories and can have multiple photos
- Orders contain multiple order details
- Products can have multiple reviews from different users

## 🚀 **Installation**

### **Prerequisites**
- PHP 8.2 or higher
- Composer
- Node.js & NPM
- MySQL
- XAMPP (recommended for local development)

### **Setup Instructions**

1. **Clone the repository**
   ```bash
   git clone https://github.com/Hossamesmail2003/EcommerceApp.git
   cd EcommerceApp
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment Configuration**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure Database**
   - Update `.env` file with your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=ecommerce
   DB_USERNAME=root
   DB_PASSWORD=
   ```

6. **Run Migrations**
   ```bash
   php artisan migrate
   ```

7. **Build Assets**
   ```bash
   npm run build
   ```

8. **Start Development Server**
   ```bash
   php artisan serve
   ```

   The application will be available at `http://localhost:8000`

## 📁 **Project Structure**

```
EcommerceApp/
├── app/
│   ├── Http/Controllers/          # Application controllers
│   │   ├── AddProductController.php
│   │   ├── CartController.php
│   │   ├── MainController.php
│   │   └── ...
│   ├── Models/                    # Eloquent models
│   │   ├── Product.php
│   │   ├── Category.php
│   │   ├── Cart.php
│   │   └── ...
│   ├── Middleware/               # Custom middleware
│   │   └── CheckRoleMiddleware.php
│   └── Providers/                # Service providers
├── database/
│   ├── migrations/               # Database migrations
│   └── seeders/                  # Database seeders
├── resources/
│   ├── views/                    # Blade templates
│   │   ├── Products/            # Product-related views
│   │   ├── auth/                # Authentication views
│   │   └── layouts/             # Layout templates
│   ├── js/                       # JavaScript files
│   └── sass/                     # SASS stylesheets
├── routes/
│   └── web.php                   # Web routes
└── public/
    └── uploads/                  # Uploaded product images
```

## 🔗 **API Endpoints**

### **Public Routes**
| Method | Endpoint | Description | Example |
|--------|----------|-------------|---------|
| `GET` | `/` | Homepage with categories | `http://localhost:8000/` |
| `GET` | `/Product/{catid}` | Products by category | `http://localhost:8000/Product/1` |
| `GET` | `/Category` | All categories with products | `http://localhost:8000/Category` |
| `GET` | `/Reviews` | Product reviews page | `http://localhost:8000/Reviews` |
| `GET` | `/ProductsTable` | Products table view | `http://localhost:8000/ProductsTable` |
| `POST` | `/Search` | Product search | Form submission |
| `POST` | `/StoreReview` | Submit product review | Form submission |

### **Authenticated User Routes**
| Method | Endpoint | Description | Access Level |
|--------|----------|-------------|--------------|
| `GET` | `/home` | User dashboard | Authenticated |
| `POST` | `/Cart/{productid}` | Add product to cart | Authenticated |
| `GET` | `/GetCart` | View shopping cart | Authenticated |
| `GET` | `/CompleteOrder` | Order completion page | Authenticated |
| `POST` | `/StoreOrder` | Process order | Authenticated |

### **Product Management Routes**
| Method | Endpoint | Description | Access Level |
|--------|----------|-------------|--------------|
| `GET` | `/AddProduct` | Add product form | Authenticated |
| `POST` | `/StoreProduct` | Save new product | Authenticated |
| `GET` | `/EditProduct/{productid}` | Edit product form | Authenticated |
| `PUT` | `/UpdateProduct/{productid}` | Update product | Authenticated |
| `DELETE` | `/DeleteProduct/{productid}` | Delete product | Authenticated |
| `GET` | `/Addproductphotos/{productid}` | Add product photos | Authenticated |
| `POST` | `/storeproductimages/{productid}` | Upload product images | Authenticated |

### **Admin Routes**
| Method | Endpoint | Description | Access Level |
|--------|----------|-------------|--------------|
| `GET` | `/admin` | Admin dashboard | Admin Only |

## 🎯 **Key Features Explained**

### **Product Management**
- **CRUD Operations**: Complete Create, Read, Update, Delete functionality for products
- **Category Organization**: Products are organized into categories for easy browsing
- **Image Handling**: Secure file upload with UUID naming to prevent conflicts
- **Inventory Tracking**: Quantity management for each product

### **Shopping Cart System**
- **Session-based Cart**: Cart items are stored per user session
- **Quantity Management**: Users can adjust quantities in their cart
- **Persistent Cart**: Cart items persist across user sessions

### **Order Processing**
- **Complete Checkout**: Full order processing with customer information
- **Order Details**: Detailed breakdown of ordered items
- **Order History**: Users can view their order history

### **User Authentication & Authorization**
- **Laravel UI**: Built-in authentication system
- **Role-based Access**: Different access levels for users and admins
- **Middleware Protection**: Routes protected based on user roles

### **Review System**
- **Product Reviews**: Users can rate and review products
- **Review Display**: Reviews are displayed on product pages

## 🔧 **Configuration**

### **Environment Variables**
Key environment variables to configure:

```env
# Application
APP_NAME=EcommerceApp
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost

# Database
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ecommerce
DB_USERNAME=root
DB_PASSWORD=

# Session
SESSION_DRIVER=database
SESSION_LIFETIME=120

# File Storage
FILESYSTEM_DISK=local
```

### **File Permissions**
Ensure the following directories are writable:
- `storage/`
- `bootstrap/cache/`
- `public/uploads/`

## 🧪 **Testing**

Run the test suite:
```bash
php artisan test
```

## 🚀 **Deployment**

### **Production Setup**
1. Set `APP_ENV=production` in `.env`
2. Set `APP_DEBUG=false`
3. Configure production database
4. Run `php artisan config:cache`
5. Run `php artisan route:cache`
6. Run `php artisan view:cache`

### **Server Requirements**
- PHP 8.2+
- MySQL 5.7+ or MariaDB 10.3+
- Composer
- Web server (Apache/Nginx)

## 🤝 **Contributing**

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

### **Development Guidelines**
- Follow PSR-12 coding standards
- Write descriptive commit messages
- Add tests for new features
- Update documentation as needed

## 📝 **License**

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 👨‍💻 **Author**

**Hossam Esmail**
- GitHub: [@Hossamesmail2003](https://github.com/Hossamesmail2003)
- Repository: [EcommerceApp](https://github.com/Hossamesmail2003/EcommerceApp)

## 🙏 **Acknowledgments**

- [Laravel Framework](https://laravel.com/) - The PHP framework for web artisans
- [Bootstrap](https://getbootstrap.com/) - CSS framework for responsive design
- [Font Awesome](https://fontawesome.com/) - Icon library
- [Vite](https://vitejs.dev/) - Frontend build tool
- All contributors and supporters

## 📞 **Support**

If you encounter any issues or have questions:
1. Check the [Issues](https://github.com/Hossamesmail2003/EcommerceApp/issues) page
2. Create a new issue if your problem isn't already reported
3. Provide detailed information about the issue

---

⭐ **Star this repository if you found it helpful!**
