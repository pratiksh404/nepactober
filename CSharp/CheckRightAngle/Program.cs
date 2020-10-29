using System;

namespace CheckRightAngle
{
	class CheckRightTriangle
	{
		static void Main(string[] args)
		{
			double sideA, sideB, sideC;
			 string tryAgain = "y";
			 while(tryAgain == "y")
			 {
				Console.WriteLine("Enter Length Of Side A(Hypotenuse)");
				sideA = double.Parse(Console.ReadLine());
				Console.WriteLine("Enter Length Of Side B");
				sideB = double.Parse(Console.ReadLine());
				Console.WriteLine("Enter Length Of Side C");
				sideC = double.Parse(Console.ReadLine());
				CheckRight(sideA, sideB, sideC);
				Console.WriteLine("Do You want to check Right angled triangle Again ?? If Yes Please Press 'y' else press any other Key To Terminate");
				tryAgain = Console.ReadLine();
			 }
		}

		static void CheckRight(double sideA, double sideB, double sideC)
		{
			if (sideA * sideA == sideB * sideB + sideC * sideC)
			{
				Console.WriteLine("The above provided  Sides are of a Right Angled Triangle");
			}
			else
			{
				Console.WriteLine("The above provided  Sides are not of a Right Angled Triangle");
			}
		}
	}
}