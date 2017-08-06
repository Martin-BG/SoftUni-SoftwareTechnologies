import java.util.Arrays;
import java.util.Scanner;

public class Pr06Largest3Numbers {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int[] numbers = Arrays
                .stream(scanner.nextLine().split("\\s+"))
                .mapToInt(Integer::parseInt)
                .toArray();

        Arrays.sort(numbers);

        int counter = Math.min(3, numbers.length);

        for (int i = 1; i <= counter; i++) {
            System.out.println(numbers[numbers.length - i]);
        }
    }
}
