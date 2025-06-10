<?php
class Skill_Card_Widget extends \Elementor\Widget_Base {
    public function get_name() {
        return 'skill_card';
    }

    public function get_title() {
        return __('Skill Card', 'custom-elements');
    }

    public function get_icon() {
        return 'fa fa-code';
    }

    public function get_categories() {
        return ['software-engineer'];
    }

    protected function _register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'custom-elements'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'icon',
            [
                'label' => __('Icon', 'custom-elements'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-code',
                    'library' => 'fa-solid',
                ],
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => __('Title', 'custom-elements'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Skill Title', 'custom-elements'),
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => __('Description', 'custom-elements'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Skill description goes here', 'custom-elements'),
            ]
        );

        $this->end_controls_section();

        // Style Section
        $this->start_controls_section(
            'style_section',
            [
                'label' => __('Style', 'custom-elements'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'icon_color',
            [
                'label' => __('Icon Color', 'custom-elements'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .skill-card i' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'custom-elements'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .skill-card h3' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'description_color',
            [
                'label' => __('Description Color', 'custom-elements'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .skill-card p' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="skill-card">
            <?php \Elementor\Icons_Manager::render_icon($settings['icon'], ['aria-hidden' => 'true']); ?>
            <h3><?php echo esc_html($settings['title']); ?></h3>
            <p><?php echo esc_html($settings['description']); ?></p>
        </div>
        <?php
    }
} 