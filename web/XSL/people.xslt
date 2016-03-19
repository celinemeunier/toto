<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="2.0" 
				xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

	<xsl:template match="/">
		<html>
			<head>
				<title>Chanteurs célebres</title>
			</head>
			<body>
				
				<h1>Chanteurs célebres</h1>
				<hr/>
				<ul>
					<xsl:apply-templates select="People/Person"/>
				</ul>
			</body>
		</html>
	</xsl:template>
	
	<xsl:template match="Person">
		<li>
			<xsl:value-of select="Name"/> - 
			<xsl:value-of select="Description"/>
		</li>
	</xsl:template>
</xsl:stylesheet>