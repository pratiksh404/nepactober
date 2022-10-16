package com.doctypenepal;

public class MyThread extends Thread{
    String name;
    MyThread(String name){
        this.name = name;
    }

    @Override
    public void run(){
        for (int i=100;i>0;i--){
            try {
                Thread.sleep(1000);
                System.out.println("thread 2 is running at " + i);
            } catch (InterruptedException e){
                e.printStackTrace();
            }
        }
        System.out.println("Thread 3 is complete");
    }
}
