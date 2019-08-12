<?php require 'nav.php'; ?>
<style>
.btn-container {
	width: 20%;
    display: block;
    align-items: center;
    justify-content: center;
    float: left;
    margin-right: 3em;
}

.careerContainer{
    margin-bottom: 3em;
}

.details{
    padding-top: 1.5em;
}

</style>
<!----------------------------------------START-OF-CONTENT---------------------------------------------->
<!-- Kuya start -->
<div style="background:black;height:500px;">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/career1.jpg" alt="Delight in the world of endless posibilities." style="height:500px;width:100%;">
        <div class="carousel-caption">
          <h3>Delight in the world of endless posibilities.</h3>
          <p>Working at Rebisco is just as delightful as the delicious products we offer the world.</p>
        </div>
      </div>

      <div class="item">
        <img src="img/career2.jpg" alt="Create a delightful difference." style="height:500px;width:100%;">
        <div class="carousel-caption">
          <h3>Create a delightful difference.</h3>
          <p>Have a hand in spreading delight through our snacks,across generations, across the globe</p>
        </div>
      </div>
    
      <div class="item">
        <img src="img/career3.jpg" alt="Discover your full potential." style="height:500px;width:100%;">
        <div class="carousel-caption">
          <h3>Discover your full potential.</h3>
          <p>Learn to live fully in a work environment that encourages continuos learning and pursuing passions.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- Kuya end -->
<div class="careerContainer">
<div class="container">
<h1 style="text-align: center">Career Opportunities with Multirich Food Corporation</h1>
    <div class="btn-group-vertical btn-container">
    <button type="button" id="brand" class="btn btn-info">Brand Management Group</button>
    <button type="button" id="hr" class="btn btn-info">Corporate Human Resources</button>
    <button type="button" id="planning" class="btn btn-info">Corporate Planning</button>
    <button type="button" id="finance" class="btn btn-info">Finance</button>
    <button type="button" id="production" class="btn btn-info">Production</button>
    <button type="button" id="system" class="btn btn-info">Quality Management System</button>
    <button type="button" id="supply" class="btn btn-info">Supply Networking Planning</button>
    </div>

<div id="brand-container" class="details" style="display:none;">
	  <p>• Strategic Management</p>
	  <p>• Sales Management</p>
	  <p>• Marketing Management</p>
	  <p>• Operations Management</p>
	  <p>• Financial & Accounting Management</p>

  </div>
  <div id="hr-container" class="details" style="display:none;">
	  <p>• Recruiting and staffing.</p>
	  <p>• Compensation and benefits.</p>
	  <p>• Training and learning.</p>
	  <p>• Labor and employee relations.</p>
	  <p>• Organization development.</p>
  </div>
  <div id="planning-container" class="details" style="display:none;">
	  <p>• Initiation Plans.</p>
	  <p>• Strategic Plans</p>
	  <p>• Growth Plans</p>
	  <p>• Financial Plans</p>
	  <p>• Human Resource Plans</p>
	  <p>• Internal Plans.</p>
  </div>
  <div id="finance-container" class="details" style="display:none;">
	  <p>• Corporate Finance</p>
	  <p>• Financial Advisors</p>
	  <p>• Investment Finance</p>
	  <p>• Collectors</p>
	  <p>• Collectors</p>
	  <p>• Loan Officers.</p>
  </div>
  <div id="production-container" class="details" style="display:none;">
	  <p>• Production worker</p>
	  <p>• Production associate</p>
	  <p>• Production assistant</p>
	  <p>• Production operators</p>
	  <p>• Technical production</p>
	  <p>• Producton supervisor</p>
  </div>
  <div id="system-container" class="details" style="display:none;">
	  <p>• Quality Management System specialist</p>
	  <p>• Quality Management System assistant</p>
	  <p>• Quality Management System advisor</p>
	  <p>• Quality Management System Supervisor </p>
	  <p>• Document Control Clerk</p>
  </div>
   <div id="supply-container" class="details" style="display:none;">
	  <p>• Manager supply chain</p>
	  <p>• Manager supply planning</p>
	  <p>• Senior Associate, Inventory & Supply Planning</p>
	  <p>• Manager, Strategic Planning</p>
	  <p>• Distribution Planning Manager</p>
	  <p>• Supply Chain Network Engineer</p>
  </div>
