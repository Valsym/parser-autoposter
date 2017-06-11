<?php	                                       			   get_header(); ?>
<div class="span-24" id="contentwrap">
	<div class="span-13">
		<div id="content">	
<?php	$args = array( 'orderby' => 'title', 'order' => 'ASC'); 
$usequery = false;
//$query2 = new WP_Query( $args ); ?>
		<?php	                                       			   if (have_posts()) : ?>

 	  <?php	                                       			   $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php	                                       			   /* If this is a category archive */ if (is_category()) { ?>
		<p  class="pagetitle"><?php kama_breadcrumbs();
$ares = array(30, 297,296, 300, 301, 302,303,304,305,306,307,308,309,310,311,312,313,314,315,316,317,318,319,320,321);// Сортировка курортов по алфавиту
foreach((get_the_category($post)) as $category) { 
	if (in_array($category->cat_ID,$ares)) $usequery = true; 
} 
if ($usequery) {
  //query_posts( $query_string . '&orderby=title&order=ASC' );  ?>   
<form action="<?php bloginfo('url'); ?>/" method="get">
	<div>
<?php
$select = wp_dropdown_categories('show_count=1&orderby=name&hierarchical=1&child_of=296&hide_empty=1&echo=0');
$select = preg_replace("#<select([^>]*)>#", "<select$1 onchange='return this.form.submit()'>", $select);
echo $select;
?>
	<noscript><div><input type="submit" value="View" /></div></noscript>
	</div></form>
<form class="filter" action="" method="get"> <!-- action пустой, чтобы ссылалось на текущую страницу -->
	<label>Перепад, м от: <!-- Интервал значений перепад -->
		<input type="number" name="drop_ot"/>
	</label>
	<label>до: 
		<input type="number" name="drop_do"/>
	</label>
	<br />
	<label>Километраж, км от: <!-- Интервал значений км -->
		<input type="number" name="kms_ot"/>
	</label>
	<label>до: 
		<input type="number" name="kms_do"/>
	</label>
	<br />
	<label>По названию: 
		<input type="text" name="keyword"/> <!-- Ключевое слово -->
	</label>

	<button type="submit">Отфильтровать</button>
</form>

<?php // Это надо добавить перед циклом записей в шаблоне вывода фильтруемых постов, ну т.е. куда мы сунули нашу форму.
	if ($_GET && !empty($_GET)) { // если было передано что-то из формы
	go_filter(); // запускаем функцию фильтрации
        } else query_posts( $query_string . '&orderby=title&order=ASC' ); 
?>