import java.util.Arrays;
import java.util.Scanner;

public class Pr12BombNumbers {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        Integer[] numbers = Arrays
                .stream(scanner.nextLine().trim().split("\\s+"))
                .map(Integer::parseInt)
                .toArray(Integer[]::new);

        int bombNum = scanner.nextInt();
        int bombPower = scanner.nextInt();
        int maxIndex = numbers.length - 1;

        for (int i = 0; i <= maxIndex; i++) {
            if (numbers[i] != null) {
                if (numbers[i] == bombNum) {
                    numbers[i] = null;
                    for (int j = 1; j <= bombPower; j++) {
                        int leftIndex = i - j;
                        int rightIndex = i + j;

                        if (leftIndex >= 0) {
                            numbers[leftIndex] = null;
                        }

                        if (rightIndex <= maxIndex) {
                            numbers[rightIndex] = null;
                        }
                    }
                }
            }
        }

        int result = 0;

        for (int i = 0; i <= maxIndex; i++) {
            if (numbers[i] != null) {
                result += numbers[i];
            }
        }

        System.out.println(result);
    }
}
