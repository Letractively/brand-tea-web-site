    <div>  
        <div class="input-append" id="search">
            <input class="span3" type="text" placeholder="<?php echo $this->lang->line('search'); ?>..." />
            <button class="btn" type="button"><?php echo $this->lang->line('search'); ?></button>
        </div>
        <div class="row-fluid">
        	<div class="span5 content-item first-child">
                  <h3>&gt; <?php echo $this->lang->line('men_teaknowledge'); ?></h3>
                  <hr>  
                 <?php
				    $i=1;
                     foreach ($teas->result_array() as $row) {	
					  $tea_desc=$row[field('teaDesc')];
                  	?>
                 <?php					
                  echo'<table width="100%" border="0" class="event">
                    <tr>
                    <td rowspan="10" width="35%" valign="top">';
			      echo '<img src="'.base_url() . FRONTEND_TEMPLATE.'/img/content/teaknow.png" width="20" height="20"/>';
				 ?>
                  <?php echo anchor('site/tearelated/detail/' . $row[field('teaId')], $row[field('teaTitle')]); ?>
				  <?php 			   
            	  echo "<div style='margin-left:25px'>".word_limiter($tea_desc,14)."<div>";		   
                  echo '</td>    									
                 </tr>   									
                </table>';
				?>
			   <?php	
                   }				
                ?>	
				 	
            </div>	  
            <div class="span7">
                <div class="span7 content-item">
                    <h3>&gt; Gallery</h3>
                    <hr>                            
                    <!--Jssor Slider Begin-->
                    <div id="focus">
                        <ul>
                            <li>
                                <div style="left:0; top:0;width:100%; height:300px;"><img src="<?php echo base_url() . FRONTEND_TEMPLATE; ?>img/slideshow/001.jpg" alt="" /></div>
                			</li>
                            <li>
                                <div style="left:0; top:0;width:100%; height:300px;"><img src="<?php echo base_url() . FRONTEND_TEMPLATE; ?>img/slideshow/002.jpg" alt="" /></div>
                			</li>
                        </ul>
                    </div>
                    <!--Jssor Slider End-->
                    <div style="clear:both"></div>
                </div>
				
                <div class="span4 content-item">
                    <h3>Support</h3>
                    <hr>
                    <div class="support"><img src="<?php echo base_url() . FRONTEND_TEMPLATE; ?>img/content/tea.png" width="70" /> Lorem ipsum</div>
                    <div class="support"><img src="<?php echo base_url() . FRONTEND_TEMPLATE; ?>img/content/tea.png" width="70" /> Lorem ipsum</div>
                    <div class="support"><img src="<?php echo base_url() . FRONTEND_TEMPLATE; ?>img/content/tea.png" width="70" /> Lorem ipsum</div>
                    <div class="support"><img src="<?php echo base_url() . FRONTEND_TEMPLATE; ?>img/content/tea.png" width="70" /> Lorem ipsum</div>
                </div>
            </div>    		   
        </div>  
	  <!--Pager for Tea related Knowledge-->
        <div class="pager" style="margin-left:-600px;"><?php echo $this->pagination->create_links(); ?></div>
        <div style="clear:both;padding:0 15px;">
        	<img src="<?php echo base_url() . FRONTEND_TEMPLATE; ?>img/content/tea-banner.png" width="100%" alt="">
        </div> 
        <div style="clear:both;padding:15px;">
        	<div class="span6">
            	<h3>&gt; Products</h3>
                <hr>
                <div class="span6 product-home">
                    <div class="product">
                        <p><img src="<?php echo base_url() . FRONTEND_TEMPLATE; ?>img/content/product.png" alt="product" class="span2"></p>
                        <p><a href="#">/ Read More /</a></p>
                    </div>
                    <div class="product">
                        <img src="<?php echo base_url() . FRONTEND_TEMPLATE; ?>img/content/product.png" alt="product" class="span2">
                        <p><a href="#">/ Read More /</a></p>
                    </div>
                    <div class="product">
                        <img src="<?php echo base_url() . FRONTEND_TEMPLATE; ?>img/content/product.png" alt="product" class="span2">
                        <p><a href="#">/ Read More /</a></p>
                    </div>
                    <div class="product">
                        <p><img src="<?php echo base_url() . FRONTEND_TEMPLATE; ?>img/content/product.png" alt="product" class="span2"></p>
                        <p><a href="#">/ Read More /</a></p>
                    </div>
                    <div class="product">
                        <img src="<?php echo base_url() . FRONTEND_TEMPLATE; ?>img/content/product.png" alt="product" class="span2">
                        <p><a href="#">/ Read More /</a></p>
                    </div>
                    <div class="product">
                        <img src="<?php echo base_url() . FRONTEND_TEMPLATE; ?>img/content/product.png" alt="product" class="span2">
                        <p><a href="#">/ Read More /</a></p>
                    </div>
                    <div class="product">
                        <img src="<?php echo base_url() . FRONTEND_TEMPLATE; ?>img/content/product.png" alt="product" class="span2">
                        <p><a href="#">/ Read More /</a></p>
                    </div>
                </div>
            </div>
        	<div class="span5" style="padding-left:20px;">
            	<div>
                    <h3>&gt; Welcome <span style="float: right; margin-right:25px;">Date</span></h3>
                    <hr>
                  
                    <table width="100%" border="0" class="event">
                      <tr>
                        <td>Lorem ipsum dolor sit amet</td>
                        <td align="right">2013-12-05</td>
                      </tr>
                      <tr>
                        <td>Lorem ipsum dolor sit amet</td>
                        <td align="right">2013-12-05</td>
                      </tr>
                      <tr>
                        <td>Lorem ipsum dolor sit amet</td>
                        <td align="right">2013-12-05</td>
                      </tr>
                      <tr>
                        <td>Lorem ipsum dolor sit amet</td>
                        <td align="right">2013-12-05</td>
                      </tr>
                      <tr>
                        <td>Lorem ipsum dolor sit amet</td>
                        <td align="right">2013-12-05</td>
                      </tr>
                      <tr>
                        <td>Lorem ipsum dolor sit amet</td>
                        <td align="right">2013-12-05</td>
                      </tr>
                      <tr>
                        <td>Lorem ipsum dolor sit amet</td>
                        <td align="right">2013-12-05</td>
                      </tr>
                    </table>
                </div>
            	<div>
                	<br>
                    <h3>&gt; Welcome <span style="float: right; margin-right:25px;">Date</span></h3>
                    <hr>
                  
                    <table width="100%" border="0" class="event">
                      <tr>
                        <td>Lorem ipsum dolor sit amet</td>
                        <td align="right">2013-12-05</td>
                      </tr>
                      <tr>
                        <td>Lorem ipsum dolor sit amet</td>
                        <td align="right">2013-12-05</td>
                      </tr>
                      <tr>
                        <td>Lorem ipsum dolor sit amet</td>
                        <td align="right">2013-12-05</td>
                      </tr>
                      <tr>
                        <td>Lorem ipsum dolor sit amet</td>
                        <td align="right">2013-12-05</td>
                      </tr>
                      <tr>
                        <td>Lorem ipsum dolor sit amet</td>
                        <td align="right">2013-12-05</td>
                      </tr>
                      <tr>
                        <td>Lorem ipsum dolor sit amet</td>
                        <td align="right">2013-12-05</td>
                      </tr>
                      <tr>
                        <td>Lorem ipsum dolor sit amet</td>
                        <td align="right">2013-12-05</td>
                      </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>