package abstractfactory_exemplo;

import java.util.Scanner;

public class BancoBrasilExtrato extends Extrato {

    public int numeroAgencia;
    public int numeroConta;
    public int senha;
    public String dataInicial;
    public String dataFinal;

    @Override
    public void solicitarDados() {
        Scanner sc = new Scanner(System.in);
        System.out.println("NUMERO AGENCIA");
        numeroAgencia = sc.nextInt();
        System.out.println("NUMEROC CONTA");
        numeroConta = sc.nextInt();
        System.out.println("SENHA");
        senha = sc.nextInt();
        System.out.println("DATA INICIAL");
        dataInicial = sc.next();
        System.out.println("DATA FINAL");
        dataFinal = sc.next();
    }

    @Override
    public String toString() {
        return "BancoBrasilExtrato{" + "numeroAgencia=" + numeroAgencia + ", numeroConta=" + numeroConta + ", senha=" + senha + ", dataInicial=" + dataInicial + ", dataFinal=" + dataFinal + '}';
    }

}
