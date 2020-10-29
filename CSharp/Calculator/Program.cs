using System;

namespace Calculator
{
	class Calculator
	{
		public static double finalResult;

		static void Main(string[] args)
		{
			string check = "y";
			while (check == "y")
			{
				Console.WriteLine("Enter the Operation You want to perform");
                Console.WriteLine(new string('=',50));
				Console.WriteLine("1) Addition");
				Console.WriteLine("2) Subtraction");
				Console.WriteLine("3) Multiplication");
				Console.WriteLine("4) Division");
				Console.WriteLine(new string('=', 50));
				double Operation = int.Parse(Console.ReadLine());
				Console.WriteLine("Enter The First Number");
				double firstNumber = double.Parse(Console.ReadLine());
				Console.WriteLine("Enter The Second Number");
				double secondNumber = double.Parse(Console.ReadLine());

				if (Operation == 1)
				{
					Addition(firstNumber, secondNumber);
				}
				else if (Operation == 2)
				{
					Subtract(firstNumber, secondNumber);
				}
				else if (Operation == 3)
				{
					Multiply(firstNumber, secondNumber);
				}
				else if (Operation == 4)
				{
					Division(firstNumber, secondNumber);
				}
				else
				{
					Console.WriteLine("No Such Operation Defined");
				}
				Console.WriteLine("Do You Want To Continue? If Yes Press y else Press any Other Key to Exit");
				check = Console.ReadLine();

			}




		}

		public static void Addition(double firstNumber, double SecondNumber)
		{
			finalResult = firstNumber + SecondNumber;
			Console.WriteLine(new string('=', 50));
			Console.WriteLine(" {0} + {1} = {2}", firstNumber, SecondNumber, finalResult);
		}

		public static void Subtract(double firstNumber, double SecondNumber)
		{
			if (firstNumber > SecondNumber)
			{
				finalResult = firstNumber - SecondNumber;
			}
			else
			{
				finalResult = SecondNumber - firstNumber;
			}
			Console.WriteLine(new string('=', 50));
			Console.WriteLine(" {0} - {1} = {2}", firstNumber, SecondNumber, finalResult);
		}

		public static void Multiply(double firstNumber, double SecondNumber)
		{
			finalResult = firstNumber * SecondNumber;
			Console.WriteLine(new string('=', 50));
			Console.WriteLine("{0} * {1} = {2}", firstNumber, SecondNumber, finalResult);
		}

		public static void Division(double firstNumber, double SecondNumber)
		{
			Console.WriteLine(new string('=', 50));
			if (SecondNumber == 0 || firstNumber == 0)
			{
				Console.WriteLine("Operation Cannot Be Performed");
			}
			else
			{
				finalResult = firstNumber / SecondNumber;
				Console.WriteLine("{0} / {1} = {2}", firstNumber, SecondNumber, finalResult);
			}

		}


	}



}