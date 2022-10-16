package com.doctypenepal;

public class MyRunnable implements Runnable {
    @Override
    public void run() {
        for (int i=0;i<100;i++){
            try {
                Thread.sleep(1000);
                System.out.println("thread 1 is running at " + i);
            } catch (InterruptedException e){
                e.printStackTrace();
            }
        }
        System.out.println("Thread 2 is complete");
    }
}
