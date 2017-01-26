<?xml version="1.0" ?>
<!--  By Prabhjit Singh
            - transforms locations.xml to show each 
              place section on different pages, and one
              can navigate through each locations section
              with easy using the next and previous
              links
            - based off of Mr. Preneys lecture 6 example
    -->
<xsl:stylesheet 
  version="1.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
>
  <xsl:output
    method="xml"
    omit-xml-declaration="yes"
    indent="yes"
  />

  <xsl:param name="showplace" />


  <xsl:variable 
    name="place"
    select="/location/place[@id=string($showplace)][position()=1]"
  />

  <xsl:template match="/">
    <html>
      <head>
        <title><xsl:value-of select="$place/title" /></title>
      </head>
      <body>
        <xsl:if test="$place">
          <b>Locations: <xsl:value-of select="$place/@id" /></b>
          <xsl:apply-templates select="$place/node()" />

          <hr />

          <xsl:if test="$place/preceding-sibling::place[position()=1]/@id">
            <xsl:element name="a">
              <xsl:attribute name="href">
                <xsl:text>?id=</xsl:text>
                <xsl:value-of select="$place/preceding-sibling::place[position()=1]/@id" />
              </xsl:attribute>
              <xsl:text>Previous Section</xsl:text>
            </xsl:element>
          </xsl:if>
         
          <br />

          <xsl:if test="$place/following-sibling::place[position()=1]/@id">
            <xsl:element name="a">
              <xsl:attribute name="href">
                <xsl:text>?id=</xsl:text>
                <xsl:value-of select="$place/following-sibling::place[position()=1]/@id" />
              </xsl:attribute>
              <xsl:text>Next Section</xsl:text>
            </xsl:element>
          </xsl:if>

        </xsl:if>
      </body>
    </html>
  </xsl:template>

  <xsl:template match="place">
    <xsl:apply-templates select="title" />
    <ul>
      <xsl:apply-templates select="p" />
    </ul>
  </xsl:template>

  <xsl:template match="title">
    <h1>
      <xsl:apply-templates />
    </h1>
  </xsl:template>

  <xsl:template match="link">
    <h1>
      <xsl:apply-templates />
    </h1>
  </xsl:template>

  <xsl:template match="p">
    <li>
      <xsl:apply-templates />
    </li>
  </xsl:template>

</xsl:stylesheet>
