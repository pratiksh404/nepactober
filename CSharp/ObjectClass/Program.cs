using System;

namespace ObjectClass
{
    class Program
    {
        static void Main(string[] args)
        {
            var person = new PersonTest("Parjanya","Shakya",20,"Kathmandu");
            var person1 = new PersonTest();
            var person2 = new PersonTest("Parjanya", "Shakya", 20);
            person.Firstname = "Ram";
            person.Surname = "Shyam";
            person1.Address = "New Baneshwor";
            person2.Address = "Tinkune";
            //Console.WriteLine("My Name is :{0} {1}", person.Firstname, person.Surname);
            //Console.WriteLine("{0} {1}'s address is {2}", person1.Firstname, person1.Surname,person1.Address);
            person.getDetails();
            person1.getDetails();
            person2.getDetails();
        }
    }
}
