public class Sumavg {

    public static void main(String[] args) {

        // Sum
        int[] num = { 10, 20, 30, 40, 50, 60, 70, 80 };
        int sum = 0;

        for (int i = 0; i < num.length; i++) {
            sum += num[i];
        }
        System.out.println("Sum of numbers: " + sum);

        // Avg

        double avg = (double) sum / num.length;

        System.out.println("Average of numbers: " + avg);
    }
}
