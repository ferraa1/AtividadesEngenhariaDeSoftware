package decorator;

public class Acucar extends CoquetelDecorator {
    
    public Acucar(Coquetel coquetel) {
        super(coquetel);
        nome = "Açúcar";
        preco = 1.0;
    }
    
}
