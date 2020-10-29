using System;
using System.Collections.Generic;

namespace Array2DPart
{
    class Program
    {
        static void Main(string[] args)
        {
          /*  List<string> authorList = new List<string>();
            authorList.Add("name");
            authorList.Add("NEW Nam");
            foreach (string author in authorList)
            {
                Console.WriteLine("{0}", author);
            }*/
            Console.WriteLine("Welcome User");
            Console.WriteLine(new string('-',50));
            double[] hoursWorked = new double[5];
            Console.WriteLine("Enter the Hourly Rate");
            double hourlyRate = double.Parse(Console.ReadLine());
            int i = 0;
            foreach(double newArr in hoursWorked)
            {
                Console.WriteLine("Enter Hours Worked of User {0}:", ++i);
                hoursWorked[i - 1] = double.Parse(Console.ReadLine());
            }
            displayInfo(hoursWorked);
            CalulateSalaries(hoursWorked,hourlyRate);

        }

        static void CalulateSalaries(double[] arr,double hourlyRate)
        {
            Console.WriteLine(new string('-', 50));
            double[] salaryPaid = new double[5];
            int j = 0;
            foreach (double newArray in salaryPaid)
            {
                if (arr[j] >= 40)
                {
                    salaryPaid[j] = hourlyRate + (arr[j] - 40) * (1.5 * hourlyRate * 0.01);
                }
                else
                {
                    salaryPaid[j] = hourlyRate;
                }
                j++;
            }

            j = 0;
            foreach (double newArr in arr)
            {
                Console.WriteLine("Salary of User {0}: {1} for Working {2} hours", ++j, salaryPaid[j-1],arr[j-1]);
            }

        }

        static void displayInfo(double[] arr)
        {
            Console.WriteLine(new string('-', 50));
            int i = 0;
            foreach (double newArr in arr)
            {
                Console.WriteLine("Hours Worked by User {0}: {1}", ++i, arr[i - 1]);
            }
        }
    }
}
