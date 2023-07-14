using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace project02
{
    class Data
    {
        protected float val1, val2;
        public Data(float val1, float val2)
        {
            this.val1 = val1;
            this.val2 = val2;
        }
        /* public void setData(float val1, float val2)
        {
        this.val1 = val1;
        this.val2 = val2;

        }*/
    }
    class Add : Data
    {
        public Add(float v1, float v2) : base(v1, v2)
        {
        }
        public float add()
        {

            return val1 + val2;
        }
    }
    class Sub : Data
    {
        public Sub(float v1, float v2) : base(v1, v2)
        {
        }
        public float sub()
        {
            return val1 - val2;
        }
    }
    class Mul : Data
    {
        public Mul(float v1, float v2) : base(v1, v2)
        {
        }
        public float mul()
        {
            return val1 * val2;
        }
    }
    class Div : Data
    {

        public Div(float v1, float v2) : base(v1, v2)
        {
        }
        public float div()
        {
            return val1 / val2;
        }
    }
    internal class inheritance2
    {
        public static void Main()
        {
            Add s1 = new Add(12, 34);
            Console.WriteLine(s1.add());

        }
    }
}
