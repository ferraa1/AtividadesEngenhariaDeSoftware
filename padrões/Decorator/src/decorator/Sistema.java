package decorator;

public class Sistema {

    public static void main(String[] args) {
        
        Coquetel meuCock = new Cachaca();
        System.out.println(meuCock.getNome() + " + " + meuCock.getPreco());
        
        meuCock = new Limao(meuCock);
        System.out.println(meuCock.getNome() + " + " + meuCock.getPreco());
        
        meuCock = new Acucar(meuCock);
        System.out.println(meuCock.getNome() + " + " + meuCock.getPreco());
        
        meuCock = new Gelo(meuCock);
        System.out.println(meuCock.getNome() + " + " + meuCock.getPreco());
        
    }
    
}
