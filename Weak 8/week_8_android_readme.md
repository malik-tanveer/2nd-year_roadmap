# Week 8 - Android Development (Intro)

This README.md is a **complete Day-wise guide for Week 8** of your Android development learning. Follow it carefully to master the basics of native Android development using Java and XML.

---

## **Day 1: Install + Setup**
**Goal:** Set up your development environment.

- Install **Android Studio** (latest stable version)
- Install **JDK (Java Development Kit)** if not included
- Open Android Studio and create a new project:
  - Template: **Empty Activity**
  - Language: **Java**
  - Name: `MyFirstApp`
- Explore **project folder structure**:
  - `app/src/main/java/` → Java code
  - `app/src/main/res/layout/` → XML layouts
- Run your first app on **emulator** or physical device

**Tip:** Focus on understanding folder structure and Gradle build system.

---

## **Day 2: XML Layouts**
**Goal:** Learn basic UI elements and layouts.

- Study **TextView, EditText, Button**
- Learn **LinearLayout** and **RelativeLayout**
- Create a simple screen:
  - Welcome message
  - Input field
  - Button

**Task:** Design a simple login screen with Username and Password fields and a login button.

---

## **Day 3: Java + Click Events**
**Goal:** Connect UI with logic.

- Learn how to find views in Java:
  ```java
  Button loginBtn = findViewById(R.id.login_button);
  ```
- Set **OnClickListener** for buttons
- Display a **Toast message** when button clicked
- Handle EditText input

**Task:** Make login button show "Login Successful" toast on click.

---

## **Day 4: Activities + Intents**
**Goal:** Learn to navigate between screens.

- Create **second activity** (screen)
- Learn **Intents**:
  ```java
  Intent intent = new Intent(MainActivity.this, SecondActivity.class);
  startActivity(intent);
  ```
- Pass data between activities using `intent.putExtra()`

**Task:** Enter a name in first screen → display it in second screen.

---

## **Day 5: RecyclerView List**
**Goal:** Learn to display lists using RecyclerView.

- Understand **RecyclerView** and **Adapter**
- Create **static list** of items (e.g., fruits)
- Learn `onCreateViewHolder`, `onBindViewHolder`
- Style your list items using XML layout

**Task:** Build a simple list app showing 10 items using RecyclerView.

---

## **Day 6: Mini Project - Calculator App**
**Goal:** Combine XML + Java logic to build a functional app.

- Create **UI** with buttons 0-9, operations (+, -, *, /), and TextView for result
- Handle **button clicks** to perform operations
- Display **result** dynamically

**Task:** Build a fully working **simple calculator app**.

---

## **Day 7: Mini Project - To-Do List App**
**Goal:** Apply Week 8 knowledge to build a list-based app.

- Use **RecyclerView** to display list of tasks
- Add **Add Task** functionality
- Add **Delete Task** functionality
- Store tasks **temporarily** (no database yet)
- Focus on **UI + logic**, not persistence

**Task:** Build a simple **To-Do List App**.

---

## **Pro Tips for Week 8**
- Start small and focus on **layout + logic**
- Experiment with different UI elements
- Run app on **emulator + real device**
- Take notes for common errors
- Push mini projects to **GitHub** for portfolio

---

**End of Week 8:**
By the end of this week, you should be able to create simple Android apps with multiple screens, basic UI elements, button clicks, and lists using RecyclerView.

