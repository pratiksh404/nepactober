package com.doctypenepal;

import java.io.*;

public class FileExample {
    public FileExample(){
        // file is an abstract representation of file and directory pathnames
        File file = new File("D:\\JAVA\\learning_java\\src\\com\\doctypenepal");

        System.out.println(file.exists() ? "File exists" : "File doest exists");
    }
}
