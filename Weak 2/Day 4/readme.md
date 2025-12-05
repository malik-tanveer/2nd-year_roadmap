
---

````
# Access Modifiers & Encapsulation

---

## 🎯 **Goal:**
Understand how to control access to class data using **Access Modifiers**,  
and how to protect & organize data through **Encapsulation**.

---

## 🔒 **1. Access Modifiers in Java**

Access modifiers define **who can access what** in your program.  
They control **visibility and scope** of classes, methods, and variables.

### 📘 **Types of Access Modifiers**

| Modifier | Access Level | Description |
|-----------|---------------|--------------|
| **public** | 🌍 Everywhere | Accessible from any class |
| **private** | 🔐 Within Class Only | Not accessible outside the class |
| **protected** | 🧩 Within Package + Subclasses | Shared with inherited classes |
| *(default)* | 📦 Package-Private | Accessible only within the same package |

---

### 💡 **Example: Access Modifiers**

```java
public class AccessExample {
    public int a = 10;       // accessible anywhere
    private int b = 20;      // accessible only inside this class
    protected int c = 30;    // accessible in subclasses
    int d = 40;              // (default) accessible within package

    void display() {
        System.out.println(a + " " + b + " " + c + " " + d);
    }
}
````

---

## 🔐 **2. Encapsulation in Java**

### 🧩 **Definition:**

Encapsulation is the process of **binding data (variables)** and **methods (functions)** together as one unit
and **restricting direct access** to the internal data.

> It’s all about **data hiding** and **controlled access** using getters & setters.

---

### ⚙️ **Syntax Example:**

```java
class Account {
    private double balance; // data hidden

    // Setter - control write access
    public void setBalance(double amount) {
        if (amount > 0)
            balance = amount;
        else
            System.out.println("Invalid balance!");
    }

    // Getter - control read access
    public double getBalance() {
        return balance;
    }
}
```

---

### 🧠 **Key Points:**

* Make variables `private`
* Provide `public` getter and setter methods
* Control access through conditions (validation)
* Prevent unauthorized or invalid data modification

---

## 💬 **Encapsulation Example (Real-World Style)**

```java
class BankAccount {
    private double balance;

    // Deposit money
    public void deposit(double amount) {
        if (amount > 0) {
            balance += amount;
            System.out.println(amount + " deposited. New balance: " + balance);
        } else {
            System.out.println("Invalid deposit amount!");
        }
    }

    // Withdraw money
    public void withdraw(double amount) {
        if (amount > 0 && amount <= balance) {
            balance -= amount;
            System.out.println(amount + " withdrawn. Remaining balance: " + balance);
        } else {
            System.out.println("Invalid withdrawal!");
        }
    }

    // Getter
    public double getBalance() {
        return balance;
    }
}

public class EncapsulationDemo {
    public static void main(String[] args) {
        BankAccount acc = new BankAccount();
        acc.deposit(1000);
        acc.withdraw(300);
        System.out.println("Final balance: " + acc.getBalance());
    }
}
```

---

### 🧾 **Output:**

```
1000.0 deposited. New balance: 1000.0
300.0 withdrawn. Remaining balance: 700.0
Final balance: 700.0
```

---

## 🧩 **Why Encapsulation is Important**

| Feature                   | Description                           |
| ------------------------- | ------------------------------------- |
| 🔐 **Data Hiding**        | Sensitive data is hidden from users   |
| 🧠 **Controlled Access**  | Access only through getter/setter     |
| ⚙️ **Maintainability**    | Easy to update logic in one place     |
| ♻️ **Reusability**        | Class can be used anywhere safely     |
| 🧩 **Foundation for OOP** | Works with Inheritance & Polymorphism |

---

## 💬 **In Simple Words:**

> **Access Modifiers** decide *who can access*,
> and **Encapsulation** decides *how they can access*.

Together, they make your code **secure, modular, and maintainable.**

---

## ✅ **Summary:**

| Concept              | Description                                   |
| -------------------- | --------------------------------------------- |
| **Access Modifiers** | Control the visibility of data and methods    |
| **Encapsulation**    | Bind data + logic, and protect internal state |
| **Goal**             | Security, control, and clean class design     |

