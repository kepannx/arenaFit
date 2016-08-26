<?php
echo " 
<script>

$(document).ready(function(){

	'';

	var m1 = new Morris.Line({
		element: 'line-chart',

		data: [
		{ y: '1', a: 450000 },
		{ y: '2', a: 750000 },
		{ y: '3', a: 500000 },
		{ y: '4', a: 730000 },
		{ y: '5', a: 540000 },
		{ y: '6', a: 900000 },
		{ y: '7', a: 130000 },
		{ y: '8', a: 470000 }

		],
		xkey: 'y',
		ykeys: ['a'],
		labels: ['Día'],
		lineColors: ['#D9534F'],
		lineWidth: '5px',
		hideHover: true,
		gridTextColor: '#fff',
		grid: false
	});


});



</script>

	";

?>