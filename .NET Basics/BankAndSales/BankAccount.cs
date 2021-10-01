using System;

namespace BankAndSale
{
    public class BankAccount
    {
        public Person person;
        private double balance;
        private double creditLimit;
        private static double currentBalance;
        private long accountNo;

        public BankAccount()
        {
            this.balance = 100d;
        }
        public BankAccount(double currentBalance)
        {
            this.balance = currentBalance;
        }
        public void OpenAccount(Person p)
        {
            Console.WriteLine("Thank you for creating your Account in our bank");
            Console.WriteLine("Your Personal Info Are");
            p.DisplayInfo();
            accountNo = 563456;
            Console.WriteLine($"And Your Account No is: {accountNo} ");
        }
        public void Deposit(Person p, double depositAmount)
        {
            currentBalance = depositAmount + balance;
            Console.WriteLine($"Your current balance is: {currentBalance}");
        }
        public void Withdraw(Person p, double withDrawAmount)
        {
            if (withDrawAmount > currentBalance || currentBalance <= 0)
            {
                Console.WriteLine("You are not allowed to withdraw");
                return;
            }
            currentBalance = currentBalance - withDrawAmount;
            Console.WriteLine($"Your current balance is: {currentBalance}");
        }
        public void CreditLimit(Person p, double credit)
        {

        }
        public void CreditLimit(Person p)
        {

        }
        public double GetBalance()
        {
            return balance;
        }
        public void Payment(double amount)
        {

        }
        public void ChargeCard(double amount)
        {

        }
        public bool HasCredit(double amount)
        {
            return true;
        }
    }
}
