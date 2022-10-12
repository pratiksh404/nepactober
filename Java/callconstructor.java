class Main {

  int sum;

  // first constructor
  Main() {
    // calling the second constructor
    this(5, 2);
  }

  // second constructor
  Main(int arg1, int arg2) {
    // add two value
    this.sum = arg1 + arg2;
  }

  void display() {
    System.out.println("Sum is: " + sum);
  }

  // main class
  public static void main(String[] args) {

    // call the first constructor
    Main obj = new Main();

    // call display method
    obj.display();
  }
}
