using System;
using System.Collections.Generic;
using System.Text;

namespace Constructor
{
    class Student
    {
       public string name;
        public int age;
        public Student(string name, int age)
        {
            this.name = name;
            this.age = age;
        }
        public string viewDetails()
        {
            return this.name + "is" + this.age + "years old";
            //Console.WriteLine("The name is {0}",this.name);
            //Console.WriteLine("The age is {0}", this.age);
        }
    }
}
