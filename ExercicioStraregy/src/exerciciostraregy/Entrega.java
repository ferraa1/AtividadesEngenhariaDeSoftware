package exerciciostraregy;

public abstract class Entrega {

    public Entrega() {
    }

    public Entrega tipo(char choice) {
        if (choice == 'p') {
            return new EntregaPadrao();
        } else if (choice == 'e') {
            return new EntregaExpressa();
        } else {
            return null;
        }
    }

    public abstract double calcular(Pedido pedido);

}
