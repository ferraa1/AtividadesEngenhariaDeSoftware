package adapter;

public class Sistema {

    public static void main(String[] args) {
        
        T3P t3p = new T3P();
        Adapter adapter = new Adapter(t3p);
        adapter.ligarT2P();
        
    }
    
}
