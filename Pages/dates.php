<h3 class="h3__title"> Dates </h3>

<section class="example__section">
	<h5>Instance the Date Time class and then invoke the format method with the argument “Y-m-d” to show year-month-day</h5>
	<pre>
	echo date("Y-m-d");
	</pre>
	<p>Result</p>
	<?php
		echo date("Y-m-d");
	?>
</section>

<section class="example__section">
	<h5>Get the current date in any format</h5>
	<pre>
	echo date('l jS \of F Y h:i:s A');
	</pre>
	<p>Result</p>
	<?php
		echo date('l jS \of F Y h:i:s A');
	?>
</section>

<section class="example__section">
	<h5>Get the current day</h5>
	<pre>
	echo date('l \t\h\e jS');
	</pre>
	<p>Result</p>
	<?php
		echo date('l \t\h\e jS');
	?>
</section>

<section class="example__section">
	<h5>Get the current month in numerical format (1-12)</h5>
	<pre>
	echo date('d - n');
	</pre>
	<p>Result</p>
	<?php
		echo date('d - n');
	?>
</section>

<section class="example__section">
	<h5>Get the current minute with leading zeros (00 - 59</h5>
	<pre>
	echo date('i');
	</pre>
	<p>Result</p>
	<?php
		echo date('i');
	?>
</section>