using System;
using System.Collections.Generic;
using System.Text;

namespace Prorgram.cs
{
    class Person
    {
        private string name;
        private string surname;
        private int age;
        private string address;


        public Person(string name,string surname,string address,int age)
        {
            this.name = name;
            this.surname = surname;
            this.age = age;
            this.address = address;
        }

        public void ViewPersonDetail()
        {
            Console.WriteLine("Name is:{0}", this.name);
            Console.WriteLine("Surname is:{0}", this.surname);
            Console.WriteLine("Age is:{0}", this.age);
            Console.WriteLine("Address is:{0}", this.address);

        }
    }
}
