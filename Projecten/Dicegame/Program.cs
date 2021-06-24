using System;
using System.Collections.Generic;



namespace DiceGame
{
    class Program
    {
        static void Main(string[] args)
        {
            /* 
             * Let op deze opdracht is in het Engels.
             * 
             * De opdracht beschrijving: Er moet een kleine dobbelsteen generator gemaakt worden.
             * Deze dobbelsteen applicatie is echter nog niet helemaal af en deze moet jij af maken.
             * In de applicatie vind je verschillende TODO's. Op deze plekken moet jij de code aanvullen of
             * repareren.
             * BELANGRIJK: Zorg ervoor dat je voor elke TODO een commit maakt met een juiste bericht. 
             * De TODO comment mag je weg halen na het repareren van de code.
             * TODO #6 en 7 Staan in de Die class.
             */



            Console.WriteLine("Hello Dice player what's your name?");
            // TODO #1 Let the player fill in his/her name and store that in a variable
            string name = Console.ReadLine();



            // TODO #2 Use the filled in name to say hello to the player
            Console.WriteLine($"Oh hello there. player " + name);










            bool again = true;








            while (again)
            {




                Console.WriteLine("How many eyes does your dice need?");
                // TODO #3.1 Let the player fill in his preferred eyes of the dice en store that value.
                int throwTotalEyes = Convert.ToInt32(Console.ReadLine());



                // TODO #3.2 Create the constructor of the Die class so you can pass through the max eyes amount   
                //zie Die.cs



                Console.WriteLine("How many dice do you want to throw?");
                // TODO #4 Create a list/array variable with the amount of dice the player want to throw. Don't forget to fill the list with the Die object class and the correct eye value.
                int amountDice = Convert.ToInt32(Console.ReadLine());



                Console.WriteLine("When ever you are ready. You can throw the dice by pressing the 'any'-key.");
                Console.ReadLine();
                // TODO #5.1 Loop through the list/array and throw the dice using the ThrowDice() Method.



                List<Die> dice = new List<Die>();



                for (int i = 0; i < amountDice; i++)
                {
                    dice.Add(new Die(throwTotalEyes));
                }



                // TODO #5.2 Use the GetEyes() method to print the eyes of the die.
                /* the print in the console should look somthing like this if the user chooses 4 dice:
                * Die 1: 4
                * Die 2: 2
                * Die 3: 6
                * Die 4: 1
                */
                // TODO #8 Print out the total number of eyes the user has thrown.



                int j = 0;
                int totalEyes = 0;



                foreach (Die die in dice)
                {
                    die.ThrowDice();
                    totalEyes += die.GetEyes(); //totalEyes = totalEyes + die.GetEyes()
                    Console.WriteLine("Dobbelsteen nummer " + (++j) + " aantal ogen is " + die.GetEyes() + " totaal aantal gegooide ogen " + totalEyes + " Maximaal totaal aantal ogen dobbelsteen " + die.GetMaxEyes());
                }
                Console.WriteLine("Het totaal aantal ogen is " + totalEyes);



                // TODO #9.1 Ask if the player wants to rethrow.
                // TODO #9.2 Make the program replayable.



                Console.WriteLine("Wilt u doorgaan? Vul J of N in");
                string doorgaan = Console.ReadLine();



                if (doorgaan == "N")
                {
                    again = false;
                }
            }
        }
    }
}