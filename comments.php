<h2>Commnents</h2>
<?php $args = array(
    'walker'            => null,
    'max_depth'         => '',
    'style'             => 'ul',
    'callback'          => null,
    'end-callback'      => null,
    'type'              => 'all',
    'page'              => '',
    'per_page'          => '',
    'avatar_size'       => 80,
    'reverse_top_level' => null,
    'reverse_children'  => '',
    'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
    'short_ping'        => false,   // @since 3.6
    'echo'              => true     // boolean, default is true
  );
?>
<?php wp_list_comments( $args, $comments) ?>

<?php
$form_args = array(
  //change the title of send button
  'label_submit' => 'Send',
  //Change the title of reply section
  'title_reply' => 'Write a Reply or Commnet',
  //remove 'text or html to be displayed after the set of comment fields'
  'comment_notes_after' => '',
  //redifine your own textarea(the comment body)
  'comment_field' => '<p class="comment-form-comment"><label for="commnet">' . _x( 'Comment', 'noun'). '</label><br/><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>'
);

 ?>
