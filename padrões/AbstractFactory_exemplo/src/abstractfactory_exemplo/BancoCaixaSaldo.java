package abstractfactory_exemplo;

import java.util.Scanner;

public class BancoCaixaSaldo extends Saldo {
    
    public int numeroConta;
    public int senha;
    public int tipo;
    public int mesDesejado;
    public int anoDesejado;

    @Override
    public void solicitarDados() {
        Scanner sc = new Scanner(System.in);
        System.out.println("NUMERO CONTA");
        numeroConta = sc.nextInt();
        System.out.println("SENHA");
        senha = sc.nextInt();
        System.out.println("TIPO (1 = CORRENTE, 2 = POUPANÇA)");
        tipo = sc.nextInt();
        System.out.println("MES DESEJADO");
        mesDesejado = sc.nextInt();
        System.out.println("ANO DESEJADO");
        anoDesejado = sc.nextInt();
    }

    @Override
    public String toString() {
        return "CaixaSaldo{" + "numeroConta=" + numeroConta + ", senha=" + senha + ", tipo=" + tipo + ", mesDesejado=" + mesDesejado + ", anoDesejado=" + anoDesejado + '}';
    }
    
}
