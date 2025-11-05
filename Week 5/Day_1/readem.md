# Day 1 – Introduction & Setup (CodeIgniter)

## Learn:

### 1. What is CodeIgniter

CodeIgniter (CI) is a PHP framework that allows developers to build web applications quickly and efficiently. It follows the MVC (Model-View-Controller) architecture, helping to organize code and separate concerns for cleaner and maintainable applications.

### 2. Why Use a PHP Framework

* Faster development compared to core PHP
* Built-in security features
* Organized folder structure for maintainable code
* Ready-to-use helper functions for common tasks (forms, URLs, sessions)
* Clean and lightweight framework ideal for small to medium projects

### 3. MVC (Model-View-Controller) Concept

* **Model**: Handles data and database operations
* **View**: Manages what the user sees (HTML templates)
* **Controller**: Links Model and View; processes requests and returns responses

### 4. CodeIgniter Folder Structure

* **app/**: Main application code (controllers, models, views)
* **public/**: Public files (index.php, CSS, JS)
* **system/**: Core CodeIgniter files (do not edit)
* **writable/**: Cache, logs, and uploaded files
* **.env**: Environment configuration (database settings, environment variables)

### 5. How to Install and Run CodeIgniter on Localhost

1. Install XAMPP and start Apache + MySQL.
2. Download CodeIgniter 4 from [https://codeigniter.com/download](https://codeigniter.com/download).
3. Extract the downloaded ZIP file to:

   ```
   C:\xampp\htdocs\codeigniter4
   ```
4. Open Command Prompt or terminal and navigate to the folder:

   ```
   cd C:\xampp\htdocs\codeigniter4
   ```
5. Run the built-in server:

   ```
   php spark serve
   ```
6. Open a browser and visit [http://localhost:8080](http://localhost:8080) to see the "Welcome to CodeIgniter" page.
