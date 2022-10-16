package com.doctypenepal;

import javax.swing.*;

public class DialogBox {
    public DialogBox(){
        String name = JOptionPane.showInputDialog("What is you name ?");
        JOptionPane.showMessageDialog(null,"Hello " + name);

        int age = Integer.parseInt(JOptionPane.showInputDialog("Enter your age"));
        JOptionPane.showMessageDialog(null,"Your age is " + age + " years old.");

        double height = Double.parseDouble(JOptionPane.showInputDialog("Enter your height"));
        JOptionPane.showMessageDialog(null,"Your height is " + height + " meter.");
    }
}
