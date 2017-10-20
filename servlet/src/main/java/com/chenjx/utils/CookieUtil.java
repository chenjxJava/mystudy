package com.chenjx.utils;

import javax.servlet.http.Cookie;

/**
 * @Author: chenjx
 * @Description:
 * @Date: Created in 15:58 2017-10-20
 * @Modified By:
 */
public class CookieUtil {

	/**
	 * 获取存放在cookie中的value值
	 * @param cookies
	 * @param key
	 * @return
	 */
	public static String getCookie(Cookie[] cookies, String key) {
		if(cookies != null) {
			for (Cookie cookie : cookies) {
				if(key.equals(cookie.getName())) {
					return cookie.getValue();
				}
			}
		}
		return null;
	}
}
