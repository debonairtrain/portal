 
  <br/><br/>
  
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="dashboard?hubs=payment_confirm">Payment Confirmation</a></a></li>
        <li class="breadcrumb-item active" aria-current="page">Search Invoice</li>
      </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- blank block -->
<div class="page-content-wrapper">
  <div class="page-content">


<br><br>
    
 <li class="list-group-item help block" style="text-align:center;">
        Search Payment By Invoice ID
    </li>

    <br> <br>

    <div class="main " style="display:flex;">

      <div class="form-group col-md-12">
      <input type="text" class="form-control" id="invoice_id" placeholder="Search Invoice-Id" onkeyup="search_invoice()">
      </div>
    
    </div>
    <div id="error" class="col-md-12"></div>
                  </div>
                </div>
    <script>
        function search_invoice()
        {
            var invoice_id = document.getElementById("invoice_id").value;
            $.post("php/validate.php",{invoice_id:invoice_id},
        	function(response,status)
        	{
        	    //alert(response);
        	    if(response =='2')
        	    {
        	        document.getElementById('error').innerHTML="<span class='badge badge-danger'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Invalid Invoice ID...... Please check the invoice ID</span>";
        	    }else
        	    {
        	        
        	       window.location = 'https://admin.gschstg.sch.ng/dashboard?hubs=scm2&invoice_id='+btoa(response);
        	    }
        			
        	});
        }
    </script>