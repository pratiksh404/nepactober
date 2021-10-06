using System;

namespace sales
{
    class Program
    {
        static void Main(string[] args)
        {
            int[] sales = new int[5];
            int sum = 0;
            double avg = 0.0;
            int max = 0;
            int min = 0;
            Console.WriteLine("======================================Sales Stats====================================== ");
            for (int i = 0; i < sales.Length; i++)
            {
                Console.Write("Enter Sales of saleman {0} = ", i + 1);
                sales[i] = Convert.ToInt32(Console.ReadLine());
            }
            Console.WriteLine("=================================Sales of Saleman=================================");
            for (int i = 0; i < sales.Length; i++)
            {
                Console.WriteLine("Saleman {0} sold amount = {1}", i + 1, sales[i]);
            }
            Console.WriteLine("==================================Sales calculation==================================");
            for (int i = 0; i < sales.Length; i++)
            {
                int current_value = sales[i];
                max = sales[i] > max ? sales[i] : max;
                int temp_min = max;
                min = sales[i] < (min == 0 ? temp_min : min) ? sales[i] : min;
                sum += sales[i];
                avg = sum / 5;
            }
            Console.WriteLine("============================================================================");
            Console.WriteLine("Maximum Sales is {0}", max);
            Console.WriteLine("Minimum Sales is {0}", min);
            Console.WriteLine("Sum of Sales is {0}", sum);
            Console.WriteLine("Average Sales is {0}", avg);
            Console.WriteLine("====================================Using Array Methods========================================");
            Console.Write("Input sales amount for finding the input exceeding sales = ");
            int exceeding = Convert.ToInt32(Console.ReadLine());
            for (int i = 0; i < sales.Length; i++)
            {
                if (sales[i] > exceeding)
                {
                    Console.WriteLine("Saleman{0} sales {1}", i + 1, sales[i]);
                }
            }
        }
    }
}
