package bridge;

public class Sistema {

    public static void main(String[] args) {
        
        Veiculo veiculo1 = new Onibus(new Produzir(), new Montar());
        Veiculo veiculo2 = new Bicicleta(new Produzir(), new Montar());
        veiculo1.manufaturar();
        veiculo2.manufaturar();
        
    }
    
}
