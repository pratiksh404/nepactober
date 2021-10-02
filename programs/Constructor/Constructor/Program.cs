
using System;
using System.Collections.Generic;
using System.Dynamic;

namespace Constructor
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Welcome to this school");
            Console.WriteLine("----------------------------");
            List <Student> Details = new List<Student>();
            for(int i=0; i<5;i++)
            {
                Details.Add(new Student());
                Console.WriteLine("Enter your name:");
                Details[i].name = Console.ReadLine();
                Console.WriteLine("Enter your age");
                Details[i].age = Convert.ToInt32(Console.ReadLine());
            }
            foreach (Student odata in Details)
            {
                Console.WriteLine(odata.viewDetails());
            }
        }
    }
}