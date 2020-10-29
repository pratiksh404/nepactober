// a)Declare a two-dimensional array of int, named int2d, that contains five rows, each of which contains ten integers.



// b)Write a statement that prints the last integer in the third row of the array that you created in the previous exercise. Then write an assignment statement that assigns 100 to the last element in the int2d array.

using System;


namespace Array2D
{
	class Array2D
	{
		static void Main(string[] args)
		{
			int[,] int2D = new int[5, 10];
			for (int i = 0; i < 5; i++)
			{
				for (int j = 0; j < 10; j++)
				{
					Console.WriteLine("Enter Value Of [{0},{1}]", i, j);
					int2D[i, j] = int.Parse(Console.ReadLine());
				}
			}

			Console.WriteLine("The Last Element In Third Row is:");

			for (int i = 0; i < 5; i++)
			{
				for (int j = 0; j < 10; j++)
				{
					if (i == 2 && j == 9)
					{
						Console.WriteLine(int2D[i, j]);
					}
				}
			}

			int2D[4, 9] = 100;
			Console.WriteLine("The Entered Values are :");
			for (int i = 0; i < 5; i++)
			{
				for (int j = 0; j < 10; j++)
				{
					Console.Write(" {2}  ", i, j, int2D[i, j]);
				}
				Console.WriteLine(" ");
			}
			Environment.Exit(0);
		}
	}
}