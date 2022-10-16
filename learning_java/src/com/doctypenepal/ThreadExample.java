package com.doctypenepal;

public class ThreadExample {
    ThreadExample() throws InterruptedException {
        System.out.println(Thread.activeCount());
        System.out.println(Thread.currentThread().getName());
        System.out.println(Thread.currentThread().getPriority());
        System.out.println(Thread.currentThread().isAlive());
        System.out.println(Thread.currentThread().isDaemon());
        for(int i=3;i>0;i--){
            System.out.println(i);
            Thread.sleep(1000);
        }
        System.out.println("You are done");

        MyThread thread1 = new MyThread("Thread1");
        MyRunnable runnable1 = new MyRunnable();
        Thread thread2 = new Thread(runnable1);
        thread1.start();
        // thread1.join(); // main thread will wait until thread 1 is complete or die
        thread2.start();
    }
}
