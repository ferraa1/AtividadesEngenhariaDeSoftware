package exerciciostraregy;

public class EntregaExpressa extends Entrega {

    public EntregaExpressa() {
    }

    @Override
    public double calcular(Pedido pedido) {
        double soma = 0;
        for (Produto p : pedido.getProdutos()) {
            soma += (p.getValor() * 0.07) + (6 + (p.getVolume() / 1000000));
        }
        return soma;
    }
    
}
