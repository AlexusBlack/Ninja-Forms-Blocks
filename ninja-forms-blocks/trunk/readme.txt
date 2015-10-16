=== Ninja Forms Blocks ===
Contributors: alexusblack
Tags: Ninja Forms, Blocks, Columns
Requires at least: 3.0.1
Tested up to: 4.3.1
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add blocks functionality to Ninja Forms plugin. Can be used to create columns in your forms.

== Description ==

Ninja Forms Blocks is really simple plugin adding two form elements: [BLOCK] and [/BLOCK].
[BLOCK] is a html `div` element with custom class option. Using blocks you can:

* Separate your form elements by logic
* If you use some bootstrap like framework create columns using classes .col.col-6
* Create or apply your CSS to form elements groups

== Installation ==

1. Upload `njf_blocks` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. add open [BLOCK] and close [/BLOCK] to your Ninja Form

== Frequently Asked Questions ==

= How create two columns layout with custom css? =

Create two columns with blocks in form editor, add `njf-column njf-column__left` classes to first [BLOCK] and
`njf-column njf-column__right` classes to second [BLOCK].
Then add this code to your CSS file:
`.njf-column {
	display: inline-block;
	width: 49.5%;
}`

== Screenshots ==

1. Add open [BLOCK] and close [/BLOCK] to your Ninja Form
2. Add custom class to [BLOCK]

== Changelog ==

= 1.1 =
* Blocks moved to layout section

= 1.0 =
* Blocks functionality