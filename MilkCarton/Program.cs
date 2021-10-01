using System;

namespace MilkCarton
{
    class Program
    {
        public const double cartonCapacity = 3.78; //Capacity Of One Carton
        public const double productionCost = 0.38; //Production Cost Of One Litre
        public const double profitPerCarton = 0.27; //Profit Of One Litre
        static void Main()
        {
            Console.WriteLine("Welcome To Milk Profit Calculator");
            Console.WriteLine(new string('=', 50));
            bool check = true;
            while (check == true)
            {
                Console.WriteLine("Enter the amount of milk produced this Morning(in Litres)::");
                double producedMilk = double.Parse(Console.ReadLine());
                NumberOfCartonsRequired(producedMilk);
                ProductionCost(producedMilk);
                TotalProfit(producedMilk);
                Console.WriteLine("Do You Want To Check Other Quantities. If Yes Press 'y' otherwize press any other key to exit");
                var checkCharacter = Console.ReadLine()[0];
                if (checkCharacter == 'y' || checkCharacter == 'Y')
                {
                    check = true;
                }
                else
                {
                    check = false;
                }
            }
        }

        static void NumberOfCartonsRequired(double producedMilk)
        {
            Console.WriteLine(new string('=', 50));
            var noOfCartons = Math.Ceiling(producedMilk / cartonCapacity);
            Console.WriteLine("Number of Cartons Required:: {0}",noOfCartons);
        }

        static void ProductionCost(double producedMilk)
        {
            Console.WriteLine(new string('=', 50));
            var totalProductionCost = producedMilk * productionCost;
            Console.WriteLine("Total Production Cost:: $ {0}", totalProductionCost);
        }
        static void TotalProfit(double producedMilk)
        {
            Console.WriteLine(new string('=', 50));
            var totalProfit = producedMilk * profitPerCarton;
            Console.WriteLine("Total Profit :: $ {0}", totalProfit);
        }
    }
}
