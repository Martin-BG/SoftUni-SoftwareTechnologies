import java.util.Arrays;
import java.util.Scanner;

public class Pr03ThreeIntegersSum {
    public static void main(String[] args){
        Scanner scanner = new Scanner(System.in);

        int[] numbers = Arrays.stream(scanner.nextLine().split("\\s+"))
                .mapToInt(Integer::parseInt)
                .toArray();

        if (!checkNumbers(numbers[0], numbers[1], numbers[2]) &&
                !checkNumbers(numbers[1], numbers[2], numbers[0]) &&
                !checkNumbers(numbers[2], numbers[0], numbers[1])) {
            System.out.println("No");
        }
    }

    private static boolean checkNumbers(int num, int num1, int num2) {
        if (num != num1 + num2)
        {
            return false;
        }

        System.out.printf("%d + %d = %d%n", Math.min(num1, num2), Math.max(num1, num2), num);

        return true;
    }
}
