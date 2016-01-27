=== Ninja Forms Blocks ===
Contributors: alexusblack
Tags: Ninja Forms, Blocks, Columns, div, layout
Requires at least: 3.0.1
Tested up to: 4.4.1
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
4. add css code for your blocks

== Frequently Asked Questions ==

= How I can create two columns layout with custom css? =

Create two columns with blocks in form editor, add 
`njf-column njf-column__left` 
classes to first [BLOCK] and
`njf-column njf-column__right` 
classes to second [BLOCK].
Then add this code to your CSS file (thanks @ronherren):
`.njf-column {
	display: -moz-inline-stack; /* Firefox inline-block fix */
	display: inline-block;
	vertical-align: top;	/* Align both columns to top */
	zoom: 1; /* IE inline-block fix */
	*display: inline; /* IE inline-block fix */
	width: 49.5%;
}`

== Screenshots ==

1. Add open [BLOCK] and close [/BLOCK] to your Ninja Form
2. Add custom class to [BLOCK]

== Changelog ==

= 1.2 =
* Blocks removed from places not realated to form layout

= 1.1 =
* Blocks moved to layout section

= 1.0 =
* Blocks functionality