package com.chenjx.singleton;

/**
 * @Author: chenjx
 * @Description:
 * @Date: Created in 10:28 2017-10-26
 * @Modified By:
 *
 *
 * ①单例类只能有一个实例
 * ②单例类必须自己创建自己的唯一实例
 * ③单例类必须给所有其他对象提供这一实例
 */
public class Singleton1 {
	private static final Singleton1 instance = new Singleton1();
	//私有的默认构造函数
	private Singleton1() {}
	//静态工厂方法
	public static Singleton1 getSingleton1() {
		return instance;
	}
}
