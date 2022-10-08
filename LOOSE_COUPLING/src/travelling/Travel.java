package travelling;

public class Travel implements ITravel{
    private final Transport transport;
    Travel(Transport transport){
        this.transport = transport;
    }
    @Override
    public void start() {
        transport.start();
    }
}
