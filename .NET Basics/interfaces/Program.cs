using System;

namespace interfaces
{
    class Program
    {
        static void Main(string[] args)
        {
            PartTimeEmployee pte = new PartTimeEmployee();
            pte.Show();
            pte.taxDeduction();
            FullTimePensionHolder ftph = new FullTimePensionHolder();
            ftph.Show();
            ftph.taxDeduction();

            //FullTimeEmployee fte = new FullTimeEmployee();
           // ftph.Show();
           // ftph.taxDeduction();

        }
    }
}
