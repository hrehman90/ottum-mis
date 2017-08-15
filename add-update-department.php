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
    	<div class="title"><h5>Add Department</h5></div>
        
        <form action="process-dept.php" class="mainForm" method="post">
            <?php
                if ( isset( $_GET['action'] ) && ( $_GET['action'] == "update" ) ) { 
                    $id = $_GET['id']*1;
                    echo '<input type="hidden" name="id" value="'.$id.'" />';
                    echo '<input type="hidden" name="action" value="update" />';
                    $array      = get_department (" where id=".$id);
                    $department = $array[0];
                }
                else echo '<input type="hidden" name="action" value="add" />';
            ?>
            <fieldset>
                <div class="widget first">
                    <div class="head"><h5 class="iList">Add Department</h5></div>
                    <div class="rowElem noborder"><label>Department Name:<span class="req">*</span></label><div class="formRight"><input type="text" name="dept_name" value="<?php if ( isset ( $department['dept_name'] ) ) { echo $department['dept_name']; } ?>" /></div><div class="fix"></div></div>
                    <input type="submit" value="Save" class="greyishBtn submitForm" />
                    <div class="fix"></div>
                </div>
            </fieldset>
        </form>        
        
    </div>
    
    <div class="fix"></div>
</div>

<?php include ( 'includes/footer.php' ); ?>