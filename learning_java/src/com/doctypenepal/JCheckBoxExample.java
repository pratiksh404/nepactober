package com.doctypenepal;

import javax.swing.*;
import java.awt.*;

public class JCheckBoxExample extends JFrame {
    JCheckBoxExample(){
        this.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        this.setLayout(new FlowLayout());

        JCheckBox checkBox = new JCheckBox();
        checkBox.setText("Am I Batman ?");
        checkBox.setFocusable(false);

        this.add(checkBox);
        this.pack();
        this.setVisible(true);
    }
}
