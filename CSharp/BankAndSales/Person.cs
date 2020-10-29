using System;

namespace BankAndSale
{
    public class Person
    {
        private string name;
        private string surname;
        private int age;
        private string address;

        public Person(string n, string snm, string add, int age)
        {
            name = n;
            surname = snm;
            address = add;
            this.age = age;
        }
        public void DisplayInfo()
        {
            Console.WriteLine(new string('-', 50));
            Console.WriteLine($"Name: {name}");
            Console.WriteLine($"Surname: {surname}");
            Console.WriteLine($"Address: {address}");
            Console.WriteLine($"Age: {age}");
        }
    }
}
