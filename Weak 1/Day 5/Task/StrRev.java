public class StrRev {
    public static void main(String[] args) {
        System.out.println("String Revrse in Java");

        String word = "Java";
        String reverse = "";

        for (int i = word.length() - 1; i >= 0; i--) {
            reverse = reverse + word.charAt(i);
        }

        System.out.println("Original: " + word);
        System.out.println("Reversed: " + reverse);
    }
}
