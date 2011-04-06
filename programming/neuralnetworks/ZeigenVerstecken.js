// Dieses JavaScript sorgt dafuer, dass statt des alternativen Textes,
// der entsteht, wenn man auf eine Grafik zeigt, ein graues Rechteck
// (definiert in dem Layout.css) mit einem Text zu sehen ist.

function zeigen(lay,text,xRight,yDown,lnk)
{
	if(navigator.appName=="Netscape")
	{
		with(document.layers[lay])
		{
			with(document)
			{
				open("text/html")
				write("<P CLASS=Status><SMALL>" + text + "</SMALL></P>")
				close()
			}
			left	= lnk.x + 16 + xRight
			top	= lnk.y + 16 + yDown
			if((2 * left) > innerWidth)
			{
				left	-= 32
				if((4 * left) > (3 * innerWidth))
					left	-= 16
			}
			visibility	= true
		}
	}
}
<!-- ... Quelle Beispiel ...
function testbrowser()
{
	if(navigator.appName!="Netscape")
		{

			open("text/html")
			write("<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1; URL=Musik.html\">")
			close()		}
}
function verstecken(lay)
{
	if(navigator.appName=="Netscape")
	{
		document.layers[lay].visibility	= false
	}
}















