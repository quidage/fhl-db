<?php

/*
 * Copyright (C) 2013 Christian Hansen <christian@herrhansen.com>
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

namespace FhlDb\Model;

/**
 * Description of Customer
 *
 * @author Christian Hansen <christian@herrhansen.com>
 */
class Customer extends AbstractModel {

    protected $company;
    protected $first_name;
    protected $last_name;
    protected $street;
    protected $zip;
    protected $city;
    
    public function getCompany() {
        return $this->company;
    }

    public function getFirst_name() {
        return $this->first_name;
    }

    public function getLast_name() {
        return $this->last_name;
    }

    public function getStreet() {
        return $this->street;
    }

    public function getZip() {
        return $this->zip;
    }

    public function getCity() {
        return $this->city;
    }

    public function setCompany($company) {
        $this->company = $company;
    }

    public function setFirst_name($first_name) {
        $this->first_name = $first_name;
    }

    public function setLast_name($last_name) {
        $this->last_name = $last_name;
    }

    public function setStreet($street) {
        $this->street = $street;
    }

    public function setZip($zip) {
        $this->zip = $zip;
    }

    public function setCity($city) {
        $this->city = $city;
    }


    
}
