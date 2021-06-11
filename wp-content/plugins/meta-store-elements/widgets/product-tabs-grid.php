<?php

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Core\Schemes\Color;
use Elementor\Group_Control_Typography;
use Elementor\Core\Schemes\Typography;

class Meta_Store_Product_Tabs_Grid_Widget extends Widget_Base {

    /** Widget Name * */
    public function get_name() {
        return 'ms-product-tabs-grid';
    }

    /** Widget Title * */
    public function get_title() {
        return esc_html__('Product Tabs', 'meta-store-elements');
    }

    /** Widget Icon * */
    public function get_icon() {
        return 'eicon-tabs';
    }

    /** Categories * */
    public function get_categories() {
        return ['meta-store-elements'];
    }

    /** Widget Controls * */
    protected function _register_controls() {

        $this->start_controls_section(
                'product_query', [
            'label' => esc_html__('Content', 'meta-store-elements'),
                ]
        );

        $this->add_group_control(
                Group_Control_Produt_Query::get_type(), [
            'name' => 'products',
            'label' => esc_html__('Products', 'meta-store-elements'),
                ]
        );

        $this->add_control(
                'align_tabs', [
            'label' => __('Tabs Alignment', 'meta-store-elements'),
            'type' => Controls_Manager::CHOOSE,
            'options' => [
                'left' => [
                    'title' => __('Left', 'meta-store-elements'),
                    'icon' => 'fa fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', 'meta-store-elements'),
                    'icon' => 'fa fa-align-center',
                ],
                'right' => [
                    'title' => __('Right', 'meta-store-elements'),
                    'icon' => 'fa fa-align-right',
                ],
            ],
            'default' => 'center',
            'toggle' => true,
                ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
                'tabs_text_style', [
            'label' => esc_html__('Tabs', 'meta-store-elements'),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );

        $this->add_control(
                'tabs_color', [
            'label' => __('Text Color', 'meta-store-elements'),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Color::get_type(),
                'value' => Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}} .ms-product-tabs-grid .tabs li' => 'color: {{VALUE}}',
                '{{WRAPPER}} .ms-product-tabs-grid .tabs li:after' => 'background-color: {{VALUE}}'
            ],
                ]
        );

        $this->add_control(
                'tabs_hover_color', [
            'label' => __('Text Hover/Active Color', 'meta-store-elements'),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Color::get_type(),
                'value' => Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}} .ms-product-tabs-grid .tabs li:hover, {{WRAPPER}} .ms-product-tabs-grid .tabs li.active' => 'color: {{VALUE}}',
                '{{WRAPPER}} .ms-product-tabs-grid .tabs li:hover:after, {{WRAPPER}} .ms-product-tabs-grid .tabs li.active:after' => 'background-color: {{VALUE}}'
            ],
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'tab_typography',
            'label' => __('Typography', 'meta-store-elements'),
            'scheme' => Typography::TYPOGRAPHY_1,
            'selector' => '{{WRAPPER}} .ms-product-tabs-grid .tabs li',
                ]
        );

        $this->add_control(
                'tab_spacing', [
            'label' => __('Bottom Spacing', 'meta-store-elements'),
            'type' => Controls_Manager::SLIDER,
            'size_units' => ['px'],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ],
            ],
            'selectors' => [
                '{{WRAPPER}} .ms-product-tabs-grid .header' => 'margin-bottom: {{SIZE}}{{UNIT}};',
            ],
                ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
                'title_style', [
            'label' => esc_html__('Product Title', 'meta-store-elements'),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );

        $this->add_control(
                'title_color', [
            'label' => __('Color', 'meta-store-elements'),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Color::get_type(),
                'value' => Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}} .products li.product .woocommerce-loop-product__title a' => 'color: {{VALUE}}',
            ],
                ]
        );

        $this->add_control(
                'title_hover_color', [
            'label' => __('Hover Color', 'meta-store-elements'),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Color::get_type(),
                'value' => Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}} .products li.product .woocommerce-loop-product__title a:hover' => 'color: {{VALUE}}',
            ],
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'title_typography',
            'label' => __('Typography', 'meta-store-elements'),
            'scheme' => Typography::TYPOGRAPHY_1,
            'selector' => '{{WRAPPER}} .products li.product .woocommerce-loop-product__title a',
                ]
        );

        $this->add_control(
                'title_margin', [
            'label' => __('Margin', 'meta-store-elements'),
            'type' => Controls_Manager::DIMENSIONS,
            'size_units' => ['px', '%', 'em'],
            'allowed_dimensions' => 'vertical',
            'selectors' => [
                '{{WRAPPER}} .products li.product .woocommerce-loop-product__title' => 'margin: {{TOP}}{{UNIT}} 0 {{BOTTOM}}{{UNIT}} 0;',
            ],
                ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
                'price_style', [
            'label' => esc_html__('Price', 'meta-store-elements'),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );

        $this->add_control(
                'price_color', [
            'label' => __('Color', 'meta-store-elements'),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Color::get_type(),
                'value' => Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}} ul.products li.product .ms-woocommerce-product-info .price' => 'color: {{VALUE}}',
            ],
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'price_typography',
            'label' => __('Typography', 'meta-store-elements'),
            'scheme' => Typography::TYPOGRAPHY_1,
            'selector' => '{{WRAPPER}} ul.products li.product .ms-woocommerce-product-info .price',
                ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
                'onsale_style', [
            'label' => esc_html__('On Sale', 'meta-store-elements'),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );

        $this->add_control(
                'onsale_bgcolor', [
            'label' => __('Background Color', 'meta-store-elements'),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Color::get_type(),
                'value' => Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}} .onsale' => 'background-color: {{VALUE}}',
                '{{WRAPPER}} .onsale:after' => 'border-left: 13px solid {{VALUE}}; border-right: 13px solid {{VALUE}}; border-bottom: 13px solid transparent',
            ],
                ]
        );

        $this->add_control(
                'onsale_color', [
            'label' => __('Color', 'meta-store-elements'),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Color::get_type(),
                'value' => Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}} .onsale span' => 'color: {{VALUE}}',
            ],
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'onsale_typography',
            'label' => __('Typography', 'meta-store-elements'),
            'scheme' => Typography::TYPOGRAPHY_1,
            'selector' => '{{WRAPPER}} .onsale span',
                ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
                'cart_style', [
            'label' => esc_html__('Add to cart', 'meta-store-elements'),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );

        $this->add_control(
                'cart_color', [
            'label' => __('Color', 'meta-store-elements'),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Color::get_type(),
                'value' => Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}} ul.products li.product .button' => 'border-color: {{VALUE}};color: {{VALUE}}',
            ],
                ]
        );

        $this->add_control(
                'cart_hover_color', [
            'label' => __('Hover Color', 'meta-store-elements'),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Color::get_type(),
                'value' => Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}} ul.products li.product .button:hover' => 'border-color: {{VALUE}};color: {{VALUE}}',
            ],
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'cart_typography',
            'label' => __('Typography', 'meta-store-elements'),
            'scheme' => Typography::TYPOGRAPHY_1,
            'selector' => '{{WRAPPER}} ul.products li.product .button, {{WRAPPER}} ul.products li.product .added_to_cart',
                ]
        );

        $this->end_controls_section();
    }

    /** Render Layout * */
    protected function render() {
        $settings = $this->get_settings_for_display();
        $column_layout = ( $settings['products_column_layout'] ) ? $settings['products_column_layout'] : 'columns-4';
        $align_tabs = $settings['align_tabs'] ? $settings['align_tabs'] : 'center';
        ?>
        <div class="ms-product-tabs-grid <?php echo esc_attr($align_tabs); ?>" id="ms-product-tabs-grid-<?php echo esc_attr($this->get_id()); ?>">
            <div class="header">                        
                <?php if (!empty($settings['products_tabs'])) : ?>
                    <ul class="tabs">
                        <?php $li_counter = 1; ?>
                        <?php foreach ($settings['products_tabs'] as $id) : ?>
                            <?php $active_class = ( $li_counter == 1 ) ? 'active' : ''; ?>
                            <li data-id="ms-<?php echo esc_attr($id) . '-' . esc_attr($this->get_id()); ?>" class="<?php echo esc_attr($active_class); ?>" ><?php echo esc_html($id); ?></li>
                            <?php $li_counter++; ?>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="products-wrap">
                <?php $tab_counter = 1; ?>
                <?php foreach ($settings['products_tabs'] as $product_type) : ?>
                    <?php $tactive_class = ( $tab_counter == 1 ) ? 'active' : ''; ?>
                    <ul class="product-type-wrap products <?php echo esc_attr($column_layout); ?> <?php echo esc_attr($tactive_class); ?>" id="ms-<?php echo esc_attr($product_type) . '-' . esc_attr($this->get_id()); ?>">
                        <?php
                        $args = $this->get_query_args($product_type);
                        $product_query = new WP_Query($args);

                        if ($product_query->have_posts()) {
                            while ($product_query->have_posts()) {
                                $product_query->the_post();

                                wc_get_template_part('content', 'product');
                            }
                            wp_reset_postdata();
                        }
                        ?>
                    </ul>
                    <?php $tab_counter++; ?>
                <?php endforeach; ?>
            </div>
        </div>    
        <?php
    }

    /** Query Arguments */
    protected function get_query_args($product_type) {
        $settings = $this->get_settings_for_display();
        $no_of_products = ( $settings['products_no_of_products']['size'] ) ? $settings['products_no_of_products']['size'] : 4;
        $orderby = ( $settings['products_orderby'] ) ? $settings['products_orderby'] : 'none';
        $order = ( $settings['products_order'] ) ? $settings['products_order'] : 'DESC';

        $args = array(
            'post_type' => 'product',
            'posts_per_page' => $no_of_products,
            'orderby' => $orderby,
            'order' => $order,
        );

        switch ($product_type) {
            case 'latest':
                $args['orderby'] = 'date';
                $args['order'] = 'DESC';
                break;

            case 'featured':
                $args['tax_query'] = array(
                    array(
                        'taxonomy' => 'product_visibility',
                        'field' => 'name',
                        'terms' => 'featured',
                        'operator' => 'IN',
                    )
                );
                break;

            case 'best-selling':
                $args['meta_key'] = 'total_sales';
                $args['orderby'] = 'meta_value_num';
                break;

            case 'sale':
                $args['meta_query'] = array(
                    'relation' => 'OR',
                    array(// Simple products type
                        'key' => '_sale_price',
                        'value' => 0,
                        'compare' => '>',
                        'type' => 'numeric'
                    ),
                    array(// Variable products type
                        'key' => '_min_variation_sale_price',
                        'value' => 0,
                        'compare' => '>',
                        'type' => 'numeric'
                    )
                );
                break;

            case 'top-rated':
                $args['meta_key'] = '_wc_average_rating';
                $args['orderby'] = 'meta_value_num';
                $args['order'] = 'DESC';
                break;
        }
        return $args;
    }

}
