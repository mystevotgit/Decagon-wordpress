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
							$total = $wpdb->get_var("SELECT COUNT(*) FROM $table");
							$items_per_page = 2;
							$page = isset($_GET['cpage']) ? abs((int) $_GET['cpage']) : 1;
							$offset = ($page * $items_per_page) - $items_per_page;

                              $messages =  $wpdb->get_results(
                                  "SELECT * FROM $table 
                                  ORDER BY id DESC LIMIT ${offset}, ${items_per_page}
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
									<div class="pagination">
								<?php
echo paginate_links(array(
    'base' => add_query_arg('cpage', '%#%'),
    'format' => '',
    'prev_text' => __('&laquo;'),
    'next_text' => __('&raquo;'),
    'total' => ceil($total / $items_per_page),
    'current' => $page,
));
?>
		</div>
			</div>
		</div>
	</div>