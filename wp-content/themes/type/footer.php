<?php
   /**
    * The template for displaying the footer.
    *
    * Contains the closing of the #content div and all content after.
    *
    * @link https://developer.wordpress.org/themes/basics/template-files/#template-template-parts
    *
    * @package Type
    * @since Type 1.0
    */
   
   ?>
</div><!-- .inside -->
</div><!-- .container -->
</div><!-- #content -->
<footer style="display:none;" id="colophon" class="site-footer" role="contentinfo">
   <div class="clearfix-footer">
      <div class="w-70">
         <h4 class="grubstar-h4 pseudo_border2 ">Get in Touch</h4>
         <p class="footer-p">Please fill out the form below to send us an email and we will get back to you as soon as possible.
         <form>
            <div class="">
               <div class="clearfix-footer">
                  <div class="col-50-left">
                     <input class="form-class" type="text" id="fname" name="fname" placeholder="Name">
                  </div>
                  <div class="col-50-right">
                     <input class="form-class" type="email" id="email" name="email" placeholder="Email">
                  </div>
               </div>
               <div class="">
                  <textarea class="form-class form-message" type="text" id="message" name="message" placeholder="Message"></textarea>
               </div>
               <div class="">
                  <input class="form-button-class form-button" type="button" value="SEND MESSAGE">
               </div>
            </div>
         </form>
      </div>
      <div class="w-30">
         <p class="footer-contact">Contact Info</p>
         <div class="MuiGrid-root footer-col1 footer-center MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-sm-12 MuiGrid-grid-md-12 MuiGrid-grid-lg-4">

            <p class="MuiTypography-root footer-justify MuiTypography-body1 MuiTypography-colorTextSecondary" style="display: flex; align-items: center; margin-bottom: 10px; color: rgb(255, 255, 255); font-weight: 300;">

               <span style="padding-left: 0px;"><i style="padding-right: 8px;" class="fa fa-map-marker"></i> Address</span>
            </p>
            <p class="MuiTypography-root MuiTypography-body1 MuiTypography-colorTextSecondary" style="margin-bottom: 30px; color: rgb(255, 255, 255); font-weight: 100;">Grubsters Comic, Headquarters in South Florida, USA</p>
            <p class="MuiTypography-root footer-justify MuiTypography-body1 MuiTypography-colorTextSecondary" style="display: flex; align-items: center; margin-bottom: 10px; color: rgb(255, 255, 255); font-weight: 300;">

               <span style="padding-left: 0px;"><i style="padding-right: 8px;" class="fa fa-phone"></i> Phone</span>
            </p>
            <p class="MuiTypography-root MuiTypography-body1 MuiTypography-colorTextSecondary" style="margin-bottom: 30px; color: rgb(255, 255, 255); font-weight: 100;">786-285-5881</p>
            <p class="MuiTypography-root footer-justify MuiTypography-body1 MuiTypography-colorTextSecondary" style="display: flex; align-items: center; margin-bottom: 10px; color: rgb(255, 255, 255); font-weight: 300;">

               <span style="padding-left: 0px;"><i style="padding-right: 8px;" class="fa fa-envelope"></i> Email</span>
            </p>
            <p class="MuiTypography-root MuiTypography-body1 MuiTypography-colorTextSecondary" style="margin-bottom: 30px; color: rgb(255, 255, 255); font-weight: 100;">GRUBSTERS@GRUBSTERSCOMIC.COM</p>
         </div>
      </div>
   </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>