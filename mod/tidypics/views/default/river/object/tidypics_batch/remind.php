<?php
/**
 * Remind views
 */

$batch = $vars['item']->getObjectEntity();

// Get images related to this batch
$images = elgg_get_entities_from_relationship(array(
	'relationship' => 'belongs_to_batch',
	'relationship_guid' => $batch->getGUID(),
	'inverse_relationship' => true,
	'type' => 'object',
	'subtype' => 'image',
	'offset' => 0,
));

$album = $batch->getContainerEntity();
if (!$album) {
	// something went quite wrong - this batch has no associated album
	return true;
}
$album_link = elgg_view('output/url', array(
	'href' => $album->getURL(),
	'text' => $album->getTitle(),
	'is_trusted' => true,
));

$subject = $vars['item']->getSubjectEntity();
$subject_link = elgg_view('output/url', array(
	'href' => $subject->getURL(),
	'text' => $subject->name,
	'class' => 'elgg-river-subject',
	'is_trusted' => true,
));

$owner = get_entity($batch->getOwnerGUID());
$owner_link = elgg_view('output/url', array(
	'href' => $owner->getURL(),
	'text' => $owner->name,
	'class' => 'elgg-river-owner',
	'is_trusted' => true,
));

if (count($images) == 1){
	 $attachments = elgg_view_entity_icon($images[0], 'large', array('img_class'=>'large'));
}else{
	$attachments = '<ul class="tidypics-river-list">';
	foreach($images as $image) {
		$attachments .= '<li class="tidypics-photo-item">';
		$attachments .= elgg_view_entity_icon($image, 'medium');
		$attachments .= '</li>';
	}
	$attachments .= '</ul>';
}

$summary = elgg_echo("river:remind:object:tidypics_batch", array($subject_link, $owner_link));


echo elgg_view('river/elements/layout', array(
	'item' => $vars['item'],
	'attachments' => $attachments,
	'summary' => $summary,
));