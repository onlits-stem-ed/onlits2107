class Fibonacci {
    static int fibonacci(int n) {
        if(n==0)
            return 0;
        else if(n==1)
            return 1;
        
        return fibonacci(n-2) + fibonacci(n-1);
    }
    
    public static void main(String[] args) {
        for(int i=0; i<5; i++)
            System.out.println(fibonacci(i) + " ");
    }
}