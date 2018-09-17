<?php
$subLinkAry = [
	new NavLink($dir . 'design','Overview', null)
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
