package exerciciostraregy;

import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

public class Sistema {

    public static void main(String[] args) {

        List<Cliente> clientes = new ArrayList<>();
        List<Produto> produtos = new ArrayList<>();
        List<Pedido> pedidos = new ArrayList<>();
        Scanner sc = new Scanner(System.in);
        int option1 = 0;

        do {
            System.out.println("------------------------------------------------------------");
            System.out.println("0 - Sair\n1 - Cadastrar cliente\n2 - Cadastrar produto\n3 - Cadastrar pedido");
            option1 = sc.nextInt();
            switch (option1) {
                case 1: {
                    System.out.println("------------------------------------------------------------");
                    System.out.println("CPF:");
                    String cpf = sc.next();
                    System.out.println("Nome:");
                    String nome = sc.next();
                    System.out.println("Telefone:");
                    String telefone = sc.next();
                    System.out.println("Endereço:");
                    String endereco = sc.next();
                    Cliente c = new Cliente(cpf, nome, telefone, endereco);
                    clientes.add(c);
                    break;
                }
                case 2: {
                    System.out.println("------------------------------------------------------------");
                    System.out.println("Código:");
                    int codigo = sc.nextInt();
                    System.out.println("Descrição:");
                    String descricao = sc.next();
                    System.out.println("Valor:");
                    double valor = sc.nextDouble();
                    System.out.println("Peso:");
                    double peso = sc.nextDouble();
                    System.out.println("Volume:");
                    double volume = sc.nextDouble();
                    Produto p = new Produto(codigo, descricao, valor, peso, volume);
                    produtos.add(p);
                    break;
                }
                case 3: {
                    System.out.println("------------------------------------------------------------");
                    System.out.println("CPF do cliente:");
                    String cpf = sc.next();
                    Cliente c = null;
                    for (Cliente cli : clientes) {
                        if (cli.getCpf() == cpf) {
                            c = cli;
                        }
                    }
                    System.out.println("Entrega padrão ou expressa (p/e)");
                    char choice = sc.next().charAt(0);
                    Entrega e = null;
                    if (e.tipo(choice) == null) {
                        break;
                    }
                    Pedido p = new Pedido(c, e.tipo(choice));
                    int option2 = 0;
                    do {
                        System.out.println("Código do produto:");
                        int codigo = sc.nextInt();
                        for (Produto pro : produtos) {
                            if (pro.getCodigo() == codigo) {
                                p.getProdutos().add(pro);
                            }
                        }
                        System.out.println("Deseja informar outro produto? (1 = sim, 0 = não)");
                        option2 = sc.nextInt();
                    } while (option2 != 0);
                    pedidos.add(p);
                    break;
                }
            }

        } while (option1 != 0);

    }

}
