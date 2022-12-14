package mediator;

public class ConcreteColleague1 extends Colleague {

    public ConcreteColleague1(Mediator mediator) {
        super(mediator);
    }

    @Override
    public void enviar(String mensagem) {
        mediator.enviar(mensagem, this);
    }

    @Override
    public void mensagemRecebida(String mensagem) {
        System.out.println("Colleague1 recebeu mensagem: {" + mensagem + "}");
    }
    
}
