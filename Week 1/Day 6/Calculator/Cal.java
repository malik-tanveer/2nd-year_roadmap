import java.util.Scanner;

public class Cal {

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        char choice = 'Y';


        do {
            System.out.print("Enter first number: ");
            double num1 = sc.nextDouble();

            System.out.print("Enter second number: ");
            double num2 = sc.nextDouble();

            System.out.print("Enter Third number: ");
            double num3 = sc.nextDouble();

            System.out.print("Enter operator (+, -, *, /): ");
            char operator = sc.next().charAt(0);

            double result = 0; 
            
            if (operator == '+') {
                result = num1 + num2 + num3;
            } else if (operator == '-') {
                result = num1 - num2 + num3;
            } else if (operator == '*') {
                result = num1 * num2 + num3;
            } else if (operator == '/') {
                if (num2 != 0) {
                    result = num1 / num2 / num3;
                } else {
                    System.out.println("Error: Cannot divide by zero!");
                    continue; 
                }
            } else {
                System.out.println("Invalid operator!");
                continue;
            }

            System.out.println("Result: " + result);

            System.out.print("Do you want to perform another operation? (y/n): ");
            choice = sc.next().charAt(0);

        } while (choice == 'y' || choice == 'Y');

        System.out.println("Calculator Closed");
        sc.close();

    }
}