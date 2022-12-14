package abstractfactory;

public class FabricaVermelha implements FabricaFiguras {

    @Override
    public Circulo criarCirculo() {
        return new CirculoVermelho();
    }

    @Override
    public Triangulo criarTriangulo() {
        return new TrianguloVermelho();
    }
    
}
