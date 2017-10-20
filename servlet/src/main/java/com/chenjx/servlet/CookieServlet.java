package com.chenjx.servlet;

import java.io.IOException;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.Cookie;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import com.chenjx.utils.CookieUtil;

/**
 * @Author: chenjx
 * @Description:
 * @Date: Created in 16:00 2017-10-20
 * @Modified By:
 */
@WebServlet(name = "cookieServlet", urlPatterns = "/*")
public class CookieServlet extends HttpServlet {
	private String message;

	@Override
	public void init() throws ServletException {
		message = "cookieServlet init...";
		System.out.println(message);
	}

	@Override
	protected void doGet(HttpServletRequest req, HttpServletResponse resp) throws ServletException, IOException {
		Cookie[] cookies = req.getCookies();
		if(cookies != null) {
			String userName = CookieUtil.getCookie(cookies, "userName");
			String userAge = CookieUtil.getCookie(cookies, "userAge");

			if(userName == null) {
				resp.addCookie(new Cookie("userName","chenjx"));
			}
			if(userAge == null) {
				resp.addCookie(new Cookie("userAge","18"));
			}
			resp.getHeaders("Set-Cookie");
			resp.getWriter().print(userName + "..." + userAge);
		}
	}

	@Override
	protected void doPost(HttpServletRequest req, HttpServletResponse resp) throws ServletException, IOException {
		this.doGet(req, resp);
	}
}
