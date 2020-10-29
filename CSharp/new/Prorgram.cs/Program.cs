using System;

namespace Prorgram.cs
{
    class Program
    {
        static void Main(string[] args)
        {
            var person = new Person("Parjanya", "Shakya", "Kathmandu", 21);
            var NabilBank = new BankAccount();
            char again = 'y';
            while (again == 'y' || again == 'Y')
            {
                Console.WriteLine("Welcome To Nabil Bank ");
                Console.WriteLine("Press 1 For Account Creation");
                Console.WriteLine("Press 2 For Amount Deposit");
                Console.WriteLine("Press 3 For Amount Withdraw");
                string check = Console.ReadLine();
                switch (check)
                {
                    case "1":
                        Console.WriteLine(new string('=', 50));
                        Console.WriteLine("Please Fill the form to create your account");

                        Console.WriteLine("You need minimum balance of 500 Rupees to open a Account");
                        NabilBank.openAccount(person, 500);
                        break;
                    case "2":

                        Console.WriteLine(new string('=', 50));
                        Console.WriteLine("Please Enter the amount you want to deposit");
                        double depositAmount = Double.Parse(Console.ReadLine());
                        NabilBank.deposit(person, depositAmount);
                        break;
                    case "3":

                        Console.WriteLine(new string('=', 50));
                        Console.WriteLine("Please Enter the amount you want to Withdraw");
                        double withdrawAmount = Double.Parse(Console.ReadLine());
                        NabilBank.withdraw(person, withdrawAmount);
                        break;
                }
                Console.WriteLine("If You Want to continue please Press y Or Press any other button to exit");
                again = Console.ReadLine()[0];
                }

           

          
           
          
        }
    }
}
