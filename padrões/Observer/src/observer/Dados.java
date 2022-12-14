package observer;

import java.util.ArrayList;
import java.util.List;

public class Dados implements Observado{
    
    private int valorA, valorB, valorC;
    private List<Observador> observadores = new ArrayList<>();
    
    @Override
    public void anexar(Observador obs) {
        observadores.add(obs);
    }

    @Override
    public void desanexar(Observador obs) {
        observadores.remove(obs);
    }

    public Dados(int valorA, int valorB, int valorC) {
        this.valorA = valorA;
        this.valorB = valorB;
        this.valorC = valorC;
    }

    @Override
    public void notificar() {
        for (Observador o : observadores) {
            o.atualizar(this);
        }
    }

    public int getValorA() {
        return valorA;
    }

    public void setValorA(int valorA) {
        this.valorA = valorA;
        notificar();
    }

    public int getValorB() {
        return valorB;
    }

    public void setValorB(int valorB) {
        this.valorB = valorB;
        notificar();
    }

    public int getValorC() {
        return valorC;
    }

    public void setValorC(int valorC) {
        this.valorC = valorC;
        notificar();
    }
    
}
