<?php

class Loewenstark_Instagram_Model_System_Config_Source_Position {
    /*
     * Add container position to Instagram Feed setup
     */

    public function toOptionArray() {
        return [
            ['value' => 'index', 'label' => __('Home page')],
            ['value' => 'category', 'label' => __('Category page')],
            ['value' => 'product', 'label' => __('Product page')]
        ];
    }

}
