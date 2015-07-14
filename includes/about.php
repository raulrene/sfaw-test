<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 7/13/15
 * Time: 3:52 PM
 */

include('classes/About.php');

$obj = new About();
$data = $obj->getAllAbout();

?>
<div class="tabs-container vertical-tabs">
    <div class="column three-col tabs">
        <ul>
            <li class="current"><a href="#online-learning">Online Learning</a></li>
            <li class=""><a href="#woocommerce"> WooCommerce</a></li>
            <li class=""><a href="#user-profiles"> User Profiles</a></li>
            <li class=""><a href="#media-player"> Media Player</a></li>
        </ul>
    </div>
</div>
<div class="tabs-content">
    <h1>Learning Management</h1>
    <p>Quisque id augue erat, suscipit ultricies est. Maecenas feugiat justo ac massa porttitor mollis auctor nulla ullamcorper. sed blandit interdum.</p>
    <p>Penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer fringilla magna ut risus sagittis ultrices. Nam eget varius sem. Nam mattis consectetur suscipit. Vivamus quis ante enim. Cras id sodales metus.</p>
    <p>Suspendisse luctus, felis at fringilla dictum, erat massa vehicula velit, id venenatis eros libero et lectus. Proin ullamcorper molestie lectus, sit amet condimentum dui tincidunt ut. In tempor faucibus eros, sed auctor orci ultricies non suspen.</p>
    <a class="button large primary" target="_self" href=" ">
        Purchase now
    </a>
</div>
<div class="clear"></div>