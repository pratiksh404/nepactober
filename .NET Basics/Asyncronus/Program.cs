using System;
using System.Threading.Tasks;
namespace Asyncronus
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Hello World!");
            Method1();
            Method2();
            Console.ReadKey();
        }

        public static async Task Method1()
        {
            await Task.Run(() =>
            {
                for (int i = 0; i < 100; i++)
                {
                    Console.WriteLine("Method 1");
                }
            });
        }

        public static void Method2()
        {
           for(int i = 0;i<10;i++)
            {
                Console.WriteLine("Method 2");
            }
        }
    }

   
}
