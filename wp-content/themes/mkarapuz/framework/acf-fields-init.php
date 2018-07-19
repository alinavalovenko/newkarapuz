<?php
if (function_exists('acf_add_local_field_group')):

    acf_add_local_field_group(array (
        'key'    => 'group_casino_details',
        'title'  => esc_html__('Casino Details', 'mKARAPUZ_'),
        'fields' => array (
            array (
                'key'       => 'KARAPUZ_casino_visibility',
                'label'     => esc_html__('Casino Visibility', 'mKARAPUZ_'),
                'name'      => 'casino_visibility',
                'type'      => 'checkbox',
                'choices'   => array(
                    'on' => esc_html__('Hide in lists', 'mKARAPUZ_'),
                ),
            ),

            array (
                'key'   => 'KARAPUZ_casino_title',
                'label' => esc_html__('Casino Title', 'mKARAPUZ_'),
                'name'  => 'casino_title',
                'type'  => 'text',
            ),

            array (
                'key'   => 'KARAPUZ_casino_url',
                'label' => esc_html__('Casino URL', 'mKARAPUZ_'),
                'name'  => 'casino_url',
                'type'  => 'text',
            ),

            array (
                'key'     => 'KARAPUZ_casino_type',
                'label'   => esc_html__('Casino Type', 'mKARAPUZ_'),
                'name'    => 'casino_type',
                'type'    => 'select',
                'choices' => array(
                    'casino'     => esc_html__('Casino', 'mKARAPUZ_'),
                    'bingo'      => esc_html__('Bingo', 'mKARAPUZ_'),
                    'sportsbook' => esc_html__('Sportsbook', 'mKARAPUZ_'),
                ),
                'wrapper' => array (
                    'width' => '33%',
                ),
            ),

            array (
                'key'       => 'KARAPUZ_casino_license',
                'label'     => esc_html__('Casino License', 'mKARAPUZ_'),
                'name'      => 'casino_license',
                'type'      => 'select',
                'choices'   => array(
                    'default'   => esc_html__('Default (by location)', 'mKARAPUZ_'),
                    'alderney'  => esc_html__('Alderney', 'mKARAPUZ_'),
                    'curacao'   => esc_html__('Curacao', 'mKARAPUZ_'),
                    'malta'     => esc_html__('Malta', 'mKARAPUZ_'),
                    'gibraltar' => esc_html__('Gibraltar', 'mKARAPUZ_'),
                ),
                'wrapper' => array (
                    'width' => '33%',
                ),
            ),

            array (
                'key'     => 'KARAPUZ_casino_rating',
                'label'   => esc_html__('Casino Rating', 'mKARAPUZ_'),
                'name'    => 'casino_rating',
                'type'    => 'range',
                'min'     => '0',
                'max'     => '5',
                'step'    => '0.5',
                'wrapper' => array (
                    'width' => '33%',
                ),
            ),

            array (
                'key'               => 'KARAPUZ_casino_blockquote',
                'label'             => esc_html__('Blockquote', 'mKARAPUZ_'),
                'name'              => 'casino_blockquote',
                'type'              => 'textarea',
                'rows'              => '4',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param'     => 'post_type',
                    'operator'  => '==',
                    'value'     => 'casino',
                ),
            ),
        ),
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
    ));

    acf_add_local_field_group(array (
        'key' => 'group_casino_quick_info',
        'title' => esc_html__('Quick Info', 'mKARAPUZ_'),
        'fields' => array (
            array (
                'key'               => 'KARAPUZ_casino_nd_bonus',
                'label'             => esc_html__('No Deposit Bonus', 'mKARAPUZ_'),
                'name'              => 'casino_nd_bonus',
                'type'              => 'text',
                'wrapper'           => array (
                    'width' => '25%',
                ),
            ),

            array (
                'key'                => 'KARAPUZ_casino_nd_rating',
                'label'              => esc_html__('No Deposit Rating', 'mKARAPUZ_'),
                'name'               => 'casino_nd_rating',
                'type'               => 'range',
                'min'                => '0',
                'max'                => '5',
                'step'               => '1',
                'wrapper'            => array (
                    'width' => '75%',
                ),
            ),

            array (
                'key'               => 'KARAPUZ_casino_fd_bonus',
                'label'             => esc_html__('First Deposit Bonus', 'mKARAPUZ_'),
                'name'              => 'casino_fd_bonus',
                'type'              => 'text',
                'wrapper'           => array (
                    'width' => '25%',
                ),
            ),

            array (
                'key'                => 'KARAPUZ_casino_fd_rating',
                'label'              => esc_html__('First Deposit Rating', 'mKARAPUZ_'),
                'name'               => 'casino_fd_rating',
                'type'               => 'range',
                'min'                => '0',
                'max'                => '5',
                'step'               => '1',
                'wrapper'            => array (
                    'width' => '75%',
                ),
            ),

            array (
                'key'               => 'KARAPUZ_casino_wagering_requirements',
                'label'             => esc_html__('Wagering Requirements', 'mKARAPUZ_'),
                'name'              => 'casino_wagering_requirements',
                'type'              => 'text',
                'wrapper'           => array (
                    'width' => '25%',
                ),
            ),

            array (
                'key'                => 'KARAPUZ_casino_w_rating',
                'label'              => esc_html__('Wagering Rating', 'mKARAPUZ_'),
                'name'               => 'casino_w_rating',
                'type'               => 'range',
                'min'                => '0',
                'max'                => '5',
                'step'               => '1',
                'wrapper'            => array (
                    'width' => '75%',
                ),
            ),

            array (
                'key'                => 'KARAPUZ_casino_tb_rating',
                'label'              => esc_html__('Total Bonus Rating', 'mKARAPUZ_'),
                'name'               => 'casino_tb_rating',
                'type'               => 'range',
                'min'                => '0',
                'max'                => '5',
                'step'               => '0.1',
            ),

            array (
                'key'                => 'KARAPUZ_casino_play_in_browser',
                'label'              => esc_html__('Play in browser', 'mKARAPUZ_'),
                'name'               => 'casino_play_in_browser',
                'type'               => 'radio',
                'choices' => array(
                    'yes'	=> esc_html__('Yes', 'mKARAPUZ_'),
                    'no'	=> esc_html__('No', 'mKARAPUZ_'),
                    'hide'  => esc_html__('Hide', 'mKARAPUZ_'),
                ),
                'layout'             => 'horizontal',
                'wrapper'            => array (
                    'width' => '25%',
                ),
            ),

            array (
                'key'                => 'KARAPUZ_casino_download',
                'label'              => esc_html__('Download Casino', 'mKARAPUZ_'),
                'name'               => 'casino_download',
                'type'               => 'radio',
                'choices' => array(
                    'yes'	=> esc_html__('Yes', 'mKARAPUZ_'),
                    'no'	=> esc_html__('No', 'mKARAPUZ_'),
                    'hide'  => esc_html__('Hide', 'mKARAPUZ_'),
                ),
                'other_choice'       => 0,
                'save_other_choice'  => 0,
                'layout'             => 'horizontal',
                'wrapper'            => array (
                    'width' => '25%',
                ),
            ),

            array (
                'key'                => 'KARAPUZ_casino_mobile',
                'label'              => esc_html__('Mobile Casino', 'mKARAPUZ_'),
                'name'               => 'casino_mobile',
                'type'               => 'radio',
                'choices' => array(
                    'yes'	=> esc_html__('Yes', 'mKARAPUZ_'),
                    'no'	=> esc_html__('No', 'mKARAPUZ_'),
                    'hide'  => esc_html__('Hide', 'mKARAPUZ_'),
                ),

                'layout'             => 'horizontal',
                'wrapper'            => array (
                    'width' => '25%',
                ),
            ),

            array (
                'key'                => 'KARAPUZ_casino_live',
                'label'              => esc_html__('Live Casino', 'mKARAPUZ_'),
                'name'               => 'casino_live',
                'type'               => 'radio',
                'choices' => array(
                    'yes'	=> esc_html__('Yes', 'mKARAPUZ_'),
                    'no'	=> esc_html__('No', 'mKARAPUZ_'),
                    'hide'  => esc_html__('Hide', 'mKARAPUZ_'),
                ),
                'layout'             => 'horizontal',
                'wrapper'            => array (
                    'width' => '25%',
                ),
            ),

            array (
                'key'                => 'KARAPUZ_casino_aams_licensed',
                'label'              => esc_html__('AAMS licensed', 'mKARAPUZ_'),
                'name'               => 'casino_aams_licensed',
                'type'               => 'radio',
                'choices' => array(
                    'yes'	=> esc_html__('Yes', 'mKARAPUZ_'),
                    'no'	=> esc_html__('No', 'mKARAPUZ_'),
                    'hide'  => esc_html__('Hide', 'mKARAPUZ_'),
                ),
                'layout'             => 'horizontal',
                'wrapper'            => array (
                    'width' => '25%',
                ),
            ),

            array (
                'key'                => 'KARAPUZ_casino_vip_club',
                'label'              => esc_html__('VIP Club', 'mKARAPUZ_'),
                'name'               => 'casino_vip_club',
                'type'               => 'radio',
                'choices' => array(
                    'yes'	=> esc_html__('Yes', 'mKARAPUZ_'),
                    'no'	=> esc_html__('No', 'mKARAPUZ_'),
                    'hide'  => esc_html__('Hide', 'mKARAPUZ_'),
                ),
                'layout'             => 'horizontal',
                'wrapper'            => array (
                    'width' => '25%',
                ),
            ),

            array (
                'key'                => 'KARAPUZ_casino_daily_chat_games',
                'label'              => esc_html__('Daily Chat Games', 'mKARAPUZ_'),
                'name'               => 'casino_daily_chat_games',
                'type'               => 'radio',
                'choices' => array(
                    'yes'	=> esc_html__('Yes', 'mKARAPUZ_'),
                    'no'	=> esc_html__('No', 'mKARAPUZ_'),
                    'hide'  => esc_html__('Hide', 'mKARAPUZ_'),
                ),
                'other_choice'       => 0,
                'save_other_choice'  => 0,
                'layout'             => 'horizontal',
                'wrapper'            => array (
                    'width' => '25%',
                ),
            ),

            array (
                'key'                => 'KARAPUZ_casino_minigames',
                'label'              => esc_html__('Minigames', 'mKARAPUZ_'),
                'name'               => 'casino_minigames',
                'type'               => 'radio',
                'choices' => array(
                    'yes'	=> esc_html__('Yes', 'mKARAPUZ_'),
                    'no'	=> esc_html__('No', 'mKARAPUZ_'),
                    'hide'  => esc_html__('Hide', 'mKARAPUZ_'),
                ),
                'layout'             => 'horizontal',
                'wrapper'            => array (
                    'width' => '25%',
                ),
            ),

            array (
                'key'   => 'KARAPUZ_casino_address',
                'label' => esc_html__('Casino Address', 'mKARAPUZ_'),
                'name'  => 'casino_address',
                'type'  => 'text',
            ),

            array (
                'key'   => 'KARAPUZ_casino_email',
                'label' => esc_html__('Casino Email', 'mKARAPUZ_'),
                'name'  => 'casino_email',
                'type'  => 'text',
            ),

            array (
                'key'          => 'KARAPUZ_casino_reasons_to_play',
                'label'        => 'Reasons to play',
                'name'         => 'casino_reasons_to_play',
                'type'         => 'textarea',
                'instructions' => 'Separate items with enter',
                'wrapper'      => array (
                    'width' => '50%',
                ),
                'rows'         => '4',
            ),

            array (
                'key'          => 'KARAPUZ_casino_slot_popup_usps',
                'label'        => esc_html__('Slot-popup USPs', 'mKARAPUZ_'),
                'name'         => 'casino_reasons_to_play',
                'type'         => 'textarea',
                'instructions' => 'Separate items with enter',
                'wrapper'      => array (
                    'width' => '50%',
                ),
                'rows'         => '4',
            ),

            array (
                'key'          => 'KARAPUZ_casino_pros',
                'label'        => esc_html__('Pros', 'mKARAPUZ_'),
                'name'         => 'casino_pros',
                'type'         => 'textarea',
                'instructions' => 'Separate items with enter',
                'wrapper'      => array (
                    'width' => '50%',
                ),
                'rows'         => '4',
            ),

            array (
                'key'               => 'KARAPUZ_casino_cons',
                'label'             => esc_html__('Cons', 'mKARAPUZ_'),
                'name'              => 'casino_cons',
                'type'              => 'textarea',
                'instructions'      => 'Separate items with enter',
                'wrapper'           => array (
                    'width' => '50%',
                ),
                'rows'              => '4',
            ),

            array (
                'key'                => 'KARAPUZ_casino_payment_methods',
                'label'              => 'Payment methods',
                'name'               => 'casino_payment_methods',
                'type'               => 'select',
                'choices'            => array(
                    'postepay'          => esc_html__('Postepay', 'mKARAPUZ_'),
                    'visa'              => esc_html__('Visa', 'mKARAPUZ_'),
                    'visa_electron'     => esc_html__('Visa Electron', 'mKARAPUZ_'),
                    'master_card'       => esc_html__('Master Card', 'mKARAPUZ_'),
                    'maestro'           => esc_html__('Maestro', 'mKARAPUZ_'),
                    'paypal'            => esc_html__('Paypal', 'mKARAPUZ_'),
                    'skrill'            => esc_html__('Skrill', 'mKARAPUZ_'),
                    'click_and_buy'     => esc_html__('Click And Buy', 'mKARAPUZ_'),
                    'entropay'          => esc_html__('Entropay', 'mKARAPUZ_'),
                    'neteller'          => esc_html__('Neteller', 'mKARAPUZ_'),
                    'paysafecard'       => esc_html__('Paysafecard', 'mKARAPUZ_'),
                    'bonifico_bancario' => esc_html__('Bonifico Bancario', 'mKARAPUZ_'),
                    'mister_cash'       => esc_html__('Mister Cash', 'mKARAPUZ_'),
                    'ideal'             => esc_html__('iDeal', 'mKARAPUZ_'),
                    'trustly'           => esc_html__('Trustly', 'mKARAPUZ_'),
                ),
                'wrapper'            => array (
                    'width' => '50%',
                ),
                'multiple'           => true,
            ),
        ),
        'location' => array (
            array (
                array (
                    'param'     => 'post_type',
                    'operator'  => '==',
                    'value'     => 'casino',
                ),
            ),
        ),
        'menu_order'            => 1,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen'        => '',
    ));

    acf_add_local_field_group(array (
        'key' => 'group_casino_advertisement',
        'title' => 'Advertisement',
        'fields' => array (
            array (
                'key'           => 'KARAPUZ_casino_featured_for_software',
                'label'         => esc_html__('Featured for software', 'mKARAPUZ_'),
                'name'          => 'casino_featured_for_software',
                'type'          => 'taxonomy',
                'taxonomy'      => 'game-provider',
                'field_type'    => 'checkbox',
                'return_format' => 'id',
                'wrapper'            => array (
                    'width' => '50%',
                ),
            ),

            array (
                'key'           => 'KARAPUZ_casino_fallback',
                'label'         => esc_html__('Mobile casino fallback', 'mKARAPUZ_'),
                'name'          => 'casino_featured_fallback',
                'type'          => 'post_object',
                'post_type'     => 'casino',
                'return_format' => 'id',
                'wrapper'            => array (
                    'width' => '50%',
                ),
            ),

            array (
                'key'     => 'KARAPUZ_casino_ad',
                'label'   => esc_html__('Text ad', 'mKARAPUZ_'),
                'name'    => 'casino_text_ad',
                'type'    => 'text',
                'wrapper' => array (
                    'width' => '33%',
                ),
            ),

            array (
                'key'               => 'KARAPUZ_casino_ad_url',
                'label'             => esc_html__('Text ad URL', 'mKARAPUZ_'),
                'name'              => 'casino_text_ad_url',
                'type'              => 'text',
                'wrapper'           => array (
                    'width' => '33%',
                ),
                'placeholder'       => 'Leave empty for default',
            ),

            array (
                'key'     => 'KARAPUZ_casino_new_text_ad',
                'label'   => esc_html__('New text ad', 'mKARAPUZ_'),
                'name'    => 'casino_new_text_ad',
                'type'    => 'text',
                'wrapper' => array (
                    'width' => '33%',
                ),
            ),

            array (
                'key'           => 'KARAPUZ_casino_skyscraper_banner',
                'label'         => esc_html__('Skyscraper banner (220x500)', 'mKARAPUZ_'),
                'name'          => 'casino_skyscraper_banner',
                'type'          => 'image',
                'wrapper'       => array(
                    'width' => '30%',
                ),
                'return_format' => 'id',
                'preview_size'  => 'full',
                'library'       => 'all',
            ),

            array (
                'key'     => 'KARAPUZ_casino_skyscraper_banner_url',
                'label'   => esc_html__('Custom URL', 'mKARAPUZ_'),
                'name'    => 'casino_skyscraper_banner_url',
                'type'    => 'text',
                'wrapper' => array (
                    'width' => '70%',
                ),
            ),

            array (
                'key'           => 'KARAPUZ_casino_header_banner',
                'label'         => esc_html__('Header banner (1280x80)', 'mKARAPUZ_'),
                'name'          => 'casino_header_banner',
                'type'          => 'image',
                'wrapper'       => array(
                    'width' => '30%',
                ),
                'return_format' => 'id',
                'preview_size'  => 'full',
                'library'       => 'all',
            ),

            array (
                'key'     => 'KARAPUZ_casino_header_banner_url',
                'label'   => esc_html__('Custom URL', 'mKARAPUZ_'),
                'name'    => 'casino_header_banner_url',
                'type'    => 'text',
                'wrapper' => array (
                    'width' => '70%',
                ),
            ),

            array (
                'key'           => 'KARAPUZ_casino_mobile_banner',
                'label'         => esc_html__('Mobile banner (450x300)', 'mKARAPUZ_'),
                'name'          => 'casino_mobile_banner',
                'type'          => 'image',
                'wrapper'       => array(
                    'width' => '30%',
                ),
                'return_format' => 'id',
                'preview_size'  => 'full',
                'library'       => 'all',
            ),

            array (
                'key'     => 'KARAPUZ_casino_mobile_banner_url',
                'label'   => esc_html__('Custom URL', 'mKARAPUZ_'),
                'name'    => 'casino_mobile_banner_url',
                'type'    => 'text',
                'wrapper' => array (
                    'width' => '70%',
                ),
            ),

            array (
                'key'           => 'KARAPUZ_casino_sidebar_banner_1',
                'label'         => esc_html__('Sidebar banner #1 (160x945)', 'mKARAPUZ_'),
                'name'          => 'casino_sidebar_banner_1',
                'type'          => 'image',
                'wrapper'       => array(
                    'width' => '30%',
                ),
                'return_format' => 'id',
                'preview_size'  => 'full',
                'library'       => 'all',
            ),

            array (
                'key'     => 'KARAPUZ_casino_sidebar_banner_1_url',
                'label'   => esc_html__('Custom URL', 'mKARAPUZ_'),
                'name'    => 'casino_sidebar_banner_1_url',
                'type'    => 'text',
                'wrapper' => array (
                    'width' => '70%',
                ),
            ),

            array (
                'key'           => 'KARAPUZ_casino_sidebar_banner_2',
                'label'         => esc_html__('Sidebar banner #2 (160x945)', 'mKARAPUZ_'),
                'name'          => 'casino_sidebar_banner_2',
                'type'          => 'image',
                'wrapper'       => array(
                    'width' => '30%',
                ),
                'return_format' => 'id',
                'preview_size'  => 'full',
                'library'       => 'all',
            ),

            array (
                'key'     => 'KARAPUZ_casino_sidebar_banner_2_url',
                'label'   => esc_html__('Custom URL', 'mKARAPUZ_'),
                'name'    => 'casino_sidebar_banner_2_url',
                'type'    => 'text',
                'wrapper' => array (
                    'width' => '70%',
                ),
            ),

            array (
                'key'           => 'KARAPUZ_casino_popup_banner',
                'label'         => esc_html__('Popup banner (600x400)', 'mKARAPUZ_'),
                'name'          => 'casino_popup_banner',
                'type'          => 'image',
                'wrapper'       => array(
                    'width' => '30%',
                ),
                'return_format' => 'id',
                'preview_size'  => 'full',
                'library'       => 'all',
            ),

            array (
                'key'     => 'KARAPUZ_casino_popup_banner_url',
                'label'   => esc_html__('Custom URL', 'mKARAPUZ_'),
                'name'    => 'casino_popup_banner_url',
                'type'    => 'text',
                'wrapper' => array (
                    'width' => '70%',
                ),
            ),

            array (
                'key'           => 'KARAPUZ_casino_slot_page_top_banner',
                'label'         => esc_html__('Slot page top banner (1280x40)', 'mKARAPUZ_'),
                'name'          => 'casino_sidebar_banner_1',
                'type'          => 'image',
                'wrapper'       => array(
                    'width' => '30%',
                ),
                'return_format' => 'id',
                'preview_size'  => 'full',
                'library'       => 'all',
            ),

            array (
                'key'     => 'KARAPUZ_casino_slot_page_top_banner_url',
                'label'   => esc_html__('Custom URL', 'mKARAPUZ_'),
                'name'    => 'casino_slot_page_banner_url',
                'type'    => 'text',
                'wrapper' => array (
                    'width' => '70%',
                ),
            ),
        ),
        'location' => array (
            array (
                array (
                    'param'     => 'post_type',
                    'operator'  => '==',
                    'value'     => 'casino',
                ),
            ),
        ),
        'menu_order'            => 2,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen'        => '',
    ));

    acf_add_local_field_group(array (
        'key'    => 'group_casino_bonus',
        'title'  => esc_html__('Casino bonus', 'mKARAPUZ_'),
        'fields' => array (

            array (
                'key'     => 'KARAPUZ_casino_bonus_code',
                'label'   => esc_html__('Bonus code', 'mKARAPUZ_'),
                'name'    => 'casino_bonus_code',
                'type'    => 'text',
            ),

            array (
                'key'     => 'KARAPUZ_casino_header_bonus_text',
                'label'   => esc_html__('Header Bonus Text', 'mKARAPUZ_'),
                'name'    => 'casino_header_bonus_text',
                'type'    => 'text',
            ),

            array (
                'key'     => 'KARAPUZ_casino_second_bonus_text',
                'label'   => esc_html__('Bonus code', 'mKARAPUZ_'),
                'name'    => 'casino_second_bonus_text',
                'type'    => 'text',
            ),

            array (
                'key'     => 'KARAPUZ_casino_payoff_text',
                'label'   => esc_html__('Payoff Text', 'mKARAPUZ_'),
                'name'    => 'casino_payoff_text',
                'type'    => 'text',
            ),

            array(
                'key'       => 'KARAPUZ_casino_basic_bonuses_tab',
                'label'     => esc_html__('Basic bonuses', 'mKARAPUZ_'),
                'name'      => 'casino_basic_bonuses_tab',
                'type'      => 'tab',
                'placement' => 'top',
            ),

            array (
                'key'     => 'KARAPUZ_casino_basic_deposit_bonus_amount',
                'label'   => esc_html__('Deposit bonus amount', 'mKARAPUZ_'),
                'name'    => 'casino_deposit_bonus_amount',
                'type'    => 'text',
                'wrapper' => array (
                    'width' => '33%',
                ),
            ),

            array (
                'key'     => 'KARAPUZ_casino_basic_deposit_bonus_percent',
                'label'   => esc_html__('Deposit bonus percent', 'mKARAPUZ_'),
                'name'    => 'casino_deposit_bonus_percent',
                'type'    => 'text',
                'wrapper' => array (
                    'width' => '33%',
                ),
            ),

            array (
                'key'     => 'KARAPUZ_casino_basic_deposit_bonus_free_spins',
                'label'   => esc_html__('Deposit bonus free spins', 'mKARAPUZ_'),
                'name'    => 'casino_deposit_bonus_free_spins',
                'type'    => 'text',
                'wrapper' => array (
                    'width' => '34%',
                ),
            ),

            array (
                'key'     => 'KARAPUZ_casino_basic_no_deposit_bonus_amount',
                'label'   => esc_html__('No deposit bonus amount', 'mKARAPUZ_'),
                'name'    => 'casino_no_deposit_bonus_amount',
                'type'    => 'text',
                'wrapper' => array (
                    'width' => '33%',
                ),
            ),

            array (
                'key'     => 'KARAPUZ_casino_basic_no_deposit_bonus_free_spins',
                'label'   => esc_html__('No deposit bonus free spins', 'mKARAPUZ_'),
                'name'    => 'casino_no_deposit_bonus_free_spins',
                'type'    => 'text',
                'wrapper' => array (
                    'width' => '33%',
                ),
            ),

            array (
                'key'     => 'KARAPUZ_casino_basic_no_deposit_bonus_steps',
                'label'   => esc_html__('No deposit bonus steps', 'mKARAPUZ_'),
                'name'    => 'casino_no_deposit_bonus_free_spins',
                'type'    => 'textarea',
                'wrapper' => array (
                    'width' => '34%',
                ),
            ),

            array(
                'key' => 'KARAPUZ_casino_exclusive_bonuses_tab',
                'label' => esc_html__('Exclusive bonuses', 'mKARAPUZ_'),
                'name' => 'casino_exclusive_bonuses_tab',
                'type' => 'tab',
                'placement' => 'top',
            ),

            array (
                'key'   => 'KARAPUZ_casino_exclusive_deposit_bonus_amount',
                'label' => esc_html__('Deposit bonus amount', 'mKARAPUZ_'),
                'name'  => 'casino_exclusive_deposit_bonus_amount',
                'type'  => 'text',
            ),

            array (
                'key'   => 'KARAPUZ_casino_exclusive_deposit_bonus_percent',
                'label' => esc_html__('Deposit bonus percent', 'mKARAPUZ_'),
                'name'  => 'casino_exclusive_deposit_bonus_percent',
                'type'  => 'text',
            ),

            array (
                'key'   => 'KARAPUZ_casino_exclusive_deposit_bonus_free_spins',
                'label' => esc_html__('Deposit bonus free spins', 'mKARAPUZ_'),
                'name'  => 'casino_exclusive_deposit_bonus_free_spins',
                'type'  => 'text',
            ),

            array (
                'key'   => 'KARAPUZ_casino_exclusive_no_deposit_bonus_amount',
                'label' => esc_html__('No deposit bonus amount', 'mKARAPUZ_'),
                'name'  => 'casino_exclusive_no_deposit_bonus_amount',
                'type'  => 'text',
            ),

            array (
                'key'   => 'KARAPUZ_casino_exclusive_no_deposit_bonus_free_spins',
                'label' => esc_html__('No deposit bonus free spins', 'mKARAPUZ_'),
                'name'  => 'casino_exclusive_no_deposit_bonus_free_spins',
                'type'  => 'text',
            ),

            array (
                'key'   => 'KARAPUZ_casino_exclusive_no_deposit_bonus_steps',
                'label' => esc_html__('No deposit bonus steps', 'mKARAPUZ_'),
                'name'  => 'casino_exclusive_no_deposit_bonus_free_spins',
                'type'  => 'textarea',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param'     => 'post_type',
                    'operator'  => '==',
                    'value'     => 'casino',
                ),
            ),
        ),
        'menu_order'            => 3,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'left',
        'instruction_placement' => 'label',
    ));

    acf_add_local_field_group(array (
        'key'    => 'group_casino_game_provider',
        'title'  => esc_html__('Game Providers', 'mKARAPUZ_'),
        'fields' => array (
            array (
                'key'           => 'KARAPUZ_casino_game_provider',
                'name'          => 'casino_game_provider',
                'type'          => 'taxonomy',
                'taxonomy'      => 'game-provider',
                'field_type'    => 'checkbox',
                'return_format' => 'id',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param'     => 'post_type',
                    'operator'  => '==',
                    'value'     => 'casino',
                ),
            ),
        ),
        'menu_order'            => 3,
        'position'              => 'side',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
    ));

    acf_add_local_field_group(array (
        'key'    => 'group_casino_logotype',
        'title'  => esc_html__('Logotype', 'mKARAPUZ_'),
        'fields' => array (
            array (
                'key'           => 'KARAPUZ_casino_logotype',
                'name'          => 'casino_logotype',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'full',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param'     => 'post_type',
                    'operator'  => '==',
                    'value'     => 'casino',
                ),
            ),
        ),
        'menu_order'            => 4,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
    ));

    acf_add_local_field_group(array (
        'key'    => 'group_casino_screenshots_gallery',
        'title'  => esc_html__('Screenshots', 'mKARAPUZ_'),
        'fields' => array (
            array (
                'key'           => 'KARAPUZ_casino_screenshots_gallery',
                'name'          => 'casino_screenshots_gallery',
                'type'          => 'gallery',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param'     => 'post_type',
                    'operator'  => '==',
                    'value'     => 'casino',
                ),
            ),
        ),
        'menu_order'            => 5,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
    ));

    acf_add_local_field_group(array (
        'key'    => 'group_news_author',
        'title'  => esc_html__('News author', 'mKARAPUZ_'),
        'fields' => array (
            array (
                'key'           => 'KARAPUZ_news_author',
                'name'          => 'news_author',
                'type'          => 'user',
                'return_format' => 'array',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param'     => 'post_type',
                    'operator'  => '==',
                    'value'     => 'news',
                ),
            ),
        ),
        'menu_order'            => 2,
        'position'              => 'side',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
    ));

