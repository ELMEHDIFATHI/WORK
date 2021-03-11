using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace UMLCLIENT_COMPTE
{
    class MAD
    {

        private double valeur;

        public MAD(double v)
        {
            this.valeur = v;
        }

        public void affichier()
        {
            Console.WriteLine(this.valeur);
        }

        public static MAD operator +(MAD p1,MAD p2)
        {
            MAD sum = new MAD(0.0);
             sum.valeur = p1.valeur + p2.valeur;


            return sum;
        }

        public static MAD operator -(MAD p1, MAD p2)
        {
            MAD sum = new MAD(0.0);
            sum.valeur = p1.valeur - p2.valeur;


            return sum;
        }

        public static bool operator >(MAD p1, MAD p2)
        {
            if (p1.valeur > p2.valeur)
            {
                return true;
            }
            else
            {

                return false;
            }


        }

        public static bool operator <(MAD p1,MAD val)
        {

            if (p1.valeur < val.valeur)
            {
                return true;
            }
            else
            {

                return false;
            }


        }
    }

}
