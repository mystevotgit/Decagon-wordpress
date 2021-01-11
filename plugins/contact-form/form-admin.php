<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Date</th>
								<th class="column2">Name</th>
                                <th class="column3">Role</th>
                                <th class="column4">Company</th>
								<th class="column5">Email</th>
								<th class="column6">Delete</th>
							</tr>
						</thead>
						<tbody>
                            <?php
                            global $wpdb;
                            $table = $wpdb->prefix . 'contact_data';
                              $messages =  $wpdb->get_results(
                                  "SELECT * FROM $table 
                                  ORDER BY id DESC
                                  "
                              );
                            
                              foreach($messages as $message){
                            
                            ?>
								<tr>
									<td class="column1">2017-09-29 01:22</td>
									<td class="column2"><?php echo $message->name ?></td>
									<td class="column3"><?php echo $message->role ?></td>
									<td class="column4"><?php echo $message->company ?></td>
									<td class="column4"><?php echo $message->email ?></td>
									<td class="column6">Delete</td>
								</tr>
							
							<?php } ?>
								
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>