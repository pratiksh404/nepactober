package com.doctypenepal;

import java.io.*;

public class FileReaderExample {
    public FileReaderExample(){
        try {
            FileReader reader = new FileReader("batman.txt");
            int data = reader.read();
            while(data != -1){
                System.out.print((char)data);
                data = reader.read();
            }
        } catch (FileNotFoundException e) {
            e.printStackTrace();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}
