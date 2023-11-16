<?php
/**
 * @copyright	Copyright © 2023 - All rights reserved.
 * @license		GNU General Public License v2.0
 */
defined('_JEXEC') or die;
// jquery
use Joomla\CMS\HTML\HTMLHelper;
use \Joomla\CMS\Factory;
$doc = JFactory::getDocument();
HTMLHelper::_('jquery.framework');
?>
<!-- <div class="container"> -->
  <div id="toggle">
        <div id="circle"></div>
    </div>
  <!-- style -->
  <style media="screen">
  * {
      transition-duration: <?php echo $params->get("transition");?>s;
    }

  #toggle {
      background-color:<?php echo $params->get("background");?>;
      width: 59px;
      height: 24px;
      border-radius: 20px;
      border: 2px solid <?php echo $params->get("border-button");?>;
      margin: 10px auto;
      cursor: pointer;

  }
    #circle {
      width: 20px;
      height: 20px;
      background-color: <?php echo $params->get("background-circle");?>;
      border-radius: 50%;
    }
  </style>
  <!-- script  -->
<script type="text/javascript">
  var toggled = false;
  var circle = $("#circle");

  $("#toggle").click(function () {

    $("h1,.lead").toggleClass("color-white");
    $("body").toggleClass("bck-color-black");

    if (!toggled) {

      circle.css("margin-left", "35px");
        toggled = true;

    } else {

        circle.css("margin-left", "1px");
        toggled = false;
      }
    });
  </script>
