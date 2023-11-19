<?php
/*
Plugin Name: Retirement Calculator by www.calculator.io
Plugin URI: https://www.calculator.io/retirement-calculator/
Description: Retirement savings calculator that uses the formula FV = PV (1 + R)^n to help users plan for retirement and calculate retirement income.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_retirement_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Retirement Calculator by Calculator.iO";

function display_ci_retirement_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Retirement Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_retirement_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_retirement_calculator', 'display_ci_retirement_calculator' );