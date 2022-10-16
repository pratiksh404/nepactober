package com.doctypenepal;

import javax.swing.*;
import java.util.*;
import java.util.Timer;

public class TimeTaskExample {
    TimeTaskExample(){
        Timer timer = new Timer();

        TimerTask task = new TimerTask() {
            @Override
            public void run() {
                JOptionPane.showMessageDialog(null,"Info","Task is complete",JOptionPane.INFORMATION_MESSAGE);
            }
        };
        // Set scheduled time
//        Calendar date = Calendar.getInstance();
//        date.set(Calendar.YEAR,2021);
//        date.set(Calendar.MONTH,Calendar.DECEMBER);
//        date.set(Calendar.DAY_OF_MONTH,21);
//        date.set(Calendar.HOUR_OF_DAY,19);
//        date.set(Calendar.MINUTE,46);
//        date.set(Calendar.SECOND,0);
//        date.set(Calendar.MILLISECOND,0);
//        timer.schedule(task,date.getTime());

        timer.scheduleAtFixedRate(task,0,5000);

    }
}
