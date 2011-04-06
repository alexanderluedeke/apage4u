<%-- Beispiel fuer eine 'Schleife' --%>
<HTML>
<BODY>
<H1>Schleifen</H1>

<%
	for(int i=1;i<8;i++) {
%>
		<FONT size=<%= i %>>
			Hallo Welt
		</FONT>
<%
	}
%>		

</BODY>
</HTML>