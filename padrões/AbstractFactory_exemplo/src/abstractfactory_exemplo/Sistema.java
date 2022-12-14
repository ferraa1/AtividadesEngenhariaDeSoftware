package abstractfactory_exemplo;

import java.util.Scanner;

public class Sistema {

    public static void main(String[] args) {
        
        Scanner sc = new Scanner(System.in);
        BancoFabrica fabrica;
        
        System.out.println("BANCO 1 = BRASIL, BANCO 2 = CAIXA");
        int banco = sc.nextInt();
        
        if (banco == 1) {
            fabrica = new BancoBrasilFabrica();
        } else {
            fabrica = new BancoCaixaFabrica();
        }
        
        System.out.println("PRODUTO 1 = SALDO, PRODUTO 2 = EXTRATO");
        int produto = sc.nextInt();
        
        if (produto == 1) {
            Saldo saldo = fabrica.getSaldo();
            saldo.solicitarDados();
            System.out.println(saldo.toString());
        } else {
            Extrato extrato = fabrica.getExtrato();
            extrato.solicitarDados();
            System.out.println(extrato.toString());
        }
        
    }
    
}
