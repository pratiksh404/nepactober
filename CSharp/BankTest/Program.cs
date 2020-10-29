using System;

namespace BankTest
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Hello World!");
            Person person1 = new Person();
            Person person2 = new Person("New Person", 20, "Kathmandu");
            person1.Name = "Parjanya";
            person1.DisplayInfo();
            person2.DisplayInfo();
        }
    }
}
