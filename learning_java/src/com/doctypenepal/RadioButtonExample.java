package com.doctypenepal;

import javax.swing.*;
import java.awt.*;
import java.awt.event.*;

public class RadioButtonExample extends JFrame implements ActionListener {
    JRadioButton batman;
    JRadioButton superman;
    JRadioButton wonderwoman;
    RadioButtonExample(){
        this.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        this.setLayout(new FlowLayout());

        JLabel label = new JLabel("I'am");

        this.add(label);

        batman = new JRadioButton("batman");
        superman = new JRadioButton("superman");
        wonderwoman = new JRadioButton("wonderwoman");

        batman.addActionListener(this);
        superman.addActionListener(this);
        wonderwoman.addActionListener(this);

        ButtonGroup dc = new ButtonGroup();
        dc.add(batman);
        dc.add(superman);
        dc.add(wonderwoman);

        this.add(batman);
        this.add(superman);
        this.add(wonderwoman);

        this.pack();
        this.setVisible(true);
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        if(e.getSource()==batman){
            System.out.println("Your are Batman");
        }else if(e.getSource()==superman){
            System.out.println("Your are Superman");
        }else if(e.getSource()==wonderwoman){
            System.out.println("Your are Wonderwoman");
        }else{
            System.out.println("Your are Loser");
        }
    }
}
