<?php include('loggedheader.php'); ?>
<div class="page-content">
	<div class="block-title block-title-medium">Welcome to Boxsy Lite</div>

	<div class="block-title">Item</div>
	<div class="block">
		<div class="row">
			<div class="col"><button class="col button button-fill" onClick="openSearch()"><i class="f7-icons">search</i> Search</button></div>
		</div>
	</div>

	<div class="list">
	  <div class="block-header">Item</div>
	  <ul>
	    <li>
	      <a class="item-link item-content" href="#" id="itemsearch-popup">
	        <input type="hidden">
	        <div class="item-inner">
	          <div class="item-title">Search Item</div>
	          <div class="item-after"></div>
	        </div>
	      </a>
	    </li>
	  </ul>
	</div>

	<div class="block-title">Menu</div>
	<div class="block">
		<div class="row">
			<div class="col"><button class="col button button-fill"><i class="f7-icons">plus</i> New Box</button></div>
			<div class="col"><button class="col button button-fill" onClick="createNewItem()"><i class="f7-icons">plus</i> New Item</button></div>
		</div>
	</div>
</div>

<?php include('footer.php'); ?>