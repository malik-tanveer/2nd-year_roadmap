import java.util.Scanner;

public class InputExample {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        System.out.print("Enter your name: ");
        String name = sc.nextLine();  // poora line input

        System.out.print("Enter your age: ");
        int age = sc.nextInt();       // integer input

        System.out.print("Enter your marks: ");
        double marks = sc.nextDouble();  // decimal input

        System.out.println("Name: " + name);
        System.out.println("Age: " + age);
        System.out.println("Marks: " + marks);
    }
}
