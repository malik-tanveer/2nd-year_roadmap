
---

# 🧠 **Constructors in Java (Full English Notes)**

---

## 🔹 **1. What is a Constructor?**

> A **constructor** is a special method in Java that is **automatically called when an object is created**.
> Its main purpose is to **initialize (set up)** the object’s data.

💬 Example:
When you write `Car c1 = new Car();`,
the constructor runs automatically.

---

## 🔹 **2. Why Do We Use Constructors?**

| Purpose                           | Explanation                                               |
| --------------------------------- | --------------------------------------------------------- |
| 🏗️ **Object Initialization**     | To set initial values for object variables automatically. |
| 🧼 **Cleaner Code**               | Reduces repetitive lines like `obj.name = "Raza"`.        |
| ⚡ **Automatic Execution**         | Called automatically when an object is created.           |
| 🚀 **Makes Objects Ready to Use** | Sets data right when you create the object.               |

---

## 🔹 **3. Syntax of a Constructor**

```java
class ClassName {
    ClassName() {
        // Code runs automatically when object is created
    }
}
```

💡 **Rules:**

* Constructor **name must be the same as the class name.**
* It **has no return type** (not even `void`).
* It is **called automatically**.

---

## 🔹 **4. Types of Constructors**

There are **3 main types** of constructors in Java:

| Type                              | Description                                                |
| --------------------------------- | ---------------------------------------------------------- |
| 1️⃣ **Default Constructor**       | No parameters. Java creates it automatically if you don’t. |
| 2️⃣ **Parameterized Constructor** | Takes parameters to assign custom values.                  |
| 3️⃣ **Copy Constructor**          | Copies data from one object into another.                  |

---

## 🟢 **(1) Default Constructor**

> Used when no parameters are given.
> It sets default values.

```java
class Car {
    String brand;
    int year;

    // Default constructor
    Car() {
        brand = "Honda";
        year = 2023;
    }

    void display() {
        System.out.println("Brand: " + brand + ", Year: " + year);
    }
}

public class Main {
    public static void main(String[] args) {
        Car c1 = new Car();   // default constructor called
        c1.display();
    }
}
```

🧾 **Output:**

```
Brand: Honda, Year: 2023
```

---

## 🟠 **(2) Parameterized Constructor**

> Used to assign **custom values** to an object during creation.

```java
class Student {
    String name;
    int age;

    // Parameterized constructor
    Student(String n, int a) {
        name = n;
        age = a;
    }

    void display() {
        System.out.println("Name: " + name + ", Age: " + age);
    }
}

public class Main {
    public static void main(String[] args) {
        Student s1 = new Student("Raza", 20);
        Student s2 = new Student("Hamza", 22);

        s1.display();
        s2.display();
    }
}
```

🧾 **Output:**

```
Name: Raza, Age: 20
Name: Hamza, Age: 22
```

---

## 🔵 **(3) Copy Constructor**

> Used to **copy the data** of one object into another object of the same class.

```java
class Book {
    String title;
    int pages;

    // Parameterized constructor
    Book(String t, int p) {
        title = t;
        pages = p;
    }

    // Copy constructor
    Book(Book b) {
        title = b.title;
        pages = b.pages;
    }

    void show() {
        System.out.println("Title: " + title + ", Pages: " + pages);
    }
}

public class Main {
    public static void main(String[] args) {
        Book b1 = new Book("Java Basics", 200); // normal constructor
        Book b2 = new Book(b1);                 // copy constructor

        b1.show();
        b2.show();
    }
}
```

🧾 **Output:**

```
Title: Java Basics, Pages: 200
Title: Java Basics, Pages: 200
```

---

## 🔹 **5. The `this` Keyword**

> `this` refers to the **current object** —
> it’s used when your parameter name and variable name are the same.

```java
class Employee {
    String name;
    int salary;

    Employee(String name, int salary) {
        this.name = name;       // 'this' means current object’s name
        this.salary = salary;
    }

    void display() {
        System.out.println(name + " - " + salary);
    }
}
```

---

## 🔹 **6. Important Points**

| Concept              | Description                             |
| -------------------- | --------------------------------------- |
| 🏷️ Constructor name | Must be same as class name              |
| 🌀 Return type       | None (no `void`, no type)               |
| ⚙️ Called when       | Object is created                       |
| ♻️ Can we overload?  | Yes, constructors can be **overloaded** |
| 🧩 Copy constructor  | Not built-in, we write it manually      |
| 💬 this keyword      | Used to refer to the current object     |

---

## 🧾 **Difference Between Constructor and Method**

| Feature     | Constructor            | Method               |
| ----------- | ---------------------- | -------------------- |
| Name        | Same as class          | Any name             |
| Return type | ❌ None                 | ✅ Has a return type  |
| Call        | Auto (object creation) | Manual               |
| Purpose     | Initialize data        | Perform action       |
| Keyword     | `this()` allowed       | `this` used normally |

---

## 🎯 **Summary**

✅ Constructors are **special methods** for initializing objects.
✅ There are **3 types**: Default, Parameterized, Copy.
✅ They run **automatically** when you create objects.
✅ You can **overload** them.
✅ `this` keyword helps to avoid variable confusion.

---
