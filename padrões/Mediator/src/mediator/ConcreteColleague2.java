package mediator;

public class ConcreteColleague2 extends Colleague {

    public ConcreteColleague2(Mediator mediator) {
        super(mediator);
    }

    @Override
    public void enviar(String mensagem) {
        mediator.enviar(mensagem, this);
    }

    @Override
    public void mensagemRecebida(String mensagem) {
        System.out.println("Colleague2 recebeu mensagem: {" + mensagem + "}");
    }
    
}
