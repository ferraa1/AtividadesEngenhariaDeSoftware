package mediator;

public abstract class Colleague {

    protected Mediator mediator;

    public Colleague(Mediator mediator) {
        this.mediator = mediator;
    }
    
    public abstract void enviar(String mensagem);
    public abstract void mensagemRecebida(String mensagem);

}
