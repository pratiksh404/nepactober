using System;

namespace ElectricityBill
{

	class electricity
	{
		public static double finalPayment = 0;

		static void Main(string[] args)
		{
			string check = "y";
			while (check == "y")
			{
				Console.WriteLine("Enter the Electricity Consumed");
				int consumed = int.Parse(Console.ReadLine());
				var bill = BillGenerator(consumed);
				Console.WriteLine("Do You Want to Perform the Calculation Again.");
				Console.WriteLine("Press y to perform calculation again Otherwise Press any other key to terminate");
				check = Console.ReadLine();
			}
		}

		static int BillGenerator(int consumed)
		{
			var pay = 0;
			if (consumed < 50)
			{
				pay = pay + LessThanFifty();
			}
			else if (consumed > 50 && consumed <= 100)
			{
				pay = pay + MoreThan50(consumed - 50);
				pay = pay + LessThanFifty();
			}
			else if (consumed > 100 && consumed <= 150)
			{
				pay = pay + MoreThan100(consumed - 100);
				pay = pay + MoreThan50(49);
				pay = pay + LessThanFifty();
			}
			else if (consumed > 150 && consumed <= 300)
			{
				pay = pay + MoreThan150(consumed - 150);
				pay = pay + MoreThan100(49);
				pay = pay + MoreThan50(49);
				pay = pay + LessThanFifty();
			}
			else if (consumed > 300)
			{
				pay = MoreThan300(consumed - 300);
				pay = pay + MoreThan150(149);
				pay = pay + MoreThan100(49);
				pay = pay + MoreThan50(49);
				pay = pay + LessThanFifty();
			}


			Console.WriteLine("The Bill for {0} units is {1}", consumed, pay);
			return 0;
		}

		static int LessThanFifty()
		{
			return (int)50;
		}
		static int MoreThan50(int remaining)
		{
			finalPayment = remaining * 5;
			return (int)finalPayment;
		}
		static int MoreThan100(int remaining)
		{
			finalPayment = remaining * 7;
			return (int)finalPayment;
		}

		static int MoreThan150(int remaining)
		{
			finalPayment = remaining * 12;
			return (int)finalPayment;
		}
		static int MoreThan300(int remaining)
		{
			finalPayment = remaining * 25;
			return (int)finalPayment;
		}
	}

}