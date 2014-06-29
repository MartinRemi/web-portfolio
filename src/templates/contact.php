<div class="col-md-2">
	<!-- Used to center content -->
</div>
<div class="col-md-8">
	<div id="contact_container" class="well well-sm">
		<form>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="name">
							<?php
								echo $CONTACT_NAME;
							?>
						</label>
						<?php
							echo '<input type="text" class="form-control" id="name" placeholder="' . $CONTACT_NAME_PLACEHOLDER . '" required="required" />';
						?>
					</div>
					<div class="form-group">
						<label for="email">
							<?php
								echo $CONTACT_EMAIL;
							?>
						</label>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
							</span>
							<?php
								echo '<input type="email" class="form-control" id="email" placeholder="' . $CONTACT_EMAIL_PLACEHOLDER . '" required="required" />';
							?>
						</div>
					</div>
					<div class="form-group">
						<label for="subject">
							<?php
								echo $CONTACT_SUBJECT;
							?>
						</label>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span>
							</span>
							<?php
								echo '<input type="text" class="form-control" id="subject" placeholder="' . $CONTACT_SUBJECT_PLACEHOLDER . '" required="required" />';
							?>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="name">
							<?php
								echo $CONTACT_MESSAGE;
							?>
						</label>
						<?php
							echo '<textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="' . $CONTACT_MESSAGE_PLACEHOLDER . '"></textarea>';
						?>
					</div>
				</div>
				<div class="col-md-12">
					<button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
						<?php
							echo $CONTACT_SEND;
						?>
					</button>
				</div>
			</div>
		</form>
	</div>
</div>
<div class="col-md-2">
	<!-- Used to center content -->
</div>

<!-- TO MOVE -->
<script src="js/contact_email.js">
</script>
