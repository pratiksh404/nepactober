package travelling;

public class Train implements Transport{
    @Override
    public void start() {
        System.out.println("travelling.Train trip started ...");
    }
}
