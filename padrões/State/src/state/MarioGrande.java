package state;

public class MarioGrande implements MarioState {
    
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
        System.out.println("MARIO COM CAPA");
        return new MarioCapa();
    }

    @Override
    public MarioState levarDano() {
        System.out.println("MARIO PEQUENO");
        return new MarioPequeno();
    }
    
}
