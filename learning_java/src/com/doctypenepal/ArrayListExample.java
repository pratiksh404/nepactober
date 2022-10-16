package com.doctypenepal;

import java.util.*;

public class ArrayListExample {
    public ArrayListExample(){
        // ArrayList = a resizable array.
        //              Element can be added and removed after compilation phase.
        //              Stores reference data type
        ArrayList<String> food = new ArrayList<String>();

        food.add("Momo");
        food.add("Chaumin");
        food.add("Masu Bhat");

        food.set(2,"venta ko tarkari");

        // food.remove(2);
        // food.clear();

        for(int i=0; i< food.size(); i++){
            System.out.println(food.get(i));
        }

        // foreach example
        for(String i : food){
            System.out.println(i);
        }

    }
}
