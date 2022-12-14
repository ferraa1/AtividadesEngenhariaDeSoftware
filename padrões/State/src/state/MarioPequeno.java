package state;

public class MarioPequeno implements MarioState {
    
    @Override
    public MarioState pegarCogumelo() {
        System.out.println("MARIO GRANDE");
        return new MarioGrande();
    }

    @Override
    public MarioState pegarFlor() {
        System.out.println("MARIO GRANDE COM FOGO");
        return new MarioFogo();
    }

    @Override
    public MarioState pegarPena() {
        System.out.println("MARIO GRANDE COM CAPA");
        return new MarioCapa();
    }

    @Override
    public MarioState levarDano() {
        System.out.println("MARIO MORTO");
        return new MarioMorto();
    }
    
}
