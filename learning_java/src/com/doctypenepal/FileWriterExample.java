package com.doctypenepal;

import java.io.*;

public class FileWriterExample {
    public FileWriterExample(){
        try {
            FileWriter writer = new FileWriter("batman.txt");
            writer.write("I am  Batman");
            writer.append("\n I am vengeance");
            System.out.println("File write complete !");
            writer.close();
        } catch (IOException e) {
            System.out.println("File write failed !");
            e.printStackTrace();
        }
    }
}
