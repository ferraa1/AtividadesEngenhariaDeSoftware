package abstractfactory_exemplo;

public class BancoCaixaFabrica implements BancoFabrica {

    @Override
    public Extrato getExtrato() {
        return new BancoCaixaExtrato();
    }

    @Override
    public Saldo getSaldo() {
        return new BancoCaixaSaldo();
    }
    
}
