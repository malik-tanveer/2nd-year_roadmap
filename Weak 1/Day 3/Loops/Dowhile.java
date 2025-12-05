public class Dowhile {

    public static void main(String[] args) {
        System.out.println("Do While Loop");
        // Condition True And Run
        int i = 1;
        do {
            System.out.println("i =  " + i);
            i++;
        } while (i <= 5);
    // Condition False and RUn 1 Time

    int j = 10;

    do {
        System.out.println("j = " + j);
        // System.out.println("This will print once even though j < 5 is false!");
        j++;
    } while(j < 5);

}
}