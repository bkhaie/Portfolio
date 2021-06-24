using System;
using System.Collections.Generic;
using System.Text;



namespace DiceGame
{
    class Die
    {
        // Attributes
        private int maxEyes;
        private int eyes;



        /**
         * Default Constructor
         * This constructor will generate a standard 6 eyed.
         * Usage: new Die(); // New 6 eyed die is created
         */
        public Die()
        {
            maxEyes = 6;
            eyes = 1;
        }



        /**
         * Parameter constructor
         * This construct will generate a specific Die based on that parameter.
         * Usage: new Die(20); // New 20 eyed die is created
         */
        // TODO #3.2 Create a new/another constructor with a parameter that will change the maxEyes value. The comment that belongs to this constructor is already written above.
        public Die(int _maxEyes)
        {
            this.maxEyes = _maxEyes;
            this.eyes = 1;
        }




        /**
         * This methode will randomize the dice.
         * You can get the randomized eyes by using the GetEyes() method
         */



        public void ThrowDice()
        {
            // TODO #6 Make the randomizer and set a random number in the eyes variable.
            Random random = new Random();
            eyes = random.Next(eyes, maxEyes + 1);
        }



        // TODO #7 This piece of documentation is missing could you please create the correct documentation an describe what this method does?
        // Look at the previous documentation parts and make sure the format is correct.



        public int GetEyes()
        {
            return eyes;
        }



        public int GetMaxEyes()
        {
            return this.maxEyes;
        }
    }
}