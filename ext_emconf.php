<?php

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Arjan de Pooter <arjan@cmsworks.nl>, CMS Works BV
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */

$EM_CONF[$_EXTKEY] = [
    'title' => 'Twitter feed',
    'description' => 'Show tweets from user or search query on frontend.',
    'category' => 'plugin',

    'author' => 'Arjan de Pooter, Luis A. García',
    'author_email' => 'mail@arjandepooter.nl, louisantoniogarcia@gmail.com',
    'author_company' => '',

    'state' => 'stable',
    'version' => '2.3.1',

    'uploadfolder' => false,
    'clearCacheOnLoad' => false,
    'createDirs' => '',

    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-10.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
