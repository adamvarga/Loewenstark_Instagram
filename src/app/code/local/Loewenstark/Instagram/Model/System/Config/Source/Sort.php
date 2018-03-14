<?php

class Loewenstark_Instagram_Model_System_Config_Source_Sort {
    /*
     * Add image sort to instafeed
     */

    public function toOptionArray() {
        return array(
            array(
                'value' => 'none',
                'label' => 'Default - As they come from Instagram',
            ),
            array(
                'value' => 'most-recent',
                'label' => 'Newest to oldest',
            ),
            array(
                'value' => 'least-recent',
                'label' => 'Oldest to newest',
            ),
            array(
                'value' => 'most-liked',
                'label' => 'Highest # of likes to lowest',
            ),
            array(
                'value' => 'least-liked',
                'label' => 'Lowest # likes to highest',
            ),
            array(
                'value' => 'most-commented',
                'label' => 'Highest # of comments to lowest',
            ),
            array(
                'value' => 'least-commented',
                'label' => 'Lowest # of comments to highest',
            ),
            array(
                'value' => 'random',
                'label' => 'Random order',
            )
        );
    }

}
