<div class="page-header">
    <h1>{page_header}</h1>
</div>

<div class="row">
	<div class="col-md-12">
		<button type="button" class="btn btn-sm btn-success pull-right" id="new_user">+ New User</button>
	</div>
</div>

<!-- New User Form -->
<div class="row hidden" id="new_user_form_container">
	<div class="col-md-12">
		<?php echo form_open('ajax/users/create', array('id' => 'new_user_form')); ?>
		
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Add New User</h3>
			</div>
			<div class="panel-body">
				<table class="col-md-12">
		            <tbody>
		                <tr>
		                    <td><label for="name_full">Name</label><?php echo form_input(array('name'=>'name_full', 'id'=>'name_full')); ?></td>
		                    <td><label for="dob" class="required">Birthday</label><?php echo form_input(array('name'=>'dob', 'id'=>'dob', 'class'=>'datepicker')); ?></td>
		                    <td><label for="email" class="required">Email</label><?php echo form_input(array('name'=>'email', 'id'=>'email')); ?></td>
		                    <td><label for="fav_color">Favorite Color</label><?php echo form_input(array('name'=>'fav_color', 'id'=>'fav_color')); ?></td>
		                    <td><br /><button type="submit" class="btn btn-sm btn-primary " id="add_user_button">Add User</button></td>
		                </tr>
		            </tbody>
		        </table>
			</div>
		</div>
		<?php echo form_close(); ?>
		
	</div>
</div>

<!-- Success Message -->
<div class="alert alert-success hidden" role="alert" id="success">
	<strong>Success!</strong> Your new user has been saved.
</div>

<!-- Error Message -->
<div class="alert alert-success hidden" role="alert" id="error">
    <strong>Whoops!</strong> Something went wrong while trying to save user info.
</div>

<!-- User List Table -->
<div class="row" id="user_list">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Birthday</th>
                    <th>Email</th>
                    <th>Favorite Color</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                {users}
                <tr id="user_{uid}">
                    <td>{name_full}</td>
                    <td>{dob}</td>
                    <td>{email}</td>
                    <td>{fav_color}</td>
                    <td><button type="submit" class="btn btn-sm btn-danger pull-right delete_user" id="{uid}">Delete</button></td>
                </tr>
                {/users}
            </tbody>
        </table>
    </div>
</div>
