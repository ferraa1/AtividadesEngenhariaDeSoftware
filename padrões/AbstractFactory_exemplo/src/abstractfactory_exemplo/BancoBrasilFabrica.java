package abstractfactory_exemplo;

public class BancoBrasilFabrica implements BancoFabrica {

    @Override
    public Extrato getExtrato() {
        return new BancoBrasilExtrato();
    }

    @Override
    public Saldo getSaldo() {
        return new BancoBrasilSaldo();
    }
    
}
