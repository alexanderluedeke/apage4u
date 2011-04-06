<%@ page language="java" import="java.util.Date"  %>
<HTML>
<BODY>

<%! 
   int i = 1; 
   int total = 0;
%>
<% 
   total += i;
   i++;
%>

<H1>Addition</H1>

<B>Count : <%= total %> </B><BR>

<B>next increment : <%= i %> </B>

</BODY>
</HTML>
