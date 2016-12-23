<?php
/*
Plugin Name: TablePress Extension: Add link to column
Plugin URI: https://tablepress.org/
Description: Custom Extension for TablePress to add a link to a column with a get parameter
Version: 1.0
Author: Adam Silva
Author URI: http://www.adamsilva.com.br
*/

add_filter( 'tablepress_cell_content', 'tablepress_add_link_tablepress', 99, 4 );

/**
 * Add a link to the order page in the first column of each row in tablepress with a get parameter
 *
 * @since 1.7
 *
 * @param string $cell_content content in the current cell
 * @param integer $table table ID
 * @param integer $row_idx row number of the current cell
 * @param integer $col_idx column number of the current cell
 * @return string $cell_content return the modified content of the current cell
 */

function tablepress_add_link_tablepress( $cell_content, $table, $row_idx, $col_idx ) {

	$page_slug = 'order';
	$column_number = 1; // Sets the column which will receive the link

	if( $col_idx == $column_number && $row_idx != 1 ) { //exclude the first row in case it's the table header
		$link = home_url() . "/" . $page_slug . "?id=" . $cell_content; //set the link url with the id in the get parameter
		$cell_content = "<a href='$link'>" . $cell_content. "</a>";
	}

	return $cell_content;
}
