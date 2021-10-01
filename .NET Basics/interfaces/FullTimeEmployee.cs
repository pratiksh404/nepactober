using System;
using System.Collections.Generic;
using System.Text;

namespace interfaces
{
    public abstract class FullTimeEmployee : IEmployee
    {
        public void Show()
        {
            Console.WriteLine("Full Time Employees are paid monthly salary according to position");
        }

       public abstract void taxDeduction(); 
    }
}
 