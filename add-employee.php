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
    <div class="content" id="container">
    	<div class="title"><h5>Add Employee</h5></div>
        
        <form action="" class="mainForm">
            <fieldset>
                <div class="widget first">
                    <div class="head"><h5 class="iList">Add Employee</h5></div>
                        <div class="rowElem noborder"><label>Name:<span class="req">*</span></label><div class="formRight"><input type="text" name="inputtext"/></div><div class="fix"></div></div>
                        <input type="submit" value="Submit form" class="greyishBtn submitForm" />
                        <div class="fix"></div>

                </div>
            </fieldset>
        </form>        
        
    </div>
    
    <div class="fix"></div>
</div>

<?php include ( 'includes/footer.php' ); ?>