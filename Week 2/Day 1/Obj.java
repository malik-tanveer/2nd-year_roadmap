class car {
    String brand;
    int year;
    String color;
    void display(){
        System.out.println(brand + " " + year + " " + color);
    }
}

public class Obj {
    public static void main(String[] args) {
        car c1 = new car();
        c1.brand = "Honda";
        c1.color = "Black";
        c1.year = 2023;
        c1.display();
    }
    
}
