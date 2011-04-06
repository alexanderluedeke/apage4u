<%@ page isErrorPage="true" %>

<HTML>
<BODY>

<H2>Es ist leider ein Fehler aufgetreten!</H2>
<H3>Eigentlich unterlaufen uns keine Fehler ...</H3>
Exception Information: <b> <%= exception %></b>

<HR>
<H3> Stack trace information </h3>
<PRE>

<%
	java.io.PrintWriter myWriter = new java.io.PrintWriter(out);
	exception.printStackTrace(myWriter);
%>

</PRE>
</BODY>
</HTML>
