import java.util.Scanner;
import java.util.TreeSet;

public class Pr06CompareCharArrays {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        TreeSet<String> words = new TreeSet<>();

        words.add(scanner.nextLine().replaceAll("\\s+", ""));
        words.add(scanner.nextLine().replaceAll("\\s+", ""));

        System.out.println(words.first());
        System.out.println(words.last());
    }
}
