package com.doctypenepal;

import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
import java.io.*;

public class SelectFileExample extends JFrame implements ActionListener {
    JButton button;

    SelectFileExample(){
        this.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        this.setLayout(new FlowLayout());

        button = new JButton("Select File");
        button.addActionListener(this);

        this.add(button);

        this.pack();
        this.setVisible(true);
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        if (e.getSource()==button)
        {
            JFileChooser fileChooser = new JFileChooser();
            int response = fileChooser.showSaveDialog(null); // Open file explorer to save file
            // int response = fileChooser.showChooserDialog(null); // Open file explorer to open file
            fileChooser.setCurrentDirectory(new File("."));

            if (response == JFileChooser.APPROVE_OPTION){
                File file = new File(String.valueOf(fileChooser.getSelectedFile().getAbsoluteFile()));
            }
            // JOptionPane.showMessageDialog(null,"File submitted","Alert",JOptionPane.INFORMATION_MESSAGE);
        }
    }
}
