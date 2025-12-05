import java.util.Scanner;

public class Rev {
    public static void main(String[] args) {

        Scanner sc = new Scanner(System.in);
        System.out.println("Hello Hy All Topic is Again Revise");

        // Java Basic
        System.out.println("Hello World!");

        // Varible and Data type

        int a = 10;
        String name = "Kazmi";
        Boolean login = true;
        double Salary = 121.821;

        System.out.println(name);
        System.out.println(login);
        System.out.println(Salary);
        System.out.println(a);

        // Opearts

        int add = 10;
        int sub = 20;
        int mul = 5;
        int div = 2;
        double modu = 10.21;

        System.out.println("Addition : " + (add + sub));
        System.out.println("Substraction : " + (sub - add));
        System.out.println("Multiplication : " + (mul * div));
        System.out.println("Division : " + (div / modu));
        System.out.println("Modulus : " + (modu / add));

        // Loops

        int num = 5;
        for (int i = 0; i <= a; i++) {
            System.out.println(i);
        }
        System.out.println(num);

        // Arrays

        String[] product = {
                "Laptop", "Mouse", "Keyboard", "Screen", "Headphone"
        };

        System.out.println(product[1]);
        System.out.println(product[2]);
        System.out.println(product[3]);

        // String

        String names = "Raza";
        System.out.println(names.length());
        System.out.println(names.charAt(3));
        System.out.println(names.charAt(2));
        System.out.println(names.charAt(1));
        System.out.println(names.charAt(0));

        // Scanner

        System.out.println("Enter Your Name : ");
        String you = sc.nextLine();
        System.out.println(you);

    }
}
