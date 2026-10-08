# Smart Restaurant Management System 🍔🍕

A comprehensive, full-stack Smart Restaurant Management System built with modern UI principles. This project allows users to browse menus, add items to their cart, securely check out, and even reserve a table online. It also features a fully-functional admin dashboard to manage products, orders, and reservations.

## 🚀 Features
- **User Authentication**: Secure Login & Registration using BCRYPT password hashing.
- **Dynamic Menu**: Real-time menu fetched from the database, categorized into Burgers, Pizzas, Main Courses, Drinks, and Desserts.
- **Cart & Checkout**: Add/Remove items, update quantities, and submit secure orders.
- **Table Reservations**: Book a table for a specific date and time, with built-in validation to prevent double-booking.
- **QR Code Mobile Ordering**: Footer integration allowing in-house diners to scan a QR code to view the menu on their phone.
- **Admin Dashboard**: Protected backend to perform full CRUD operations on food items, manage incoming orders, and view user messages.
- **Modern UI**: Polished Vanilla CSS featuring the 'Outfit' Google Font, soft glassmorphism shadows, and fully responsive mobile layouts.

## 💻 Tech Stack
- **Frontend**: HTML5, CSS3 (Vanilla), JavaScript, Font Awesome.
- **Backend**: PHP 8, PDO (Prepared Statements).
- **Database**: MySQL / MariaDB.
- **Environment**: XAMPP (Apache).

## 🛠️ Installation & Setup

1. **Clone the repository:**
   ```bash
   git clone https://github.com/Sakshi21B/smart-restaurant-management.git
   ```
2. **Move files to local server:**
   Move the project folder into your XAMPP `htdocs` directory (or WAMP `www` directory).
3. **Database Configuration:**
   - Open XAMPP Control Panel and start **Apache** and **MySQL**.
   - Go to `http://localhost/phpmyadmin` in your browser.
   - Create a new database named `food_db`.
   - Click **Import**, select the `food_db.sql` file provided in this repository, and execute.
4. **Run the Project:**
   Open your browser and navigate to:
   ```text
   http://localhost/smart-restaurant-management/home.php
   ```

## 🔒 Admin Credentials
To access the admin dashboard (`/admin/dashboard.php`), use the default credentials:
- **Username**: `admin`
- **Password**: `111`
*(You can also register a new admin account on the admin login page)*
