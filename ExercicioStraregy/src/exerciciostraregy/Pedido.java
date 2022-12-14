package exerciciostraregy;

import java.util.ArrayList;
import java.util.List;

public class Pedido {
    
    private Cliente cliente;
    private List<Produto> produtos = new ArrayList<>();
    private Entrega entrega;

    public Pedido() {
    }

    public Pedido(Cliente cliente, Entrega entrega) {
        this.cliente = cliente;
        this.entrega = entrega;
    }

    public Cliente getCliente() {
        return cliente;
    }

    public void setCliente(Cliente cliente) {
        this.cliente = cliente;
    }

    public List<Produto> getProdutos() {
        return produtos;
    }

    public void setProdutos(List<Produto> produtos) {
        this.produtos = produtos;
    }

    public Entrega getEntrega() {
        return entrega;
    }

    public void setEntrega(Entrega entrega) {
        this.entrega = entrega;
    }

    @Override
    public String toString() {
        return "Pedido{" + "cliente=" + cliente + ", entrega=" + entrega + '}';
    }
    
    public double calcularFrete() {
        return entrega.calcular(this);
    }
    
}
