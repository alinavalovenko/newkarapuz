<?php
if (function_exists('acf_add_local_field_group')):

    acf_add_local_field_group(array (
        'key'    => 'group_casino_details',
        'title'  => esc_html__('Casino Details', 'mkarapuz'),
        'fields' => array (
            array (
                'key'       => 'KARAPUZcasino_visibility',
                'label'     => esc_html__('Casino Visibility', 'mkarapuz'),
                'name'      => 'casino_visibility',
                'type'      => 'checkbox',
                'choices'   => array(
                    'on' => esc_html__('Hide in lists', 'mkarapuz'),
                ),
            ),

            array (
                'key'   => 'KARAPUZcasino_title',
                'label' => esc_html__('Casino Title', 'mkarapuz'),
                'name'  => 'casino_title',
                'type'  => 'text',
            ),

            array (
                'key'   => 'KARAPUZcasino_url',
                'label' => esc_html__('Casino URL', 'mkarapuz'),
                'name'  => 'casino_url',
                'type'  => 'text',
            ),

            array (
                'key'     => 'KARAPUZcasino_type',
                'label'   => esc_html__('Casino Type', 'mkarapuz'),
                'name'    => 'casino_type',
                'type'    => 'select',
                'choices' => array(
                    'casino'     => esc_html__('Casino', 'mkarapuz'),
                    'bingo'      => esc_html__('Bingo', 'mkarapuz'),
                    'sportsbook' => esc_html__('Sportsbook', 'mkarapuz'),
                ),
                'wrapper' => array (
                    'width' => '33%',
                ),
            ),

            array (
                'key'       => 'KARAPUZcasino_license',
                'label'     => esc_html__('Casino License', 'mkarapuz'),
                'name'      => 'casino_license',
                'type'      => 'select',
                'choices'   => array(
                    'default'   => esc_html__('Default (by location)', 'mkarapuz'),
                    'alderney'  => esc_html__('Alderney', 'mkarapuz'),
                    'curacao'   => esc_html__('Curacao', 'mkarapuz'),
                    'malta'     => esc_html__('Malta', 'mkarapuz'),
                    'gibraltar' => esc_html__('Gibraltar', 'mkarapuz'),
                ),
                'wrapper' => array (
                    'width' => '33%',
                ),
            ),

            array (
                'key'     => 'KARAPUZcasino_rating',
                'label'   => esc_html__('Casino Rating', 'mkarapuz'),
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
                'key'               => 'KARAPUZcasino_blockquote',
                'label'             => esc_html__('Blockquote', 'mkarapuz'),
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
        'title' => esc_html__('Quick Info', 'mkarapuz'),
        'fields' => array (
            array (
                'key'               => 'KARAPUZcasino_nd_bonus',
                'label'             => esc_html__('No Deposit Bonus', 'mkarapuz'),
                'name'              => 'casino_nd_bonus',
                'type'              => 'text',
                'wrapper'           => array (
                    'width' => '25%',
                ),
            ),

            array (
                'key'                => 'KARAPUZcasino_nd_rating',
                'label'              => esc_html__('No Deposit Rating', 'mkarapuz'),
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
                'key'               => 'KARAPUZcasino_fd_bonus',
                'label'             => esc_html__('First Deposit Bonus', 'mkarapuz'),
                'name'              => 'casino_fd_bonus',
                'type'              => 'text',
                'wrapper'           => array (
                    'width' => '25%',
                ),
            ),

            array (
                'key'                => 'KARAPUZcasino_fd_rating',
                'label'              => esc_html__('First Deposit Rating', 'mkarapuz'),
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
                'key'               => 'KARAPUZcasino_wagering_requirements',
                'label'             => esc_html__('Wagering Requirements', 'mkarapuz'),
                'name'              => 'casino_wagering_requirements',
                'type'              => 'text',
                'wrapper'           => array (
                    'width' => '25%',
                ),
            ),

            array (
                'key'                => 'KARAPUZcasino_w_rating',
                'label'              => esc_html__('Wagering Rating', 'mkarapuz'),
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
                'key'                => 'KARAPUZcasino_tb_rating',
                'label'              => esc_html__('Total Bonus Rating', 'mkarapuz'),
                'name'               => 'casino_tb_rating',
                'type'               => 'range',
                'min'                => '0',
                'max'                => '5',
                'step'               => '0.1',
            ),

            array (
                'key'                => 'KARAPUZcasino_play_in_browser',
                'label'              => esc_html__('Play in browser', 'mkarapuz'),
                'name'               => 'casino_play_in_browser',
                'type'               => 'radio',
                'choices' => array(
                    'yes'	=> esc_html__('Yes', 'mkarapuz'),
                    'no'	=> esc_html__('No', 'mkarapuz'),
                    'hide'  => esc_html__('Hide', 'mkarapuz'),
                ),
                'layout'             => 'horizontal',
                'wrapper'            => array (
                    'width' => '25%',
                ),
            ),

            array (
                'key'                => 'KARAPUZcasino_download',
                'label'              => esc_html__('Download Casino', 'mkarapuz'),
                'name'               => 'casino_download',
                'type'               => 'radio',
                'choices' => array(
                    'yes'	=> esc_html__('Yes', 'mkarapuz'),
                    'no'	=> esc_html__('No', 'mkarapuz'),
                    'hide'  => esc_html__('Hide', 'mkarapuz'),
                ),
                'other_choice'       => 0,
                'save_other_choice'  => 0,
                'layout'             => 'horizontal',
                'wrapper'            => array (
                    'width' => '25%',
                ),
            ),

            array (
                'key'                => 'KARAPUZcasino_mobile',
                'label'              => esc_html__('Mobile Casino', 'mkarapuz'),
                'name'               => 'casino_mobile',
                'type'               => 'radio',
                'choices' => array(
                    'yes'	=> esc_html__('Yes', 'mkarapuz'),
                    'no'	=> esc_html__('No', 'mkarapuz'),
                    'hide'  => esc_html__('Hide', 'mkarapuz'),
                ),

                'layout'             => 'horizontal',
                'wrapper'            => array (
                    'width' => '25%',
                ),
            ),

            array (
                'key'                => 'KARAPUZcasino_live',
                'label'              => esc_html__('Live Casino', 'mkarapuz'),
                'name'               => 'casino_live',
                'type'               => 'radio',
                'choices' => array(
                    'yes'	=> esc_html__('Yes', 'mkarapuz'),
                    'no'	=> esc_html__('No', 'mkarapuz'),
                    'hide'  => esc_html__('Hide', 'mkarapuz'),
                ),
                'layout'             => 'horizontal',
                'wrapper'            => array (
                    'width' => '25%',
                ),
            ),

            array (
                'key'                => 'KARAPUZcasino_aams_licensed',
                'label'              => esc_html__('AAMS licensed', 'mkarapuz'),
                'name'               => 'casino_aams_licensed',
                'type'               => 'radio',
                'choices' => array(
                    'yes'	=> esc_html__('Yes', 'mkarapuz'),
                    'no'	=> esc_html__('No', 'mkarapuz'),
                    'hide'  => esc_html__('Hide', 'mkarapuz'),
                ),
                'layout'             => 'horizontal',
                'wrapper'            => array (
                    'width' => '25%',
                ),
            ),

            array (
                'key'                => 'KARAPUZcasino_vip_club',
                'label'              => esc_html__('VIP Club', 'mkarapuz'),
                'name'               => 'casino_vip_club',
                'type'               => 'radio',
                'choices' => array(
                    'yes'	=> esc_html__('Yes', 'mkarapuz'),
                    'no'	=> esc_html__('No', 'mkarapuz'),
                    'hide'  => esc_html__('Hide', 'mkarapuz'),
                ),
                'layout'             => 'horizontal',
                'wrapper'            => array (
                    'width' => '25%',
                ),
            ),

            array (
                'key'                => 'KARAPUZcasino_daily_chat_games',
                'label'              => esc_html__('Daily Chat Games', 'mkarapuz'),
                'name'               => 'casino_daily_chat_games',
                'type'               => 'radio',
                'choices' => array(
                    'yes'	=> esc_html__('Yes', 'mkarapuz'),
                    'no'	=> esc_html__('No', 'mkarapuz'),
                    'hide'  => esc_html__('Hide', 'mkarapuz'),
                ),
                'other_choice'       => 0,
                'save_other_choice'  => 0,
                'layout'             => 'horizontal',
                'wrapper'            => array (
                    'width' => '25%',
                ),
            ),

            array (
                'key'                => 'KARAPUZcasino_minigames',
                'label'              => esc_html__('Minigames', 'mkarapuz'),
                'name'               => 'casino_minigames',
                'type'               => 'radio',
                'choices' => array(
                    'yes'	=> esc_html__('Yes', 'mkarapuz'),
                    'no'	=> esc_html__('No', 'mkarapuz'),
                    'hide'  => esc_html__('Hide', 'mkarapuz'),
                ),
                'layout'             => 'horizontal',
                'wrapper'            => array (
                    'width' => '25%',
                ),
            ),

            array (
                'key'   => 'KARAPUZcasino_address',
                'label' => esc_html__('Casino Address', 'mkarapuz'),
                'name'  => 'casino_address',
                'type'  => 'text',
            ),

            array (
                'key'   => 'KARAPUZcasino_email',
                'label' => esc_html__('Casino Email', 'mkarapuz'),
                'name'  => 'casino_email',
                'type'  => 'text',
            ),

            array (
                'key'          => 'KARAPUZcasino_reasons_to_play',
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
                'key'          => 'KARAPUZcasino_slot_popup_usps',
                'label'        => esc_html__('Slot-popup USPs', 'mkarapuz'),
                'name'         => 'casino_reasons_to_play',
                'type'         => 'textarea',
                'instructions' => 'Separate items with enter',
                'wrapper'      => array (
                    'width' => '50%',
                ),
                'rows'         => '4',
            ),

            array (
                'key'          => 'KARAPUZcasino_pros',
                'label'        => esc_html__('Pros', 'mkarapuz'),
                'name'         => 'casino_pros',
                'type'         => 'textarea',
                'instructions' => 'Separate items with enter',
                'wrapper'      => array (
                    'width' => '50%',
                ),
                'rows'         => '4',
            ),

            array (
                'key'               => 'KARAPUZcasino_cons',
                'label'             => esc_html__('Cons', 'mkarapuz'),
                'name'              => 'casino_cons',
                'type'              => 'textarea',
                'instructions'      => 'Separate items with enter',
                'wrapper'           => array (
                    'width' => '50%',
                ),
                'rows'              => '4',
            ),

            array (
                'key'                => 'KARAPUZcasino_payment_methods',
                'label'              => 'Payment methods',
                'name'               => 'casino_payment_methods',
                'type'               => 'select',
                'choices'            => array(
                    'postepay'          => esc_html__('Postepay', 'mkarapuz'),
                    'visa'              => esc_html__('Visa', 'mkarapuz'),
                    'visa_electron'     => esc_html__('Visa Electron', 'mkarapuz'),
                    'master_card'       => esc_html__('Master Card', 'mkarapuz'),
                    'maestro'           => esc_html__('Maestro', 'mkarapuz'),
                    'paypal'            => esc_html__('Paypal', 'mkarapuz'),
                    'skrill'            => esc_html__('Skrill', 'mkarapuz'),
                    'click_and_buy'     => esc_html__('Click And Buy', 'mkarapuz'),
                    'entropay'          => esc_html__('Entropay', 'mkarapuz'),
                    'neteller'          => esc_html__('Neteller', 'mkarapuz'),
                    'paysafecard'       => esc_html__('Paysafecard', 'mkarapuz'),
                    'bonifico_bancario' => esc_html__('Bonifico Bancario', 'mkarapuz'),
                    'mister_cash'       => esc_html__('Mister Cash', 'mkarapuz'),
                    'ideal'             => esc_html__('iDeal', 'mkarapuz'),
                    'trustly'           => esc_html__('Trustly', 'mkarapuz'),
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
                'key'           => 'KARAPUZcasino_featured_for_software',
                'label'         => esc_html__('Featured for software', 'mkarapuz'),
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
                'key'           => 'KARAPUZcasino_fallback',
                'label'         => esc_html__('Mobile casino fallback', 'mkarapuz'),
                'name'          => 'casino_featured_fallback',
                'type'          => 'post_object',
                'post_type'     => 'casino',
                'return_format' => 'id',
                'wrapper'            => array (
                    'width' => '50%',
                ),
            ),

            array (
                'key'     => 'KARAPUZcasino_ad',
                'label'   => esc_html__('Text ad', 'mkarapuz'),
                'name'    => 'casino_text_ad',
                'type'    => 'text',
                'wrapper' => array (
                    'width' => '33%',
                ),
            ),

            array (
                'key'               => 'KARAPUZcasino_ad_url',
                'label'             => esc_html__('Text ad URL', 'mkarapuz'),
                'name'              => 'casino_text_ad_url',
                'type'              => 'text',
                'wrapper'           => array (
                    'width' => '33%',
                ),
                'placeholder'       => 'Leave empty for default',
            ),

            array (
                'key'     => 'KARAPUZcasino_new_text_ad',
                'label'   => esc_html__('New text ad', 'mkarapuz'),
                'name'    => 'casino_new_text_ad',
                'type'    => 'text',
                'wrapper' => array (
                    'width' => '33%',
                ),
            ),

            array (
                'key'           => 'KARAPUZcasino_skyscraper_banner',
                'label'         => esc_html__('Skyscraper banner (220x500)', 'mkarapuz'),
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
                'key'     => 'KARAPUZcasino_skyscraper_banner_url',
                'label'   => esc_html__('Custom URL', 'mkarapuz'),
                'name'    => 'casino_skyscraper_banner_url',
                'type'    => 'text',
                'wrapper' => array (
                    'width' => '70%',
                ),
            ),

            array (
                'key'           => 'KARAPUZcasino_header_banner',
                'label'         => esc_html__('Header banner (1280x80)', 'mkarapuz'),
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
                'key'     => 'KARAPUZcasino_header_banner_url',
                'label'   => esc_html__('Custom URL', 'mkarapuz'),
                'name'    => 'casino_header_banner_url',
                'type'    => 'text',
                'wrapper' => array (
                    'width' => '70%',
                ),
            ),

            array (
                'key'           => 'KARAPUZcasino_mobile_banner',
                'label'         => esc_html__('Mobile banner (450x300)', 'mkarapuz'),
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
                'key'     => 'KARAPUZcasino_mobile_banner_url',
                'label'   => esc_html__('Custom URL', 'mkarapuz'),
                'name'    => 'casino_mobile_banner_url',
                'type'    => 'text',
                'wrapper' => array (
                    'width' => '70%',
                ),
            ),

            array (
                'key'           => 'KARAPUZcasino_sidebar_banner_1',
                'label'         => esc_html__('Sidebar banner #1 (160x945)', 'mkarapuz'),
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
                'key'     => 'KARAPUZcasino_sidebar_banner_1_url',
                'label'   => esc_html__('Custom URL', 'mkarapuz'),
                'name'    => 'casino_sidebar_banner_1_url',
                'type'    => 'text',
                'wrapper' => array (
                    'width' => '70%',
                ),
            ),

            array (
                'key'           => 'KARAPUZcasino_sidebar_banner_2',
                'label'         => esc_html__('Sidebar banner #2 (160x945)', 'mkarapuz'),
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
                'key'     => 'KARAPUZcasino_sidebar_banner_2_url',
                'label'   => esc_html__('Custom URL', 'mkarapuz'),
                'name'    => 'casino_sidebar_banner_2_url',
                'type'    => 'text',
                'wrapper' => array (
                    'width' => '70%',
                ),
            ),

            array (
                'key'           => 'KARAPUZcasino_popup_banner',
                'label'         => esc_html__('Popup banner (600x400)', 'mkarapuz'),
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
                'key'     => 'KARAPUZcasino_popup_banner_url',
                'label'   => esc_html__('Custom URL', 'mkarapuz'),
                'name'    => 'casino_popup_banner_url',
                'type'    => 'text',
                'wrapper' => array (
                    'width' => '70%',
                ),
            ),

            array (
                'key'           => 'KARAPUZcasino_slot_page_top_banner',
                'label'         => esc_html__('Slot page top banner (1280x40)', 'mkarapuz'),
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
                'key'     => 'KARAPUZcasino_slot_page_top_banner_url',
                'label'   => esc_html__('Custom URL', 'mkarapuz'),
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
        'title'  => esc_html__('Casino bonus', 'mkarapuz'),
        'fields' => array (

            array (
                'key'     => 'KARAPUZcasino_bonus_code',
                'label'   => esc_html__('Bonus code', 'mkarapuz'),
                'name'    => 'casino_bonus_code',
                'type'    => 'text',
            ),

            array (
                'key'     => 'KARAPUZcasino_header_bonus_text',
                'label'   => esc_html__('Header Bonus Text', 'mkarapuz'),
                'name'    => 'casino_header_bonus_text',
                'type'    => 'text',
            ),

            array (
                'key'     => 'KARAPUZcasino_second_bonus_text',
                'label'   => esc_html__('Bonus code', 'mkarapuz'),
                'name'    => 'casino_second_bonus_text',
                'type'    => 'text',
            ),

            array (
                'key'     => 'KARAPUZcasino_payoff_text',
                'label'   => esc_html__('Payoff Text', 'mkarapuz'),
                'name'    => 'casino_payoff_text',
                'type'    => 'text',
            ),

            array(
                'key'       => 'KARAPUZcasino_basic_bonuses_tab',
                'label'     => esc_html__('Basic bonuses', 'mkarapuz'),
                'name'      => 'casino_basic_bonuses_tab',
                'type'      => 'tab',
                'placement' => 'top',
            ),

            array (
                'key'     => 'KARAPUZcasino_basic_deposit_bonus_amount',
                'label'   => esc_html__('Deposit bonus amount', 'mkarapuz'),
                'name'    => 'casino_deposit_bonus_amount',
                'type'    => 'text',
                'wrapper' => array (
                    'width' => '33%',
                ),
            ),

            array (
                'key'     => 'KARAPUZcasino_basic_deposit_bonus_percent',
                'label'   => esc_html__('Deposit bonus percent', 'mkarapuz'),
                'name'    => 'casino_deposit_bonus_percent',
                'type'    => 'text',
                'wrapper' => array (
                    'width' => '33%',
                ),
            ),

            array (
                'key'     => 'KARAPUZcasino_basic_deposit_bonus_free_spins',
                'label'   => esc_html__('Deposit bonus free spins', 'mkarapuz'),
                'name'    => 'casino_deposit_bonus_free_spins',
                'type'    => 'text',
                'wrapper' => array (
                    'width' => '34%',
                ),
            ),

            array (
                'key'     => 'KARAPUZcasino_basic_no_deposit_bonus_amount',
                'label'   => esc_html__('No deposit bonus amount', 'mkarapuz'),
                'name'    => 'casino_no_deposit_bonus_amount',
                'type'    => 'text',
                'wrapper' => array (
                    'width' => '33%',
                ),
            ),

            array (
                'key'     => 'KARAPUZcasino_basic_no_deposit_bonus_free_spins',
                'label'   => esc_html__('No deposit bonus free spins', 'mkarapuz'),
                'name'    => 'casino_no_deposit_bonus_free_spins',
                'type'    => 'text',
                'wrapper' => array (
                    'width' => '33%',
                ),
            ),

            array (
                'key'     => 'KARAPUZcasino_basic_no_deposit_bonus_steps',
                'label'   => esc_html__('No deposit bonus steps', 'mkarapuz'),
                'name'    => 'casino_no_deposit_bonus_free_spins',
                'type'    => 'textarea',
                'wrapper' => array (
                    'width' => '34%',
                ),
            ),

            array(
                'key' => 'KARAPUZcasino_exclusive_bonuses_tab',
                'label' => esc_html__('Exclusive bonuses', 'mkarapuz'),
                'name' => 'casino_exclusive_bonuses_tab',
                'type' => 'tab',
                'placement' => 'top',
            ),

            array (
                'key'   => 'KARAPUZcasino_exclusive_deposit_bonus_amount',
                'label' => esc_html__('Deposit bonus amount', 'mkarapuz'),
                'name'  => 'casino_exclusive_deposit_bonus_amount',
                'type'  => 'text',
            ),

            array (
                'key'   => 'KARAPUZcasino_exclusive_deposit_bonus_percent',
                'label' => esc_html__('Deposit bonus percent', 'mkarapuz'),
                'name'  => 'casino_exclusive_deposit_bonus_percent',
                'type'  => 'text',
            ),

            array (
                'key'   => 'KARAPUZcasino_exclusive_deposit_bonus_free_spins',
                'label' => esc_html__('Deposit bonus free spins', 'mkarapuz'),
                'name'  => 'casino_exclusive_deposit_bonus_free_spins',
                'type'  => 'text',
            ),

            array (
                'key'   => 'KARAPUZcasino_exclusive_no_deposit_bonus_amount',
                'label' => esc_html__('No deposit bonus amount', 'mkarapuz'),
                'name'  => 'casino_exclusive_no_deposit_bonus_amount',
                'type'  => 'text',
            ),

            array (
                'key'   => 'KARAPUZcasino_exclusive_no_deposit_bonus_free_spins',
                'label' => esc_html__('No deposit bonus free spins', 'mkarapuz'),
                'name'  => 'casino_exclusive_no_deposit_bonus_free_spins',
                'type'  => 'text',
            ),

            array (
                'key'   => 'KARAPUZcasino_exclusive_no_deposit_bonus_steps',
                'label' => esc_html__('No deposit bonus steps', 'mkarapuz'),
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
        'title'  => esc_html__('Game Providers', 'mkarapuz'),
        'fields' => array (
            array (
                'key'           => 'KARAPUZcasino_game_provider',
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
        'title'  => esc_html__('Logotype', 'mkarapuz'),
        'fields' => array (
            array (
                'key'           => 'KARAPUZcasino_logotype',
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
        'title'  => esc_html__('Screenshots', 'mkarapuz'),
        'fields' => array (
            array (
                'key'           => 'KARAPUZcasino_screenshots_gallery',
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
        'title'  => esc_html__('News author', 'mkarapuz'),
        'fields' => array (
            array (
                'key'           => 'KARAPUZnews_author',
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
        'key'                   => 'KARAPUZslot_related_images',
        'title'                 => 'Related images',
        'fields'                => array(
            array(
                'key'               => 'KARAPUZslot_main_images',
                'label'             => esc_html__('Slot Images', 'mkarapuz'),
                'name'              => 'KARAPUZslot_main_images_group',
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
                                                'key'               => 'KARAPUZslot_art',
                                                'label'             => esc_html__('Slot Art', 'mkarapuz'),
                                                'name'              => 'KARAPUZslot_art_images',
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
                                                                            'key'               => 'KARAPUZslot_bg',
                                                                            'label'             => esc_html__('Slot background (1140x900 or bigger)', 'mkarapuz'),
                                                                            'name'              => 'KARAPUZslot_bg_image',
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
                                                                            'key'               => 'KARAPUZslot_promo_art',
                                                                            'label'             => esc_html__('Slot promo art', 'mkarapuz'),
                                                                            'name'              => 'KARAPUZslot_promo_art_image',
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
                        'key'               => 'KARAPUZslot_screenshots',
                        'label'             => esc_html__('Slot Screenshots', 'mkarapuz'),
                        'name'              => 'KARAPUZslot_screenshots_gallery',
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
        'title'                 => esc_html__('Slot Details', 'mkarapuz'),
        'fields'                => array(
                        array(
                            'key'                   => 'KARAPUZfeatured_casino_info',
                            'label'                 => esc_html__('Currrent featured casino', 'mkarapuz'),
                            'name'                  => 'KARAPUZfeatured_casino_info_msg',
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
                            'key'                   => 'KARAPUZslots_sizes',
                            'label'                 => esc_html__('Slot width and height', 'mkarapuz'),
                            'name'                  => 'KARAPUZslot_width_group',
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
                                                            'key'                   => 'KARAPUZslot_width',
                                                            'label'                 => esc_html__('Width', 'mkarapuz'),
                                                            'name'                  => 'KARAPUZslot_width_text',
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
                                                            'key'                   => 'KARAPUZslot_height',
                                                            'label'                 => esc_html__('Height', 'mkarapuz'),
                                                            'name'                  => 'KARAPUZslot_height_text',
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
                                                        'key'   => 'KARAPUZslot_payoff',
                                                        'label' => 'Slot Payoff',
                                                        'name'  => 'KARAPUZslot_payoff_text',
                                                        'type'  => 'text',
                                                    ),
                        ),
                        array(
                            'key'               => 'KARAPUZslot_game_source',
                            'label'             => esc_html__('Slot Game Source', 'mkarapuz'),
                            'name'              => 'KARAPUZslot_game_source_textarea',
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
                            'key'           => 'KARAPUZslot_rating',
                            'label'         => esc_html__('Slot Rating', 'mkarapuz'),
                            'name'          => 'KARAPUZslot_rating_select',
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
                            'key'   => 'KARAPUZslot_payoff',
                            'label' => esc_html__('Slot Payoff', 'mkarapuz'),
                            'name'  => 'KARAPUZslot_payoff_text',
                            'type'  => 'text',
                        ),
                        array(
                            'key'                   => 'KARAPUZslots_main_features',
                            'label'                 => esc_html__('Main features', 'mkarapuz'),
                            'name'                  => 'KARAPUZslots_main_features_group',
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
                                                            'key'           => 'KARAPUZreturn_to_player',
                                                            'label'         => 'Return to player, %',
                                                            'name'          => 'KARAPUZreturn_to_player_text',
                                                            'type'          => 'text',
                                                            'wrapper'       => array(
                                                                                'width' => '25',
                                                                                'class' => '',
                                                                                'id' => '',
                                                                            ),
                                                            'placeholder'   => '100',
                                                        ),
                                                        array(
                                                            'key'           => 'KARAPUZimport_min_max',
                                                            'label'         => 'Import Min-Max, &euro;',
                                                            'name'          => 'KARAPUZimport_min_max_text',
                                                            'type'          => 'text',
                                                            'wrapper'       => array(
                                                                                    'width' => '25',
                                                                                    'class' => '',
                                                                                    'id' => '',
                                                                                ),
                                                            'placeholder'   => '0.10-200',
                                                        ),
                                                        array(
                                                            'key'       => 'KARAPUZbet_lines',
                                                            'label'     => 'Slot bet lines',
                                                            'name'      => 'KARAPUZbet_lines_text',
                                                            'type'      => 'text',
                                                            'wrapper'   => array(
                                                                                'width' => '25',
                                                                                'class' => '',
                                                                                'id' => '',
                                                                            ),
                                                        ),
                                                        array(
                                                            'key'       => 'KARAPUZrollers_lines',
                                                            'label'     => 'Slot Rulli * Linee',
                                                            'name'      => 'KARAPUZrollers_lines_text',
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
                            'key'       => 'KARAPUZblockquote',
                            'label'     => esc_html__('Blockquote', 'mkarapuz'),
                            'name'      => 'KARAPUZblockquote_textarea',
                            'type'      => 'textarea',
                            'wrapper'   => array(
                                                'width' => '100',
                                                'class' => '',
                                                'id' => '',
                                            ),
                        ),
                        array(
                            'key'                   => 'KARAPUZtechnical_judgment',
                            'label'                 => esc_html__('Technical Judgment', 'mkarapuz'),
                            'name'                  => 'KARAPUZtechnical_judgment_group',
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
                                                            'key'                   => 'KARAPUZvolatility',
                                                            'label'                 => 'Volatility',
                                                            'name'                  => 'KARAPUZvolatility_range',
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
                                                            'key'                   => 'KARAPUZspin_win_frequency',
                                                            'label'                 => 'Spin winning frequency',
                                                            'name'                  => 'KARAPUZspin_win_frequency_range',
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
                                                            'key' => 'KARAPUZextra_features',
                                                            'label' => 'Extra features',
                                                            'name' => 'KARAPUZextra_features_range',
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
                            'key'               => 'KARAPUZreasons_to_play',
                            'label'             => esc_html__('Reasons to play', 'mkarapuz'),
                            'name'              => 'KARAPUZreasons_to_play',
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
                                    'key'                   => 'KARAPUZreasons_to_play_item',
                                    'label'                 => 'List of reasons to play',
                                    'name'                  => 'KARAPUZreasons_to_play_text',
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
                            'key'                   => 'KARAPUZbonus_game',
                            'label'                 => esc_html__('Bonus Game', 'mkarapuz'),
                            'name'                  => 'KARAPUZbonus_game_radio',
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
                            'key'                   => 'KARAPUZfree_spin',
                            'label'                 => esc_html__('Free Spin', 'mkarapuz'),
                            'name'                  => 'KARAPUZfree_spin_radio',
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
                            'key'                   => 'KARAPUZjackpot',
                            'label'                 => esc_html__('Jackpot', 'mkarapuz'),
                            'name'                  => 'KARAPUZjackpot_radio',
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
                            'key'                   => 'KARAPUZmoltiplicatore',
                            'label'                 => esc_html__('Moltiplicatore', 'mkarapuz'),
                            'name'                  => 'KARAPUZmoltiplicatore_radio',
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
                            'key'                   => 'KARAPUZbrandizzato',
                            'label'                 => esc_html__('Brandizzato', 'mkarapuz'),
                            'name'                  => 'KARAPUZbrandizzato_radio',
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
                            'key'                   => 'KARAPUZin_italia',
                            'label'                 => esc_html__('In Italia', 'mkarapuz'),
                            'name'                  => 'KARAPUZin_italia_radio',
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
                            'key'       => 'KARAPUZslot_theme',
                            'label'     => esc_html__('Slot theme', 'mkarapuz'),
                            'name'      => 'KARAPUZslot_theme_text',
                            'type'      => 'text',
                            'wrapper'   => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                        ),
                        array(
                            'key'       => 'KARAPUZwebsite_url',
                            'label'     => esc_html__('Website URL', 'mkarapuz'),
                            'name'      => 'KARAPUZKARAPUZwebsite_url_text',
                            'type'      => 'url',
                            'wrapper'   => array(
                                                'width' => '',
                                                'class' => '',
                                                'id' => '',
                                            ),
                        ),
                        array(
                            'key'       => 'KARAPUZwebsite',
                            'label'     => esc_html__('Website Name', 'mkarapuz'),
                            'name'      => 'KARAPUZKARAPUZwebsite_text',
                            'type'      => 'text',
                            'wrapper'   => array(
                                                'width' => '',
                                                'class' => '',
                                                'id' => '',
                                            ),
                        ),
                        array(
                            'key'       => 'KARAPUZwebsite',
                            'label'     => esc_html__('Website Name', 'mkarapuz'),
                            'name'      => 'KARAPUZKARAPUZwebsite_text',
                            'type'      => 'text',
                            'wrapper'   => array(
                                                'width' => '',
                                                'class' => '',
                                                'id' => '',
                                            ),
                        ),
                        array(
                            'key'               => 'KARAPUZslot_release_date',
                            'label'             => esc_html__('Slot release date', 'mkarapuz'),
                            'name'              => 'KARAPUZslot_release_date_picker',
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