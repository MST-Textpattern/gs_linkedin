<?php

// This is a PLUGIN TEMPLATE.

// Copy this file to a new name like abc_myplugin.php.  Edit the code, then
// run this file at the command line to produce a plugin for distribution:
// $ php abc_myplugin.php > abc_myplugin-0.1.txt

// Plugin name is optional.  If unset, it will be extracted from the current
// file name. Uncomment and edit this line to override:
# $plugin['name'] = 'abc_plugin';

$plugin['version'] = '0.2';
$plugin['author'] = 'Grant Stavely';
$plugin['author_uri'] = 'http://grantstavely.com/';
$plugin['description'] = 'Parse and print hresume linkedin resume data';
$plugin['type'] = 0; // 0 for regular plugin; 1 if it includes admin-side code

@include_once('../zem_tpl.php');

if (0) {
?>
# --- BEGIN PLUGIN HELP ---
  <h1>gs_linkedin</h1>

  <h2>Dynamically present Linkedin.com profile hresume data</h2>

  <h3>Summary</h3>

  <p>gs_linkedin is a port of <a href="http://brad.touesnard.com/">Brad Touesnard&#8217;s</a> Wordpress plugin <a href="http://wordpress.org/extend/plugins/linkedin-hresume/">LinkedIn hResume</a>. It grabs the Microformated hResume block from your LinkedIn public profile page allowing you to add it to any page with a simple textpattern tag and apply your own styles.</p>
  <p>Thanks to Mariano Absatz for help reporting bugs.</p>

  <h3>Download</h3>

  <p>gs_linkedin is released under the <span class="caps">GPL</span>. <a href="/files/gs_linkedin.zip">Download it</a>.</p>

  <h3>Setup / Installation</h3>

  <p>Your LinkedIn profile must be configured to &#8220;Full View&#8221;. The default view is &#8220;Basic&#8221;. Once the Linkedin <span class="caps">API</span> is public this could change.</p>

  <p>The hResume classes and ids are left in place and can be styled as you wish. Below is the css Brad Touesnard created for his plugin, as well as my modified version.</p>

  <p>The plugin does not currently use any cache, fetch images, or require any non-standard php configurations. </p>

  <h3>Usage</h3>

  <p>gs_linkedin requires two attributes.</p>

  <ul>
    <li><strong>linkedin_src</strong> – the url of your public linkedin.com profile</li>
    <li><strong>name</strong> – your full name</li>
  </ul>

  <h3>Example</h3>

  <div id="pre"><p><pre><txp:gs_linkedin linkedin_src="http://www.linkedin.com/profile?viewProfile=&key=5919187" name="Grant Stavely" /></pre></p></div>

  <h3><span class="caps">CSS</span></h3>

  <p>I prefer a very basic style and hide much of the linkedin-specific content.</p>

<div id="pre"><pre>#overview, div.profile-header, div.actions,
#summary h2, summary h3, #additional-information, 
.info, .skills  {
  display: none;
}
#experience ul.vcalendar li.experience {
  position: relative;
}
abbr {
  text-decoration: none;
  border: none;
  color: #999;
  font-style: italic;
  font-size: .9em;
}
.organization-details {
  font-size: .9em;
  color: #999;
}
.org summary {
  font-size: 1.2em;
  font-style: italic;
}
</pre></div>

  <p>Brad&#8217;s WordPress <span class="caps">CSS</span> works with minor modifications in Textpattern designs. </p>

