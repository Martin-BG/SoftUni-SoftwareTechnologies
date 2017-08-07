import java.util.Scanner;

public class Pr14FitStringIn20Chars {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.println(String
                .format("%s%s",
                        scanner.nextLine(),
                        String.format("%-20s", " ").replace(' ', '*'))
                .substring(0, 20));
    }
}
