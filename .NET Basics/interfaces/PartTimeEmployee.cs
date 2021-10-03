using System;
using System.Collections.Generic;
using System.Text;

namespace interfaces
{
    public class PartTimeEmployee : IEmployee
    {
        public void Show()
        {
            Console.WriteLine("Part Time Employees are paid $20 per Hour");
        }

        public void taxDeduction()
        {
            Console.WriteLine("Part Timers need to pay 15% tax");
        }
    }
}
