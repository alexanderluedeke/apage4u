<HTML>
<BODY>

<jsp:useBean id="counterBean" class="myBeans.CounterBean" scope="session" />

<H1>Addition</H1>

<B>Count : <jsp:getProperty name="counterBean" property="count" />  </B><BR>

<B>next increment : <jsp:getProperty name="counterBean" property="increment" />  </B>

<% 
	counterBean.updateCount();
%>

</BODY>
</HTML>
