package decorator;

public abstract class CoquetelDecorator extends Coquetel {
    
    Coquetel coquetel;
    
    public CoquetelDecorator(Coquetel coquetel) {
        this.coquetel = coquetel;
    }
    
    @Override
    public String getNome() {
        return coquetel.getNome() + " + " + nome;
    }
    
    public double getPreco() {
        return coquetel.getPreco() + preco;
    }
    
}
