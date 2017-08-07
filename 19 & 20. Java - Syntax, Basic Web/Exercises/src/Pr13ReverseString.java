import java.util.Scanner;

public class Pr13ReverseString {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.println(new StringBuilder(scanner.nextLine()).reverse().toString());
    }
}
