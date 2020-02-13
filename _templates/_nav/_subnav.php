<?php
$subLinkAry = [
	new NavLink('#introduction','Introduction',null),
	new NavLink('#logo','Logo',null),
	new NavLink('#brand-symbol','Brand Symbol',null),
	new NavLink('#sub-brands','Sub-Brands',null),
	new NavLink('#color','Color',null),
	new NavLink('#typography','Typography',null),
	new NavLink('#photography','Photography',null),
	new NavLink('#secondary-graphics','Secondary Graphics',null),
	new NavLink('#design-system','Design System',null),
	new NavLink('#co-branding','Co-Branding',null),
	new NavLink('#creative-examples','Creative Examples',null),
	new NavLink('#downloads','Downloads',null),
	new NavLink('#contact-resources','Contact & Resources',null),
];

print "\t<ul class=\"nav menu\">\n";
for ($i = 0; $i < count($subLinkAry); $i++) {
  $navClass = ($i===$activeSub) ? " active" : "";
#	print "\t\t<li id=\"sn" . $i . "\" class=\"primary" . $navClass . "\"><a href=\"" . $subLinkAry[$i] -> link . "\"><span class=\"item-wrap\">" . $subLinkAry[$i] -> getTtl() . "</span></a></li>\n";
	print "\t\t<li class=\"primary" . $navClass . "\"><a href=\"" . $subLinkAry[$i] -> link . "\"><span class=\"item-wrap\">" . $subLinkAry[$i] -> getTtl() . "</span></a></li>\n";
}
print "\t</ul>\n";
?>
<?php /*
<ul class="nav menu">
	<li class="sn00"><a href="#introduction">Introduction</a></li>
	<li class="sn01"><a href="#logo">Logo</a></li>
	<li class="sn02"><a href="#brand-symbol">Brand Symbol</a></li>
	<li class="sn03"><a href="#sub-brands">Sub-Brands</a></li>
	<li class="sn04"><a href="#color">Color</a></li>
	<li class="sn05"><a href="#typography">Typography</a></li>
	<li class="sn06"><a href="#photography">Photography</a></li>
	<li class="sn07"><a href="#secondary-graphics">Secondary Graphics</a></li>
	<li class="sn08"><a href="#design-system">Design System</a></li>
	<li class="sn09"><a href="#co-branding">Co-Branding</a></li>
	<li class="sn10"><a href="#creative-examples">Creative Examples</a></li>
	<li class="sn11"><a href="#downloads">Downloads</a></li>
	<li class="sn12"><a href="#contact-resources">Contact & Resources</a></li>
</ul>
*/
?>
