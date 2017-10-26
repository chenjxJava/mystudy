package com.chenjx.singleton;

/**
 * @Author: chenjx
 * @Description:
 * @Date: Created in 10:55 2017-10-26
 * @Modified By:
 */
public class Singleton2 {
	private static  Singleton2 instance = null;
	//私有的默认构造函数
	private Singleton2() {}
	//静态工厂方法
	public static synchronized Singleton2 getInstance() {
		if(instance !=null) {
			instance = new Singleton2();
		}
		return instance;
	}
}
