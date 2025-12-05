
---
 
# 🧠 Week 7 - Day 1: WordPress Setup & Installation

## ⚙️ Step 1 — Install XAMPP

1. Go to 👉 [https://www.apachefriends.org/download.html](https://www.apachefriends.org/download.html)
2. Download the **Windows installer** (if you’re on Windows).
3. Run the installer → keep all defaults selected → finish setup.
4. After install, open **XAMPP Control Panel** → start

   * ✅ **Apache**
   * ✅ **MySQL**

💡 *If both show green (Running), your local server is ready.*

---

## ⚙️ Step 2 — Download WordPress

1. Visit 👉 [https://wordpress.org/download/](https://wordpress.org/download/)
2. Download the **.zip** file (latest version).
3. Extract it → rename the folder to `wordpress` (or any project name).
4. Move that folder to

   ```
   C:\xampp\htdocs\
   ```

   Final path should look like:

   ```
   C:\xampp\htdocs\wordpress
   ```

---

## ⚙️ Step 3 — Create Database

1. In your browser go to: `http://localhost/phpmyadmin`
2. Click **Databases → Create new database**
3. Name it: `wordpress_db`
4. Click **Create**

---

## ⚙️ Step 4 — Run WordPress Installer

1. Now visit 👉 `http://localhost/wordpress`
2. Choose your language → Continue
3. Enter:

   * **Database Name:** `wordpress_db`
   * **Username:** `root`
   * **Password:** *(leave blank)*
   * **Host:** `localhost`
4. Click **Submit → Run Installation**

---

## ⚙️ Step 5 — Create Admin Account

* **Site Title:** My First WordPress Site
* **Username:** admin
* **Password:** your choice
* **Email:** [anything@example.com](mailto:anything@example.com)
  Click **Install WordPress**

When done → click **Log In**

Access dashboard any time:
👉 `http://localhost/wordpress/wp-admin`

---

