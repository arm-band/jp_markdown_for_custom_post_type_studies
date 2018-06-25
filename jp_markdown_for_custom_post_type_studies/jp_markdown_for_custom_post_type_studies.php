<?php
/*
Plugin Name: JP Markdown for Custom Post Type Studies
Description: 投稿タイプ「考察」でJP MarkdownによるMarkdownパースを有効にする
Version: 0.0.2
Author: アルム＝バンド
*/
add_action('init', 'studies_init');
function studies_init() {
	add_post_type_support('studies', 'wpcom-markdown');
	add_post_type_support('studynotes', 'wpcom-markdown');
}