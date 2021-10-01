using System;

namespace party
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("===============================Samriddhi Party===============================");
            Console.Write("Enter your ID = ");
            int pass_id = Convert.ToInt32(Console.ReadLine());
            if (pass_id == 1 || pass_id == 2 || pass_id == 3)
            {
                Console.WriteLine("Welcome to the party");
                Console.WriteLine("Define your category");
                Console.WriteLine("1) Parent");
                Console.WriteLine("2) Teacher");
                Console.WriteLine("3) Student");
                int category = Convert.ToInt32(Console.ReadLine());
                /* Are you drunk check */
                Console.WriteLine("Are you Drunk (y/n)");
                char drunk = Convert.ToChar(Console.ReadLine());
                /* --------------- */

                DrunkCheck(drunk);


                switch (category)
                {
                    case 1:
                        /* Eating Section */
                        EatingSection(category);
                        
                        break;
                    case 2:
                        /* Eating Section */
                        EatingSection(category);
                        
                        break;
                    case 3:
                        /* Eating Section */
                        EatingSection(category);
                        
                        break;
                }
            }
            else
            {
                Console.WriteLine("Sorry Your Pass ID is incorrect, Yor are not allowed");
            }
        }

        public static void DrunkCheck(char drunk)
        {

            if (drunk == 'y' || drunk == 'Y')
            {
                Console.WriteLine("You are kicked out of party !!");
            }
            else if (drunk == 'n' || drunk == 'N')
            {
                Console.WriteLine("Enjoy the party");
            }
            else
            {
                Console.WriteLine("Invalid Input");
            }
        }

        public static void EatingSection(int category)
        {
            Console.WriteLine("Which Section you want to go in ?");
            Console.WriteLine("1) Dinner");
            Console.WriteLine("2) Snacks");
            Console.WriteLine("3) Bar");
            int section = Convert.ToInt32(Console.ReadLine());
            /* Eating Section Function */
            if (section == 1)
            {
                Console.WriteLine("Enjoy you dinner");
            }
            else if (section == 2)
            {
                Console.WriteLine("Enjoy Your Snacks");
            }
            else if (section == 3)
            {
                if (category == 3)
                {
                    int grade = StudentGrade();
                    if (grade == 13 || grade == 14)
                    {
                        Console.WriteLine("Don't be to sober");
                    }
                    else
                    {
                        Console.WriteLine("You are not allowed");
                    }
                }
                else
                {
                    Console.WriteLine("Don't be to sober");
                }
            }
        }

        public static int StudentGrade()
        {
            Console.WriteLine("Enter Your Grade");
            Console.WriteLine("1) One");
            Console.WriteLine("2) Two");
            Console.WriteLine("3) Three");
            Console.WriteLine("4) Four");
            Console.WriteLine("5) Five");
            Console.WriteLine("6) Six");
            Console.WriteLine("7) Seven");
            Console.WriteLine("8) Eight");
            Console.WriteLine("9) Nine");
            Console.WriteLine("10) Ten");
            Console.WriteLine("11) Eleven");
            Console.WriteLine("12) Twelve");
            Console.WriteLine("13) Bachelor");
            Console.WriteLine("14) Master");
            int grade = Convert.ToInt32(Console.ReadLine());
            return grade;
        }
    }
}
