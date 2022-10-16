package com.doctypenepal;

import java.util.*;

public class BasicMath {
    public BasicMath(){
        Scanner scanner = new Scanner(System.in);
        System.out.println("X :-");
        double x = scanner.nextDouble();

        System.out.println("Y :-");
        double y = scanner.nextDouble();

        double max = Math.max(x,y);
        System.out.println("max is " + max);

        double min = Math.min(x,y);
        System.out.println("min is " + min);

        System.out.println("absolute value of " + x + " is " + Math.abs(x));
        System.out.println("absolute value of " + y + " is " + Math.abs(y));
        System.out.println("square root value of " + x + " is " + Math.sqrt(x));
        System.out.println("square root value of " + y + " is " + Math.sqrt(y));
        System.out.println("round value of " + x + " is " + Math.round(x));
        System.out.println("round value of " + y + " is " + Math.round(y));
        System.out.println("ceil value of " + x + " is " + Math.ceil(x));
        System.out.println("ceil value of " + y + " is " + Math.ceil(y));

        double hypotenuse = Math.sqrt(((x * x) + (y * y)));
        System.out.println("hypotenuse of " + x + " and " + y + " is " + hypotenuse);

        scanner.close();
    }
}
