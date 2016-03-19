<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="2.0" 
				xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

	<xsl:template match="/">
		<html>
			<head>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>

                <style>
                table, tr, td{
                    background-color: grey;
                    border: 1px solid black;
                    }
                
                .red td {
                    background-color: salmon;
                    }
                    
                </style>
				<title>Formations</title>
			</head>
			<body>
				
			
                <table>
                    <thead>
                        <th>titre</th>
                         <th>horaire</th>
                         <th>points</th>
                         <th>programme</th>
                    </thead>
                    <xsl:apply-templates select="//module"/>
                </table>
				
			</body>
		</html>
	</xsl:template>
	
	<xsl:template match="module">
        <xsl:variable name = "color">
            <xsl:if test=".[@semestre = 2]">red</xsl:if>
        </xsl:variable>
        
        	<xsl:variable name="niveau">
		  <xsl:choose>
			<xsl:when test="horaire &lt;=5">fa-battery-1</xsl:when>
              <xsl:when test="horaire &gt; 5 and horaire &lt;=70">fa-battery-2</xsl:when>
              <xsl:when test="horaire &gt;70 and horaire &lt;=200">fa-battery-3</xsl:when>
			<xsl:otherwise>fa-battery-4</xsl:otherwise>
		  </xsl:choose>
		</xsl:variable>
        
		<tr class="{$color}">
			<td><xsl:value-of select="titre"/>  </td>
			<td><xsl:value-of select="horaire"/><i class="fa {$niveau}"></i></td>
            <td><xsl:value-of select="points"/></td>
            <td><xsl:apply-templates select="programme//titre"/></td>
		</tr>
	</xsl:template>
    
    <xsl:template match="titre">
	
			<xsl:value-of select="."/>  
	
	</xsl:template>
</xsl:stylesheet>