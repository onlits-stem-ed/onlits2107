package local.onlits.onlits2107.despat.headfirst.stragegy;

public class RubberDuck extends Duck implements Quackable, Flyable {
    public void quack() {      //overridden
        System.out.println("Squeak! Squeak!");
    }

    void display() {        //implementation
        System.out.println("Hey! I am a Rubber Duck!");
    }

    public void fly() {            //overridden
        System.out.println("See me flying!");
    }
}