endif;


if (function_exists('acf_add_local_field_group')):

    acf_add_local_field_group(array(
        'key'                   => 'KARAPUZ_slot_related_images',
        'title'                 => 'Related images',
        'fields'                => array(
            array(
                'key'               => 'KARAPUZ_slot_main_images',
                'label'             => esc_html__('Slot Images', 'mKARAPUZ_'),
                'name'              => 'KARAPUZ_slot_main_images_group',
                'type'              => 'group',
                'instructions'      => '',
                'required'          => 0,
                'conditional_logic' => 0,
                'wrapper'           => array(
                                        'width' => '',
                                        'class' => '',
                                        'id'    => '',
                                        ),
                'layout'            => 'block',
                'sub_fields'        => array(
                                            array(
                                                'key'               => 'KARAPUZ_slot_art',
                                                'label'             => esc_html__('Slot Art', 'mKARAPUZ_'),
                                                'name'              => 'KARAPUZ_slot_art_images',
                                                'type'              => 'group',
                                                'instructions'      => '',
                                                'required'          => 0,
                                                'conditional_logic' => 0,
                                                'wrapper'           => array(
                                                                        'width' => '',
                                                                        'class' => '',
                                                                        'id' => '',
                                                                    ),
                                                'layout'            => 'block',
                                                'sub_fields'        => array(
                                                                        array(
                                                                            'key'               => 'KARAPUZ_slot_bg',
                                                                            'label'             => esc_html__('Slot background (1140x900 or bigger)', 'mKARAPUZ_'),
                                                                            'name'              => 'KARAPUZ_slot_bg_image',
                                                                            'type'              => 'image',
                                                                            'instructions'      => '',
                                                                            'required'          => 0,
                                                                            'conditional_logic' => 0,
                                                                            'wrapper'           => array(
                                                                                                        'width' => '50',
                                                                                                        'class' => '',
                                                                                                        'id' => '',
                                                                                                    ),
                                                                            'return_format'     => 'array',
                                                                            'preview_size'      => 'medium',
                                                                            'library'           => 'all',
                                                                            'min_width'         => '',
                                                                            'min_height'        => '',
                                                                            'min_size'          => '',
                                                                            'max_width'         => '',
                                                                            'max_height'        => '',
                                                                            'max_size'          => '',
                                                                            'mime_types'        => '',
                                                                        ),
                                                                        array(
                                                                            'key'               => 'KARAPUZ_slot_promo_art',
                                                                            'label'             => esc_html__('Slot promo art', 'mKARAPUZ_'),
                                                                            'name'              => 'KARAPUZ_slot_promo_art_image',
                                                                            'type'              => 'image',
                                                                            'instructions'      => '',
                                                                            'required'          => 0,
                                                                            'conditional_logic' => 0,
                                                                            'wrapper'           => array(
                                                                                                        'width' => '50',
                                                                                                        'class' => '',
                                                                                                        'id' => '',
                                                                                                    ),
                                                                            'return_format'     => 'array',
                                                                            'preview_size'      => 'medium',
                                                                            'library'           => 'all',
                                                                            'min_width'         => '',
                                                                            'min_height'        => '',
                                                                            'min_size'          => '',
                                                                            'max_width'         => '',
                                                                            'max_height'        => '',
                                                                            'max_size'          => '',
                                                                            'mime_types'        => '',
                                                                        ),
                                                ),
                                            ),
                    array(
                        'key'               => 'KARAPUZ_slot_screenshots',
                        'label'             => esc_html__('Slot Screenshots', 'mKARAPUZ_'),
                        'name'              => 'KARAPUZ_slot_screenshots_gallery',
                        'type'              => 'gallery',
                        'instructions'      => '',
                        'required'          => 0,
                        'conditional_logic' => 0,
                        'wrapper'           => array(
                                                    'width' => '',
                                                    'class' => '',
                                                    'id' => '',
                                                ),
                        'min'           => '',
                        'max'           => '',
                        'insert'        => 'append',
                        'library'       => 'all',
                        'min_width'     => '',
                        'min_height'    => '',
                        'min_size'      => '',
                        'max_width'     => '',
                        'max_height'    => '',
                        'max_size'      => '',
                        'mime_types'    => '',
                    ),
                ),
            ),
        ),
        'location'              => array(
                                        array(
                                            array(
                                                'param'     => 'post_type',
                                                'operator'  => '==',
                                                'value'     => 'slot',
                                            ),
                                        ),
                                    ),
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'left',
        'instruction_placement' => 'label',
        'hide_on_screen'        => '',
        'active'                => 1,
        'description'           => '',
    ));

    acf_add_local_field_group(array(
        'key'                   => 'group_slot_details',
        'title'                 => esc_html__('Slot Details', 'mKARAPUZ_'),
        'fields'                => array(
                        array(
                            'key'                   => 'KARAPUZ_featured_casino_info',
                            'label'                 => esc_html__('Currrent featured casino', 'mKARAPUZ_'),
                            'name'                  => 'KARAPUZ_featured_casino_info_msg',
                            'type'                  => 'message',
                            'prefix'                => '',
                            'instructions'          => '',
                            'required'              => 0,
                            'conditional_logic'     => 0,
                            'wrapper'               => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id'    => '',
                                                        ),
                            'message'               => '',
                            'new_lines'             => 'wpautop',
                            'esc_html'              => 0,
                        ),
                        array(
                            'key'                   => 'KARAPUZ_slots_sizes',
                            'label'                 => esc_html__('Slot width and height', 'mKARAPUZ_'),
                            'name'                  => 'KARAPUZ_slot_width_group',
                            'type'                  => 'group',
                            'instructions'          => '',
                            'required'              => 0,
                            'conditional_logic'     => 0,
                            'wrapper'               => array(
                                                            'width' => '50',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                            'layout'                => 'block',
                            'sub_fields'            => array(
                                                        array(
                                                            'key'                   => 'KARAPUZ_slot_width',
                                                            'label'                 => esc_html__('Width', 'mKARAPUZ_'),
                                                            'name'                  => 'KARAPUZ_slot_width_text',
                                                            'type'                  => 'text',
                                                            'instructions'          => '',
                                                            'required'              => 0,
                                                            'conditional_logic'     => 0,
                                                            'wrapper'               => array(
                                                                                            'width' => '50',
                                                                                            'class' => '',
                                                                                            'id' => '',
                                                                                        ),
                                                            'default_value'         => '',
                                                            'placeholder'           => '',
                                                            'prepend'               => '',
                                                            'append'                => '',
                                                            'maxlength'             => '',
                                                        ),
                                                        array(
                                                            'key'                   => 'KARAPUZ_slot_height',
                                                            'label'                 => esc_html__('Height', 'mKARAPUZ_'),
                                                            'name'                  => 'KARAPUZ_slot_height_text',
                                                            'type'                  => 'text',
                                                            'instructions'          => '',
                                                            'required'              => 0,
                                                            'conditional_logic'     => 0,
                                                            'wrapper'               => array(
                                                                                            'width' => '50',
                                                                                            'class' => '',
                                                                                            'id' => '',
                                                                                        ),
                                                            'default_value'         => '',
                                                            'placeholder'           => '',
                                                            'prepend'               => '',
                                                            'append'                => '',
                                                            'maxlength'             => '',
                                                        ),
                                                    ),
                                                    array(
                                                        'key'   => 'KARAPUZ_slot_payoff',
                                                        'label' => 'Slot Payoff',
                                                        'name'  => 'KARAPUZ_slot_payoff_text',
                                                        'type'  => 'text',
                                                    ),
                        ),
                        array(
                            'key'               => 'KARAPUZ_slot_game_source',
                            'label'             => esc_html__('Slot Game Source', 'mKARAPUZ_'),
                            'name'              => 'KARAPUZ_slot_game_source_textarea',
                            'type'              => 'textarea',
                            'instructions'      => '',
                            'required'          => 1,
                            'conditional_logic' => 0,
                            'wrapper'           => array(
                                                        'width' => '100',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                            'default_value'     => '',
                            'placeholder'       => '',
                            'prepend'           => '',
                            'append'            => '',
                            'maxlength'         => '',
                        ),
                        array(
                            'key'           => 'KARAPUZ_slot_rating',
                            'label'         => esc_html__('Slot Rating', 'mKARAPUZ_'),
                            'name'          => 'KARAPUZ_slot_rating_select',
                            'type'          => 'select',
                            'choices'       => array(
                                                    '1' => '0.5 stars',
                                                    '2' => '1 stars',
                                                    '3' => '1.5 stars',
                                                    '4' => '2 stars',
                                                    '5' => '2.5 stars',
                                                    '6' => '3 stars',
                                                    '7' => '3.5 stars',
                                                    '8' => '4 stars',
                                                    '9' => '4.5 stars',
                                                    '10' => '5 stars',
                                                ),
                            'allow_null'    => 1,
                            'multiple'      => 0,
                            'ui'            => 0,
                            'ajax'          => 0,
                            'return_format' => 'value',
                        ),
                        array(
                            'key'   => 'KARAPUZ_slot_payoff',
                            'label' => esc_html__('Slot Payoff', 'mKARAPUZ_'),
                            'name'  => 'KARAPUZ_slot_payoff_text',
                            'type'  => 'text',
                        ),
                        array(
                            'key'                   => 'KARAPUZ_slots_main_features',
                            'label'                 => esc_html__('Main features', 'mKARAPUZ_'),
                            'name'                  => 'KARAPUZ_slots_main_features_group',
                            'type'                  => 'group',
                            'instructions'          => '',
                            'required'              => 0,
                            'conditional_logic'     => 0,
                            'wrapper'               => array(
                                                            'width' => '100',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                            'layout'                => 'block',
                            'sub_fields'            => array(
                                                        array(
                                                            'key'           => 'KARAPUZ_return_to_player',
                                                            'label'         => 'Return to player, %',
                                                            'name'          => 'KARAPUZ_return_to_player_text',
                                                            'type'          => 'text',
                                                            'wrapper'       => array(
                                                                                'width' => '25',
                                                                                'class' => '',
                                                                                'id' => '',
                                                                            ),
                                                            'placeholder'   => '100',
                                                        ),
                                                        array(
                                                            'key'           => 'KARAPUZ_import_min_max',
                                                            'label'         => 'Import Min-Max, &euro;',
                                                            'name'          => 'KARAPUZ_import_min_max_text',
                                                            'type'          => 'text',
                                                            'wrapper'       => array(
                                                                                    'width' => '25',
                                                                                    'class' => '',
                                                                                    'id' => '',
                                                                                ),
                                                            'placeholder'   => '0.10-200',
                                                        ),
                                                        array(
                                                            'key'       => 'KARAPUZ_bet_lines',
                                                            'label'     => 'Slot bet lines',
                                                            'name'      => 'KARAPUZ_bet_lines_text',
                                                            'type'      => 'text',
                                                            'wrapper'   => array(
                                                                                'width' => '25',
                                                                                'class' => '',
                                                                                'id' => '',
                                                                            ),
                                                        ),
                                                        array(
                                                            'key'       => 'KARAPUZ_rollers_lines',
                                                            'label'     => 'Slot Rulli * Linee',
                                                            'name'      => 'KARAPUZ_rollers_lines_text',
                                                            'type'      => 'text',
                                                            'wrapper'   => array(
                                                                            'width' => '25',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                        ),
                                                    ),
                        ),
                        array(
                            'key'       => 'KARAPUZ_blockquote',
                            'label'     => esc_html__('Blockquote', 'mKARAPUZ_'),
                            'name'      => 'KARAPUZ_blockquote_textarea',
                            'type'      => 'textarea',
                            'wrapper'   => array(
                                                'width' => '100',
                                                'class' => '',
                                                'id' => '',
                                            ),
                        ),
                        array(
                            'key'                   => 'KARAPUZ_technical_judgment',
                            'label'                 => esc_html__('Technical Judgment', 'mKARAPUZ_'),
                            'name'                  => 'KARAPUZ_technical_judgment_group',
                            'type'                  => 'group',
                            'instructions'          => '',
                            'required'              => 0,
                            'conditional_logic'     => 0,
                            'wrapper'               => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                            'layout'                => 'block',
                            'sub_fields'            => array(
                                                        array(
                                                            'key'                   => 'KARAPUZ_volatility',
                                                            'label'                 => 'Volatility',
                                                            'name'                  => 'KARAPUZ_volatility_range',
                                                            'type'                  => 'range',
                                                            'instructions'          => '',
                                                            'required'              => 0,
                                                            'conditional_logic'     => 0,
                                                            'wrapper'               => array(
                                                                                            'width' => '30',
                                                                                            'class' => '',
                                                                                            'id' => '',
                                                                                        ),
                                                            'default_value'         => '5',
                                                            'min'                   => 1,
                                                            'max'                   => 5,
                                                            'step'                  => 1,
                                                            'prepend'               => '',
                                                            'append'                => '',
                                                        ),
                                                        array(
                                                            'key'                   => 'KARAPUZ_spin_win_frequency',
                                                            'label'                 => 'Spin winning frequency',
                                                            'name'                  => 'KARAPUZ_spin_win_frequency_range',
                                                            'type'                  => 'range',
                                                            'instructions'          => '',
                                                            'required'              => 0,
                                                            'conditional_logic'     => 0,
                                                            'wrapper'               => array(
                                                                                            'width' => '30',
                                                                                            'class' => '',
                                                                                            'id' => '',
                                                                                        ),
                                                            'default_value'         => '5',
                                                            'min'                   => 1,
                                                            'max'                   => 5,
                                                            'step'                  => 1,
                                                            'prepend'               => '',
                                                            'append'                => '',
                                                        ),
                                                        array(
                                                            'key' => 'KARAPUZ_extra_features',
                                                            'label' => 'Extra features',
                                                            'name' => 'KARAPUZ_extra_features_range',
                                                            'type' => 'range',
                                                            'instructions' => '',
                                                            'required' => 0,
                                                            'conditional_logic' => 0,
                                                            'wrapper' => array(
                                                                'width' => '33',
                                                                'class' => '',
                                                                'id' => '',
                                                            ),
                                                            'default_value' => '5',
                                                            'min' => 1,
                                                            'max' => 5,
                                                            'step' => 1,
                                                            'prepend' => '',
                                                            'append' => '',
                                                        ),
                                                    ),
                        ),
                        array(
                            'key'               => 'KARAPUZ_reasons_to_play',
                            'label'             => esc_html__('Reasons to play', 'mKARAPUZ_'),
                            'name'              => 'KARAPUZ_reasons_to_play',
                            'type'              => 'repeater',
                            'instructions'      => '',
                            'required'          => 0,
                            'conditional_logic' => 0,
                            'wrapper'           => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id'    => '',
                                                    ),
                            'collapsed'         => '',
                            'min'               => 0,
                            'max'               => 0,
                            'layout'            => 'table',
                            'button_label'      => 'New reason to play',
                            'sub_fields' => array(
                                array(
                                    'key'                   => 'KARAPUZ_reasons_to_play_item',
                                    'label'                 => 'List of reasons to play',
                                    'name'                  => 'KARAPUZ_reasons_to_play_text',
                                    'type'                  => 'text',
                                    'instructions'          => '',
                                    'required'              => 0,
                                    'conditional_logic'     => 0,
                                    'wrapper'               => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                    'default_value'         => '',
                                    'placeholder'           => '',
                                    'prepend'               => '',
                                    'append'                => '',
                                    'maxlength'             => '',
                                ),
                            ),
                        ),
                        array(
                            'key'                   => 'KARAPUZ_bonus_game',
                            'label'                 => esc_html__('Bonus Game', 'mKARAPUZ_'),
                            'name'                  => 'KARAPUZ_bonus_game_radio',
                            'type'                  => 'radio',
                            'instructions'          => '',
                            'required'              => 0,
                            'conditional_logic'     => 0,
                            'wrapper'               => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                            'choices'               => array(
                                                            'yes' => 'Yes',
                                                            'no' => 'No',
                                                            'hide' => 'Hide',
                                                        ),
                            'allow_null'            => 0,
                            'other_choice'          => 0,
                            'save_other_choice'     => 0,
                            'default_value'         => 'hide',
                            'layout'                => 'horizontal',
                            'return_format'         => 'value',
                        ),
                        array(
                            'key'                   => 'KARAPUZ_free_spin',
                            'label'                 => esc_html__('Free Spin', 'mKARAPUZ_'),
                            'name'                  => 'KARAPUZ_free_spin_radio',
                            'type'                  => 'radio',
                            'instructions'          => '',
                            'required'              => 0,
                            'conditional_logic'     => 0,
                            'wrapper'               => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                            'choices'               => array(
                                                            'yes' => 'Yes',
                                                            'no' => 'No',
                                                            'hide' => 'Hide',
                                                        ),
                            'allow_null'            => 0,
                            'other_choice'          => 0,
                            'save_other_choice'     => 0,
                            'default_value'         => 'hide',
                            'layout'                => 'horizontal',
                            'return_format'         => 'value',
                        ),
                        array(
                            'key'                   => 'KARAPUZ_jackpot',
                            'label'                 => esc_html__('Jackpot', 'mKARAPUZ_'),
                            'name'                  => 'KARAPUZ_jackpot_radio',
                            'type'                  => 'radio',
                            'instructions'          => '',
                            'required'              => 0,
                            'conditional_logic'     => 0,
                            'wrapper'               => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                            'choices'               => array(
                                                            'yes' => 'Yes',
                                                            'no' => 'No',
                                                            'hide' => 'Hide',
                                                        ),
                            'allow_null'            => 0,
                            'other_choice'          => 0,
                            'save_other_choice'     => 0,
                            'default_value'         => 'hide',
                            'layout'                => 'horizontal',
                            'return_format'         => 'value',
                        ),
                        array(
                            'key'                   => 'KARAPUZ_moltiplicatore',
                            'label'                 => esc_html__('Moltiplicatore', 'mKARAPUZ_'),
                            'name'                  => 'KARAPUZ_moltiplicatore_radio',
                            'type'                  => 'radio',
                            'instructions'          => '',
                            'required'              => 0,
                            'conditional_logic'     => 0,
                            'wrapper'               => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                            'choices'               => array(
                                                            'yes' => 'Yes',
                                                            'no' => 'No',
                                                            'hide' => 'Hide',
                                                        ),
                            'allow_null'            => 0,
                            'other_choice'          => 0,
                            'save_other_choice'     => 0,
                            'default_value'         => 'hide',
                            'layout'                => 'horizontal',
                            'return_format'         => 'value',
                        ),
                        array(
                            'key'                   => 'KARAPUZ_brandizzato',
                            'label'                 => esc_html__('Brandizzato', 'mKARAPUZ_'),
                            'name'                  => 'KARAPUZ_brandizzato_radio',
                            'type'                  => 'radio',
                            'instructions'          => '',
                            'required'              => 0,
                            'conditional_logic'     => 0,
                            'wrapper'               => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                            'choices'               => array(
                                                            'yes' => 'Yes',
                                                            'no' => 'No',
                                                            'hide' => 'Hide',
                                                        ),
                            'allow_null'            => 0,
                            'other_choice'          => 0,
                            'save_other_choice'     => 0,
                            'default_value'         => 'hide',
                            'layout'                => 'horizontal',
                            'return_format'         => 'value',
                        ),
                        array(
                            'key'                   => 'KARAPUZ_in_italia',
                            'label'                 => esc_html__('In Italia', 'mKARAPUZ_'),
                            'name'                  => 'KARAPUZ_in_italia_radio',
                            'type'                  => 'radio',
                            'instructions'          => '',
                            'required'              => 0,
                            'conditional_logic'     => 0,
                            'wrapper'               => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                            'choices'               => array(
                                                            'yes' => 'Yes',
                                                            'no' => 'No',
                                                            'hide' => 'Hide',
                                                        ),
                            'allow_null'            => 0,
                            'other_choice'          => 0,
                            'save_other_choice'     => 0,
                            'default_value'         => 'hide',
                            'layout'                => 'horizontal',
                            'return_format'         => 'value',
                        ),
                        array(
                            'key'       => 'KARAPUZ_slot_theme',
                            'label'     => esc_html__('Slot theme', 'mKARAPUZ_'),
                            'name'      => 'KARAPUZ_slot_theme_text',
                            'type'      => 'text',
                            'wrapper'   => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                        ),
                        array(
                            'key'       => 'KARAPUZ_website_url',
                            'label'     => esc_html__('Website URL', 'mKARAPUZ_'),
                            'name'      => 'KARAPUZ_KARAPUZ_website_url_text',
                            'type'      => 'url',
                            'wrapper'   => array(
                                                'width' => '',
                                                'class' => '',
                                                'id' => '',
                                            ),
                        ),
                        array(
                            'key'       => 'KARAPUZ_website',
                            'label'     => esc_html__('Website Name', 'mKARAPUZ_'),
                            'name'      => 'KARAPUZ_KARAPUZ_website_text',
                            'type'      => 'text',
                            'wrapper'   => array(
                                                'width' => '',
                                                'class' => '',
                                                'id' => '',
                                            ),
                        ),
                        array(
                            'key'       => 'KARAPUZ_website',
                            'label'     => esc_html__('Website Name', 'mKARAPUZ_'),
                            'name'      => 'KARAPUZ_KARAPUZ_website_text',
                            'type'      => 'text',
                            'wrapper'   => array(
                                                'width' => '',
                                                'class' => '',
                                                'id' => '',
                                            ),
                        ),
                        array(
                            'key'               => 'KARAPUZ_slot_release_date',
                            'label'             => esc_html__('Slot release date', 'mKARAPUZ_'),
                            'name'              => 'KARAPUZ_slot_release_date_picker',
                            'type'              => 'date_picker',
                            'instructions'      => '',
                            'required'          => 0,
                            'conditional_logic' => 0,
                            'wrapper'           => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id'    => '',
                                                    ),
                            'display_format'    => 'd/m/Y',
                            'return_format'     => 'd/m/Y',
                            'first_day'         => 1,
                        ),
                    ),
        'location'              => array(
            array(
                array(
                    'param'     => 'post_type',
                    'operator'  => '==',
                    'value'     => 'slot',
                ),
            ),
        ),
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'left',
        'instruction_placement' => 'label',
        'hide_on_screen'        => array(
                                        0 => 'excerpt',
                                        1 => 'custom_fields',
                                        2 => 'discussion',
                                        3 => 'comments',
                                        4 => 'revisions',
                                        5 => 'author',
                                        6 => 'format',
                                        7 => 'page_attributes',
                                        8 => 'tags',
                                        9 => 'send-trackbacks',
                                    ),
        'active'                => 1,
        'description'           => '',
    ));


endif;