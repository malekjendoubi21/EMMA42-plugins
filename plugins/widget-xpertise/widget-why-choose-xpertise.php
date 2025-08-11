<?php
if ( ! defined( 'ABSPATH' ) ) exit;

class Why_Choose_Xpertise_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'why_choose_xpertise';
    }

    public function get_title() {
        return __( 'Why Choose Xpertise', 'why-choose-xpertise' );
    }

    public function get_icon() {
        return 'eicon-star';
    }

    public function get_categories() {
        return [ 'general' ];
    }

    protected function register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'why-choose-xpertise' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'section_title',
            [
                'label' => __( 'Section Title', 'why-choose-xpertise' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Why Choose Xpertise?', 'why-choose-xpertise' ),
                'placeholder' => __( 'Enter section title', 'why-choose-xpertise' ),
            ]
        );

        $this->add_control(
            'show_navigation',
            [
                'label' => __( 'Show Navigation', 'why-choose-xpertise' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'why-choose-xpertise' ),
                'label_off' => __( 'Hide', 'why-choose-xpertise' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'icon',
            [
                'label' => __( 'Icon', 'why-choose-xpertise' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-check',
                    'library' => 'solid',
                ],
            ]
        );

        $repeater->add_control(
            'title',
            [
                'label' => __( 'Title', 'why-choose-xpertise' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Feature title', 'why-choose-xpertise' ),
            ]
        );

        $repeater->add_control(
            'description',
            [
                'label' => __( 'Description', 'why-choose-xpertise' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Feature description', 'why-choose-xpertise' ),
            ]
        );

        $this->add_control(
            'features_list',
            [
                'label' => __( 'Features', 'why-choose-xpertise' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [ 
                        'title' => '100% Independent',
                        'description' => '',
                        'icon' => [
                            'value' => 'fas fa-award',
                            'library' => 'solid',
                        ]
                    ],
                    [ 
                        'title' => 'Swiss Standards, UAE Know-How',
                        'description' => '',
                        'icon' => [
                            'value' => 'fas fa-shield-alt',
                            'library' => 'solid',
                        ]
                    ],
                    [ 
                        'title' => '24-48 Hour Report Delivery',
                        'description' => '',
                        'icon' => [
                            'value' => 'fas fa-clock',
                            'library' => 'solid',
                        ]
                    ],
                    [ 
                        'title' => 'Detailed Photo Reports',
                        'description' => '',
                        'icon' => [
                            'value' => 'fas fa-camera',
                            'library' => 'solid',
                        ]
                    ],
                ],
                'title_field' => '{{{ title }}}',
            ]
        );

        $this->end_controls_section();

        // Style controls
        $this->start_controls_section(
            'style_section',
            [
                'label' => __( 'Style', 'why-choose-xpertise' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'background_color',
            [
                'label' => __( 'Background Color', 'why-choose-xpertise' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#f8f9fa',
                'selectors' => [
                    '{{WRAPPER}} .xpertise-features-container' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'card_background_color',
            [
                'label' => __( 'Card Background Color', 'why-choose-xpertise' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#1a1a1a',
                'selectors' => [
                    '{{WRAPPER}} .xpertise-feature-card' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'text_color',
            [
                'label' => __( 'Text Color', 'why-choose-xpertise' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#ffffff',
                'selectors' => [
                    '{{WRAPPER}} .xpertise-feature-card h3' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .xpertise-feature-card p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        echo '<div class="xpertise-wrapper">';
        
        // Header avec titre et navigation
        echo '<div class="xpertise-header">';
        
        // Affichage du titre de section
        if ( ! empty( $settings['section_title'] ) ) {
            echo '<h2 class="xpertise-title">' . esc_html( $settings['section_title'] ) . '</h2>';
        }
        
        // Navigation si activée
        if ( $settings['show_navigation'] === 'yes' ) {
            echo '<div class="xpertise-navigation">';
            echo '<button class="nav-btn prev-btn" aria-label="Previous"><span>←</span> Prev</button>';
            echo '<button class="nav-btn next-btn" aria-label="Next">Next <span>→</span></button>';
            echo '</div>';
        }
        
        echo '</div>';
        
        echo '<div class="xpertise-features-container">';
        foreach ( $settings['features_list'] as $index => $feature ) {
            echo '<div class="xpertise-feature-card">';
            
            // Affichage de l'icône
            if ( ! empty( $feature['icon']['value'] ) ) {
                echo '<div class="feature-icon">';
                \Elementor\Icons_Manager::render_icon( $feature['icon'], [ 'aria-hidden' => 'true', 'class' => 'xpertise-icon' ] );
                echo '</div>';
            }
            
            // Affichage du titre
            if ( ! empty( $feature['title'] ) ) {
                echo '<h3>' . esc_html( $feature['title'] ) . '</h3>';
            }
            
            // Affichage de la description si elle existe
            if ( ! empty( $feature['description'] ) ) {
                echo '<p>' . esc_html( $feature['description'] ) . '</p>';
            }
            
            echo '</div>';
        }
        echo '</div>';
        echo '</div>';
    }

    public function get_style_depends() {
        return [ 'why-choose-xpertise-style' ];
    }
}
