<?php

function generate_dropdown($range = 100, $increment = 1, $placeholder = '') {
	foreach( range(1, $range, $increment) as $value) {
        echo '<option>' . $value . ' ' . $placeholder . '</option>'; 
    }
}