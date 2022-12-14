package observer;

public interface Observado {
    void anexar(Observador obs);
    void desanexar(Observador obs);
    void notificar();
}
