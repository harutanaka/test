package jp.co.internous.action;

public class Test{

	public static void main(String[]args){
		Person taro = new Person();
		taro.name="山田太郎";
		taro.age=20;
		taro.phoneNumber="123456";
		taro.address="東京";

		System.out.println(taro.name);
		System.out.println(taro.age);
		System.out.println(taro.phoneNumber);
		System.out.println(taro.address);
		taro.talk();
		taro.walk();
		taro.run();

		Person jiro = new Person();
		jiro.name="木村次郎";
		jiro.age=18;
		jiro.phoneNumber="123456";
		jiro.address="東京";

		System.out.println(jiro.name);
		System.out.println(jiro.age);
		System.out.println(jiro.phoneNumber);
		System.out.println(jiro.address);
		jiro.talk();
		jiro.walk();
		jiro.run();

		Person hanako = new Person();
		hanako.name="鈴木花子";
		hanako.age=16;
		hanako.phoneNumber="123456";
		hanako.address="東京";

		System.out.println(hanako.name);
		System.out.println(hanako.age);
		System.out.println(hanako.phoneNumber);
		System.out.println(hanako.address);
		hanako.talk();
		hanako.walk();
		hanako.run();



		Person haruaki = new Person();
		haruaki.name="田中陽章";
		haruaki.age=28;
		haruaki.phoneNumber="123456";
		haruaki.address="東京";

		System.out.println(haruaki.name);
		System.out.println(haruaki.age);
		System.out.println(haruaki.phoneNumber);
		System.out.println(haruaki.address);
		haruaki.talk();
		haruaki.walk();
		haruaki.run();

	}
}

