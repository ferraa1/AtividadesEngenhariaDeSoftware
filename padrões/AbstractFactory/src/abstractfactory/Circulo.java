package abstractfactory;

public abstract class Circulo {
    
    private String cor;
    private int raio;

    public Circulo(String cor, int raio) {
        this.cor = cor;
        this.raio = raio;
    }

    public Circulo() {
    }

    public String getCor() {
        return cor;
    }

    public void setCor(String cor) {
        this.cor = cor;
    }

    public int getRaio() {
        return raio;
    }

    public void setRaio(int raio) {
        this.raio = raio;
    }

    @Override
    public String toString() {
        return "Circulo{" + "cor=" + cor + ", raio=" + raio + '}';
    }
    
}
