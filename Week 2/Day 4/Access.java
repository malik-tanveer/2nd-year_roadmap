class Car {
    public String brand = "Honda";     // Accessible everywhere
    private int speed = 120;           // Only inside Car class
    protected String color = "Black";  // Same package or child class
    int year = 2024;                   // Default → same package only

    void show() {
        System.out.println(brand + " " + speed + " " + color + " " + year);
    }
}

public class Access {
    public static void main(String[] args) {
        System.out.println("Access Modifiers in java");
        Car c1 = new Car();
        System.out.println(c1.brand); // ✅ public — OK
        // System.out.println(c1.speed); ❌ private — Error
        System.out.println(c1.color); // ✅ protected — OK (same package)
        System.out.println(c1.year);  // ✅ default — OK (same package)
    }
}