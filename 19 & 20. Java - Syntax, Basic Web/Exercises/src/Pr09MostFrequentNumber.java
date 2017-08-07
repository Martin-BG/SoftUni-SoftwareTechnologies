import java.util.Arrays;
import java.util.Scanner;

public class Pr09MostFrequentNumber {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int[] numbers = Arrays
                .stream(scanner.nextLine().trim().split("\\s+"))
                .mapToInt(Integer::parseInt)
                .toArray();

        int[] counts = new int[65536];

        for (int number : numbers) {
            counts[number]++;
        }

        int bestNum = numbers[0];
        int bestCount = counts[0];
        for (int number : numbers) {
            if (counts[number] > bestCount) {
                bestCount = counts[number];
                bestNum = number;
            }
        }

        System.out.println(bestNum);
    }
}
