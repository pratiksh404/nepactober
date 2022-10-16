package com.doctypenepal;

import java.util.*;

public class ExceptionExample {
    public ExceptionExample(){
        try{
            Scanner scanner = new Scanner(System.in);

            System.out.println("Enter whole number to divide : ");
            int x = scanner.nextInt();

            System.out.println("Enter whole number to divide by : ");
            int y = scanner.nextInt();

            int z = x/y;
            System.out.println("Result : " + z);
        } catch (Exception e) {
            System.out.println(e.getMessage());
        }
    }
}
