package abstractfactory;

public abstract class Triangulo {
    
    private String cor;
    private int lado;

    public Triangulo() {
    }

    public Triangulo(String cor, int lado) {
        this.cor = cor;
        this.lado = lado;
    }

    public String getCor() {
        return cor;
    }

    public void setCor(String cor) {
        this.cor = cor;
    }

    public int getLado() {
        return lado;
    }

    public void setLado(int lado) {
        this.lado = lado;
    }

    @Override
    public String toString() {
        return "Triangulo{" + "cor=" + cor + ", lado=" + lado + '}';
    }
    
}
