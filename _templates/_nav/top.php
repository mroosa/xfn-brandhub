<?php
$linkAry = [
	new NavLink($dir . 'search','<span class="icon-search"></span>', 'Search'),
	new NavLink($dir . 'whats-new','What\'s New', null),
	new NavLink($dir . 'inspiration','Inspiration', null),
	new NavLink($dir . 'resources','Resources', null)
];
print "\t<ul>\n";
for ($i = 0; $i < count($linkAry); $i++) {
	$navClassTop = ($i === $activeTop) ? " active" : "";
	print "\t\t<li class=\"tn" . $i . $navClassTop . "\"><a href=\"" . $linkAry[$i] -> link . "\"><span class=\"item-wrap\">" . $linkAry[$i] -> getTtl() . "</span></a></li>\n";
}
print "\t</ul>\n";
?>
