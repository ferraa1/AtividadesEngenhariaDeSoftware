package proxy;

public class Conta {
    
    protected int numeroConta, senhaConta;
    protected double saldo, debito;
    
    public Conta() {
        numeroConta = 1111;
        senhaConta = 2323;
        saldo = 1000;
        debito = 150;
    }
    
    public String getValores() {
        return "Saldo disponível é: " + saldo + ". O total de débito é: " + debito;
    }
    
}
