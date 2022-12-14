package observer;

import java.util.Scanner;

public class Sistema {

    public static void main(String[] args) {
        Dados d = new Dados(0, 0, 0);
        Tabela t = new Tabela(d);
        Scanner sc = new Scanner(System.in);
        do {
            System.out.print("Informe qual o tipo de valor e qual o valor: ");
            String qual = sc.next();
            int x = sc.nextInt();
            if (qual.equalsIgnoreCase("A")) {
                d.setValorA(x);
            } else if (qual.equalsIgnoreCase("B")) {
                d.setValorB(x);
            } else {
                d.setValorC(x);
            }
        } while (true);
    }

}
