				<form role="form" method="post" action="#" id="vids-search-form1">
					<div class="row">
						<div class="form-group col-sm-4">
							<label for="Sales_UPC" class="required">Sales UPC <strong class="required">(required)</strong></label>
							<input type="text" class="form-control" name="Sales_UPC" disabled="disabled" id="Sales_UPC" placeholder="Enter the Sales UPC Code of the Market Share" value="<?PHP echo $row['Sales_UPC']; ?>" required/>
						</div>
						<div class="form-group col-sm-4">
							<label for="Dollar_Volume" class="required">Dollar Volume <strong class="required">(required)</strong></label>
							<input type="text" class="form-control" name="Dollar_Volume" id="Dollar_Volume" placeholder="Enter the Sales figure of the Market Share" value="<?PHP echo $row['Dollar_Volume']; ?>" required/>
						</div>
						<div class="form-group col-sm-4">
							<label for="Kilo_Volume" class="required">Kilo Volume <strong class="required">(required)</strong></label>
							<input type="text" class="form-control" name="Kilo_Vol" id="Kilo_Volume" placeholder="Enter the Volume " value="<?PHP echo $row['Kilo_Vol']; ?>" required/>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-4">
							<label for="Sales_Year" class="required">Sales Year <strong class="required">(required)</strong></label>
							<input type="text" class="form-control" name="Sales_Year" id="Sales_Year" placeholder="Enter a Collection Year for the Market Share" value="<?PHP echo $row['Sales_Year']; ?>" required/>
						</div>
						<div class="form-group col-sm-4">
							<label for="Nielsen_Category" class="required">Nielsen Category <strong class="required">(required)</strong></label>
							<input type="text" class="form-control" name="Nielsen_Category" id="Nielsen_Category"  placeholder="Enter the Neilson Category " value="<?PHP echo $row['Nielsen_Category']; ?>" required/> 
						</div>
						<div class="form-group col-sm-4">
							<label for="Source" class="required">Source <strong class="required">(required)</strong></label>
							<input type="text" class="form-control" name="Source" id="Source" placeholder="Enter the Source " value="<?PHP echo $row['Source']; ?>" required/>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-4">
							<label for="Sales_Description" class="required">Sales Description <strong class="required">(required)</strong></label>
							<input type="text" class="form-control" name="Sales_Description" id="Sales_Description" placeholder="Enter the Description " value="<?PHP echo $row['Sales_Description']; ?>" required/>
						</div>
						<div class="form-group col-sm-4">
							<label for="Comments">Comments </label>
							<input type="text" class="form-control" name="Comments" id="Comments" placeholder="Enter a Comment for the Market Share" value="<?PHP echo $row['Comments']; ?>"/>
						</div>
						<div class="form-group col-sm-4">
							<label for="date1" class="required">
								Collection Date <strong class="required">(required)</strong>
							</label>
							<div class="">
								<div class="input-group">
									<input class="form-control myDateFormat" id="date1" name="Collection_Date" placeholder="YYYY/MM/DD" type="text" value="<?PHP echo $row['Collection_Date']; ?>" required/>
									<div class="input-group-addon" >
										<i class="fa fa-calendar">
										</i>
									</div>
								</div>
							<label class="error" for="date1"></label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-4">
							<label for="Brand" >Brand</label>
							<input type="text" class="form-control" name="Brand" id="Brand" placeholder="Enter the Brand the Market Share" value="<?PHP echo $row['Brand']; ?>"/>
						</div>
						<div class="form-group col-sm-4">
							<label for="Dollar_Rank" class="required">Dollar Rank <strong class="required">(required)</strong></label>
							<input type="text" class="form-control" name="Dollar_Rank" id="Dollar_Rank"  placeholder="Enter the Dollar Rank " value="<?PHP echo $row['Dollar_Rank']; ?>" required/>
						</div>
						<div class="form-group col-sm-4">
							<label for="Dollar_Volume_PerCentage_Change" class="required">Dollar Volume % Change <strong class="required">(required)</strong></label>
							<input type="text" class="form-control" name="Dollar_Volume_PerCentage_Change" id="Dollar_Volume_PerCentage_Change" placeholder="Enter the Dollar Volume % Change  " value="<?PHP echo $row['Dollar_Volume_PerCentage_Change']; ?>" required/>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-4">
							<label for="Kilo_Volume_Percent_Change" class="required">Kilo Volume % Change <strong class="required">(required)</strong></label>
							<input type="text" class="form-control" name="Kilo_Volume_Percent_Change" id="Kilo_Volume_Percent_Change" placeholder="Enter the Kilo Volume % Change " value="<?PHP echo $row['Kilo_Volume_Percent_Change']; ?>" required/>
						</div>
						<div class="form-group col-sm-4">
							<label for="Average_AC_Dist">Average AC Dist</label>
							<input type="text" class="form-control" name="Average_AC_Dist" id="Average_AC_Dist" placeholder="Enter the Average AC Dist of  the Market Share" value="<?PHP echo $row['Average_AC_Dist']; ?>"/>
						</div>
						<div class="form-group col-sm-4">
							<label for="Average_Retail_Price">Average Retail Price</label>
							<input type="text" class="form-control" name="Average_Retail_Price" id="Average_Retail_Price" placeholder="Enter the Average Retail Price " value="<?PHP echo $row['Average_Retail_Price']; ?>" />
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-4">
							<label for="Dollar_Volume_Total" class="required">Dollar Volume Total <strong class="required">(required)</strong></label>
							<input type="text" class="form-control" name="Dollar_Volume_Total" id="Dollar_Volume_Total" placeholder="Enter the Dollar Volume Total " value="<?PHP echo $row['Dollar_Volume_Total']; ?>" required/>
						</div>
						<div class="form-group col-sm-4">
							<label for="Kilo_Volume_Total" class="required">Kilo Volume Total <strong class="required">(required)</strong></label>
							<input type="text" class="form-control" name="Kilo_Volume_Total" id="Kilo_Volume_Total"  placeholder="Enter the Kilo Volume Total " value="<?PHP echo $row['Kilo_Volume_Total']; ?>" required/>
						</div>

						<div class="form-group col-sm-4">
							<label for="Control_Label_Flag" name="Control_Label_Flag">Control Label Flag</label>
							<select class="form-control" id="Control_Label_Flag" name="Control_Label_Flag">
								<option value="<?PHP echo $row['Control_Label_Flag']; ?>" selected><?PHP echo $row['Control_Label_Flag']; ?></option>
								<option value="No">No</option>
								<option value="Yes">Yes</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-4">
							<label for="Dollar_Share" class="required">Dollar Share <strong class="required">(required)</strong></label>
							<input type="text" class="form-control" name="Dollar_Share" id="Dollar_Share"  placeholder="Enter the Dollar Share " value="<?PHP echo $row['Dollar_Share']; ?>" required/>
						</div>
						<div class="form-group col-sm-4">
							<label for="Kilo_Share" class="required">Kilo Share <strong class="required">(required)</strong></label>
							<input type="text" class="form-control" name="Kilo_Share" id="Kilo_Share" placeholder="Enter the Kilo Share " value="<?PHP echo $row['Kilo_Share']; ?>" required/>
						</div>
						<div class="form-group col-sm-4">
							<label for="Cluster_Number">Cluster Number</label>
							<input type="text" class="form-control" name="Cluster_Number" id="Cluster_Number" placeholder="Enter the Cluster Number " value="<?PHP echo $row['Cluster_Number']; ?>"/>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-4">
							<label for="Product_Grouping">Product Grouping</label>
							<input type="text" class="form-control" name="Product_Grouping" style="" id="Product_Grouping"  placeholder="Enter the Product Grouping " value="<?PHP echo $row['Product_Grouping']; ?>" />
						</div>
						<div class="form-group col-sm-4">
							<label for="Kilo_Rank">Kilo Rank</label>
							<input type="text" class="form-control" name="Kilo_Rank" style="" id="Kilo_Rank"  placeholder="Enter the Kilo Rank " value="<?PHP echo $row['Kilo_Rank']; ?>" />
						</div>
						<div class="form-group col-sm-4">
							<label for="Manufacturer">Manufacturer</label>
							<input type="text" class="form-control" name="Manufacturer" style="" id="Manufacturer"  placeholder="Enter the Manufacturer " value="<?PHP echo $row['Manufacturer']; ?>" />
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-4">
							<label for="Classification_Number">Classification Number</label>
							<select class="form-control" id="Classification_Number" name="Classification_Number" >
								<option value="<?PHP echo $row['Classification_Number']; ?>" selected="selected"><?PHP echo $row['Classification_Number']; ?></option>
								<?php include 'List_Classification_Number.php';?>
							</select>
						</div>
						<?php include("fill_sales.php"); ?>
						<div class="form-group col-sm-4">
							<label for="Kilo_Rank">Classification Type</label>
							<input type="text" class="form-control" name="Classification_Type" style="" id="Classification_Type"  placeholder="Enter the Classification Type " value="<?PHP echo $row['Classification_Type']; ?>" />
						</div>
						<div class="form-group col-sm-4">
							<button style="margin-top: 30px; margin-right:15px;  margin-bottom:0px; float:right;" type="submit" class="btn btn-default" name="search" >Save</button>
						</div>
					</div>
				</form>

