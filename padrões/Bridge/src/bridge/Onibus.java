package bridge;

public class Onibus extends Veiculo {

    public Onibus(Oficina oficina1, Oficina oficina2) {
        super(oficina1, oficina2);
    }

    @Override
    public void manufaturar() {
        System.out.println("ÔNIBUS");
        oficina1.trabalho();
        oficina2.trabalho();
    }
    
}
