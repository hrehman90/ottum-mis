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
    	<div class="title"><h5>Employees</h5></div>
        
        <!-- Table with data on the right head side -->
        <div class="widget">
        	<div class="head"><h5 class="iFrames">Employees</h5><div class="num"><a href="add-update-employee.php?action=add" class="blueNum" title="Add Employee">Add</a></div></div>
            <table cellpadding="0" cellspacing="0" width="100%">
            	<thead>
                	<tr>
                        <td>Serial #</td>
                        <td>Name</td>
                        <td>Contact</td>
                        <td>Options</td>
                    </tr>
                </thead>
                <tbody>
                	<tr>
                        <td>1</td>
                        <td>Ahmad</td>
                        <td>03339993339</td>
                        <td>
                            <a href="add-update-employee.php?action=update&id=<?php //echo $id; ?>">Edit</a>
                            <a href="process-emp.php?action=delete&id=<?php //echo $id; ?>">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="fix"></div>
</div>

<?php include ( 'includes/footer.php' ); ?>