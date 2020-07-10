<template>
<div class="page">
	<div class="navbar">
		<div class="navbar-bg"></div>
		<div class="navbar-inner">
			<div class="left">
				<a href="#" onClick="goBack()" class="link"><i class="f7-icons">arrow_left</i></a>
				<div class="title">
					Item Detail #{{$route.params.itemid}}
				</div>
			</div>
		</div>
	</div>
	<div class="page-content">
		<form class="list form-store-data" id="item-form">
			<ul>
				<li style="display:none">
					<div class="item-content item-input">
						<div class="item-inner">
							<div class="item-title item-label">ID</div>
							<div class="item-input-wrap">
								<input type="text" name="id" placeholder="Item ID">
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="item-content item-input">
						<div class="item-inner">
							<div class="item-title item-label">Name</div>
							<div class="item-input-wrap">
								<input type="text" name="item_name" placeholder="Item name">
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="item-content item-input">
						<div class="item-inner">
							<div class="item-title item-label">Description</div>
							<div class="item-input-wrap">
								<input type="text" name="description" placeholder="Description">
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="item-content item-input">
						<div class="item-inner">
							<div class="item-title item-label">Size</div>
							<div class="item-input-wrap">
								<input type="text" name="size" placeholder="Size">
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="item-content item-input">
						<div class="item-inner">
							<div class="item-title item-label">Qr Code</div>
							<div class="item-input-wrap">
								<input type="text" name="qr_code" placeholder="Qr Code">
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="item-content item-input">
						<div class="item-inner">
							<div class="item-title item-label">Color</div>
							<div class="item-input-wrap">
								<input type="color" name="color" placeholder="Color">
							</div>
						</div>
					</div>
				</li>
				<li>
					<a class="item-link smart-select smart-select-init" data-open-in="sheet" data-close-on-select="true">
						<select name="item_condition">
							<option value="Healthy">Healthy</option>
							<option value="Unknown">Unknown</option>
							<option value="Broken">Broken</option>
						</select>
						<div class="item-content">
							<div class="item-inner">
								<div class="item-title">Item Condition</div>
							</div>
						</div>
					</a>
				</li>
				<li>
					<div class="item-content item-input">
						<div class="item-inner">
							<div class="item-title item-label">Photo</div>
							<div class="item-input-wrap">
								<input type="file" name="photo" placeholder="Photo">
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="item-content item-input">
						<div class="item-inner">
							<div class="item-title item-label">Owner Info</div>
							<div class="item-input-wrap">
								<input type="text" name="owner_info" placeholder="Owner Info">
							</div>
						</div>
					</div>
				</li>
			</ul>
		</form>
		<div class="block block-strong row">
			<div class="col"><a class="button" onClick="saveItem()"  href="#">Save</a></div>
			<div class="col"><a class="button" onClick="deleteItem()"  href="#">Delete</a></div>
		</div>
		<div class="block-title block-title-medium">Location</div>
		<div class="list">
		  <ul>
		    <li>
		      <div class="item-content">
		        <div class="item-inner">
		          <div class="item-title">John Doe</div>
		          <div class="item-after"> <span class="badge">5</span></div>
		        </div>
		      </div>
		    </li>
		    <li>
		      <div class="item-content">
		        <div class="item-inner">
		          <div class="item-title">Jenna Smith</div>
		        </div>
		      </div>
		    </li>
		  </ul>
		</div>
	</div>
</div>
</template>