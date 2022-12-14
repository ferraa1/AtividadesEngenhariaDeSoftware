package abstractfactory_exemplo;

public interface BancoFabrica {
    
    public Extrato getExtrato();
    public Saldo getSaldo();
    
}
