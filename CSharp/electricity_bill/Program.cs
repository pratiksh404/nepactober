using System;

namespace electricity_bill
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("==============================Electricity Bill==============================");
            Console.WriteLine("Electricity Payment Billing Software");
            Console.Write("Customer Name = ");
            string customer = Console.ReadLine();
            Console.Write("Enter electricity consumed, " + customer + "= ");
            int electricity_consumed = Convert.ToInt32(Console.ReadLine());

            /* Electricity Consumed Cost Condition */
            if (electricity_consumed <= 50)
            {
                Console.WriteLine("Your electricity bill is Rs.50");
            }
            else if (electricity_consumed > 50 && electricity_consumed <= 100)
            {
                var electricity_cost = 50 + ((electricity_consumed - 50) * 5);
                Console.WriteLine("Your electricity bill is Rs." + electricity_cost);
            }
            else if (electricity_consumed > 100 && electricity_consumed <= 150)
            {
                var electricity_cost = 50 + (50 * 5) + ((electricity_consumed - 100) * 7);
                Console.WriteLine("Your electricity bill is Rs." + electricity_cost);
            }
            else if (electricity_consumed > 150 && electricity_consumed <= 300)
            {
                var electricity_cost = 50 + (50 * 5) + (50 * 7) + ((electricity_consumed - 150) * 12);
                Console.WriteLine("Your electricity bill is Rs." + electricity_cost);
            }
            else if (electricity_consumed > 300)
            {
                Console.WriteLine("More than 300 unit");
                var electricity_cost = 50 + (50 * 5) + (50 * 7) + (150 * 12) + ((electricity_consumed - 300) * 25);
                Console.WriteLine("Your electricity bill is Rs." + electricity_cost);
            }
            Console.WriteLine("============================================================================");
        }
    }
}
