class Account {
    private double balance;

    public void deposit(double amount){
        if (amount > 0) {
            balance += amount;
        }
    }

    public void withdraw(double amount){
        if (amount <= balance) {
            balance = balance - amount;
        } else  {
            System.out.println("Insufficient Balance!");
        }
    }

    public double getBalance() {
        return balance;
    }
}

public class Encapsulation {
    public static void main(String[] args){
        Account ac = new Account();

        ac.deposit(5);
        ac.withdraw(9);
        System.out.println("Balance : " + ac.getBalance());

    }
}
