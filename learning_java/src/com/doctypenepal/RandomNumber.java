package com.doctypenepal;

import java.util.*;

public class RandomNumber {
    public RandomNumber(){
        Random random = new Random();

        int x = random.nextInt();
        int randomDice = random.nextInt(6)+1; // takes parameter of random number range .... +1 because count starts from 0 and we need 6 random range

        double y = random.nextDouble();
        boolean z = random.nextBoolean();

        System.out.println("Random integer :" + x);
        System.out.println("Random dice integer :" + randomDice);
        System.out.println("Random double :" + y);
        System.out.println("Random boolean :" + z);
    }
}
