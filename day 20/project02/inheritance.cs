using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Xml.Linq;

namespace project02
{
        class Car
        {
            string carName = "",carModel="";
            public void setData(string a, string b)
            {
                this.carName = a;
                this.carModel = b;
            }
            public string getData()
            {
                return " Car Name is " +carName + " Car Model is " +carModel;
            }
        }
        class Sales : Car
        {
            string salePerson;
            float salePrice;
            string saleDate;
            public void setData1(string a, string b, float c)
            {
                this.salePerson = a;
                this.saleDate = b;
                this.salePrice = c;

            }
            public string getData1()
            {
                return " Sales Person Name is " +salePerson + " Date is " +saleDate + " Having Price "  +salePrice;
            }
        }
        internal class inheritance
        {
            public static void Main()
            {
                Sales car = new Sales();
                car.setData1(" Rahul ", " 23 / 05 / 2023 ",345650f);
                Console.WriteLine(car.getData1());
            }
        }
}
