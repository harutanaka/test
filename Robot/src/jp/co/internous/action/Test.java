package jp.co.internous.action;

public class Test {
	public static void main(String[]args){
		Robot aibo = new Robot();
		aibo.name="aibo";
		aibo.talk();
		aibo.walk();
		aibo.run();

		Robot asimo = new Robot();
		asimo.name="asimo";
		asimo.talk();
		asimo.walk();
		asimo.run();

		Robot pepper = new Robot();
		pepper.name="pepper";
		pepper.talk();
		pepper.walk();
		pepper.run();
	}
}
