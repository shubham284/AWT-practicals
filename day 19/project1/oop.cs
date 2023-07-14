using System;
using System.Collections.Generic;
using System.Diagnostics.Metrics;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Xml.Linq;

namespace project1
{
    class sample
    {
        string UserName;
        int age = 0;
        public void setdata()

        {
            Console.WriteLine("Enter your name: ");
            UserName = Console.ReadLine();
            Console.WriteLine("Enter your age: ");
            age = int.Parse(Console.ReadLine());
        }
        public void getData()
        {
            Console.WriteLine("Hello " +UserName + ", How are you?" + " Your age is: " +age.ToString());
        }
    }
    internal class oop
    {
        static void Main(String[] args)
        {
            sample s1 = new sample();
            s1.setdata();
            s1.getData();
        }
    }
}
