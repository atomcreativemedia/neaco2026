<?php
/* Get user info */
global $current_user, $wp_roles;
?>
<section class="user-account__main">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-6">
						<div class="user-account__intro">
							<h2>Welcome, <?php the_author_meta( 'first_name', $current_user->ID ); ?></h2>
							<p>You can edit and update your account details here.</p>
							<p>Please note, all fields are required for approved members.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="user-account__the-form">
							<?php
							$error = array();
							
							/* If profile was saved, update profile */
							if ( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) && $_POST['action'] == 'update-user' ) {
							    /* Update user first name */
							    if ( !empty( $_POST['first-name'] ) ) {
							        update_user_meta( $current_user->ID, 'first_name', esc_attr( $_POST['first-name'] ) );
							    } else {
							    	$error[] = __('Please provide your first name.', 'profile');
							    }
							    
							    /* Update user last name */
							    if ( !empty( $_POST['last-name'] ) ) {
							        update_user_meta($current_user->ID, 'last_name', esc_attr( $_POST['last-name'] ) );
							    } else {
							    	$error[] = __('Please provide your last name.', 'profile');
							    }
							    
							    /* Update user phone */
							    if ( !empty( $_POST['phone'] ) ) {
							    	if(!preg_match("/^[0-9 .\-\+\(\)]+$/i", esc_attr( $_POST['phone'] ))) {
									  $error[] = __('The phone number you entered is not valid. Please try again.', 'profile');
									} else {
										 update_user_meta( $current_user->ID, 'phone_number', esc_attr( $_POST['phone'] ) );
									}
							    } else {
							    	$error[] = __('Please provide your contact number.', 'profile');
							    }
							    
							    /* Update user email */
							    if ( !empty( $_POST['email'] ) ) {
							        if (!is_email(esc_attr( $_POST['email'] )))
							            $error[] = __('The Email you entered is not valid. Please try again.', 'profile');
							        elseif(email_exists(esc_attr( $_POST['email'] )) != $current_user->id )
							            $error[] = __('The email you provided is already in use. Please try a different one.', 'profile');
							        else{
							            wp_update_user( array ('ID' => $current_user->ID, 'user_email' => esc_attr( $_POST['email'] )));
							        }
							    } else {
							    	$error[] = __('Please provide an email address.', 'profile');
							    }
							    
							    /* Update user company name */
							    if ( !empty( $_POST['company-name'] ) ) {
							        update_user_meta($current_user->ID, 'company_name', esc_attr( $_POST['company-name'] ) );
							    } else {
							    	$error[] = __('Please provide your company name.', 'profile');
							    }
							    
							    /* Update user password */
							    if ( !empty($_POST['pass1'] ) && !empty( $_POST['pass2'] ) ) {
							        if ( $_POST['pass1'] == $_POST['pass2'] )
							            wp_update_user( array( 'ID' => $current_user->ID, 'user_pass' => esc_attr( $_POST['pass1'] ) ) );
							        else
							            $error[] = __('The passwords you entered do not match. Your password was not updated.', 'profile');
							    } elseif ( (empty($_POST['pass1'] ) && !empty( $_POST['pass2'] )) || (!empty($_POST['pass1'] ) && empty( $_POST['pass2'] )) ) {
							    	$error[] = __('Please be sure to complete both password fields.', 'profile');
							    }
							    
							    /* Redirect so the page will show updated info*/
							    if ( count($error) == 0 ) {
							        //action hook for plugins and extra fields saving
							        do_action('edit_user_profile_update', $current_user->ID);
							        wp_redirect( add_query_arg ('update', 'true', get_permalink()) );
							        exit;
							    }
							}
							?>
							
							<?php if ( count($error) > 0 ) {
								echo '<p class="user-account__form-error">' . implode("<br />", $error) . '</p>';
							} elseif ( isset($_GET['update']) ) {
								echo '<p class="user-account__form-success">Your profile has been updated.</p>';
							} ?>
			                <form method="post" id="adduser" action="<?php the_permalink(); ?>" class="user-account__form">
			                	<p class="user-account__form-item user-account__form-item--username">
			                        <label for="username">Your username (this cannot be changed)</label>
			                        <input disabled readonly class="user-account__form__text-input" name="username" type="text" id="first-name" value="<?php the_author_meta( 'user_login', $current_user->ID ); ?>" />
			                    </p>
			                    <p class="user-account__form-item user-account__form-item--first-name">
			                        <label for="first-name">First Name *</label>
			                        <input class="user-account__form__text-input" name="first-name" type="text" id="first-name" value="<?php the_author_meta( 'first_name', $current_user->ID ); ?>" />
			                    </p>
			                    <p class="user-account__form-item user-account__form-item--last-name">
			                        <label for="last-name">Last Name *</label>
			                        <input class="user-account__form__text-input" name="last-name" type="text" id="last-name" value="<?php the_author_meta( 'last_name', $current_user->ID ); ?>" />
			                    </p>
			                    <p class="user-account__form-item user-account__form-item--phone">
			                        <label for="phone">Phone *</label>
			                        <input class="user-account__form__text-input" name="phone" type="tel" id="phone" value="<?php the_author_meta( 'phone_number', $current_user->ID ); ?>" />
			                    </p>
			                    <p class="user-account__form-item user-account__form-item--email">
			                        <label for="email">E-mail *</label>
			                        <input class="user-account__form__text-input" name="email" type="text" id="email" value="<?php the_author_meta( 'user_email', $current_user->ID ); ?>" />
			                    </p>
			                    <p class="user-account__form-item user-account__form-item--company-name">
			                        <label for="company-name">Company Name *</label>
			                        <input class="user-account__form__text-input" name="company-name" type="text" id="company-name" value="<?php the_author_meta( 'company_name', $current_user->ID ); ?>" />
			                    </p>
			                    <p class="user-account__form-item user-account__form-item--password">
			                        <label for="pass1">Password * </label>
			                        <input class="user-account__form__text-input" name="pass1" type="password" id="pass1" />
			                    </p>
			                    <p class="user-account__form-item user-account__form-item--password">
			                        <label for="pass2">Repeat Password *</label>
			                        <input class="user-account__form__text-input" name="pass2" type="password" id="pass2" />
			                    </p>
			                    <?php
			                        //action hook for plugin and extra fields
			                        //do_action('edit_user_profile',$current_user); 
			                    ?>
			                    <p class="user-account__form-item user-account__form-item--submit">
			                        <input name="updateuser" type="submit" id="updateuser" class="submit button" value="<?php _e('Update', 'profile'); ?>" />
			                        <?php wp_nonce_field( 'update-user' ) ?>
			                        <input name="action" type="hidden" id="action" value="update-user" />
			                    </p>
			                </form>
			                
			                
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>