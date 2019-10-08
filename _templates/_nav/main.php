<?php
$linkAry = [
	new NavLink($dir . 'home','Who We Are', null),
	new NavLink($dir . 'design','Core Elements', null),
	new NavLink($dir . 'resources','Downloads', null),
	new NavLink($dir . 'inspiration','Inspiration', null)
	// new NavLink($dir . 'search','<span class="icon-search"></span>', 'Search')
];
print "\t<ul>\n";
for ($i = 0; $i < count($linkAry); $i++) {
	$navClass = ($i === $activeMain) ? " active" : "";
	print "\t\t<li class=\"mn" . $i . $navClass . "\"><a href=\"" . $linkAry[$i] -> link . "\"><span class=\"item-wrap\">" . $linkAry[$i] -> getTtl() . "</span></a></li>\n";
}
print "\t</ul>\n";
?>
