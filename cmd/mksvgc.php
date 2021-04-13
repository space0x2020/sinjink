<?php

$height=3000;
$xoffset=260;
$ydelta= 25;
$ytext=5;
$list = [
'garrow1_15',
'garrow1_20',
'garrow1_25',
'garrow1_30',
'garrow1_35',
'garrow1_40',
'garrow1_45',
'garrow1_50',
'garrow1_60',
'garrow1_70',
'garrow1_75',
'garrow1_80',
'garrow1_90',
'garrow1_100',
'garrow1_110',
'garrow1_120',
'garrow1_140',
'garrow1_160',
'garrow1_230',
'garrow1_260',
'garrow1_420',
'garrow2_30',
'garrow2_30r',
'garrow2_80',
'garrow2_80r',
'garrow2_90',
'garrow2_90r',
'garrow2_100',
'garrow2_100r',
'garrow2_110',
'garrow2_120',
'garrow2_130',
'garrow2_140',
'garrow2_150',
'garrow2_160',
'garrow2_170',
'garrow2_180',
'garrow2_260',
'garrowhead1_10L',
'garrowhead1_10U',
'garrowhead1_10R',
'garrowhead1_10D',
'garrowhead1_10L_red',
'garrowhead1_10U_red',
'garrowhead1_10R_red',
'garrowhead1_10D_red',
'garrowhead1_10L_act',
'garrowhead1_10U_act',
'garrowhead1_10R_act',
'garrowhead1_10D_act',
'garrowheadc_10L',
'garrowheadc_10U',
'garrowheadc_10R',
'garrowheadc_10D',
'garrowheadc_15L',
'garrowheadc_15U',
'garrowheadc_15R',
'garrowheadc_15D',
'garrowheadcw_10L',
'garrowheadcw_10U',
'garrowheadcw_10R',
'garrowheadcw_10D',
'garrowheadcw_10L_yellow',
'garrowheadcw_10U_yellow',
'garrowheadcw_10R_yellow',
'garrowheadcw_10D_yellow',
'garrowheadcw_10L_red',
'garrowheadcw_10U_red',
'garrowheadcw_10R_red',
'garrowheadcw_10D_red',
'garrowheadcw_10L_act',
'garrowheadcw_10U_act',
'garrowheadcw_10R_act',
'garrowheadcw_10D_act',
'garrowheadcw_15L',
'garrowheadcw_15U',
'garrowheadcw_15R',
'garrowheadcw_15D',
'garrowheadcw_15L_yellow',
'garrowheadcw_15U_yellow',
'garrowheadcw_15R_yellow',
'garrowheadcw_15D_yellow',
'garrowheadcw_15L_red',
'garrowheadcw_15U_red',
'garrowheadcw_15R_red',
'garrowheadcw_15D_red',
'garrowheadcw_15L_act',
'garrowheadcw_15U_act',
'garrowheadcw_15R_act',
'garrowheadcw_15D_act',
'garrowheadc_16',
'garrowheadcw_10',
'warrow1_25',
'warrow1_40',
'rarrow1_40',
'rarrow1_50',
'rarrow1_60',
'rarrow1_70',
'rarrow1_80',
'rarrow1h_40',
'rarrow1h_50',
'rarrow1h_60',
'rarrow1h_70',
'rarrow1h_80',
'gdiamond_10L',
'gdiamond_10U',
'gdiamond_10R',
'gdiamond_10D',
'gdiamond_15L',
'gdiamond_15U',
'gdiamond_15R',
'gdiamond_15D',
'nosign',
'messure',
];

print '<html>' . "\n";
print '<head>' . "\n";
print '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">' . "\n";
print '<link rel="stylesheet" type="text/css" href="style.css">' . "\n";
print '<link rel="stylesheet" type="text/css" href="samplesrc_style.css">' . "\n";
print '<title>SVG </title>' . "\n";
print '</head>' . "\n";
print '<body>' . "\n\n";
print '#include "style_svg.css"' . "\n\n";
print '<div id="svgdefs" style="display:none;">' . "\n";
print '  <svg>' . "\n";
print '#include "svg_components.svg"' . "\n";
print '  </svg>' . "\n";
print '</div>' . "\n";
print "\n";

print '<div id="campus" class="basepane">' . "\n";
print '<div class="pagebody" style="float:clear;">' . "\n";
print '<svg xmlns="http://www.w3.org/2000/svg" width="700" height="';
print $height;
print '" viewBox="0 0 700 ';
print $height;
print '">' . "\n";

print '  <g id="svg_component_0001" transform="translate(' . $xoffset . ',30)">' . "\n";
#print '  <line class="ff" x1="-2" y1="-20" x2="-2" y2="1000" />' . "\n";

$y = 0;
foreach ($list as $l) {
  print '  <text class="ff" ';
  print 'x="' . -$xoffset . '" y="' . ($y + $ytext) . '" text-anchor="left">';
  print $l . '</text>' . "\n";
  print '  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#' . $l . '" transform="translate(0,' . $y . ')"></use>' . "\n";
  $y += $ydelta;
}

print '</svg>'. "\n";
print '</div> <!-- pagebody -->' . "\n";
print '</div><!-- campus -->' . "\n";
print '</body>' . "\n";
print '</html>' . "\n";
