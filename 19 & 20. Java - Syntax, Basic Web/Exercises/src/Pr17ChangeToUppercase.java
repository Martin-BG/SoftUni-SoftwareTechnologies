import java.util.Scanner;

public class Pr17ChangeToUppercase {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String input = scanner.nextLine();

        while (true) {
            int startIndex = input.indexOf("<upcase>");
            int endIndex = input.indexOf("</upcase>");

            if (startIndex < 0 || endIndex < 0) {
                break;
            }

            String oldText = input.substring(startIndex, endIndex) + "</upcase>";
            String newText = input.substring(startIndex + "<upcase>".length(), endIndex).toUpperCase();

            input = input.replaceFirst(oldText, newText);
        }

        System.out.println(input);
    }
}
