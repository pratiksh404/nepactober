package com.doctypenepal;

import javax.swing.*;

public class ProgressBarExample {

    JFrame frame;
    JProgressBar bar;

    ProgressBarExample(){
        bar = new JProgressBar();
        bar.setValue(0);
        bar.setBounds(0,0,420,50);
        bar.setStringPainted(true);

        frame = new JFrame("Progress bar example");
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setSize(420,420);
        frame.setLayout(null);
        frame.add(bar);
        frame.setVisible(true);

        fill();
    }

    public void fill(){
        int count = 0;
        while (count <= 100){
            bar.setValue(count);
            try {
                Thread.sleep(100);
            } catch (InterruptedException e) {
                e.printStackTrace();
            }
            count++;
        }
        bar.setString("Process complete !");
    }
}
