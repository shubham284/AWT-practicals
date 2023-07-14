using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace project02
{
    class Sum
    {

        float a, b;
        public Sum(int a, int b)
        {
            this.a = a;
            this.b = b;
        }
        public Sum(int a, float b)
        {
            this.a = a;
            this.b = b;
        }
        public Sum(float a, float b)
        {
            this.a = a;
            this.b = b;
        }
        public Sum(float a, int b)
        {
            this.a = a;
            this.b = b;
        }
        public void getData()
        {
            Console.WriteLine((a + b).ToString());
        }

    }
    internal class constOverload
    {
        static void Main(String[] args)
        {
            Sum s1 = new Sum(12, 13);
            s1.getData();
            Sum s2 = new Sum(12, 13.50f);
            s2.getData();
            Sum s3 = new Sum(12.50f, 13.50f);
            s3.getData();
            Sum s4 = new Sum(12.50f, 13);
            s4.getData();

        }
    }
}
