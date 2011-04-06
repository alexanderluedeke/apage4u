<HTML>
<HEAD>
<%!
	public long fact(long x) {
		if (x==0)
			return 1;
		else
			return x * fact(x-1);
	}
%>
</HEAD>

<BODY>

<TABLE>
<TR><TH width="50" align=left> x </TH><TH width="50" align=left> x! </TH></TR>
<BR>
<%
	for (int x=1; x < 10; x++) {
%>
		<TR><TD width="50"><%= x %></TD><TD width="50"><%= fact(x) %></TD></TR>
<%
	}
%>
</TABLE>

</BODY>
</HTML>