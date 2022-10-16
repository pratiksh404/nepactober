package com.doctypenepal;

public class GenericExample {
    GenericExample(){
        Integer[] integerArray = {1,2,3,4,5};
        Double[] doubleArray = {1.1,2.2,3.3,4.4};
        String[] stringArray = {"H","E","L","L","0"};

        displayArray(integerArray);
        displayArray(doubleArray);
        displayArray(stringArray);

        System.out.println(getFirst(integerArray));
    }

    public static <Thing> void displayArray(Thing[] array){
        for(Thing x : array){
            System.out.println(x);
        }
    }

    public static <Thing> Thing getFirst(Thing[] array) {
        return array[0];
    }
}
