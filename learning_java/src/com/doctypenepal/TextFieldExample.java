package com.doctypenepal;

import javax.swing.*;
import java.awt.*;
import java.awt.event.*;

public class TextFieldExample extends JFrame implements ActionListener {
    JButton myButton;
    JTextField jTextField;

    TextFieldExample(){
        this.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        this.setLayout(new FlowLayout());

        myButton = new JButton("Submit");
        myButton.addActionListener(this);

        jTextField = new JTextField();
        jTextField.setPreferredSize(new Dimension(250,40));

        this.add(myButton);
        this.add(jTextField);
        this.pack();
        this.setVisible(true);
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        if(e.getSource()==myButton){
            System.out.println(jTextField.getText());
        }
    }
}
