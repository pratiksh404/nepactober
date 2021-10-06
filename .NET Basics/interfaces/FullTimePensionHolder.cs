using System;
using System.Collections.Generic;
using System.Text;

namespace interfaces
{
    class FullTimePensionHolder : FullTimeEmployee
    {
        public override void taxDeduction()
        {
            Console.WriteLine("Pension Full Time Employees can saat least aVE 2% OF TAX BY ADDING IT TO PROVIDENT FUND");
        }
    }
}
