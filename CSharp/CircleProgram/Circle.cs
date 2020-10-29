using System;
using System.Collections.Generic;
using System.Text;

namespace CircleProgram
{
    class Circle
    {

        private double radius;
        private string color;
        public const double PI = 3.14;

        public Circle()
        {
            this.radius = 1.0;
            this.color = "red";
            Console.WriteLine("This is a Default Constructor");
        }
        public Circle(double radius,string color)
        {
            this.radius = radius;
            this.color = color;
            Console.WriteLine("This is a Parameterized Constructor");
        }

        public double Radius
        {
            get
            {
                return this.radius;
            }

            set
            {
                this.radius = value;
            }

        }

        public string Color
        {
            get
            {
                return this.color;
            }

            set
            {
                this.color = value;
            }

        }

        public void getRadius()
        {
            Console.WriteLine("Radius is :{0}", this.Radius);
        }

        public void getArea()
        {
            double area = PI * this.Radius;
            Console.WriteLine("The area of Circle is {0}",area);
        }
    }
}
