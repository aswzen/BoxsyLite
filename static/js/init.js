
var app = new Framework7({
  // App root element
  root: '#app',
  // App Name
  name: 'Boxsy Lite',
  // App id
  id: 'id.web.asw',
  // Enable swipe panel
  panel: {
    swipe: 'left',
  },
  // Add default routes
  routes: [
    {
      path: '/main/',
      url: baseUrl+'main/',
      on: {
    	pageInit: function () {
			initSearch();
	    }
	  }
    },
    {
  	  name: 'item_detail',
      path: '/item/:itemid',
      componentUrl: baseUrl+'item/detail',
      options: {
	    context: {
          itemid: '{{itemid}}',  
      	},
	  },
	  methods:{
	  },
	  on: {
        pageInit: function (e, page) {
        	var self = this;
        	if(page.route.params.itemid == 'new'){ 
        		setTimeout(function(){ 
	        		$('#item-form').find("input[type=text], textarea").val("");
	        		$('#item-form')[0].reset();
				}, 100);
        	} else {
	          	$.ajax({
				    async : true,
				    type : 'GET',
				    url : baseUrl+'item/get/'+page.route.params.itemid,
				    cache : false,
				    dataType : 'json',
				    success : function(data){
			    		console.log(data);
					  	app.form.fillFromData('#item-form', data);
				    },      
				    error : function(jqXHR, textStatus, errorThrown){
				        app.dialog.alert('Internal error');
				    }
				});
        	}
        },
	  },
    },
    {
      path: '/search/',
      componentUrl: baseUrl+'search/',
      methods: {
        openAlert: function () {
          var self = this;
          self.app.dialog.alert('Hello world!');
        },
        goBack: function(){
        	goBack();
        },
        goHome: function(){
        	goHome();
        },
      },
      on: {
        pageInit: function (e, page) {
        	var self = this;
          	self.app.searchbar.create({
                el: '.searchbar',
                searchContainer: '.list',
                searchIn: '.item-title',
                on: {
                    search(sb, query, previousQuery) {
	            		$.ajax({
						    async : true,
						    type : 'POST',
						    url : baseUrl+'item/search',
						    data : {
						    	keywords : query
						    },
						    cache : false,
						    dataType : 'json',
						    success : function(data){
					    		$('.searchbar-found').css('display','visible');
						    	for (var i = 0; i < data.length; i++) {
						    		$('.searchbar-found').append('<li class="item-content">'+
					                '    <div class="item-inner">'+
					                '        <div class="item-title">Acura</div>'+
					                '    </div>'+
					                '</li>');
						    	}
						    },      
						    error : function(jqXHR, textStatus, errorThrown){
						        app.dialog.alert('Internal error');
						    }
						});
                        console.log(sb);
                        console.log(query, previousQuery);
                    }
                }
            });
        },
        pageAfterOut: function (e, page) {
          // page has left the view
        },
      }
    },
  ],
});

var mainView = app.views.create('.view-main');

initSearch();

function openSearch(){
	app.views.main.router.navigate('/search/', {reloadCurrent: false});
}

function openItem(id){
	app.views.main.router.navigate({
	  name: 'item_detail',
	  params: { itemid: id},
	});
}

function createNewItem(){
	app.views.main.router.navigate({
	  name: 'item_detail',
	  params: { itemid: 'new'},
	});
}

function logout(){
	app.dialog.confirm('Are you sure to logout?', function () {
	    window.location.href = baseUrl+"user/logout";
	});
}

function initSearch(){
	app.autocomplete.create({
	  openIn: 'popup', //open in page
	  openerEl: '#itemsearch-popup', //link that opens autocomplete
	  closeOnSelect: true, //go back after we select something
	  autoFocus: true, //enable preloader
	  preloader: true, //enable preloader
	  valueProperty: 'item_name', //object's "value" property name
	  textProperty: 'item_name', //object's "text" property name
	  source: function (query, render) {
	  	var autocomplete = this;
	    var results = [];
	    if (query.length === 0) {
	      render(results);
	      return;
	    }
	    // Show Preloader
	    autocomplete.preloaderShow();

		$.ajax({
		    async : true,
		    type : 'POST',
		    url : baseUrl+'item/search',
		    data : {
		    	keywords : query
		    },
		    cache : false,
		    dataType : 'json',
		    success : function(data){
			    // Render items by passing array with result items
		        for (var i = 0; i < data.length; i++) {
		          if (data[i].item_name.toLowerCase().indexOf(query.toLowerCase()) >= 0) results.push(data[i]);
		        }

	        	autocomplete.preloaderHide();
			    render(results);
		    },      
		    error : function(jqXHR, textStatus, errorThrown){
		        app.dialog.alert('Internal error');
		    }
		});
	  },
	  on: {
	    change: function (value) {
	      	openItem(value[0].id);
	    },
	  },
	});
}

function openAlert() {
	app.dialog.alert('Hello world!');
}

function goBack() {
	app.views.main.router.back('/main/');
}

function goHome() {
	mainView.router.navigate('/', {});
}
function addItem(){
	var formData = app.form.convertToData('#item-form');
  	$.ajax({
	    async : true,
	    type : 'POST',
	    url : baseUrl+'item/add/',
	    cache : false,
	    data : formData,
	    dataType : 'json',
	    success : function(data){
	        app.dialog.alert('Saved');
	        goBack();
	    },      
	    error : function(jqXHR, textStatus, errorThrown){
	        app.dialog.alert('Internal error');
	    }
	});
}
function saveItem(){
	var formData = app.form.convertToData('#item-form');
	if(formData.id == 'new' || formData.id == ''){
		addItem();
	} else {
	  	$.ajax({
		    async : true,
		    type : 'POST',
		    url : baseUrl+'item/save/',
		    cache : false,
		    data : formData,
		    dataType : 'json',
		    success : function(data){
		        app.dialog.alert('Saved');
		    },      
		    error : function(jqXHR, textStatus, errorThrown){
		        app.dialog.alert('Internal error');
		    }
		});
	}
}
function deleteItem(){
	var formData = app.form.convertToData('#item-form');
  	$.ajax({
	    async : true,
	    type : 'POST',
	    url : baseUrl+'item/delete/',
	    cache : false,
	    data : formData,
	    dataType : 'json',
	    success : function(data){
	        app.dialog.alert('Deleted');
	    },      
	    error : function(jqXHR, textStatus, errorThrown){
	        app.dialog.alert('Internal error');
	    }
	});
}