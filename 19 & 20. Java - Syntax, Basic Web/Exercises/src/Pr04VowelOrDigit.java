import java.util.Scanner;

public class Pr04VowelOrDigit {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        char ch = scanner.nextLine().toLowerCase().charAt(0);

        if (Character.isDigit(ch)) {
            System.out.println("digit");
        } else if ("aeiou".indexOf(ch) >= 0) {
            System.out.println("vowel");
        } else {
            System.out.println("other");
        }
    }
}
