package engenhariasoftdupla;

import java.util.Scanner;

public class EngenhariaSoftDupla {

    public static void main(String[] args) {
        
        //pegar valores
        Scanner sc = new Scanner(System.in);
        System.out.print("Informe o tamanho da matriz: ");
        int tamanho = sc.nextInt();
        int matriz[][] = new int[tamanho][tamanho];
        //preencher
        for (int i = 0; i < tamanho; i++) {
            for (int j = 0; j < tamanho; j++) {
                System.out.print((i+1) + "ª linha, " + (j+1) + "ª coluna: ");
                matriz[i][j] = sc.nextInt();
            }
        }
        int somaDig = 0;
        for (int i = 0; i < tamanho; i++) {
            for (int j = 0; j < tamanho; j++) {
                if (i == j) {
                    somaDig += matriz[i][j];
                }
            }
        }
        for (int i = 0; i < tamanho; i++) {
            for (int j = 0; j < tamanho; j++) {
                matriz[i][j] *= somaDig;
                System.out.print(matriz[i][j] + " ");
            }
            System.out.println("");
        }
        
    }

}
