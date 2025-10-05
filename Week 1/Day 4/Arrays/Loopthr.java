public class Loopthr {
    public static void main(String[] args) {
        System.out.println("Loop through Array Used case");
        int[] nums = { 10, 20, 30, 40, 50 };

        System.out.println("Array Elemetns : ");

        for (int i = 0; i < nums.length; i++) {
            System.out.println("Element at index " + i + ": " + nums[i]);
        }

    }
}
