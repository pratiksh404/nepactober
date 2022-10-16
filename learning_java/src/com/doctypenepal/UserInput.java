package com.doctypenepal;

import java.util.*;

public class UserInput {
    public UserInput() {
        Scanner scanner = new Scanner(System.in);
        System.out.println("What is your name");
        String name = scanner.nextLine();
        System.out.println("Your name is " + name);
    }
}
