import java.util.Scanner;

public class Pr04SumNIntegers {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int numbers = Integer.parseInt(scanner.nextLine());

        long sum = 0L;

        while (numbers-- > 0) {
            sum += Integer.parseInt(scanner.nextLine());
        }

        System.out.printf("Sum = %d%n", sum);
    }
}
