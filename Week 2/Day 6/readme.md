
---

# 📘 **Day 6: Abstraction in Java**

---

## 🧠 **What is Abstraction?**

**Abstraction** means hiding unnecessary details and showing only the essential features of an object.
In Java, it allows us to focus on **what an object does** instead of **how it does it**.

---

## 🔹 **Why Abstraction is Used**

| Purpose                | Explanation                                     |
| ---------------------- | ----------------------------------------------- |
| Simplifies code        | Hides complex internal logic                    |
| Increases security     | Internal data/methods are hidden                |
| Improves flexibility   | Helps define structure or contract for classes  |
| Encourages reusability | Multiple classes can share same abstract design |

---

## 🔹 **How to Achieve Abstraction in Java**

Java provides **two ways** to achieve abstraction:

1. **Abstract Class** → using the `abstract` keyword
2. **Interface** → using the `interface` keyword

---

## 🧩 **1. Abstract Class**

### 🔸 **Syntax:**

```java
abstract class ClassName {
    abstract void abstractMethod(); // No body
    void normalMethod() {           // With body
        System.out.println("Hello");
    }
}
```

### 🔸 **Rules:**

* Declared using `abstract` keyword.
* Can have **both abstract and normal methods**.
* **Object cannot be created** directly.
* Used with the keyword `extends`.

### 🔸 **Example:**

```java
abstract class Vehicle {
    abstract void sound(); // abstract method
    void run() {           // normal method
        System.out.println("Vehicle is running...");
    }
}

class Car extends Vehicle {
    void sound() {
        System.out.println("Vroom Vroom");
    }
}

public class Main {
    public static void main(String[] args) {
        Car c = new Car();
        c.run();
        c.sound();
    }
}
```

### 🔸 **Output:**

```
Vehicle is running...
Vroom Vroom
```

---

## 🧩 **2. Interface**

### 🔸 **Syntax:**

```java
interface InterfaceName {
    void methodName();  // Automatically public and abstract
}
```

### 🔸 **Rules:**

* Declared using `interface` keyword.
* All methods are **public abstract** by default.
* Variables are **public static final** by default.
* Implemented using `implements` keyword.
* A class can **implement multiple interfaces**.
* Interface provides **100% abstraction**.

### 🔸 **Example:**

```java
interface Animal {
    void sound();
}

class Cat implements Animal {
    public void sound() {
        System.out.println("Meow");
    }
}

public class Main {
    public static void main(String[] args) {
        Animal a = new Cat();
        a.sound();
    }
}
```

### 🔸 **Output:**

```
Meow
```

---

## ⚙️ **Combined Example (Both Abstract Class & Interface)**

```java
interface Animal  {
    void sound();
}

class Cat implements Animal {
    public void sound(){
        System.out.println("Meow");
    }
}

abstract class Vehicle {
    abstract void sound();
    void run(){
        System.out.println("Vehicle is running...");
    }
}

class Toyota extends Vehicle {
    void sound(){
        System.out.println("Chilling...");
    }
}

public class Abstraction {
    public static void main(String[] args) {
        // Interface Example
        Animal a1 = new Cat();
        a1.sound();

        // Abstract Class Example
        Toyota t1 = new Toyota();
        t1.run();
        t1.sound();
    }
}
```

### 🔸 **Output:**

```
Meow
Vehicle is running...
Chilling...
```

---

## 🧾 **Keywords Used**

| Keyword      | Meaning                                 | Used In        |
| ------------ | --------------------------------------- | -------------- |
| `abstract`   | To declare abstract class or method     | Abstract class |
| `extends`    | To inherit abstract class               | Abstract class |
| `interface`  | To declare interface                    | Interface      |
| `implements` | To implement an interface               | Interface      |
| `public`     | To make method accessible from anywhere | All            |
| `void`       | Return type meaning no value            | Methods        |

---

## 🧩 **Abstract Class vs Interface (Comparison Table)**

| Feature              | Abstract Class                    | Interface                    |
| -------------------- | --------------------------------- | ---------------------------- |
| Keyword              | `abstract` + `extends`            | `interface` + `implements`   |
| Methods              | Abstract + Concrete               | Only Abstract                |
| Variables            | Can have instance variables       | Only static + final          |
| Multiple Inheritance | ❌ Not allowed                     | ✅ Allowed                    |
| Object Creation      | ❌ Not possible                    | ❌ Not possible               |
| Abstraction Level    | Partial                           | 100%                         |
| Use When             | Some methods same for all classes | Only method structure needed |

---

## 🏁 **Summary**

**Abstraction** = Hide internal logic + show essential info
**Abstract class** = Partial abstraction (common + abstract methods)
**Interface** = Full abstraction (method declaration only)
**Keywords** = `abstract`, `interface`, `extends`, `implements`

---
