using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace project1
{
    internal class welcome
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Enter your name: ");
            string UserName = Console.ReadLine();
            Console.WriteLine("Enter your age: ");
            int age = int.Parse(Console.ReadLine());
            Console.WriteLine("Hello " +UserName + ", How are you?" +" Your age is: " +age.ToString());
        }
    }
}
