<?php
/**
 * Template for displaying search forms
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */
?>
<form>
<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search our stuff!" /> <button type="submit">Submit</button>


<div>
<?php
global $wp_query;
$total_results = $wp_query->found_posts;
?>
</div>
</form>