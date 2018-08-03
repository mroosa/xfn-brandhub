<?php
$subLinkAry = [
	new NavLink($dir . 'design','Overview', null),
	new NavLink($dir . 'design/logo','Logo', null),
	new NavLink($dir . 'design/expressive-x','Expressive X', null),
	new NavLink($dir . 'design/sub-brands','Sub-Brands', null),
	new NavLink($dir . 'design/color','Color', null),
  new NavLink($dir . 'design/typography','Typography', null),
  new NavLink($dir . 'design/photography','Photography', null),
  new NavLink($dir . 'design/design-system','Design Systems', null),
	new NavLink($dir . 'design/co-branding','Co-Branding', null),
	new NavLink($dir . 'design/secondary-graphics','Secondary Graphics', null)
];

print "\t<ul class=\"nav menu\">\n";
for ($i = 0; $i < count($subLinkAry); $i++) {
  $navClass = ($i==$activeSub) ? " active" : "";
	print "\t\t<li class=\"sn" . $i . $navClass . "\"><a href=\"" . $subLinkAry[$i] -> link . "\"><span class=\"item-wrap\">" . $subLinkAry[$i] -> getTtl() . "</span></a></li>\n";
}
print "\t</ul>\n";

if ($activeSub > 0) {
	$prvPage = $activeSub - 1;
	$prvLink = new NavLink($subLinkAry[$prvPage] -> link, $subLinkAry[$prvPage] -> getTtl(), $subLinkAry[$prvPage] -> access);
}
if ($activeSub < count($subLinkAry)-1) {
	$nxtPage = $activeSub + 1;
	$nxtLink = new NavLink($subLinkAry[$nxtPage] -> link, $subLinkAry[$nxtPage] -> getTtl(), $subLinkAry[$nxtPage] -> access);
}

?>
