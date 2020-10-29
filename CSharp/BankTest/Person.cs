using System;
using System.Collections.Generic;
using System.Runtime.CompilerServices;
using System.Text;

namespace BankTest
{
    class Person
    {
        private string name;
        private int age;
        private string address;

       public Person()
       {
            this.name = "Yogendra";
            this.age = 29;
            this.address = "Patan";
            Console.WriteLine("THis is a default Constructor");
       }
        public Person(string name,int age,string address)
        {
            this.name = name;
            this.age = age;
            this.address = address;
            Console.WriteLine("THis is a Parameterized Constructor");
        }

        public string Name 
        {
            get
            {
                return name;
            }

            set
            {
                this.name = value;
            }
        }

        public void DisplayInfo()
        {
            Console.WriteLine(new string('-', 50));
            Console.WriteLine("Name is {0}", this.name);
            Console.WriteLine("Age is {0}",this.age);
            Console.WriteLine("Address is {0}", this.address);
        }
    }
}
