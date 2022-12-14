package observer;

public class Tabela implements Observador {

    private int valorA, valorB, valorC;
    private Observado dados;
    
    public Tabela(Observado dados) {
        this.dados = dados;
        dados.anexar(this);
    }
    
    @Override
    public void atualizar(Observado obs) {
        Dados dados = (Dados) obs;
        this.valorA = dados.getValorA();
        this.valorB = dados.getValorB();
        this.valorC = dados.getValorC();
        System.out.println("Valor A = " + valorA);
        System.out.println("Valor B = " + valorB);
        System.out.println("Valor C = " + valorC);
    }
    
}
