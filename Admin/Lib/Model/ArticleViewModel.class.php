<?php
class ArticleViewModel extends ViewModel {
	public $viewFields = array(
		'article' => array(
			'aid',
			'content',
			'source',
			'editor',
			'category',
			'title',
			'author',
			'date',
			'visibility',
			'priority',
		),

		/*'Category' => array(
			'title' => 'ctitle',
			'_on' => 'Category.id=Article.catid'
		),*/
	);
}
?>