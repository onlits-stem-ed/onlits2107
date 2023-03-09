package local.onlits.onlits2107.despat.headfirst.stragegy;

public class SimUDuck {
    public static void main(String[] args) {
        System.out.println("---------- Testing Mallard Duck --------");
        showTime(new MallardDuck());
        System.out.println();
        System.out.println("---------- Testing Red Duck --------");
        showTime(new RedHeadDuck());
        System.out.println();
        System.out.println("---------- Testing Rubber Duck --------");
        showTime(new RubberDuck());
        System.out.println();
        System.out.println("---------- Testing Decoy Duck --------");
        showTime(new DecoyDuck());
        System.out.println();
    }

    static void showTime(Duck duck) {
        duck.display();
        duck.quack();
        duck.swim();
        duck.fly();
    }
}