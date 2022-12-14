package state;

public class MarioCapa implements MarioState {
    
    @Override
    public MarioState pegarCogumelo() {
        System.out.println("MARIO GANHOU 1000 PONTOS");
        return this;
    }

    @Override
    public MarioState pegarFlor() {
        System.out.println("MARIO COM FOGO");
        return new MarioFogo();
    }

    @Override
    public MarioState pegarPena() {
        System.out.println("MARIO GANHOU 1000 PONTOS");
        return this;
    }

    @Override
    public MarioState levarDano() {
        System.out.println("MARIO GRANDE");
        return new MarioGrande();
    }
    
}
