<?php
$linkAry = [
	new NavLink($dir . 'brand','Our Brand', null),
	new NavLink($dir . 'design','Design', null),
	new NavLink($dir . 'voice-and-messaging','Voice & Messaging', null)
];
print "\t<ul>\n";
for ($i = 0; $i < count($linkAry); $i++) {
	$navClass = ($i==$activeMain) ? " active" : "";
	print "\t\t<li class=\"mn" . $i . $navClass . "\"><a href=\"" . $linkAry[$i] -> link . "\"><span class=\"item-wrap\">" . $linkAry[$i] -> getTtl() . "</span></a></li>\n";
}
print "\t</ul>\n";
?>
