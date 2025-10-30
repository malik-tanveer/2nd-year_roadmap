
---

# ⚡ Week 4 – PHP + MySQL CRUD + Authentication + File Upload

**Goal:** Build a full **Blog Management System** with PHP & MySQL covering CRUD, file uploads, form validation, and secure authentication.

---

## 📌 Day 1 – Database Setup & Connection

**Concepts:**

* What is a database & why MySQL
* Creating database & tables via phpMyAdmin
* Connecting PHP with MySQL using `mysqli_connect()`
* Handling connection success & errors

**Instructions / Handling Tips:**

* Always use `die()` or proper error handling to stop execution if connection fails
* Use descriptive table & column names to avoid confusion later
* Keep your `db_connect.php` in a separate folder if needed

**Practice:**

* Create `blog_system` database
* Table `posts` → `id`, `title`, `content`, `image`, `created_at`
* Test connection

```php
$conn = mysqli_connect("localhost", "root", "", "blog_system");
if (!$conn) die("Connection failed: " . mysqli_connect_error());
```

**Mini Tip:** Always check for connection errors.

---

## 📌 Day 2 – CREATE Operation + Form Validation

**Concepts:**

* Insert data using HTML forms + PHP
* Basic validation (required fields, length, email if needed)
* SQL `INSERT INTO`

**Instructions / Handling Tips:**

* Always trim inputs: `trim($_POST['title'])`
* Use `htmlspecialchars()` before displaying to avoid XSS
* Show **success/error messages** after submission for better UX

**Practice:**

* Add Post form (Title + Content + optional Image)
* Validate inputs
* Insert into DB & show success message

---

## 📌 Day 3 – READ Operation

**Concepts:**

* Fetch & display records using `SELECT * FROM`
* Loop through results with `mysqli_fetch_assoc()`
* Dynamic display in table or card layout

**Instructions / Handling Tips:**

* Always check if results exist (`mysqli_num_rows() > 0`)
* Use `nl2br()` for content formatting
* Optional: Add pagination for long lists

**Practice:**

* Display all posts
* Add “View Details” link
* Sanitize outputs with `htmlspecialchars()`

---

## 📌 Day 4 – UPDATE Operation

**Concepts:**

* Prefill form with old data
* Update record with SQL `UPDATE`
* Validate before updating

**Instructions / Handling Tips:**

* Always check `$_GET['id']` exists and is numeric
* Use **prepared statements** to prevent SQL injection
* When updating images:

  * Delete old file if replaced
  * Ensure new file is validated (type, size)
* Display proper messages: "Post updated successfully" or errors

**Practice:**

* Edit button → `edit_post.php`
* Update title, content, optional image
* Check ownership if multi-user system

---

## 📌 Day 5 – DELETE Operation + File Upload

**Concepts:**

* Delete records (`DELETE FROM`)
* Confirm deletion
* Upload files securely:

  * `enctype="multipart/form-data"`
  * Use `$_FILES` array
  * Validate file type & size
  * Store path in DB

**Instructions / Handling Tips:**

* Confirm before deletion (`onclick="return confirm('Delete?')"` in HTML)
* Only allow certain file types (jpg, png, gif, pdf, txt)
* Keep uploads in separate folder (`uploads/`) with correct permissions
* Always check if `move_uploaded_file()` returns true
* Store filename + description in DB for reference

**Practice:**

* Delete button with confirmation
* Upload images & save to `/uploads/`
* Display uploaded image in post

---

## 📌 Day 6 – Authentication System (Login / Logout)

**Concepts:**

* `users` table → `id, username, password`
* Sessions for login persistence
* Password hashing: `password_hash()` & `password_verify()`
* Protect pages for logged-in users
* Logout (destroy session)

**Instructions / Handling Tips:**

* Never store plain text passwords
* Always start session with `session_start()` at top
* Restrict CRUD pages with session check:

```php
if (!isset($_SESSION['user_id'])) { header('Location: login.php'); exit; }
```

* Destroy session on logout:

```php
session_destroy();
header('Location: login.php');
```

**Practice:**

* Login form
* Verify credentials
* Start session
* Add Logout link

---

## 📌 Day 7 – Mini Project: Blog Management System

**Goal:** Combine all previous lessons into a fully functional project.

**Tasks:**

1. Login / Logout system
2. Add / Edit / Delete posts
3. Upload image per post
4. Validate forms
5. Store data in MySQL
6. Display all posts publicly
7. Admin-only actions

**Instructions / Handling Tips:**

* Always check ownership of posts before editing/deleting
* Use **prepared statements** for every query to prevent SQL injection
* Validate uploaded files carefully (type, size)
* Display proper success/error messages for every action
* Use separate CSS file for clean UI
* Organize folder structure:

```
/admin/ → dashboard, create_post, edit_post, delete_post
/uploads/ → images
index.php → public blog view
view_post.php → single post page
login.php, register.php
db_connect.php
```

**Bonus Features:**

* Search bar for posts
* Paginate results if needed
* Better UX with color-coded messages & layout

---


**Outcome:**
After Week 4, you can handle:

* Secure CRUD operations
* File uploads & management
* Authentication & session handling
* Full mini project with clean UI & database integration

---
