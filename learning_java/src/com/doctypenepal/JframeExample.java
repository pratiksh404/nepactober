package com.doctypenepal;

import javax.swing.*;
import java.awt.*;

public class JframeExample extends JFrame {
    public JframeExample()
    {
        this.setTitle("This is title");
        this.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        this.setResizable(false);
        this.setSize(420,420);
        this.setVisible(true);

        ImageIcon image = new ImageIcon("circle_dtn.png");
        this.setIconImage(image.getImage());
        this.getContentPane().setBackground(Color.BLACK);
    }
}
