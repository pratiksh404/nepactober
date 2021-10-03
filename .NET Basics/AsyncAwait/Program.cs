using System;
using System.Threading.Tasks;
namespace AsyncAwait
{
    class Program
    {
        static async Task Main(string[] args)
        {
            Task<int> task = Method1();
            Method2();
            int count = await task;
            Method3(count);
        }

        public static async Task<int> Method1()
        {
            int count = 0;
            await Task.Run(() =>
            {
                for(int i = 0; i<100;i++)
                {
                    Console.WriteLine("From Method 1");
                    count++;
                }
            });
            return count;
        }

        public static void Method2()
        {
            for (int i = 0; i < 10; i++)
            {
                Console.WriteLine("From Method 2");
            }
        }

        public static void Method3(int count)
        {
            Console.WriteLine("In Method 3 ");
            Console.WriteLine($"Total  Method 1 Items is:{count} ");
        }
    }
}
