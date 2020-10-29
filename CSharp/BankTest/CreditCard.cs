using System;
using System.Collections.Generic;
using System.Text;

namespace BankTest
{
    class CreditCard
    {
        private Person person;
        private string accountNo;
        private double balance;

        public CreditCard()
        {
            this.accountNo = "894664564654";
            this.balance = 98.26;
        }

        public double Balance {
            get
            {
                return balance;
            }
            set
            {
                this.balance = value;
            }
        }
    }
}
