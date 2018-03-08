<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Engineer;
use         EDSM\Alias;

class Order extends Alias
{
    /**
     * Table with parent => children
     * Only used in our front-end to generate the right panel layout
     */
    static protected $name      = [
        [
            'parent'    => 6,   // Felicity Farseer
            'children'  => [
                [
                    'parent'    => 14,  // Juri Ishmaak
                    'children'  => [
                        [
                            'parent'    => 11,  // Colonel Bris Dekker
                        ],
                        [
                            'parent'    => 16,  // The Sarge
                        ],
                    ],
                ],
            ],
        ],
        
        [
            'parent'    => 12,  // Elvira Martuuk
            'children'  => [
                [
                    'parent'    => 7,   // Marco Qwent
                    'block'     => true,
                    'children'  => [
                        [
                            'parent'    => 8,   // Professor Palin
                        ],
                        [
                            'parent'    => 13,  // Lori Jameson
                        ],
                    ],
                ],
                [
                    'parent'    => 15,  // Zacariah Nemo
                ],
            ],
        ],
        
        [
            'parent'    => 10,  // The Dweller
            'children'  => [
                [
                    'parent'    => 17,  // Lei Cheung
                    'children'  => [
                        [
                            'parent'    => 18,  // Ram Tah
                        ],
                    ],
                ],
            ],
        ],
        
        [
            'parent'    => 4,   // Tod 'The Blaster' McQuinn
            'children'  => [
                [
                    'parent'    => 5,   // Selene Jean
                    'children'  => [
                        [
                            'parent'    => 9,   // Didi Vatermann
                        ],
                        [
                            'parent'    => 19,  // Bill Turner
                        ],
                    ],
                ],
            ],
        ],
        
        [
            'parent'    => 2,   // Liz Ryder
            'children'  => [
                [
                    'parent'    => 1,   // Hera Tani
                    'children'  => [
                        [
                            'parent'    => 3,   // Broo Tarquin
                        ],
                        [
                            'parent'    => 20,  // Tiana Fortune
                        ],
                    ],
                ],
            ],
        ],
    ];
}