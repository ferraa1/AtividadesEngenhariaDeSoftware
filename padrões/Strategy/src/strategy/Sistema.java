package strategy;

import java.util.Scanner;

public class Sistema {

    public static void main(String[] args) {

        Scanner sc = new Scanner(System.in);
        Calculadora c = null;
        System.out.print("Informe A: ");
        double a = sc.nextDouble();
        System.out.print("Informe B: ");
        double b = sc.nextDouble();
        System.out.print("Operação: ");
        char op = sc.next().charAt(0);
        if (op == '+') {
            c = new Calculadora(new Adicao());
            System.out.println("A soma é: " + c.efetuarCalculo(a, b));
        } else if (op == '-') {
            c = new Calculadora(new Subtracao());
            System.out.println("A subtração é");
        }
        System.out.println("O resultado é: " + c.efetuarCalculo(a, b));
        
    }

}
