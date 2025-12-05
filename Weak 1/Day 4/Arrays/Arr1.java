public class Arr1 {

    public static void main(String[] args) {
        // Method 1

        String[] names = { "Ali", "Ahmed", "Sara" };

        System.out.println("First Name: " + names[0]);
        System.out.println("Second Name: " + names[1]);
        System.out.println("Third Name: " + names[2]);

        // Another Method

        int[] numbers = { 10, 20, 30, 40, 50, 60, 70, 80 };
        int sum = numbers[0] + numbers[1] + numbers[2] + numbers[3] + numbers[4];
        System.out.println("Sum : " + sum);


        // FInd max Number
        int max = numbers[4];
        if(numbers[1] > max)max = numbers[1];
        if(numbers[2] > max)max = numbers[2];
        if(numbers[3] > max)max = numbers[3];
        if(numbers[4] > max)max = numbers[4];

        System.out.println("Max : " + max);

        // Find min Number

        int min = numbers[4];
        if(numbers[0] < min)min = numbers[0];
        if(numbers[1] < min)min = numbers[1];
        if(numbers[2] < min)min = numbers[2];
        if(numbers[3] < min)min = numbers[3];
        if(numbers[4] < min)min = numbers[4];
        if(numbers[5] < min)min = numbers[5];
        if(numbers[6] < min)min = numbers[6];

        System.out.println("Min : " + min);


        // 2nd Dimension Arrays

        int [][] num = {
            {10,20,30,40,50},
            {60,70,80,90}
        };

        System.out.println(num[0][1]);
        System.out.println(num[1][2]);

    }
}
