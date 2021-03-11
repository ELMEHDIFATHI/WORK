using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using UMLCLIENT_COMPTE;

namespace UMLCLIENT_COMPTE
{
    class compte
    {
        private int numcompte;
        private static int cmp = 0;
        private MAD solde;
        private  MAD max_plafond = new MAD(90);
        private client cl;
        private MAD m;

        public compte(client c,MAD m)
        {
            this.numcompte = ++cmp;
       
            this.cl = c;
            this.m = m;
        }
        public void afficher()
        {
           
            Console.Write("numcompte est :" +this.numcompte+"le solde est :");
            m.affichier();
            cl.afficher();
        }

        public   bool credite(MAD sum)
        {
            MAD c2 = new MAD(0);
             if(sum > c2)
            {


                m+= sum;
             

                return true;
            }

            return true;
        }
        public bool debite(MAD valeur)
        {
            MAD v = new MAD(0);
            if (valeur > v && valeur < max_plafond && valeur < m)
            {
                m-= valeur;
                return true;
            }
            else
            {
                return false;
            }
        }


        public bool verser(compte c2,MAD sum)
        {
            if (this.debite(sum))
            {
                c2.credite(sum);
                return true;
            }
            else
            {
                return false;
            }
           
        }



    }
}
