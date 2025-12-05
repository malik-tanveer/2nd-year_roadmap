
---

# ⚙️ **Week 4 → PHP + MySQL CRUD + Authentication + File Upload**

## 🎯 **Goal:**

Learn how PHP connects with MySQL to perform full **CRUD operations (Create, Read, Update, Delete)**, handle **file uploads**, perform **form validation**, and manage **user authentication** securely.

---

### 🗓 **Day 1 – Database Setup & Connection**

**Concepts:**

* What is a **Database** and why use MySQL
* Creating a database and tables in **phpMyAdmin**
* Connecting PHP with MySQL (`mysqli_connect`)
* Handling connection success and errors

**Practice:**

* Create a database `blog_system`
* Create a table `posts` (id, title, content, image, created_at)
* Test database connection from PHP

**Mini Tip:**
Always check for connection errors using `mysqli_connect_error()`.

---

### 🗓 **Day 2 – CREATE Operation + Form Validation**

**Concepts:**

* Inserting data into MySQL using HTML form + PHP
* Handling form data safely
* Basic **form validation**:

  * Required fields
  * Minimum/maximum length
  * Valid email (if needed)
  * Preventing empty submissions
* Understanding SQL `INSERT INTO`

**Practice:**

* Build an **Add Post** form (Title + Content + optional Image)
* Validate that Title & Content are not empty
* If valid → insert data into the database
* Show success message

**Mini Tip:**
Always sanitize input using `htmlspecialchars()` or `filter_input()`.

---

### 🗓 **Day 3 – READ Operation**

**Concepts:**

* Fetching and displaying records from MySQL
* Using SQL `SELECT * FROM`
* Displaying data dynamically with PHP loops
* Understanding `mysqli_fetch_assoc()`

**Practice:**

* Display all blog posts in a simple table or card layout
* Add a **"View Details"** link for each post

**Mini Tip:**
Use pagination if the post list becomes too long.

---

### 🗓 **Day 4 – UPDATE Operation**

**Concepts:**

* Editing existing posts
* Prefilling the edit form with old data
* Updating data using SQL `UPDATE`
* Validating new input before saving

**Practice:**

* Add an **Edit** button on each post
* When clicked → open `edit_post.php` with current data loaded
* Update title, content, and optionally image

**Mini Tip:**
Validate `$_GET['id']` and escape all inputs before running the query.

---

### 🗓 **Day 5 – DELETE Operation + File Upload System**

**Concepts:**

* Deleting records using SQL `DELETE FROM`
* Confirming before deletion
* Uploading files (images) securely:

  * `enctype="multipart/form-data"`
  * `$_FILES['image']` handling
  * File validation (size, type, name)
  * Storing image path in database

**Practice:**

* Add a **Delete** button with confirmation
* Allow users to upload a post image
* Save file inside `/uploads/` folder
* Display uploaded image with post

**Mini Tip:**
Validate file type (e.g., only `.jpg`, `.png`, `.gif`) before saving.

---

### 🗓 **Day 6 – Authentication System (Login / Logout)**

**Concepts:**

* Creating `users` table (id, username, password)
* Using sessions for login persistence
* Password hashing (`password_hash()` and `password_verify()`)
* Protecting pages for logged-in users only
* Logout (destroy session)

**Practice:**

* Create a **Login form**
* Verify user credentials from database
* Start session on success
* Restrict CRUD pages to logged-in users only
* Add a **Logout** link to end session

**Mini Tip:**
Never store plain text passwords — always hash them.

---

### 🗓 **Day 7 – Mini Project: Blog Management System**

**Goal:**
Build a complete **CRUD + Auth + File Upload** mini project combining everything.

**Project Tasks:**

1. User **Login / Logout** system
2. Add / Edit / Delete blog posts
3. **Upload image** with each post
4. **Validate** forms on every page
5. Store data in **MySQL database**
6. Display all posts on a public page
7. Restrict admin actions to logged-in users

**Bonus Features:**

* Add post **search bar**
* Use **Prepared Statements** for all queries (SQL Injection safe)
* Add success/error messages for better UX

**Mini Tip:**
Once functionality is complete, focus on making the UI look clean with HTML + CSS.

---

