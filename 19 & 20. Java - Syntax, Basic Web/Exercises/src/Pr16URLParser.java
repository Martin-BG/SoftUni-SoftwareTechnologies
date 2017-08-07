import java.util.Scanner;

public class Pr16URLParser {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String input = scanner.nextLine();

        String protocol = "";
        String server = "";
        String resource = "";

        String[] tokens = input.split("://");
        if (tokens.length > 1) {
            protocol = tokens[0];
            input = tokens[1];
        }

        int index = input.indexOf('/');
        if (index > 0) {
            server = input.substring(0, index);
            resource = input.substring(index + 1);
        } else {
            server = input;
        }

        System.out.printf("[protocol] = \"%s\"%n", protocol);
        System.out.printf("[server] = \"%s\"%n", server);
        System.out.printf("[resource] = \"%s\"%n", resource);
    }
}
