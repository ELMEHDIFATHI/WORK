using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace UMLCLIENT_COMPTE
{
    class Program
    {
        static void Main(string[] args)
        {

            MAD m1 = new MAD(100);
            MAD m2 = new MAD(100);
            MAD m3 = new MAD(50);

            client cl = new client("mehdi","fathi","casa");
            client cl2 = new client("ayoub", "fathi", "casa");

            compte c1 = new compte( cl,m1) ;
            compte c2 = new compte( cl2,m2);
            Console.WriteLine("");

           // m1.affichier();
           // m2.affichier();

           // cl.afficher();
            //cl2.afficher();

            c1.afficher();

            c2.afficher();

            Console.WriteLine("traitement credite ajouter 100 MAD a compte de mehdi");
            c1.credite(m2);
            c1.afficher();
            c2.afficher();
            Console.WriteLine("traitement debite 50 MAD de compte mehdi");
            c1.debite(m3);
            c1.afficher();
            c2.afficher();

            Console.WriteLine("traitement verser prendre 50 MAD de compte mehdi et ajouter a le compte de ayoube");
            c1.verser(c2, m3);
            c1.afficher();
            c2.afficher();
           

            Console.ReadKey();
        }
    }
}
