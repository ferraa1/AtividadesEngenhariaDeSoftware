package proxy;

import java.util.Scanner;

public class Sistema {

    public static void main(String[] args) {
        
        Scanner sc = new Scanner(System.in);
        
        Conta acesso = new ProxyConta(1111, 2323);
        System.out.println(acesso.getValores());
        
        acesso = new ProxyConta(2222, 2222);
        System.out.println(acesso.getValores());
        
    }
    
}
