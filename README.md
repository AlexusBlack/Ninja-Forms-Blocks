<h1>Ninja Forms Blocks</h1>

<p>Add blocks functionality to Ninja Forms plugin. Can be used to create columns in your forms.</p>

Wordpress plugin page: https://wordpress.org/plugins/ninja-forms-blocks/<br>

<h3>Description</h3>

<p>Ninja Forms Blocks is really simple plugin adding two form elements: [BLOCK] and [/BLOCK].<br>
[BLOCK] is a html `div` element with custom class option. Using blocks you can:</p>

<p>
<ul>
	<li>Separate your form elements by logic</li>
	<li>If you use some bootstrap like framework create columns using classes .col.col-6</li>
	<li>Create or apply your CSS to form elements groups</li>
</ul>
</p>

<h3>Installation</h3>

<p><ol>
	<li>Upload `njf_blocks` folder to the `/wp-content/plugins/` directory</li>
	<li>Activate the plugin through the 'Plugins' menu in WordPress</li>
	<li>add open [BLOCK] and close [/BLOCK] to your Ninja Form</li>
</ol></p>

<h3>Frequently Asked Questions</h3>

<p>
<u>How create two columns layout with custom css?</u><br><br>

Create two columns with blocks in form editor, add `njf-column njf-column__left` classes to first [BLOCK] and<br>
`njf-column njf-column__right` classes to second [BLOCK].<br>
Then add this code to your CSS file:<br>
<pre><code>.njf-column {
	display: inline-block;
	width: 49.5%;
}</code></pre>
</p>

<h3>Screenshots</h3>

<p><ol>
	<li>Add open [BLOCK] and close [/BLOCK] to your Ninja Form</li>
	<li>Add custom class to [BLOCK]</li>
</ol></p>

<h3>Changelog<h3>

<strong>= 1.1 =</strong><br>
* Blocks moved to layout section<br>
<br>
<strong>= 1.0 =</strong><br>
* Blocks functionality<br>
