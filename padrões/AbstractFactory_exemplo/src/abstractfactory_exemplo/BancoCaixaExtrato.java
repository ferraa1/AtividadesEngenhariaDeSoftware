package abstractfactory_exemplo;

import java.util.Scanner;

public class BancoCaixaExtrato extends Extrato {
    
    public int numeroConta;
    public int senha;
    public int tipo;

    @Override
    public void solicitarDados() {
        Scanner sc = new Scanner(System.in);
        System.out.println("NUMERO CONTA");
        numeroConta = sc.nextInt();
        System.out.println("SENHA");
        senha = sc.nextInt();
        System.out.println("TIPO (1 = POUPANÇA, 2 = CORRENTE)");
        tipo = sc.nextInt();
    }

    @Override
    public String toString() {
        return "CaixaExtrato{" + "numeroConta=" + numeroConta + ", senha=" + senha + ", tipo=" + tipo + '}';
    }
    
}
