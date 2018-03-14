<?php

class Loewenstark_Instagram_Model_System_Config_Source_Format {
    /*
     * Add image format to instafeed
     */

    public function toOptionArray() {
        return array(
            array(
                'value' => 'thumbnail',
                'label' => 'Thumbnail (default) - 150x150',
            ),
            array(
                'value' => 'low_resolution',
                'label' => 'Low Resolution - 306x306',
            ),
            array(
                'value' => 'standard_resolution',
                'label' => 'Standard Resolution 612x612',
            )
        );
    }

}
