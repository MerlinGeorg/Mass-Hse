

            <?php
           
             if($res!='nomeeting')
            {
              foreach($res as $row) { ?>
            <div class="callout callout-info">
              <h5><i class="fas fa-info"></i><?php echo $row->meeting_title ?></h5>
              This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
            </div>
            <?php }
            } 
            else 
            { 
            echo $res; ?>
            	
            <h3>No Meeting Available</h3>
            <?php } ?>	