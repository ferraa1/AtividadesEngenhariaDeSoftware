package bridge;

public class Bicicleta extends Veiculo {

    public Bicicleta(Oficina oficina1, Oficina oficina2) {
        super(oficina1, oficina2);
    }

    @Override
    public void manufaturar() {
        System.out.println("BICICLETA");
        oficina1.trabalho();
        oficina2.trabalho();
    }
    
}
