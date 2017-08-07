import java.time.DayOfWeek;
import java.time.LocalDate;
import java.time.LocalDateTime;
import java.time.format.DateTimeFormatter;
import java.util.Arrays;
import java.util.HashSet;
import java.util.Scanner;

public class Pr20CountWorkingDays {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        DateTimeFormatter formatter = DateTimeFormatter.ofPattern("dd-MM-yyyy");

        LocalDateTime startDate = LocalDateTime.from(
                LocalDate.parse(scanner.nextLine(), formatter).atStartOfDay());
        LocalDateTime endDate = LocalDateTime.from(
                LocalDate.parse(scanner.nextLine(), formatter).atStartOfDay());

        int workDays = 0;

        while (startDate.compareTo(endDate) <= 0) {
            if (isWorkingDay(startDate)) {
                workDays++;
            }
            startDate = startDate.plusDays(1);
        }

        System.out.println(workDays);
    }

    private static boolean isWorkingDay(LocalDateTime date) {
        return date.getDayOfWeek() != DayOfWeek.SATURDAY
                && date.getDayOfWeek() != DayOfWeek.SUNDAY
                && !isOfficialHoliday(date);
    }

    private static boolean isOfficialHoliday(LocalDateTime date) {
        final HashSet<String> holidays = new HashSet<>(Arrays.asList(
                "1-1", "3-3", "1-5", "6-5",
                "24-5", "6-9", "22-9", "1-11",
                "24-12", "25-12", "26-12"));

        String dateString = String.format("%d-%d", date.getDayOfMonth(), date.getMonthValue());

        return holidays.contains(dateString);
    }
}
