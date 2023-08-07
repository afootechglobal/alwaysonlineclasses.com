<?php if ($check_code=='fetch_property_pix'){?>
				<?php
                 $no=0;
                $query=mysqli_query($conn,"SELECT * FROM property_pix_tab WHERE property_id='$property_id'");
                while($sel=mysqli_fetch_array($query)){
                $no++;
                $sn=$sel['sn'];
                $property_pix=$sel['property_pix'];
                ?>
                    <div class="property-pictures" id="pix<?php echo $sn;?>">
                  	<div class="icon" onclick="_delete_property_pix('<?php echo $sn;?>','<?php echo $property_id;?>')"><i class="fa fa-trash-o"></i></div>
                    <div class="img"> <img src="../../uploaded_files/property_pix/<?php echo $property_pix;?>"/></div>
                    </div>
				<?php } ?>
						
                        <label>
                        <div class="property-pictures" id="tap-to-upload">
                        <div class="img"><img src="../../uploaded_files/property_pix/default.png" alt="Tap to upload"/></div>
                        </div>
                        <input type="file"  id="property_pix" accept=".jpg,.jpeg,.JPG,.JPEG,.png,.PNG"  onchange="_add_property_pix('<?php echo $property_id;?>');" style="display:none;"/>
                        </label>
                        
<?php }?>
