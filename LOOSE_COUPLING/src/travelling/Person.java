package travelling;

public class Person {
    public static void main(String[] args){
        Transport bus = new Bus();
        Transport train = new Train();
        ITravel travel = new Travel(bus);
        travel.start();
    }
}
