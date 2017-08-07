import java.util.Random;
import java.util.Scanner;

public class Pr21AdvertisementMessage {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String[] phrases = new String[]{
                "Excellent product.",
                "Such a great product.",
                "I always use that product.",
                "Best product of its category.",
                "Exceptional product.",
                "I can't live without this product."};

        String[] events = new String[]{
                "Now I feel good.",
                "I have succeeded with this product.",
                "Makes miracles. I am happy of the results!",
                "I cannot believe but now I feel awesome.",
                "Try it yourself, I am very satisfied.",
                "I feel great!"};

        String[] author = new String[]{
                "Diana", "Petya", "Stella", "Elena",
                "Katya", "Iva", "Annie", "Eva"};

        String[] cities = new String[]{
                "Burgas", "Sofia", "Plovdiv", "Varna", "Ruse"};

        StringBuilder sb = new StringBuilder();
        Random rnd = new Random();

        int messagesCount = Integer.parseInt(scanner.nextLine());

        while (messagesCount-- > 0) {
            sb.append(phrases[rnd.nextInt(phrases.length)]);
            sb.append(" ");
            sb.append(events[rnd.nextInt(events.length)]);
            sb.append(" ");
            sb.append(author[rnd.nextInt(author.length)]);
            sb.append(" - ");
            sb.append(cities[rnd.nextInt(cities.length)]);

            System.out.println(sb.toString());
            sb.setLength(0);
        }
    }
}
