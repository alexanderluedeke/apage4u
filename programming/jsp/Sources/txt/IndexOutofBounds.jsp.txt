<%-- Beispiel: Index out of bounds exception --%>
<%@ page errorPage="IndesOutOfError.jsp" %>
<HTML>
<BODY>
<H3>Index out of bounds exception:</H3>

<%
	String[] technologies = {"Java", "server", "pages"};
	
	// throws an ArrayIndexOutofBoundsException
	
	for (int i=0; i <= 99; i++)
		out.println("<br>" + technologies[i]);    
%> 
ASP+ will be avialable soon!

</BODY>
</HTML>
