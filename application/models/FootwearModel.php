<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FootwearModel
 *
 * @author crazy
 */
class FootwearModel extends CSV_Model{
    function __construct() {
        parent::__construct('../system/database/FootwearData.csv','code');
    }
}