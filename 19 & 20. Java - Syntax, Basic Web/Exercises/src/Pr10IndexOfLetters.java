import java.util.Arrays;
import java.util.Scanner;

public class Pr10IndexOfLetters {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        char[] letters = new char[26];

        for (int i = 0; i < 26; i++) {
            letters[i] = (char) ('a' + i);
        }

        char[] wordAsChars = scanner.nextLine().toLowerCase().toCharArray();

        for (char ch : wordAsChars) {
            System.out.println(ch + " -> " + Arrays.binarySearch(letters, ch));
        }
    }
}
