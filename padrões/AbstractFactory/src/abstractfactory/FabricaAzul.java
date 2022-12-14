package abstractfactory;

public class FabricaAzul implements FabricaFiguras {

    @Override
    public Circulo criarCirculo() {
        return new CirculoAzul();
    }

    @Override
    public Triangulo criarTriangulo() {
        return new TrianguloAzul();
    }
    
}
