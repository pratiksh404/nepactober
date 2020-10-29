using System;
using System.Collections.Generic;
using System.Text;

namespace ObjectClass
{
    class PersonTest
    {
        private string firstname;
        private string surname;
        private int age;
        private string address;

        public PersonTest()
        {
            this.firstname = "Default Parjanya";
            this.surname = "Default Shakya";
            this.age = 20;
            this.address = "Kathmandu";
            Console.WriteLine("This is a Default Constructor");
        }
        public PersonTest(string firstname,string surname,int age, string address)
        {
            this.firstname = firstname;
            this.surname = surname;
            this.age = age;
            this.address = address;
            Console.WriteLine("This is a Parameterized Constructor");
        }

        public PersonTest(string firstname, string surname, int age)
        {
            this.firstname = firstname;
            this.surname = surname;
            this.age = age;
            Console.WriteLine("This is a Overloaded Constructor");
        }

        public string Firstname
        {
            get
            {
                return this.firstname;
            }

            set
            {
                this.firstname = value;
            }
        }

        public string Surname
        {
            get
            {
                return this.surname;
            }

            set
            {
                this.surname = value;
            }
        }

        public int Age
        {
            get
            {
                return this.age;
            }

            set
            {
                this.age = value;
            }
        }

        public string Address
        {
            get
            {
                return this.address;
            }

            set
            {
                this.address = value;
            }
        }


        public void getDetails()
        {
            Console.WriteLine("{0} {1}'s Age is {2} And Address is {3}",this.Firstname,this.Surname,this.Age,this.Address);
        }


    }
}
