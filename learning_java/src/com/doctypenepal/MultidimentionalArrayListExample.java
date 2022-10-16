package com.doctypenepal;

import java.util.*;

public class MultidimentionalArrayListExample {
    public MultidimentionalArrayListExample(){
        ArrayList<ArrayList<String>> groceryList = new ArrayList();

        ArrayList<String> bakeryList = new ArrayList();
        bakeryList.add("bread");
        bakeryList.add("donut");

        ArrayList<String> vegetableList = new ArrayList();
        vegetableList.add("tomatoes");
        vegetableList.add("potato");

        groceryList.add(bakeryList);
        groceryList.add(vegetableList);

        System.out.println(groceryList);
        System.out.println(groceryList.get(0).get(0));
        System.out.println(groceryList.get(1).get(1));
    }
}
