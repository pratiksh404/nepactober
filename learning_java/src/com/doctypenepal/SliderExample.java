package com.doctypenepal;

import javax.swing.*;
import javax.swing.event.*;
import java.awt.*;

public class SliderExample implements ChangeListener {

    JFrame frame;
    JPanel panel;
    JLabel label;
    JSlider slider;

    SliderExample(){
        frame = new JFrame("Slider Demo");
        panel = new JPanel();
        label = new JLabel();
        slider = new JSlider(0,100,18);
        slider.setPreferredSize(new Dimension(400,200));
        slider.setPaintTicks(true);
        slider.setMinorTickSpacing(1);
        slider.setMajorTickSpacing(10);
        slider.setPaintLabels(true);
        slider.setToolTipText("Age");

        label.setText("You are " + slider.getValue() + " years old");

        slider.addChangeListener(this);

        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setSize(new Dimension(500,300));
        panel.add(slider);
        panel.add(label);
        frame.add(panel);
        frame.setVisible(true);
    }

    @Override
    public void stateChanged(ChangeEvent e) {
        if (e.getSource()==slider){
            System.out.println("You are " + slider.getValue() + " years old");
            label.setText("You are " + slider.getValue() + " years old");
        }
    }
}
