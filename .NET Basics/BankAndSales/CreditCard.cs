using System;

namespace BankAndSale
{
    public class CreditCard
    {
        private Person owner;
        private double balance;
        private double limitCard;

        public CreditCard(Person p, double amount)
        {

        }
        public CreditCard(Person p)
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
            if (amount >= 50000d)
            {
                amount -= 100d;
            }
        }
        public bool HasCredit(double amount)
        {
            return true;
        }
        public void GetInfo()
        {
            Console.WriteLine("Your current Credit Limit is: ");
        }

    }
}
