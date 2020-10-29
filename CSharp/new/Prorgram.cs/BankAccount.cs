using System;
using System.Collections.Generic;
using System.Text;

namespace Prorgram.cs
{
    class BankAccount
    {
        Person owner;
        private double balance;
        private long accountNumber; 

        public BankAccount(Person owner, double balance)
        {
            this.owner = owner;
            this.balance = balance;
        }
        public BankAccount()
        {
            this.balance = 100;
        }

        public void openAccount(Person owner,double initial_balance)
        {
            this.accountNumber = 64617855;
            this.balance = initial_balance;
            Console.WriteLine("Your Personal Information are:");
            Console.WriteLine(new string('=',50));
            owner.ViewPersonDetail();
            Console.WriteLine("Your New Account Number is::{0}", this.accountNumber);
            checkCurrentBalance();
        }

        public void checkCurrentBalance()
        {
            Console.WriteLine("Your Current Balance Is::{0}", this.balance);
        }

        public void deposit(Person owner,double depositAmount)
        {
            Console.WriteLine(new string('=', 50));
            this.owner = owner;
            this.balance += depositAmount;
            Console.WriteLine("Your Personal Information are:");
            owner.ViewPersonDetail();
            Console.WriteLine("Now your Total Balance is::Rs.{0}", this.balance);
        }

        public void withdraw(Person owner,double withdrawAmount)
        {
            this.balance -= withdrawAmount;
            Console.WriteLine("Now your Total Balance is::Rs.{0}", this.balance);
            Console.WriteLine("Withdraw Amount is::Rs.{0}", withdrawAmount);
        }

    }
}
