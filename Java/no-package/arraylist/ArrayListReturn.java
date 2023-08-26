import java.util.ArrayList;

public class ArrayListReturn {
    public static ArrayList<Integer> returnArray() {
        ArrayList<Integer> arr = new ArrayList<Integer>();
        arr.add(1);
        arr.add(2);
        arr.add(3);
        arr.add(4);
        arr.add(5);
        return arr;
    }

    public static void main(String[] args) {
        ArrayList<Integer> arr = returnArray();
        for (int i : arr) {
            System.out.println(i);
        }
    }
}
