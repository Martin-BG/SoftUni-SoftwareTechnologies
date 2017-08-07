import java.time.LocalDate;
import java.time.LocalDateTime;
import java.time.format.DateTimeFormatter;
import java.util.*;

public class Pr25BookLibraryModification {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        Library library = new Library("The Library");
        int booksToRead = Integer.parseInt(scanner.nextLine());

        while (booksToRead-- > 0) {
            library.getBooks().add(new Book(scanner.nextLine()));
        }

        final DateTimeFormatter formatter = DateTimeFormatter.ofPattern("dd.MM.yyyy");

        LocalDateTime checkDate = LocalDateTime.from(
                LocalDate.parse(scanner.nextLine(), formatter).atStartOfDay());

        ArrayList<Map.Entry<String, LocalDateTime>> booksByDate = new ArrayList<>();

        for (Book book : library.getBooks()) {
            if (book.getReleaseDate().isAfter(checkDate)) {
                booksByDate.add(new AbstractMap.SimpleEntry<>(
                        book.getTitle(), book.getReleaseDate()));
            }
        }

        booksByDate.sort((o1, o2) -> {
            int cmp = (o1.getValue()).compareTo(o2.getValue());
            if (cmp == 0) {
                cmp = ((o1.getKey()).compareTo((o2.getKey())));
            }
            return cmp;
        });

        for (Map.Entry<String, LocalDateTime> book : booksByDate) {
            System.out.printf("%s -> %s%n", book.getKey(), book.getValue().format(formatter));
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

        String getTitle() {
            return title;
        }

        LocalDateTime getReleaseDate() {
            return releaseDate;
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
