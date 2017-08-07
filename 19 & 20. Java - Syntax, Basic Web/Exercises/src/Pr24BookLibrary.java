import java.time.LocalDate;
import java.time.LocalDateTime;
import java.time.format.DateTimeFormatter;
import java.util.*;

public class Pr24BookLibrary {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        Library library = new Library("The Library");
        int booksToRead = Integer.parseInt(scanner.nextLine());

        while (booksToRead-- > 0) {
            library.getBooks().add(new Book(scanner.nextLine()));
        }

        HashMap<String, Double> pricesByAuthor = new HashMap<>();

        for (Book book : library.getBooks()) {
            if (!pricesByAuthor.containsKey(book.getAuthor())) {
                pricesByAuthor.put(book.getAuthor(), book.getPrice());
            } else {
                pricesByAuthor.replace(book.getAuthor(),
                        pricesByAuthor.get(book.getAuthor()) + book.getPrice());
            }
        }

        List<Map.Entry<String, Double>> list = new LinkedList<>(pricesByAuthor.entrySet());

        list.sort((o1, o2) -> {
            int cmp = -(o1.getValue()).compareTo(o2.getValue());
            if (cmp == 0) {
                cmp = ((o1.getKey()).compareTo((o2.getKey())));
            }
            return cmp;
        });

        for (Map.Entry<String, Double> book : list) {
            System.out.printf("%s -> %.2f%n", book.getKey(), book.getValue());
        }
    }

    private static class Library {
        private String name;
        private ArrayList<Book> books;

        Library(String name) {
            this.name = name;
            this.books = new ArrayList<>();
        }

        public String getName() {
            return name;
        }

        List<Book> getBooks() {
            return books;
        }
    }

    private static class Book {
        private String title;
        private String author;
        private String publisher;
        private LocalDateTime releaseDate;
        private String isbnNumber;
        private double price;

        Book(String data) {
            final DateTimeFormatter formatter = DateTimeFormatter.ofPattern("dd.MM.yyyy");

            String[] tokens = data.split("\\s+");

            this.title = tokens[0];
            this.author = tokens[1];
            this.publisher = tokens[2];
            this.releaseDate = LocalDateTime.from(
                    LocalDate.parse(tokens[3], formatter).atStartOfDay());
            this.isbnNumber = tokens[4];
            this.price = Double.parseDouble(tokens[5]);
        }

        String getAuthor() {
            return author;
        }

        double getPrice() {
            return price;
        }

        @Override
        public String toString() {
            return "Book{" +
                    "title='" + title + '\'' +
                    ", author='" + author + '\'' +
                    ", publisher='" + publisher + '\'' +
                    ", releaseDate=" + releaseDate +
                    ", isbnNumber='" + isbnNumber + '\'' +
                    ", price=" + price +
                    '}';
        }
    }
}
