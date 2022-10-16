package com.doctypenepal;

public class MultidimentionalArray {
    public MultidimentionalArray(){
        String[][] alphabets = {
                {"a","b","c"},
                {"x","y","x"}
        };

        for(int i=0;i< alphabets.length;i++){
           System.out.println();
           for (int j=0;j<alphabets[i].length;j++){
               System.out.println(alphabets[i][j] + " ");
           }
        }
    }
}
