package com.doctypenepal;

public class StringMethod {
    public StringMethod(){
        String name = "Batman";

        boolean isNameEqual = name.equals("Batman");
        int length = name.length();
        char getPositionCharacter = name.charAt(3);
        int getCharacterPosition = name.indexOf("a");
        boolean isNameEmpty = name.isEmpty();
        String nameToUpperCase = name.toUpperCase();
        String nameToLowerCase = name.toLowerCase();
        String nameReplace = name.replace("a","i");

        System.out.println(isNameEqual);
        System.out.println(length);
        System.out.println(getPositionCharacter);
        System.out.println(getCharacterPosition);
        System.out.println(isNameEmpty);
        System.out.println(nameToUpperCase);
        System.out.println(nameToLowerCase);
        System.out.println(nameReplace);

    }
}
