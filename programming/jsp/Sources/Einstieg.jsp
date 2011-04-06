<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD><TITLE>Using JavaServer Pages</TITLE></HEAD>
<BODY BGCOLOR=WHITE TEXT="#000000" LINK="#0000EE">

<P>Dynamisch generierter Seiteninhalt.

<UL>
   <%-- Some jsp tags --%>
   <LI><B>Expression.</B><BR>       
     Your hostname: <%= request.getRemoteHost() %>.
   <LI><B>Scriptlet.</B><BR>
     <% out.println("Attached GET data: " + request.getQueryString()); %>
   <LI><B>Declaration (plus expression).</B><BR>
     <%! private int accessCount = 0; %>
     Accesses to page since server reboot: <%= ++accessCount %>  
   <LI><B>Directive (plus expression).</B><BR>
     <%@ page import = "java.util.*" %>     
     Current date: <%= new Date() %>
</UL>

<jsp:include page="Include.html" flush="true" />

</BODY>
</HTML>