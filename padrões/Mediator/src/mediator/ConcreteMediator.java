package mediator;

public class ConcreteMediator implements Mediator{
    
    private ConcreteColleague1 m_colleague1;
    private ConcreteColleague2 m_colleague2;

    public ConcreteColleague1 getM_colleague1() {
        return m_colleague1;
    }

    public void setM_colleague1(ConcreteColleague1 m_colleague1) {
        this.m_colleague1 = m_colleague1;
    }

    public ConcreteColleague2 getM_colleague2() {
        return m_colleague2;
    }

    public void setM_colleague2(ConcreteColleague2 m_colleague2) {
        this.m_colleague2 = m_colleague2;
    }

    @Override
    public void enviar(String mensagem, Colleague colleague) {
        if (colleague == m_colleague1) {
            m_colleague2.mensagemRecebida(mensagem);
        } else if (colleague == m_colleague2) {
            m_colleague1.mensagemRecebida(mensagem);
        } else {
            System.out.println("Colleague não está no CHAT");
        }
    }
    
}
