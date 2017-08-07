import java.util.ArrayList;
import java.util.Scanner;

public class Pr23AverageGrades {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        ArrayList<Student> students = new ArrayList<>();

        int studentsToRead = Integer.parseInt(scanner.nextLine());

        while (studentsToRead-- > 0) {
            students.add(new Student(scanner.nextLine()));
        }

        Student[] sorted = students.stream()
                .filter(student -> student.getAverageGrade() >= 5d)
                .sorted()
                .toArray(Student[]::new);

        for (Student student : sorted) {
            System.out.println(student);
        }
    }

    public static class Student implements Comparable<Student> {
        private String name;
        private double[] grades;
        private double averageGrade;

        Student(String data) {
            String[] tokens = data.split("\\s+");

            this.name = tokens[0];
            this.averageGrade = 0;
            this.grades = new double[tokens.length - 1];

            for (int i = 1; i < tokens.length; i++) {
                double grade = Double.parseDouble(tokens[i]);
                this.grades[i - 1] = grade;
                this.averageGrade += grade;
            }

            this.averageGrade /= this.grades.length;
        }

        String getName() {
            return name;
        }

        double getAverageGrade() {
            return averageGrade;
        }

        @Override
        public String toString() {
            return String.format("%s -> %.2f", this.name, this.averageGrade);
        }

        @Override
        public int compareTo(Student o) {
            int cmp = this.name.compareTo(o.getName());

            if (cmp == 0) {
                cmp = -Double.compare(this.averageGrade, o.getAverageGrade());
            }

            return cmp;
        }
    }
}
