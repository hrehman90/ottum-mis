<!-- Header Common -->
<?php include ( 'includes/header-common.php' ); ?>

<body>

<!-- Top navigation bar -->
<?php include ( 'includes/top-bar-navigation.php' ); ?>

<!-- Header Widgets -->
<?php include ( 'includes/header-widgets.php' ); ?>

<!-- Content wrapper -->
<div class="wrapper">
	
	<!-- Left navigation -->
    <?php include ( 'includes/navigation.php' ); ?>

    <!-- Content -->
    <div class="content">
    	<div class="title"><h5>Dashboard</h5></div>
        
        <!-- Statistics -->
        <div class="stats">
        	<ul>
            	<li><a href="#" class="count grey" title="">52</a><span>new pending tasks</span></li>
                
                <li><a href="#" class="count grey" title="">520</a><span>pending orders</span></li>
                <li><a href="#" class="count grey" title="">14</a><span>new opened tickets</span></li>
                <li class="last"><a href="#" class="count grey" title="">48</a><span>new user registrations</span></li>
            </ul>
            <div class="fix"></div>
        </div>
                
        <!-- Calendar -->
        <div class="widget">
        	<div class="head"><h5 class="iDayCalendar">Schedule</h5></div>
            <div id="calendar"></div>
        </div>
        
        
    </div>
    <div class="fix"></div>
</div>

<?php include ( 'includes/footer.php' ); ?>