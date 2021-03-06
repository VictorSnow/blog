<?php
add_filter('option_tree_settings_args', 'tally_social_icons_ot_options');
function tally_social_icons_ot_options($custom_settings){
	$custom_settings['sections'][] = array( 'id' => 'social_icons','title' => 'Social Icons');
	
	$custom_settings['settings']['enable_social_icons'] = array(
        'id'          => 'enable_social_icons',
        'label'       => __('Enable Social Icons', 'tally_taxdomain'),
        'desc'        => '',
        'std'         => tally_option_std('enable_social_icons'),
        'type'        => 'select',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array( 
			array('value' => '','label' => '--','src' => ''),
			array('value' => 'yes','label' => 'Yes','src' => ''),
			array('value' => 'no','label' => 'No','src' => '')
        ),
	);
	
	$custom_settings['settings']['social_icons'] = array(
        'id'          => 'social_icons',
        'label'       => __('Social Icons', 'tally_taxdomain'),
        'desc'        => '',
        'std'         => tally_option_std('social_icons'),
        'type'        => 'list-item',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'settings'    => array(
			array(
				'id'          => 'link',
				'label'       => __('Link', 'tally_taxdomain'),
				'desc'        => '',
				'std'         => '',
				'type'        => 'text',
				'section'     => '',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'choices'     => '',
			),
			array(
				'id'          => 'icon',
				'label'       => __('Select a Icon', 'tally_taxdomain'),
				'desc'        => '',
				'std'         => '',
				'type'        => 'select',
				'section'     => '',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'choices'     => array( 
					array('value' => 'fa-dribbble', 'label' => 'Dribbble'),
					array('value' => 'fa-pinterest', 'label' => 'Pinterest'),
					array('value' => 'fa-stack-overflow', 'label' => 'Stack Overflow'),
					array('value' => 'fa-twitter', 'label' => 'Twitter'),
					array('value' => 'fa-dropbox', 'label' => 'dropbox'),
					array('value' => 'fa-instagram', 'label' => 'instagram'),
					array('value' => 'fa-renren', 'label' => 'renren'),
					array('value' => 'fa-youtube-play', 'label' => 'youtube'),
					array('value' => 'fa-facebook', 'label' => 'facebook'),
					array('value' => 'fa-google-plus', 'label' => 'google-plus'),
					array('value' => 'fa-skype', 'label' => 'skype'),
					array('value' => 'fa-tumblr', 'label' => 'tumblr'),
					array('value' => 'fa-vimeo-square', 'label' => 'vimeo'),
					array('value' => 'fa-bitbucket', 'label' => 'bitbucket'),
					array('value' => 'fa-github-alt', 'label' => 'github'),
					array('value' => 'fa-linkedin', 'label' => 'linkedin'),
					array('value' => 'fa-pinterest', 'label' => 'pinterest'),
					array('value' => 'fa-stack-exchange', 'label' => 'stack-exchange'),
				),
			),
			
		),
	);
	
	return $custom_settings;
}