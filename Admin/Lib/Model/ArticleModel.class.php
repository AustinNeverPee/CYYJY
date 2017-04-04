<?php
class ArticleModel extends Model {
	protected $_auto = array(
		array('visibility', 'getVisibility', 1, 'callback'),
	);
	
	function getVisibility() {
		return '1';
	}
}?>