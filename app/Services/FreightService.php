<?php

namespace App\Services;

use App\Models\Admin\GeneralSettings;


class FreightService  
{
    public $weight;
    public $mode;
    public $origin;

    function __construct(float $weight, String $mode, String $origin){
        $this->weight = ceil($weight);
        $this->mode = $mode;
        $this->origin = strtolower($origin);
    }


    private function getModeBaseFare(){
        $base_fare_key = $this->mode == 'air' ? 'base-fare-by-air': 'base-fare-by-sea';
        $fare =  GeneralSettings::where('settings_key',  $base_fare_key)->first(['settings_value']);
        return  (int) $fare->settings_value;
    }

    private function getOriginCountryFlatRate(){
        $originCountryKey = $this->origin.'-flat-rate';
        $flatRate= GeneralSettings::where('settings_key',  $originCountryKey)->first(['settings_value']);
        return  (int) $flatRate->settings_value;
    }


    private function getWeightPricePerKg(){
        $weight_fare_key = $this->mode == 'air' ? 'air-weight-per-kg': 'sea-weight-per-kg';
        $fare =  GeneralSettings::where('settings_key',  $weight_fare_key)->first(['settings_value']);
        return  (int) $fare->settings_value;
    }

    private function getTotalWeightPrice(){
        return  $this->getWeightPricePerKg() * $this->weight;
    }
 
    private function getCustomTaxPercent(){
        $customeTaxPercent =  GeneralSettings::where('settings_key', 'custom-tax-percent')->first(['settings_value']);
        return $customeTaxPercent->settings_value;
    }

   
    private function calculateFreightPriceBeforeTax(){
        return $beforeTax = $this->getModeBaseFare() + $this->getTotalWeightPrice() + $this->getOriginCountryFlatRate();
    }

    private function calculateFreightTax(){
        return $tax = $this->calculateFreightPriceBeforeTax() * ($this->getCustomTaxPercent()/100);
    }

    private function calculateFreightPrice(){
        return $total = $this->calculateFreightPriceBeforeTax() + $this->calculateFreightTax();
    }

    

    public function calculateFreight(){
        $freight = (object) array();
        $freight->total =  $this->calculateFreightPrice();  
        $freight->base_fare =  $this->getModeBaseFare();  
        $freight->country_flat_rate =  $this->getOriginCountryFlatRate();  
        $freight->before_tax =  $this->calculateFreightPriceBeforeTax();  
        $freight->tax =  $this->calculateFreightTax();  
        $freight->total_weight_price = $this->getTotalWeightPrice();
        $freight->weight_price_per_kg = $this->getWeightPricePerKg();
        $freight->custom_tax_percent = $this->getCustomTaxPercent();
        $freight->mode = $this->mode;
        $freight->weight = $this->weight;
        $freight->origin = $this->origin;
        return $freight ;
    }
   
}

?>