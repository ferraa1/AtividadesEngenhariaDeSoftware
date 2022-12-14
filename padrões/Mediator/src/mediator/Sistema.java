package mediator;

public class Sistema {

    public static void main(String[] args) {
        ConcreteMediator mediator = new ConcreteMediator();
        ConcreteColleague1 colleague1 = new ConcreteColleague1(mediator);
        ConcreteColleague2 colleague2 = new ConcreteColleague2(mediator);
        
        mediator.setM_colleague1(colleague1);
        mediator.setM_colleague2(colleague2);
        
        colleague1.enviar("OI!!!!!!!1!");
        colleague2.enviar("WHA SAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP!");
    }
    
}
