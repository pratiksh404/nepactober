using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BankAndSale
{
    class Program
    {
        static void Main(string[] args)
        {
            var person = new Person("Shyam", "Chakradhar", "Madhyapur Thimi", 32);
            Console.WriteLine(new string('=', 50));
            Console.WriteLine("Welcome to Our Siddartha Bank System");

            var bankAccount = new BankAccount();

            Console.WriteLine("Press 1. to print your Account Details");
            Console.WriteLine("Press 2. to Check your Current Balance");
            Console.WriteLine("Press 3. to Deposit an Amount");
            Console.WriteLine("Press 4. to Withdraw an Amount");
            Console.WriteLine("Press 5. to Exit the program");


            bool check = true;


            while (check)
            {
                char character;
                Console.WriteLine(new string('=', 50));
                Console.WriteLine("Input Your Option:");
                int option;
                option = Int32.Parse(Console.ReadLine());
                switch (option)
                {
                    case 1:
                        bankAccount.OpenAccount(person);
                        break;
                    case 2:
                        Console.WriteLine($"Your current balance is: {bankAccount.GetBalance()}");
                        break;
                    case 3:
                        Console.WriteLine(new string('=', 50));
                        Console.WriteLine("Now you are Depositing an amount. So, please fill up your form");

                        double depositAmount;
                        Console.Write("Enter your Deposit Amount: ");
                        depositAmount = Double.Parse(Console.ReadLine());
                        bankAccount.Deposit(person, depositAmount);
                        break;
                    case 4:
                        Console.WriteLine(new string('=', 50));
                        Console.WriteLine("Now you are Withdrawing an amount. So, please fill up your form");
                        double withdrawAmount;
                        Console.Write("Enter your Withdraw Amount: ");
                        withdrawAmount = Double.Parse(Console.ReadLine());
                        bankAccount.Withdraw(person, withdrawAmount);
                        break;
                    case 5:
                        Console.WriteLine("Thank You for using our system");
                        Console.WriteLine("Exiting ..........");
                        break;
                    default:
                        break;
                }
                Console.WriteLine("Do you want to continue with your operation y for yes and n for no");
                character = Console.ReadLine()[0];
                if (character == 'y' || character == 'Y')
                {
                    check = true;
                }
                else
                {
                    check = false;
                }
            }
        }

    }
}
