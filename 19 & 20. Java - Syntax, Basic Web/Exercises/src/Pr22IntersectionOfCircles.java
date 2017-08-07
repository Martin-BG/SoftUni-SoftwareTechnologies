import java.util.Arrays;
import java.util.Scanner;

public class Pr22IntersectionOfCircles {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        Circle first = parseCircle(scanner.nextLine());
        Circle second = parseCircle(scanner.nextLine());

        System.out.println(circlesIntersect(first, second) ? "Yes" : "No");
    }

    private static Circle parseCircle(String data) {
        double[] tokens = Arrays
                .stream(data.split("\\s+"))
                .mapToDouble(Double::parseDouble)
                .toArray();

        Point center = new Point(tokens[0], tokens[1]);

        return new Circle(center, tokens[2]);
    }

    private static boolean circlesIntersect(Circle first, Circle second) {
        double distance = Math.sqrt(
                Math.pow(second.getCenter().getX() - first.getCenter().getX(), 2) +
                        Math.pow(second.getCenter().getY() - first.getCenter().getY(), 2));

        return distance <= first.getRadius() + second.getRadius();
    }

    private static class Point {
        private double x;
        private double y;

        Point(double x, double y) {
            this.x = x;
            this.y = y;
        }

        double getX() {
            return x;
        }

        double getY() {
            return y;
        }
    }

    private static class Circle {
        private Point center;
        private double radius;

        Circle(Point center, double radius) {
            this.center = center;
            this.radius = radius;
        }

        Point getCenter() {
            return center;
        }

        double getRadius() {
            return radius;
        }
    }
}
