using System;

namespace Partial_Class_Demo
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Hello World!");
            Exam exam = new Exam();
            exam.AllExam();
            exam.firstTerm();
            exam.secondTerm();
            exam.thirdTerm();
        }
    }
}
