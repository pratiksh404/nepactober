package com.doctypenepal;

import javax.swing.*;
import java.awt.event.*;

public class LaunchPageExample implements ActionListener {
    JFrame frame = new JFrame();
    JButton mybutton = new JButton("New Window");

    public LaunchPageExample(){
        mybutton.setBounds(100,160,200,40);
        mybutton.setFocusable(false);
        mybutton.addActionListener(this);

        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setSize(420,420);
        frame.setLayout(null);
        frame.add(mybutton);
        frame.setVisible(true);
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        if(e.getSource()==mybutton){
            frame.dispose();
            NewWindow newWindow = new NewWindow();
        }
    }
}
