<?php
class Yotpo_Yotpo_Review_ExportController extends Mage_Adminhtml_Controller_Action
{
    /**
     * Exports reviews by id in post param "reviews" to csv and download file when finished.
     */
    public function csvexportAction()
    {
        $reviews = $this->getRequest()->getPost('reviews', array());
        $file = Mage::getModel('Yotpo_Yotpo_Model_Export_Csv')->exportReviews($reviews);
        $data = Mage::getModel('Yotpo_Yotpo_Model_Export_Csv')->exportData($reviews);
        $this->_prepareDownloadResponse($file, array('type' => 'filename', 'value' => $data));
    }
    
    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('catalog/product');
    }

}