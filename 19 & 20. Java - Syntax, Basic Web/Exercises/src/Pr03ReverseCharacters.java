import java.util.Scanner;

public class Pr03ReverseCharacters {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        StringBuilder sb = new StringBuilder();

        for (int i = 0; i < 3; i++) {
            sb.insert(0, scanner.nextLine());
        }

        System.out.println(sb.toString());
    }
}
