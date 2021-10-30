<?php include("header.php");?>
<section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <span>Contact</span>
          <h2>Contact</h2>
          <p>Please contact us for Water supply</p>
        </div>
      </div>

      <div class="map">
        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=sankarpur ujjain&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.fridaynightfunkin.net/">Friday Night Funkin Download</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
      </div>

      <div class="container">

        <div class="info-wrap mt-5">
          <div class="row">
            <div class="col-lg-4 info">
              <i class="ri-map-pin-line"></i>
              <h4>Location:</h4>
              <p>125 Astha parisar,sankarpur,maxi road,ujjain<br>India,</p>
            </div>

            <div class="col-lg-4 info mt-4 mt-lg-0">
              <i class="ri-mail-line"></i>
              <h4>Email:</h4>
              <p>sanjaychouhan742@gmail.com<br></p>
            </div>

            <div class="col-lg-4 info mt-4 mt-lg-0">
              <i class="ri-phone-line"></i>
              <h4>Call:</h4>
              <p> 7089341534<br> 9009235635 <br> 6260060190 </p>
            </div>
          </div>
        </div>
      <section>
        <form action="contact_sub.php" method="post">
          <div class="form-column">
  
  
            <table border=0 width=70% align=center> 

    <form action="contact_sub.php" method="post">
      <div class="form-column">
  
  <th align="center">Order Here</th>
<tr>
<td>Name:</td>
<td><input type="text" name="name" id="name"></td>
</tr>

<tr>
<td>Mobile NO:</td>
<td><input type="text" name="mo" id="mo"></td>
</tr>

<tr>
<td>NO of jar:</td>
<td><input type="text" name="jar" id="jar"></td>
</tr>

<tr>
<td>Address:</td>
<td><input type="text" name="add" id="add"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="submit" id="submit"  onclick="return confirm('Are you sure to make order?');"></td>
</tr>
</form>
</table>

 </section>
      </div>
    </section>
    <?php include("footer.php");?>