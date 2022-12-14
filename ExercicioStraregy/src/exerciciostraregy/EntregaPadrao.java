package exerciciostraregy;

public class EntregaPadrao extends Entrega {

    public EntregaPadrao() {
    }

    @Override
    public double calcular(Pedido pedido) {
        double soma = 0;
        for (Produto p : pedido.getProdutos()) {
            soma += (p.getValor() * 0.05) + (5 + (p.getVolume() / 1000000));
        }
        return soma;
    }
    
}
