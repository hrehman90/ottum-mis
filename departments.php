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
    	<div class="title"><h5>Departments</h5></div>
        
        <!-- Table with data on the right head side -->
        <div class="widget">
        	<div class="head"><h5 class="iFrames">Departments</h5><div class="num"><a href="add-update-department.php" class="blueNum" title="Add Department">Add</a></div></div>
            <table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
            	<thead>
                	<tr>
                        <td>Serial #</td>
                        <td>Department Name</td>
                        <td>Options</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Get all departments and show in loop - Remote comment updated
                    $departments = get_departments ();
                    foreach ($departments as $dept) {
                        $id = $dept['id'];
                    ?>
                    	<tr>
                            <td><?php echo $dept['id']; ?></td>
                            <td><?php echo $dept['dept_name']; ?></td>
                            <td>
                                <a href="add-update-department.php?action=update&id=<?php echo $id; ?>">Edit</a>
                                <a href="process-dept.php?action=delete&id=<?php echo $id; ?>" onclick="return confirm ( 'You are about to delete this record.' ); ">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="fix"></div>
</div>

<?php include ( 'includes/footer.php' ); ?>
