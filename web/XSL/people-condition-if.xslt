<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="2.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

  <xsl:variable name="allMonthes" select="document('month.xml')"/>

  <xsl:param name="targetSiecle" select="19"/>
  
	<xsl:template match="/">
		<html>
			<head>
				<title>Chanteurs célebres</title>
				<style>
					table{border-collapse:collapse;}
					table, th, td{border: 1px solid black;}
				</style>
			</head>
			<body>
				<h1>Chanteurs célebres</h1>
				<hr/>
				<table>
					<thead>
						<th>Nom</th>
						<th>Date de naissance</th>
						<th>Date de décès</th>
						<th>Description</th>
					</thead>
					<tbody>
            <xsl:apply-templates select="/People/Person"/>
					</tbody>
				</table>
			</body>
		</html>
	</xsl:template>
	
	<xsl:template match="Person">
	
		<xsl:variable name="nameCSS">
		  <xsl:if test="number(substring(@bornDate, 1, 2)) = $targetSiecle">color:red;</xsl:if>
		</xsl:variable>
		
		<xsl:variable name="rowCSS">
		  <xsl:choose>
			<xsl:when test="position() mod 2 = 0">background-color:#8E95B4;</xsl:when>
			<xsl:otherwise>background-color:#B0D74B;</xsl:otherwise>
		  </xsl:choose>
		</xsl:variable>
		
		<tr style="{$rowCSS}">
			<td style="{$nameCSS}">
				<xsl:value-of select="Name"/>
			</td>
			<td>
				<xsl:call-template name="DisplayDate">
					<xsl:with-param name="Date" select="@bornDate"/>
				</xsl:call-template>
			</td>
			<td>
				<xsl:call-template name="DisplayDate">
					<xsl:with-param name="Date" select="@dieDate"/>
				</xsl:call-template>
			</td>
			<td>
				<xsl:value-of select="Description"/>
			</td>
		</tr>
	</xsl:template>
		
	<xsl:template name="DisplayDate">
		<xsl:param name="Date"/>
		<xsl:variable name="yearPart" select="substring($Date, 1, 4)" />
		<xsl:variable name="monthPart" select="substring($Date, 6, 2)" />
		<xsl:variable name="monthName" select="$allMonthes/Months/Month[@index = number($monthPart)]" />
		<xsl:variable name="datePart" select="substring($Date, 9, 2)" />
		<xsl:value-of select="concat($datePart, ' ', $monthName, ' ', $yearPart)"/>
	</xsl:template>
	
</xsl:stylesheet>




