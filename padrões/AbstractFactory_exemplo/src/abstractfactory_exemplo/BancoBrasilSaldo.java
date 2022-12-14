package abstractfactory_exemplo;

import java.util.Scanner;

public class BancoBrasilSaldo extends Saldo {

    public int numeroAgencia;
    public int numeroConta;
    public int senha;
    public int mesDesejado;
    public int anoDesejado;

    @Override
    public void solicitarDados() {
        Scanner sc = new Scanner(System.in);
        System.out.println("NUMERO AGENCIA");
        numeroAgencia = sc.nextInt();
        System.out.println("NUMEROC CONTA");
        numeroConta = sc.nextInt();
        System.out.println("SENHA");
        senha = sc.nextInt();
        System.out.println("MES DESEJADO");
        mesDesejado = sc.nextInt();
        System.out.println("ANO DESEJADO");
        anoDesejado = sc.nextInt();
    }

    @Override
    public String toString() {
        return "BancoBrasilSaldo{" + "numeroAgencia=" + numeroAgencia + ", numeroConta=" + numeroConta + ", senha=" + senha + ", mesDesejado=" + mesDesejado + ", anoDesejado=" + anoDesejado + '}';
    }
    
}
