package strategy;

public class Calculadora {
    
    private Operacao operacao;

    public Calculadora(Operacao operacao) {
        this.operacao = operacao;
    }
    
    public void setOperacao(Operacao operacao) {
        this.operacao = operacao;
    }
    
    public double efetuarCalculo(double a, double b) {
        return operacao.calcular(a, b);
    }
}
