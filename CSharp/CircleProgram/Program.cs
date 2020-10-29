using System;

namespace CircleProgram
{
    class Program
    {
        static void Main(string[] args)
        {
            var circle1 = new Circle(20,"white");
            var circle2 = new Circle();
            circle1.Radius = 20.25;
            circle1.getArea();
            circle1.getRadius();
            circle2.getArea();
            circle2.getRadius();
        }
    }
}
