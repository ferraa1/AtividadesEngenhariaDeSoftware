package decorator;

public class Gelo extends CoquetelDecorator{
    
    public Gelo(Coquetel coquetel) {
        super(coquetel);
        nome = "Gelo";
        preco = 0.5;
    }
    
}
