package novaclasse;

public class Sistema {

    public static void main(String[] args) {
        
        Singleton obj1 = Singleton.getInstancia();
        
        Singleton obj2 = Singleton.getInstancia();
        
        Singleton obj3 = Singleton.getInstancia();
        
        if (obj1 == obj3) {
            System.out.println("Iguais.");
        } else {
            System.out.println("Diferentes.");
        }
        
    }
    
}
