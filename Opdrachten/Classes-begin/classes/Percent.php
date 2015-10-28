<?php

    class Percent {
    
        // Properties van klasse Percent
        
            // Members
            public $absolute;
            public $relative;
            public $hundred;
            public $nominal;
        
            // Constructor
            public function __construct($new, $unit) {
            
                // Laat ALLE resultaten door formatNumber gaan
                $this->absolute     = $this->formatNumber($new / $unit);
                $this->relative     = $this->formatNumber($this->absolute - 1);
                $this->hundred      = $this->formatNumber($this->absolute * 100);
                $this->nominal      = 'status-quo';
                
                if( $this->absolute > 1 ) {
                
                    $this->nominal  = 'positive';
                
                } elseif( $this->absolute < 1 ) {
                
                    $this->nominal  = 'negative';
                
                }
            
            }
        
            // Method
            public function formatNumber($number) {
            
                return number_format( $number, 2, '.', ' ' );
            
            }
    
    }

?>