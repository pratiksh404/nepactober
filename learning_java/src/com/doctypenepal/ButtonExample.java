package com.doctypenepal;

import javax.swing.*;
import java.awt.*;
import java.awt.event.*;

public class ButtonExample extends JFrame {
    JButton button;
    public ButtonExample()
    {
        ImageIcon icon = new ImageIcon("education.png");
        Image image = icon.getImage();
        Image imageIcon = image.getScaledInstance(180,180, Image.SCALE_SMOOTH);
        icon = new ImageIcon(imageIcon);


        button = new JButton();
        button.setBounds(100,100,300,200);
        button.setFocusable(false);
        button.setIcon(icon);
        button.addActionListener(e -> System.out.println("Hello World"));

        this.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        this.setLayout(null);
        this.setSize(500,500);
        this.setVisible(true);
        this.add(button);
    }
}
