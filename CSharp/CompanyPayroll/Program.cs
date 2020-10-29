using System;
using System.Linq;

namespace CompanySales
{
	class CompanySales
	{
		static void Main(string[] args)
		{
			int[] myArr = new int[5];
			 
			string check = "y";
			double totalValue = 0;
			while (check == "y")
			{
				int i = 0;
				foreach (int myObj in myArr)
				{
					i++;
					Console.WriteLine("Enter Salary of Employee {0}", i);
					myArr[i - 1] = int.Parse(Console.ReadLine());
					totalValue += myArr[i - 1];
					Console.WriteLine(new string('=', 50));
				}
			/*	foreach(int myObj in myArr)
                {
                    Console.WriteLine("Sales::{0}",myObj);
                }*/
				AverageSale(totalValue,myArr.Count());
				MaxSale(myArr.Max());
				MinSale(myArr.Min());
				Console.WriteLine("Enter a Value::");
				double limitValue = double.Parse(Console.ReadLine());
				AboveLimit(myArr,limitValue);
 				Console.WriteLine("Do You Want to Continue?? If Yes Press y otherwise press any other key to exit");
				check = Console.ReadLine();
				totalValue = 0;
				limitValue = 0;
			}

		}

		static void AverageSale(double totalValue,int count)
		{
			double averageSale = totalValue / count;
			Console.WriteLine("Average Sale is : {0}",averageSale);
		}

		static void MaxSale(int max)
		{
			Console.WriteLine("Max Sale is : {0}", max);
		}

		static void MinSale(int min)
		{
			Console.WriteLine("Min Sale is : {0}", min);
		}

		static void AboveLimit(int[] arr,double limit)
        {
			Console.WriteLine("Sales Above {0} are :", limit);
			foreach (int finalArray in arr)
            {
				if(finalArray > limit)
                {
					Console.WriteLine("{0}", finalArray);
                }
            }
        }
	}
}