package abstractfactory;

import java.util.Scanner;

public class Sistema {

    public static void main(String[] args) {
        
        Scanner sc = new Scanner(System.in);
        System.out.println("COR!");
        String cor = sc.next();
        FabricaFiguras fabricaFiguras;
        if (cor.equalsIgnoreCase("azul")) {
            fabricaFiguras = new FabricaAzul();
        } else {
            fabricaFiguras = new FabricaVermelha();
        }
        Circulo circulo = fabricaFiguras.criarCirculo();
        System.out.println("RAIO!");
        int raio = sc.nextInt();
        circulo.setRaio(raio);
        Triangulo triangulo = fabricaFiguras.criarTriangulo();
        System.out.println("LADO!");
        int lado = sc.nextInt();
        triangulo.setLado(lado);
        System.out.println(circulo.toString());
        System.out.println(triangulo.toString());
        
    }
    
}
