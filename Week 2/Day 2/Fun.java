class add {
    // Without parameter
    int sum(int a, int b) {
        return a + b;
    }
}

class Name_print {
    // Parameter
    void minus(String name) {
        System.out.println("Hello" + " " + name + "!");

    }
}

class Bank {
    void deposit() {
        System.out.println("Deposit Successful!");
    }

    void withdraw() {
        System.out.println("Withdrawal Successful!");
    }
}

class print {
    void printing() {
        System.out.println("Hello Simple public class is used a call");
    }
}

public class Fun {
    public static void main(String[] args) {
        add a = new add();
        System.out.println(a.sum(4, 6));

        Name_print name = new Name_print();
        name.minus("Raza");

        print nme = new print();
        nme.printing();

        Bank acc = new Bank();
        acc.deposit();
        acc.withdraw();

    }
}
