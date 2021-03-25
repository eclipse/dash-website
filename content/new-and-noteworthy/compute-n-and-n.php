
<style>
p, table, td, th {  font-family: verdana, arial, helvetica, geneva; font-size: 10pt}
pre {  font-family: "Courier New", Courier, mono; font-size: 10pt}
h2 { font-family: verdana, arial, helvetica, geneva; font-size: 18pt; font-weight: bold ; line-height: 14px}
code {  font-family: "Courier New", Courier, mono; font-size: 10pt}
sup {  font-family: verdana, arial, helvetica, geneva; font-size: 10px}
h3 {  font-family: verdana, arial, helvetica, geneva; font-size: 14pt; font-weight: bold}
li {  font-family: verdana, arial, helvetica, geneva; font-size: 10pt}
h1 {  font-family: verdana, arial, helvetica, geneva; font-size: 24pt; font-weight: bold}
body {  font-family: verdana, arial, helvetica, geneva; font-size: 10pt; margin-top: 5mm; margin-left: 3mm}
.indextop { font-size: x-large; font-family: verdana, arial, helvetica, sans-serif; font-weight: bold}
.indexsub { font-size: xx-small; font-family: verdana, arial, helvetica, sans-serif; color: #8080FF}
a.bar:link {  text-decoration: none; color: #FFFFFF}
a.bar:visited {  color: #FFFFFF; text-decoration: none}
a.bar:hover {  color: #FFFFFF; text-decoration: underline}
a.bar {  color: #FFFFFF}
</style>
<h1>Dash M1 - New and Noteworthy</h1>
<p>This is our first combined Dash + Portal + IPZilla New &amp; Noteworthy.
  Here are some of the more noteworthy things available in milestone M1 (April 30, 2008)
  which is, as always, live on the servers.</p>

<table border="0" cellpadding="10" cellspacing="0" width="80%">
<tr>
    <td colspan="2"><hr />
      <h2 style="bottom-border: thick solid gray">Manage Committers</h2>
      </td>
  </tr>
  <tr>
    <td width="30%" valign="top" align="left"><b>"Committer Emeritus" status</b></td>

    <td width="70%" valign="top">Former Committers who have made significant contributions to the long term success of Eclipse can now be nominated and listed as <a href="http://www.eclipse.org/projects/committers-emeritus.php">Committers Emeritus</a>.    <em>(<a href="http://bugs.eclipse.org/222350">222350</a>)</em>
          <p><img border="0" src="https://bugs.eclipse.org/bugs/attachment.cgi?id=98165" /></p>
          </td>
  </tr>
  <tr>
    <td colspan="2"><p style="bottom-border: thin dotted gray">
    </td>
  </tr>
<tr>
    <td colspan="2"><hr />
      <h2 style="bottom-border: thick solid gray">Improve the Experience</h2>
      </td>
  </tr>
  <tr>
    <td width="30%" valign="top" align="left"><b>Dash hits the fast lane with a major speed boost</b></td>

    <td width="70%" valign="top">We migrated the commits explorer back end to one of the new servers donated by AMD.  The speed differential is sometimes an order of magnitude over the old server.  The resulting increase in access speed for the web application is phenomenal and adds a much needed boost to the usability of the commits explorer.  Here's how much of an improvement this can be:

SELECT YEAR AS X, PROJECT AS Y, COUNT(*) AS COUNT FROM commits WHERE TOPPROJECT LIKE 'technology' GROUP BY YEAR, PROJECT

old dash server:  1m7.64s
new AMD server: 6.47s    <em>(<a href="http://bugs.eclipse.org/226714">226714</a>)</em>
          <p><img border="0" src="https://bugs.eclipse.org/bugs/attachment.cgi?id=98343" /></p>
          </td>
  </tr>
  <tr>
    <td colspan="2"><p style="bottom-border: thin dotted gray">
    </td>
  </tr>
</table>