</div>
    <h3 style="text-align: center">Contact us at multirich@gmail.com</h3>
</div>

<script>
document.querySelector("#brand").addEventListener("click", function(){
      document.querySelector("#brand-container").style.display = "block";
      document.querySelector("#hr-container").style.display = "none";
      document.querySelector("#planning-container").style.display = "none";
      document.querySelector("#finance-container").style.display = "none";
      document.querySelector("#production-container").style.display = "none";
      document.querySelector("#system-container").style.display = "none";
      document.querySelector("#supply-container").style.display = "none";
      
      });

document.querySelector("#hr").addEventListener("click", function(){
      document.querySelector("#brand-container").style.display = "none";
      document.querySelector("#hr-container").style.display = "block";
      document.querySelector("#planning-container").style.display = "none";
      document.querySelector("#finance-container").style.display = "none";
      document.querySelector("#production-container").style.display = "none";
      document.querySelector("#system-container").style.display = "none";
      document.querySelector("#supply-container").style.display = "none";
      
      });

document.querySelector("#planning").addEventListener("click", function(){
      document.querySelector("#brand-container").style.display = "none";
      document.querySelector("#hr-container").style.display = "none";
      document.querySelector("#planning-container").style.display = "block";
      document.querySelector("#finance-container").style.display = "none";
      document.querySelector("#production-container").style.display = "none";
      document.querySelector("#system-container").style.display = "none";
      document.querySelector("#supply-container").style.display = "none";
      
      });

document.querySelector("#finance").addEventListener("click", function(){
      document.querySelector("#brand-container").style.display = "none";
      document.querySelector("#hr-container").style.display = "none";
      document.querySelector("#planning-container").style.display = "none";
      document.querySelector("#finance-container").style.display = "block";
      document.querySelector("#production-container").style.display = "none";
      document.querySelector("#system-container").style.display = "none";
      document.querySelector("#supply-container").style.display = "none";
      
      });

document.querySelector("#production").addEventListener("click", function(){
      document.querySelector("#brand-container").style.display = "none";
      document.querySelector("#hr-container").style.display = "none";
      document.querySelector("#planning-container").style.display = "none";
      document.querySelector("#finance-container").style.display = "none";
      document.querySelector("#production-container").style.display = "block";
      document.querySelector("#system-container").style.display = "none";
      document.querySelector("#supply-container").style.display = "none";
      
      });

document.querySelector("#system").addEventListener("click", function(){
      document.querySelector("#brand-container").style.display = "none";
      document.querySelector("#hr-container").style.display = "none";
      document.querySelector("#planning-container").style.display = "none";
      document.querySelector("#finance-container").style.display = "none";
      document.querySelector("#production-container").style.display = "none";
      document.querySelector("#system-container").style.display = "block";
      document.querySelector("#supply-container").style.display = "none";
      
      });

document.querySelector("#supply").addEventListener("click", function(){
      document.querySelector("#brand-container").style.display = "none";
      document.querySelector("#hr-container").style.display = "none";
      document.querySelector("#planning-container").style.display = "none";
      document.querySelector("#finance-container").style.display = "none";
      document.querySelector("#production-container").style.display = "none";
      document.querySelector("#system-container").style.display = "none";
      document.querySelector("#supply-container").style.display = "block";
      
      });


 function plusSlides(value) {
	alert(value);
}
</script>
<!-----------------------------------------END-OF-CONTENT------------------------------------------------>
<?php require 'footer.php'; ?>