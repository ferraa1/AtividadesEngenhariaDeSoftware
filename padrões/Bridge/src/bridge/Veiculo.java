package bridge;

public abstract class Veiculo {
    
    protected Oficina oficina1;
    protected Oficina oficina2;

    public Veiculo(Oficina oficina1, Oficina oficina2) {
        this.oficina1 = oficina1;
        this.oficina2 = oficina2;
    }
    
    abstract public void manufaturar();
    
}
