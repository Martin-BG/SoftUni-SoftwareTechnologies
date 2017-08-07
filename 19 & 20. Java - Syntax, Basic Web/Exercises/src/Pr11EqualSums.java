import java.util.Arrays;
import java.util.Scanner;

public class Pr11EqualSums {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int[] numbers = Arrays
                .stream(scanner.nextLine().trim().split("\\s+"))
                .mapToInt(Integer::parseInt)
                .toArray();

        int[] sumsToLeft = new int[numbers.length];
        int[] sumsToRight = new int[numbers.length];

        int leftSum = 0;
        int rightSum = 0;
        for (int i = 0; i < numbers.length; i++) {
            sumsToLeft[i] = leftSum;
            leftSum += numbers[i];

            sumsToRight[numbers.length - 1 - i] = rightSum;
            rightSum += numbers[numbers.length - 1 - i];
        }

        int foundIndex = -1;
        for (int i = 0; i < numbers.length; i++) {
            if (sumsToLeft[i] == sumsToRight[i]) {
                foundIndex = i;
                break;
            }
        }

        System.out.println(foundIndex < 0 ? "no" : foundIndex);
    }
}
