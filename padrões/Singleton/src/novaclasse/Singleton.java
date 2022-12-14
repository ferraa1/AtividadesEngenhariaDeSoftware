package novaclasse;

public class Singleton {

    private static Singleton instancia;

    private Singleton() {
        System.out.println("Construído.");
    }

    public static synchronized Singleton getInstancia() {
        
        if (instancia == null) {
            
            instancia = new Singleton();
            
        }
        return instancia;
        
    }

}
