package com.chenjx.utils;

import java.io.UnsupportedEncodingException;
import java.net.URLEncoder;

import javax.servlet.http.Cookie;
import javax.servlet.http.HttpServletResponse;

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

	/**
	 * 设置cookie值，并使用URLEncoder.encode()方法进行utf-8编译
	 * @param response
	 * @param name
	 * @param value
	 * @param path
	 * @param maxAge
	 */
	public static void setCookie(HttpServletResponse response, String name, String value, String path, int maxAge) {
		Cookie cookie = new Cookie(name, null);
		cookie.setPath(path);
		cookie.setMaxAge(maxAge);	//60*60*24 --时效为一天
		try {
			cookie.setValue(URLEncoder.encode(value, "utf-8"));
		} catch (UnsupportedEncodingException e) {
			e.printStackTrace();
		}
		response.addCookie(cookie);
	}
}
