import java.util.Scanner;

public class Pr02BooleanVariable {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.println(
                Boolean.parseBoolean(scanner.nextLine()) ?
                        "Yes" :
                        "No");
    }
}
