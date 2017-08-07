import java.util.Map;
import java.util.Scanner;
import java.util.TreeMap;

public class Pr19PhonebookUpgrade {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        TreeMap<String, String> phonebook = new TreeMap<>();

        while (true) {
            String input = scanner.nextLine();

            if ("END".equals(input)) {
                break;
            }

            String[] tokens = input.split(" ");

            if ("A".equals(tokens[0])) {
                if (!phonebook.containsKey(tokens[1])) {
                    phonebook.put(tokens[1], tokens[2]);
                } else {
                    phonebook.replace(tokens[1], tokens[2]);
                }
            } else if ("S".equals(tokens[0])) {
                if (phonebook.containsKey(tokens[1])) {
                    System.out.printf("%s -> %s%n", tokens[1], phonebook.get(tokens[1]));
                } else {
                    System.out.printf("Contact %s does not exist.%n", tokens[1]);
                }
            } else if ("ListAll".equals(tokens[0])) {
                for (Map.Entry<String, String> pair : phonebook.entrySet()) {
                    System.out.printf("%s -> %s%n", pair.getKey(), pair.getValue());
                }
            }
        }
    }
}
