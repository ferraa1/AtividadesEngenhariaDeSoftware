package proxy;

public class ProxyConta extends Conta{
    
    public ProxyConta(int numeroConta, int senhaConta) {
        this.numeroConta = numeroConta;
        this.senhaConta = senhaConta;
    }
    
    private boolean permissaoAcesso() {
        return(numeroConta == 1111 && senhaConta == 2323);
    }

    @Override
    public String getValores() {
        if (permissaoAcesso()) {
            return super.getValores();
        } else {
            return "Acesso negado. Verifique o número da conta e a senha.";
        }
    }
    
}
