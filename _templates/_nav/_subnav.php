<?php
$subLinkAry = [
#	new NavLink('#brand-story','Our Brand', null),
	new NavLink('#logo','Logo', null),
	new NavLink('#brand-symbol','Brand Symbol', null),
	new NavLink('#color','Color', null),
  new NavLink('#typography','Typography', null),
	new NavLink('#voice-and-tone','Voice & Tone', null),
	new NavLink('#photography','Photography', null),
	new NavLink('#sub-brands','Sub-Brands', null),
	new NavLink('#secondary-graphics','Secondary Graphics', null),
	new NavLink('#design-system','Design System', null),
	new NavLink('#co-branding','Co-Branding', null),
#	new NavLink('#inspiration-gallery','Inspiration Gallery',null),
#	new NavLink('#downloads','Downloads',null)
];

print "\t<ul class=\"nav menu\">\n";
for ($i = 0; $i < count($subLinkAry); $i++) {
  $navClass = ($i===$activeSub) ? " active" : "";
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
