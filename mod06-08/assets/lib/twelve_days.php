<?php 	


function getTitle() {
	return '12 Days of Christmas';

}

function getLyrics($day) {

	$days = array('first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh','eight','ninth','tenth','elevent','twelve');

	$gifts = array(

		'A Partridge in a Pear Tree',
		'Two Turtle Doves',
		'Three blah blah blah',
		'Four Calling Birds',
		'Five Golden Rings',
		'Six Geese a Laying',
		'Seven Swans a Swimming',
		'Eight Maids a Milking',
		'Nine Ladies Dancing',
		'Ten Lords a Leaping',
		'Eleven Pipers Piping',
		'Twelve Drummers Drumming'

	);


return $days[$day] . " " . $gifts[$day];

}
