import java.util.Scanner;

public class Pr05SymmetricNumbers {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        StringBuilder sb = new StringBuilder();

        int num = Integer.parseInt(scanner.nextLine());

        for (int i = 1; i <= num ; i++) {
            if (isPalindrome(i))
            {
                sb.append(i);
                sb.append(" ");
            }
        }

        System.out.println(sb.toString().trim());
    }

    private static boolean isPalindrome(int i) {
        char[] chars = Integer.toString(i).toCharArray();

        for (int j = 0; j <= chars.length / 2; j++) {
            if (chars[j] != chars[chars.length - 1 - j]) {
                return false;
            }
        }

        return true;
    }
}
