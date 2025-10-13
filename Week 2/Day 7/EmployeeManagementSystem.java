abstract class Employee {
protected String name;
protected int id;


public Employee(int id, String name) {
this.id = id;
this.name = name;
}


abstract double calculateSalary();


void displayInfo() {
System.out.println("ID: " + id + " | Name: " + name + " | Salary: " + calculateSalary());
}
}


class Manager extends Employee {
private double bonus;


public Manager(int id, String name, double bonus) {
super(id, name);
this.bonus = bonus;
}


@Override
double calculateSalary() {
return 50000 + bonus;
}
}


class Developer extends Employee {
private int overtimeHours;


public Developer(int id, String name, int overtimeHours) {
super(id, name);
this.overtimeHours = overtimeHours;
}


@Override
double calculateSalary() {
return 40000 + (overtimeHours * 500);
}
}


public class EmployeeManagementSystem {
public static void main(String[] args) {
Employee m1 = new Manager(101, "Alice", 10000);
Employee d1 = new Developer(201, "Bob", 20);


m1.displayInfo();
d1.displayInfo();
}
}