import java.util.Scanner;

public class Pr15CensorEmailAddress {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String email = scanner.nextLine();
        String[] tokens = email.split("@");
        String censoredEmail = String.format("%s@%s",
                tokens[0].replaceAll("[^\\s]", "*"),
                tokens[1]);

        System.out.println(scanner.nextLine().replaceAll(email, censoredEmail));
    }
}
