package adapter;

public class Adapter extends T2P {
    
    private T3P t3p;
    
    public Adapter(T3P t3p) {
        this.t3p = t3p;
    }
    
    public void ligarT2P() {
        t3p.ligarT3P();
    }
    
}
