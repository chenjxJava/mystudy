#Servlet

一、目录结构
---com
		|_chenjx
				|__servlet
				|			|__CookieServlet
				|
				|__utils
							|__CookieUtil

二、编写一个servlet
	1.创建一个类继承HttpServlet，重写doGet()、doPost()方法
	2.创建一个web模块，在Servlet上打上注解
		@WebServlet(name = "cookieServlet", urlPatterns = "/*")

		或者在web.xml文件中配置mapper映射，
		<servlet>
        <servlet-name>servlet</servlet-name>
        <servlet-class>完整类名</servlet-class>
      </servlet>
      <servlet-mapping>
        <servlet-name>servlet</servlet-name>
        <url-pattern>/*</url-pattern>
      </servlet-mapping>

