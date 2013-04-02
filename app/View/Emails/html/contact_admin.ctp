Dear Admin,
You have a new query.
<strong>Message from <?php echo !empty($data['Contact']['name']) ? $data['Contact']['name'] : 'Guest'; ?>:-</strong>
<p><?php echo $data['Contact']['message'] ?></p>