package com.doctypenepal;

import javax.swing.*;
import java.awt.*;
import java.awt.event.*;

public class MouseListenerExample extends JFrame implements MouseListener {
    JLabel label;
    ImageIcon guy1;
    ImageIcon guy2;
    ImageIcon guy3;
    ImageIcon guy4;
    MouseListenerExample(){
        this.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        this.setSize(500,500);
        this.setLayout(new FlowLayout());

        guy1 = new ImageIcon("guy1.jpg");
        guy2 = new ImageIcon("guy2.jpg");
        guy3 = new ImageIcon("guy3.png");
        guy4 = new ImageIcon("guy4.png");

        label = new JLabel();
        label.setIcon(guy1);
        label.addMouseListener(this);

        this.add(label);
        this.pack();
        this.setLocationRelativeTo(null);
        this.setVisible(true);
    }

    @Override
    public void mouseClicked(MouseEvent e) {
        label.setIcon(guy2);
    }

    @Override
    public void mousePressed(MouseEvent e) {
        label.setIcon(guy3);
    }

    @Override
    public void mouseReleased(MouseEvent e) {
        label.setIcon(guy4);
    }

    @Override
    public void mouseEntered(MouseEvent e) {
        label.setIcon(guy1);
    }

    @Override
    public void mouseExited(MouseEvent e) {
        label.setIcon(guy2);
    }
}
