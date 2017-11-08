<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
  <html>
  <head></head>      
  <h2> Subscribers File List </h2>
  <body>
  <table border="1">
    <tr>
      <th>id</th>
      <th>Email</th>
    </tr>
    <xsl:for-each select="Subscribers/s">
    <tr>
        <td><xsl:value-of select="id"/></td>
        <td><xsl:value-of select="email_id"/></td>
    </tr>
   </xsl:for-each>
  </table>
  </body>
  </html>
</xsl:template>
</xsl:stylesheet>

