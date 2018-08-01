<?php
$linkAry = [
	new NavLink($dir . 'design','Overview', null),
	new NavLink($dir . 'design/logo','Logo', null),
	new NavLink($dir . 'design/expressive-x','Expressive X', null),
	new NavLink($dir . 'design/sub-brands','Sub-Brands', null),
	new NavLink($dir . 'design/color','Color', null),
  new NavLink($dir . 'design/typogrpahy','Typography', null),
  new NavLink($dir . 'design/photography','Photography', null),
  new NavLink($dir . 'design/design-system','Design Systems', null),
  new NavLink($dir . 'design/co-branding','Co-Branding', null)
];

print "\t<ul class=\"nav menu\">\n";
for ($i = 0; $i < count($linkAry); $i++) {
  $navClass = ($i==$activeSub) ? " active" : "";
	print "\t\t<li class=\"sn" . $i . $navClass . "\"><a href=\"" . $linkAry[$i] -> link . "\"><span class=\"item-wrap\">" . $linkAry[$i] -> getTtl() . "</span></a></li>\n";
}
print "\t</ul>\n";

if ($activeSub > 0) {
	$prvPage = $activeSub - 1;
	$prvLink = new NavLink($linkAry[$prvPage] -> link, $linkAry[$prvPage] -> getTtl(), $linkAry[$prvPage] -> access);
}
if ($activeSub < count($linkAry)) {
	$nxtPage = $activeSub + 1;
	$nxtLink = new NavLink($linkAry[$nxtPage] -> link, $linkAry[$nxtPage] -> getTtl(), $linkAry[$nxtPage] -> access);
}

?>