<div id="pre"><pre>/* Elements */
body {
  font-family: Lucida, Helvetica, Arial, sans-serif;
  color: #333;
  margin: 0px 0px 0px 0px;
  padding: 0px 0px 0px 0px;
  background-color: #fff;
  font-size: 0.9em;
}
a {
  color: #3333cc;
  text-decoration: none;
}
a:hover {
  color: #9999ff;
  text-decoration: underline;
}
form {
  margin: 0px 0px 0px 0px;
  padding: 0px 0px 0px 0px;
}
hr {
  border: none 0;
  border-top: 1px dashed #C5C5C5;
  height: 1px;
  margin: 0px 0px 0px 0px;
  padding: 0px 0px 0px 0px;
  display: none;
}
blockquote {
  margin-left: 20px;
  border-left: 20px solid #eee;
  padding-left: 10px;
  font-size: 0.9em;
}
ul, ul ul {
  margin-left: 0;
  padding-left: 1.1em;
}
dt {
  font-weight: bold;
}
dd {
  margin-left: 1.0em;
  font-size: 0.9em;
}
h1, h2, h3, h4, h5, h6, p {
  padding: 0;
  margin: 0 0 0.2em 0;
}
h2 {
  border-top: 3px double #ccc;
  border-bottom: 3px double #ccc;
  padding: 0.4em;
  margin-bottom: 1em;
  margin-top: 1em;
}
code {
  font-family: Courier New, Courier, Monospace;
  font-size: 1em;
  color: #666666;
}
acronym, abbr {
  border-bottom: 0;
}
/* Class Selectors */
div.hresume {
  position: relative;
}
ul.vcalendar li.vevent {
  list-style: none;
  list-style-image: none;
}
/* ID Selectors */
#lnhr-main {
  margin: 2em 3% 4em 3%;
}
#overview,
div.profile-header div.actions {
  display: none;
}
#masthead {
  width: 40%;
}
#name {
  margin-bottom: 0;
  padding-bottom: 0;
}
#nameplate p.headline {
  margin-top: 0.4em;
  margin-bottom: 0;
}
#nameplate div.adr p.locality {
  margin-top: 0.4em;
}
#summary {
  margin-top: 2em;
}
#summary h2,
#summary h3  {
  display: none;
}
#summary p.summary {
  position: absolute;
  top: 0;
  right: 0;
  width: 35%;
  font-size: 1.5em;
  -moz-border-radius: 1em;
  line-height: 1.1em;
  padding: 1em;
  background: #eee;
  margin-right: 15%;
}
#summary p.skills {
  clear: both;
}
#experience {
  overflow: hidden;
}
#experience ul.vcalendar {
  margin-left: 15em;
}
#experience ul.vcalendar li.experience {
  position: relative;
  margin-top: 1.6em;
}
#experience ul.vcalendar li.experience:nth-child(2n+1) {
  background-color: #eee;
}
#experience ul.vcalendar li.experience ul li {
  margin-top: 1em;
}
#experience ul.vcalendar li.experience p.period {
  position: absolute;
  top: 0;
  left: -15em;
  width: 10em;
  background: #eee;
  padding: 1em;
  height: 100%;
}
#experience ul.vcalendar li.experience p.period abbr.dtstamp,
#experience ul.vcalendar li.experience p.period abbr.dtend {
  display: block;
}
#experience ul.vcalendar li.experience p.description {
  margin-top: 1em;
}
#experience ul.vcalendar li.experience p.organization-details {
  color: #999;
  font-size: 0.9em;
}
#project-description {
  -moz-border-radius: 1em;
  padding: 2em;
  background: #eee;
  margin: 2em 0 2em 0;
}
</pre></div>
# --- END PLUGIN HELP ---
<?php
}

# --- BEGIN PLUGIN CODE ---

function gs_linkedin($atts) {
  extract(lAtts(array(
    'linkedin_src'  => 'http://www.linkedin.com/in/grantstavely',
    'name' => 'Grant Stavely',
  ),$atts));

// Split up the URL
  $matches = array();
  preg_match('/^http:\/\/([^\/]+)(\/.*)$/', $linkedin_src, $matches);
  $server = $matches[1];
  $page = $matches[2];

// Request the LinkedIn page
  $errno = 0;
  $errstr = '';
  $fp = @fsockopen($server, 80, $errno, $errstr, 30);
  if (!$fp) {
    return "<h1>Error retrieving resume from LinkedIn</h1>
      $server<br />$page<br />
      <p><b>Details:</b> $errstr ($errno)</p>";
  }
  else {
    $out = "GET $page HTTP/1.1\r\n";
    $out .= "Host: $server\r\n";
    $out .= "Connection: Close\r\n\r\n";

    $response = '';
    fwrite($fp, $out);
    while (!feof($fp)) {
      $response .= fgets($fp, 128);
    }
    fclose($fp);

    $response = split("\r\n\r\n", $response);
    $headers = $response[0];
    $data = $response[1];
  }
  
// Just grab the hResume part minus some extra LinkedIn junk
// Kind of lazy, but maybe do some parsing in another version
  $hresume = strstr($data, '<div class="hresume">');
  $pos = strpos($hresume, '<div id="contact-settings">');
  if ($pos !== false) {
    $hresume = substr($hresume, 0, $pos);
    $hresume .= '</div>';
  }

// Remove any Javascript
  $hresume = preg_replace('/<[ \n\r]*script[^>]*>.*<[ \n\r]*\/script[^>]*>/si', '', $hresume);

// Convert wiki style formatting to XHTML
  $hresume = preg_replace("/(<br>\s*){2,}\*[ ]([^\n\r]*)(\s*<br>)/si", "<ul>\n<li>$2</li>", $hresume);
  $hresume = preg_replace("/\*[ ]([^\n\r]*)(\s*<br>)/si", "<li>$1</li>", $hresume);
  $hresume = preg_replace("/\*[ ]([^\n\r]*)(\s*(<\/p>|<\/dd>))/si", "<li>$1</li>\n</ul>\n$2", $hresume);
  $hresume = preg_replace("/(<\/li>)\s*<br>/si", "$1\n</ul>", $hresume);

// Make links clickable
  $hresume = preg_replace('/([^"\'])(http:\/\/[^\s]+)([^"\'])/i', '$1<a href="$2">$2</a>$3', $hresume);

// Markup abbrivations INCOMPLETE
  $hresume = preg_replace('/([^a-zA-Z0-9])(CVS)([^a-zA-Z0-9])/', '$1<abbr title="Concurrent Versioning System">$2</abbr>$3', $hresume);

// Convert LinkedIn tags to XHTML
  $hresume = preg_replace('/<\s*br\s*>/si', '<br />', $hresume);

// Why does LinkedIn repeat your name so much on the same page?
  $hresume = preg_replace('/'.$name.'&#8217;s /si', '', $hresume);

// The returned value will replace the tag on the page
  return $hresume;
}





# --- END PLUGIN CODE ---

?>
