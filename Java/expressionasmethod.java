import java.util.ArrayList;

class Main {
    public static void main(String[] args) {
        // create an ArrayList
        ArrayList<String> languages = new ArrayList<>();

        // add elements to the ArrayList
        languages.add("java");
        languages.add("swift");
        languages.add("python");
        System.out.println("ArrayList: " + languages);

        // pass lambda expression as parameter to replaceAll() method
        languages.replaceAll(e -> e.toUpperCase());
        System.out.println("Updated ArrayList: " + languages);
    }
}
