public class Factorial {
    static int factorial(int n) {
        if(n==1)            // Base Case
            return 1;
        
        return n * factorial(n-1);  // Recursive Case
    }

    public static void main(String[] args) {
        System.out.println("The factorial of 5 is " + factorial(5));
    }
}
