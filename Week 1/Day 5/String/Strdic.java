public class Strdic {

    public static void main(String[] args) {
        // String simple length

        String name = "shubum";
        String word = "HELLO";
        System.out.println("Sab letters uppercase me karta hai : "+name.toUpperCase());
        System.out.println("String ki length deta hai : "+name.length());
        System.out.println("Sab lowercase me karta hai: "+word.toLowerCase());
        System.out.println("Specific index ka character : " + word.charAt(1));
        System.out.println("Portion of string : " + name.substring(0,3));
        System.out.println("Do strings jodta hai : " + name.concat(word));
        System.out.println("Concatenation shortcut : " + name + " Developer");
    }
}