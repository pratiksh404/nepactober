package com.doctypenepal;

import javax.swing.*;
import java.awt.*;
import java.awt.event.*;

public class SelectBoxExample extends JFrame implements ActionListener {
    JComboBox comboBox;

    SelectBoxExample(){
        this.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        this.setLayout(new FlowLayout());

        String[] superheros = {
                "superman",
                "batman",
                "wonderwoman"
        };

        comboBox = new JComboBox(superheros);
        comboBox.addActionListener(this);

        this.add(comboBox);

        this.pack();
        this.setVisible(true);
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        if (e.getSource()==comboBox){
            System.out.println(comboBox.getSelectedItem());
            System.out.println(comboBox.getSelectedIndex());
        }
    }
}
