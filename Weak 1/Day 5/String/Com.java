public class Com {
    public static void main(String[] args) {
        System.out.println("String comparison (`equals` vs `==`)");

        String s1 = "Hello";
        String s2 = "Hello";
        String s3 = new String("Hello");

        System.out.println(s1 == s2); // true
        System.out.println(s1 == s3); // false
        System.out.println(s1.equals(s3)); // True

        

    }
}
