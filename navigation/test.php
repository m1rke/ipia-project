<div class="search">

			<form class='search-form-container' action="search.php" method="GET" name="search_form">
				<input type="text" onkeyup="getLiveSearchUsers(this.value, '<?php echo $userLoggedIn; ?>')" name="q" placeholder="Search..." autocomplete="off" id="search_text_input">

				<div class="button_holder">
					<img src="assets/images/icons/magnifying_glass.png">
				</div>

			</form>

			<div class="search_results">
			</div>

			<div class="search_results_footer_empty">
			</div>



        </div>
        



<div class="search">

<form class='search-form-container' action="search.php" method="GET" name="search_form">
    <input type="text" onkeyup="getLiveSearchUsers(this.value, '<?php echo $userLoggedIn; ?>')" name="q" placeholder="Search..." autocomplete="off" id="search_text_input">

    <div class="button_holder">
        <img src="assets/images/icons/magnifying_glass.png">
    </div>

</form>

<div class="search_results">
</div>

<div class="search_results_footer_empty">
</div>



</div>


<div class="wrap">
   <div class="search">
       <form class='search-form-container' action="search.php" method="GET" name="search_form">
      <input type="text" class="searchTerm" placeholder="What are you looking for?">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
</form>
   </div>
</div>