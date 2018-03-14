<?php

class Loewenstark_Instagram_Block_Instafeed extends Mage_Core_Block_Template {
    /*
     * Modul active check
     */

    protected function _toHtml() {
        if (!Mage::getStoreConfigFlag('ls_instagram/general/active')) {
            return '';
        }
        return parent::_toHtml();
    }

    /*
     * Get instagram access token
     */

    public function getAccessToken() {
        return Mage::getStoreConfig('ls_instagram/general/access_token');
    }

    /*
     * Get instagram user id
     */

    public function getUserId() {
        return Mage::getStoreConfig('ls_instagram/general/user_id');
    }

    /*
     * Get container id for feed
     */

    public function getContainerBox() {
        return Mage::getStoreConfig('ls_instagram/general/container_name');
    }

    /*
     * Get image format
     */

    public function getImageFormat() {
        $image_format = Mage::getStoreConfig('ls_instagram/general_feed_setup/image_format');
        return $image_format;
    }

    /*
     * Sort image
     */

    public function getImageSort() {
        $image_sort = Mage::getStoreConfig('ls_instagram/general_feed_setup/image_sort');
        return $image_sort;
    }

    /*
     * Get image limit
     */

    public function getLimit() {
        $limit = (int) Mage::getStoreConfig('ls_instagram/general_feed_setup/limit');

        if ($limit) {
            return $limit;
        } else {
            return 99;
        }
    }

    /*
     * Get likes from instagram
     */

    public function getLikes() {
        $likes = Mage::getStoreConfig('ls_instagram/general_feed_setup/likes');

        if ($likes) {
            return '<div class="like-box"><span>{{likes}}</span></div>';
        }
    }

}
