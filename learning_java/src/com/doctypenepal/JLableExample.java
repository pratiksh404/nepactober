package com.doctypenepal;

import javax.swing.*;
import java.awt.*;

public class JLableExample {

    JLableExample(){
        JLabel label = new JLabel();
        ImageIcon labelImage = new ImageIcon("circle_dtn.png");
        label.setIcon(labelImage);
        label.setHorizontalTextPosition(JLabel.CENTER);


        JFrame frame = new JFrame();
        frame.setTitle("This is title");
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setResizable(true);
        frame.setSize(420,420);
        frame.setVisible(true);
        frame.add(label);

        ImageIcon image = new ImageIcon("circle_dtn.png");
        frame.setIconImage(image.getImage());
        frame.getContentPane().setBackground(Color.BLACK);

    }
}
