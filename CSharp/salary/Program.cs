// Assuming Straight tiime payment for 40hrs is 100 unit
// Assuming 1.5unit for the hourly rate for all hour sworked in excess of 40hr
using System;

namespace salary
{
    class Program
    {
        static void Main(string[] args)
        {
            double[] emp_hours = new double[5];
            double[] emp_salary = new double[5];
            Console.WriteLine("======================================Payment Program======================================");
            Console.WriteLine("Enter the hours of work done by 5 employee below :-");
            for (int i = 0; i < 5; i++)
            {
                Console.Write("Name of employee {0} = ", i + 1);
                string name = Convert.ToString(Console.ReadLine());
                Console.Write("Gender employee {0} (M/F) = ", i + 1);
                string gender = Convert.ToString(Console.ReadLine());
                Console.Write("Hours Worked by employee {0} = ", i + 1);
                emp_hours[i] = Convert.ToInt32(Console.ReadLine());
                Console.WriteLine("Salary of employee {0} is Rs.{1}", i + 1, salary(emp_hours[i]));
                emp_salary[i] = salary(emp_hours[i]);

                /* Using Object to calculate Salary */
                PayRoll payroll = new PayRoll(name, gender, emp_salary[i]);
                Console.WriteLine("Salary Calculate from payroll object = {0}", payroll.calculateSalary());
                Console.WriteLine("Employee Info from payroll object");
                payroll.displayInfo();
            }
            /* ===============================Total Salary of all employees=============================== */
            Console.WriteLine("Total Salary of 5 employee is Rs.{0}", totalSalary(emp_salary));
        }

        static double salary(double hours)
        {
            return hours > 40
                 ? 40 * 100 + (hours - 40) * 1.5
                 : 40 * 100;
        }

        static double totalSalary(double[] emp_salary)
        {
            double total_emp_salary = 0;
            for (int i = 0; i < emp_salary.Length; i++)
            {
                total_emp_salary += emp_salary[i];
            }
            return total_emp_salary;
        }


    }

    class PayRoll
    {
        string name;
        string gender;
        double hours;

        public PayRoll(string n, string g, double hrs)
        {
            name = n;
            gender = g;
            hours = hrs;
        }

        public double calculateSalary()
        {
            return hours > 40
                ? 40 * 100 + (hours - 40) * 1.5
                : 40 * 100;
        }

        public void displayInfo()
        {
            Console.WriteLine("Name of employee from payroll object = {0}", name);
            Console.WriteLine("Gender of employee from payroll object = {0}", gender);
            Console.WriteLine("Salary of employee from payroll object = {0}", calculateSalary());
        }


    }

}
