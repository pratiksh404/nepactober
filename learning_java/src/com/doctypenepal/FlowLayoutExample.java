package com.doctypenepal;

import javax.swing.*;
import java.awt.*;

public class FlowLayoutExample extends JFrame {
    public FlowLayoutExample()
    {
        this.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        this.setSize(500,500);
        //this.setLayout(new FlowLayout(FlowLayout.LEADING));
        this.setLayout(new FlowLayout(FlowLayout.CENTER,10,0));
        //this.setLayout(new FlowLayout(FlowLayout.TRAILING));

        this.add(new JButton("1"));
        this.add(new JButton("2"));
        this.add(new JButton("3"));
        this.add(new JButton("4"));
        this.add(new JButton("5"));
        this.add(new JButton("6"));
        this.add(new JButton("7"));
        this.add(new JButton("8"));
        this.add(new JButton("9"));
        this.setVisible(true);
    }
}
