<?php
$count=  $count - 1;
  echo "<h3>$count Records on the spreadsheet</h3>";
	echo "<hr style=\" border-top: 1px solid red;\">";

	echo "<h3>$skipped_count Record(s) skipped Because of Missing Mandatory fields</h3>";
		while (!$skipped_label->isEmpty()) {
			$senditem = $skipped_label->shift();
			if(strlen ($senditem) < 1) continue;
			echo "$senditem <br>";
		}

					echo "<hr style=\" border-top: 1px solid red;\">";

		echo "<h3>$skipped_same_upc_different_grouping_count Labels(s) skipped because Label UPC match but different Product Grouping  </h3><br>";
		while (!$skipped_same_upc_different_grouping->isEmpty()) {
			$senditem = $skipped_same_upc_different_grouping->shift();
			if(strlen ($senditem) < 1) continue;
			echo "$senditem <br>";
		}

		echo "<hr style=\" border-top: 1px solid red;\">";

		echo "<h3>$duplicate_count duplicate(s) </h3><br>";
		while (!$duplicate_label->isEmpty()) {
			$senditem = $duplicate_label->shift();
			if(strlen ($senditem) < 1) continue;
			echo "$senditem <br>";
		}


			echo "<hr style=\" border-top: 1px solid red;\">";
 	echo "<h3>$linked_to_market_count Label(s) Linked to existing Products via Market Share UPCs Codes</h3>";
		while (!$linked_sales->isEmpty()) {
			$senditem = $linked_sales->shift();
			if(strlen ($senditem) < 1) continue;
			echo "$senditem <br>";
		}
	echo "<hr style=\" border-top: 1px solid red;\">";
	echo "<h3> $linked_to_label_count Label(s) Linked to existing Products via other Labels UPCs Codes</h3>";
		while (!$linked_label->isEmpty()) {
			$senditem = $linked_label->shift();
			if(strlen ($senditem) < 1) continue;
			echo "$senditem <br>";
		}


			echo "<hr style=\" border-top: 1px solid red;\">";

	 echo "<h3>$new_product_count Label(s) linked to new products</h3>";
		while (!$new_product->isEmpty()) {
			$senditem = $new_product->shift();
			if(strlen ($senditem) < 1) continue;
			echo "$senditem <br>";
		
		}


		echo "<hr style=\" border-top: 1px solid red;\">";

		echo "<h3>$linked_by_gouping_count Labels(s) Linked to existing Products via Product Grouping</h3><br>";
		while (!$linked_by_gouping->isEmpty()) {
			$senditem = $linked_by_gouping->shift();
			if(strlen ($senditem) < 1) continue;
			echo "$senditem <br>";
		}

print "<br> Import done";

?>