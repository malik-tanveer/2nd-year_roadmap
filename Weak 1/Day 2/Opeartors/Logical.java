public class Logical {

    public static void main(String[] args) {
        System.out.println("Hello i am Logical");

        boolean x = true, y = false;
        System.out.println(x && y); // false (AND)
        System.out.println(x || y); // true (OR)
        System.out.println(!x); // false (NOT)

        System.out.println("Hello i am Increment & Decrement");
        int n = 5;
        System.out.println(n++); // 5 (pehle print, baad me +1)
        System.out.println(n); // 6
        System.out.println(++n); // 7 (pehle +1, baad me print)

        int n_1 = 8;
        System.out.println(n_1--); // 8 (pehle print, baad me -1)
        System.out.println(n_1); // 7
        System.out.println(--n_1); // 7 (pehle -1, baad me print)

    }
}