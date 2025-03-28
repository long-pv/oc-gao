<?php
if (!defined('ABSPATH'))
    exit; // Exit if accessed directly

class Archive_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'Archive_Widget';
    }

    public function get_title()
    {
        return __('Archive Widget', 'child_theme');
    }

    public function get_icon()
    {
        return 'eicon-code-bold'; // https://elementor.github.io/elementor-icons/
    }

    public function get_categories()
    {
        return ['custom_builder_theme'];
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'child_theme'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="category row">
            <?php for ($i = 0; $i < 4; $i++): ?>
                <div class="col-lg-3">
                    <div class="category__item">
                        <div class="category__image-wrapper">
                            <img src="<?php echo get_stylesheet_directory_uri() . "/assets/images/cat-image.png"; ?>" alt="Ngao"
                                class="category__image">
                        </div>
                        <p class="category__name">NGAO</p>
                    </div>
                </div>
            <?php endfor; ?>
            <!--  -->
        </div>
        <?php
    }
}

