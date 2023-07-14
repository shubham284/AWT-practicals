using System;
using System.Collections.Generic;
using System.Diagnostics.Metrics;
using System.Linq;
using System.Runtime.InteropServices;
using System.Text;
using System.Threading.Tasks;

namespace project1
{
    internal class calculator
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Enter a: ");
            float n1 = float.Parse(Console.ReadLine());
            Console.WriteLine("Enter b: ");
            float n2 = float.Parse(Console.ReadLine());
            Console.WriteLine("Menu: 1.Add 2.Sub 3.Mul 4.Div ");
            Console.WriteLine("Enter Your Choice ");
            int c = int.Parse(Console.ReadLine());
            switch (c)
            {
                case 1:
                    Console.WriteLine("a + b = " +(n1 + n2));
                    break;
                case 2:
                    Console.WriteLine("a - b = " +(n1 - n2));
                    break;
                case 3:
                    Console.WriteLine("a x b = " +(n1 * n2));
                    break;
                case 4:
                    Console.WriteLine("a / b = " +(n1 / n2).ToString());
                    break;
                Default: Console.WriteLine("Invalid Input.");

            }
        }
    }
}
