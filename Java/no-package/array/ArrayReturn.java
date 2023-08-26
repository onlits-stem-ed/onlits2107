class ArrayReturn {
    public static int[] returnArray() {
        int[] arr = {1, 2, 3, 4, 5};
        return arr;
    }

    public static void main(String[] args) {
        int[] arr = returnArray();
        for (int i : arr) {
            System.out.println(i);
        }
    }
}