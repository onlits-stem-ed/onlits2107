package local.onlits.onlits2107.basic;

import java.util.Scanner;

public class DynamicTyping {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        var varScanner = new Scanner(System.in);

        String string = new String("Bihar");
        var varString = new String("Patna");

        System.out.println("scanner: " + scanner.hashCode());
        System.out.println("\nvarScanner: " + varScanner.hashCode());
        System.out.println("\nstring: " + string.hashCode());
        System.out.println("\nvarString: " + varString.hashCode());


        scanner.close();
        varScanner.close();
    }
}