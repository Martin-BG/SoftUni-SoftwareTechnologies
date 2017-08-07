import java.util.Arrays;
import java.util.Scanner;

public class Pr08MaxSequenceOfIncreasingElements {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int[] numbers = Arrays
                .stream(scanner.nextLine().trim().split("\\s+"))
                .mapToInt(Integer::parseInt)
                .toArray();

        int bestLength = 1;
        int bestIndex = 0;
        int currentLength = 1;
        int currentIndex = 0;
        int lastNum = numbers[0];

        for (int i = 1; i < numbers.length; i++) {
            if (lastNum >= numbers[i]) {
                if (bestLength < currentLength) {
                    bestLength = currentLength;
                    bestIndex = currentIndex;
                }

                currentIndex = i;
                currentLength = 1;
            } else {
                currentLength++;
            }

            lastNum = numbers[i];
        }

        if (currentLength > bestLength) {
            bestIndex = currentIndex;
            bestLength = currentLength;
        }

        for (int i = 0; i < bestLength; i++) {
            System.out.print(numbers[bestIndex + i] + " ");
        }

        System.out.println();
    }
}
