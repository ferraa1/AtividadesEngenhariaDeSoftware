package engenhariasoft;

import java.util.Scanner;

public class EngenhariaSoft {

    public static void main(String[] args) {
        
        Scanner sc = new Scanner(System.in);
        
        //informe tamanho matriz
        System.out.print("Informe o tamanho da matriz: ");
        int tamanho = sc.nextInt();
        int matriz[][] = new int[tamanho][tamanho];
        //valores para preencher matriz
        for (int i = 0; i < tamanho; i++) {
            for (int j = 0; j < tamanho; j++) {
                System.out.print("Informe um valor para a " + (i + 1) + "ª linha, " + (j + 1) + "ª coluna da matriz: ");
                matriz[i][j] = sc.nextInt();
            }
        }
        //mostrar matriz resultante da multiplicação de cada posição pela diferença entre o maior e menor valor da matriz
        int maior = Integer.MIN_VALUE;
        int menor = Integer.MAX_VALUE;
        for (int i = 0; i < tamanho; i++) {
            for (int j = 0; j < tamanho; j++) {
                if (matriz[i][j] > maior) {
                    maior = matriz[i][j];
                }
                if (matriz[i][j] < menor) {
                    menor = matriz[i][j];
                }
            }
        }
        int dif = maior - menor;
        int matriz2[][] = new int[tamanho][tamanho];
        for (int i = 0; i < tamanho; i++) {
            for (int j = 0; j < tamanho; j++) {
                matriz2[i][j] = matriz[i][j] * dif;
            }
        }
        for (int i = 0; i < tamanho; i++) {
            for (int j = 0; j < tamanho; j++) {
                System.out.print(matriz2[i][j] + " ");
            }
            System.out.println("");
        }
        
    }

}
