<?php

/*
 * The MIT License
 *
 * Copyright 2015 Pascal Koch <info@pascalkoch.net>.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

/**
 * Description of Alerts
 *
 * @author Pascal Koch <info@pascalkoch.net>
 */
class Alerts {

    private $errors = array(), $infos = array(), $successes = array(), $warnings = array();

    public function add_error($string) {
        $this->errors[] = $string;
    }

    public function add_info($string) {
        $this->infos[] = $string;
    }

    public function add_success($string) {
        $this->successes[] = $string;
    }

    public function add_warning($string) {
        $this->warnings[] = $string;
    }

    public function reset_error() {
        $this->errors = array();
    }

    public function reset_infos() {
        $this->infos = array();
    }

    public function reset_successes() {
        $this->successes = array();
    }

    public function reset_warnings() {
        $this->warnings = array();
    }

    function getErrors() {
        $errors = $this->errors;
        $this->reset_error();
        return $errors;
    }

    function getInfos() {
        $infos = $this->infos;
        $this->reset_infos();
        return $infos;
    }

    function getSuccesses() {
        $successes = $this->successes;
        $this->reset_successes();
        return $successes;
    }

    function getWarnings() {
        $warnings = $this->warnings;
        $this->reset_warnings();
        return $warnings;
    }

}
