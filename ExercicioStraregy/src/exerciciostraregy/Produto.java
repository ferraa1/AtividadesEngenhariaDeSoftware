package exerciciostraregy;

public class Produto {
    
    private int codigo;
    private String descricao;
    private double valor;
    private double peso;
    private double volume;

    public Produto() {
    }

    public Produto(int codigo, String descricao, double valor, double peso, double volume) {
        this.codigo = codigo;
        this.descricao = descricao;
        this.valor = valor;
        this.peso = peso;
        this.volume = volume;
    }

    public int getCodigo() {
        return codigo;
    }

    public void setCodigo(int codigo) {
        this.codigo = codigo;
    }

    public String getDescricao() {
        return descricao;
    }

    public void setDescricao(String descricao) {
        this.descricao = descricao;
    }

    public double getValor() {
        return valor;
    }

    public void setValor(double valor) {
        this.valor = valor;
    }

    public double getPeso() {
        return peso;
    }

    public void setPeso(double peso) {
        this.peso = peso;
    }

    public double getVolume() {
        return volume;
    }

    public void setVolume(double volume) {
        this.volume = volume;
    }

    @Override
    public String toString() {
        return "Produto{" + "codigo=" + codigo + ", descricao=" + descricao + ", valor=" + valor + ", peso=" + peso + ", volume=" + volume + '}';
    }
    
}
