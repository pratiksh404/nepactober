package com.doctypenepal;

import javax.swing.*;
import java.awt.*;

public class NewWindow {
    JFrame frame = new JFrame();
    JLabel label = new JLabel("Yamate Kutasai");

    NewWindow(){
        label.setBounds(100,160,100,50);
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setSize(420,420);
        frame.setLayout(null);
        frame.add(label);
        frame.setVisible(true);
    }

}
