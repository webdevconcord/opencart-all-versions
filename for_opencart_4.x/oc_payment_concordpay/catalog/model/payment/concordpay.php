<?php

namespace Opencart\Catalog\Model\Extension\OcPaymentConcordpay\Payment;

/**
 * Class Concordpay.
 */
class Concordpay extends \Opencart\System\Engine\Model
{
    /**
     * @param array $address
     * @return array
     */
    public function getMethod(array $address): array {
        $this->load->language('extension/oc_payment_concordpay/payment/concordpay');

        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "zone_to_geo_zone` WHERE `geo_zone_id` = '" . (int)$this->config->get('payment_concordpay_geo_zone_id') . "' AND `country_id` = '" . (int)$address['country_id'] . "' AND (`zone_id` = '" . (int)$address['zone_id'] . "' OR `zone_id` = '0')");

        if (!$this->config->get('payment_concordpay_geo_zone_id')) {
            $status = true;
        } elseif ($query->num_rows) {
            $status = true;
        } else {
            $status = false;
        }

        $method_data = [];

        if ($status) {
            $method_data = [
                'code'       => 'concordpay',
                'title'      => $this->language->get('heading_title'),
                'sort_order' => $this->config->get('payment_concordpay_sort_order')
            ];
        }

        return $method_data;
    }
}
