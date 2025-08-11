<?php
if ( ! defined( 'ABSPATH' ) ) exit;

class How_It_Works_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'how_it_works_steps';
    }

    public function get_title() {
        return __( 'How It Works Steps', 'how-it-works' );
    }

    public function get_icon() {
        return 'eicon-bullet-list';
    }

    public function get_categories() {
        return [ 'general' ];
    }

    protected function register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Steps', 'how-it-works' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'section_title',
            [
                'label' => __( 'Section Title', 'how-it-works' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'How It Works', 'how-it-works' ),
                'placeholder' => __( 'Enter section title', 'how-it-works' ),
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'icon',
            [
                'label' => __( 'Icon', 'how-it-works' ),
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
                'label' => __( 'Title', 'how-it-works' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Step title', 'how-it-works' ),
            ]
        );

        $this->add_control(
            'steps_list',
            [
                'label' => __( 'Steps', 'how-it-works' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [ 
                        'title' => 'Schedule',
                        'icon' => [
                            'value' => 'fas fa-calendar-alt',
                            'library' => 'solid',
                        ]
                    ],
                    [ 
                        'title' => 'Inspect',
                        'icon' => [
                            'value' => 'fas fa-search',
                            'library' => 'solid',
                        ]
                    ],
                    [ 
                        'title' => 'Report',
                        'icon' => [
                            'value' => 'fas fa-file-alt',
                            'library' => 'solid',
                        ]
                    ],
                    [ 
                        'title' => 'Fix',
                        'icon' => [
                            'value' => 'fas fa-tools',
                            'library' => 'solid',
                        ]
                    ],
                    [ 
                        'title' => 'Peace of Mind',
                        'icon' => [
                            'value' => 'fas fa-smile',
                            'library' => 'solid',
                        ]
                    ],
                ],
                'title_field' => '{{{ title }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        echo '<div class="how-it-works-wrapper">';
        
        // Affichage du titre de section
        if ( ! empty( $settings['section_title'] ) ) {
            echo '<h2 class="how-it-works-title">' . esc_html( $settings['section_title'] ) . '</h2>';
        }
        
        echo '<div class="how-it-works-container">';
        foreach ( $settings['steps_list'] as $index => $step ) {
            echo '<div class="how-it-works-step">';
            
            // Affichage de l'icône
            if ( ! empty( $step['icon']['value'] ) ) {
                echo '<div class="step-icon">';
                \Elementor\Icons_Manager::render_icon( $step['icon'], [ 'aria-hidden' => 'true', 'class' => 'step-icon-element' ] );
                echo '</div>';
            }
            
            // Affichage du titre
            if ( ! empty( $step['title'] ) ) {
                echo '<p>' . esc_html( $step['title'] ) . '</p>';
            }
            
            echo '</div>';
            
            // Affichage de la flèche (sauf pour le dernier élément)
            if ( $index !== array_key_last($settings['steps_list']) ) {
                echo '<span class="how-it-works-arrow">→</span>';
            }
        }
        echo '</div>';
        echo '</div>';
    }

    public function get_style_depends() {
        return [ 'how-it-works-style' ];
    }
}
