class car {
    String brand;
    int year;
    String color;
    void display(){
        System.out.println("Brand : " + brand + " " + "Year : " + year + " " + "Color : " + color);
        System.out.println(brand);
        System.out.println(year);
        System.out.println(color);
    }
}

class house {
    String Value;
    String name;
    int Pieces;
    void display(){
        System.out.println(Value);
        System.out.println(name);
        System.out.println(Pieces);
    }
}
public class Obj {
    public static void main(String[] args) {
        car c1 = new car();
        c1.brand = "Honda";
        c1.color = "Black";
        c1.year = 2023;
        c1.display();

        car c2 = new car();
        c2.brand = "City";
        c2.year = 2000;
        c2.color = "Blue";
        c2.display();

        house h1 = new house();

        h1.Pieces = 1;
        h1.Value = "2cr+";
        h1.name = "Malir Karachi";
        h1.display();
    }
    
}
