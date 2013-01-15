# gs\_linkedin #

## Dynamically present Linkedin.com profile hresume data ##

### Summary ###

gs\_linkedin is a port of [Brad
Touesnard&#8217;s](http://brad.touesnard.com/) Wordpress plugin
[LinkedIn
hResume](http://wordpress.org/extend/plugins/linkedin-hresume/). It
grabs the Microformated hResume block from your LinkedIn public
profile page allowing you to add it to any page with a simple
textpattern tag and apply your own styles.

Thanks to Mariano Absatz for help reporting bugs.

### Download ###

gs\_linkedin is released under the <span class="caps">GPL</span>.
[Download it](/files/gs_linkedin.zip).

### Setup / Installation ###

Your LinkedIn profile must be configured to &#8220;Full View&#8221;.
The default view is &#8220;Basic&#8221;. Once the Linkedin <span
class="caps">API</span> is public this could change.

The hResume classes and ids are left in place and can be styled as you
wish. Below is the css Brad Touesnard created for his plugin, as well
as my modified version.

The plugin does not currently use any cache, fetch images, or require
any non-standard php configurations.

### Usage ###

gs\_linkedin requires two attributes.

*   **linkedin\_src** – the url of your public linkedin.com profile
*   **name** – your full name

### Example ###

<div id="pre"><p><pre><txp:gs_linkedin linkedin_src="http://www.linkedin.com/profile?viewProfile=&key=5919187" name="Grant Stavely" /></pre></p></div>

### <span class="caps">CSS</span> ###

I prefer a very basic style and hide much of the linkedin-specific
content.

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

Brad&#8217;s WordPress <span class="caps">CSS</span> works with minor
modifications in Textpattern designs.

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
