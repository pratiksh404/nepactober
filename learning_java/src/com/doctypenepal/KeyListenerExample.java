package com.doctypenepal;

import javax.swing.*;
import java.awt.*;
import java.awt.event.*;

public class KeyListenerExample extends JFrame implements KeyListener {
    JLabel label;
    ImageIcon car;
    KeyListenerExample(){
        this.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        this.setSize(500,500);
        this.setLayout(null);
        this.addKeyListener(this);

        car = new ImageIcon("car.png");

        label = new JLabel();
        label.setBounds(200,350,50,100);
        label.setIcon(car);
        label.setOpaque(true);
        this.setBackground(Color.BLACK);
        this.add(label);

        this.setVisible(true);
    }

    @Override
    public void keyTyped(KeyEvent e) {
        switch(e.getKeyChar()){
            case 'a':
                label.setLocation(label.getX()-10,label.getY());
                break;
            case 'w':
                label.setLocation(label.getX(),label.getY()-10);
                break;
            case 's':
                label.setLocation(label.getX(),label.getY()+10);
                break;
            case 'd':
                label.setLocation(label.getX()+10,label.getY());
                break;
        }
    }

    @Override
    public void keyPressed(KeyEvent e) {
        switch(e.getKeyCode()) {
            case 37:
                label.setLocation(label.getX() - 10, label.getY());
                break;
            case 38:
                label.setLocation(label.getX(), label.getY() - 10);
                break;
            case 40:
                label.setLocation(label.getX(), label.getY() + 10);
                break;
            case 39:
                label.setLocation(label.getX() + 10, label.getY());
                break;
        }
    }

    @Override
    public void keyReleased(KeyEvent e) {

    }
}
