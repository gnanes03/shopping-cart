# 🛒 Shopping Cart System

A simple and responsive shopping cart system built using **JavaScript**, **PHP**, **HTML**, **CSS**, and **MySQL**.  
This project allows users to add computer products to a cart, place orders, and provides an admin panel to view all placed orders.

---

## 📌 Features

- 🧾 Add computer products to cart dynamically
- 🛍️ View and manage cart with total cost
- 💾 Store orders in a MySQL database using PHP
- 🔐 Admin login with session-based authentication
- 📊 Admin dashboard to view all orders
- 🎨 Responsive UI with light blue/dark blue theme

---

## 🛠️ Tech Stack

- **Frontend**: HTML, CSS, JavaScript  
- **Backend**: PHP (with sessions)  
- **Database**: MySQL  
- **Tools**: XAMPP / VS Code

---

## 💻 How to Run Locally

1. Clone this repository:
   ```bash
   git clone https://github.com/gnanes03/shopping-cart.git

2. Move the project folder to your XAMPP htdocs directory.

3. Start Apache and MySQL from XAMPP Control Panel.

4. Open phpMyAdmin at http://localhost/phpmyadmin

5. Create the database:

  -> Import the create_db.sql file

  -> Or run this manually:

    CREATE DATABASE shopping_cart;

    USE shopping_cart;

    CREATE TABLE orders (
      id INT AUTO_INCREMENT PRIMARY KEY,
      product_name VARCHAR(255),
      price INT,
      order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );

6. Access the project in browser:

   http://localhost/your-folder-name/index.html

🔐 Admin Login Details

Username: admin

Password: admin123

📁 Project Structure

  shopping-cart/
├── index.html              # User-facing store
├── style.css               # Styling
├── script.js               # Cart UI logic
├── cart.php                # Saves cart to DB (PHP)
├── checkout.php            # Displays user’s order summary
├── db.php                  # DB connection settings
├── admin_login.php         # Admin login form
├── admin.php               # Admin panel with all orders
├── logout.php              # Admin logout
├── create_db.sql           # SQL file to set up DB and table

📸 Screenshots

![image](https://github.com/user-attachments/assets/c1d128a3-25a6-45b9-bf64-efa378e79a7b)

![image](https://github.com/user-attachments/assets/8a03f8fd-6811-40e9-956d-d440732fd941)

![image](https://github.com/user-attachments/assets/595a9433-2473-4993-9163-d1eb2e28d2ac)
