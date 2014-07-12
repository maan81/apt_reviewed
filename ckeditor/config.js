/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';

	config.contentsCss = 'css/style.css';
	
	//config.width = 700;
	config.height = 450;
	config.bodyClass = 'main';

	config.removePlugins = 'forms,find,flash,about,scayt,smiley,specialchar,iframe,pagebreak,preview,showblocks,templates,image,magicline,table,tabletools,resize';
	config.extraPlugins = 'save';

	config.toolbar_Custom = [
	    {   name: 'document',    
	        groups: [ 'mode', 'document' ], 
	        items: [ 'Source', 'Save' ] 
	    },
	    {    name: 'clipboard',   
	         groups: [ 'clipboard', 'undo' ], 
	         items: [ 'PasteText', 'PasteFromWord', 'Undo', 'Redo' ] 
	    },
	    {   name: 'paragraph',   
	        groups: [ 'list', 'indent', 'blocks', 'align' ], 
	        items: [ 'NumberedList', 'BulletedList', 'Outdent', 'Indent', 'Blockquote', 'CreateDiv', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', 'BidiLtr', 'BidiRtl' ] 
	    },
	    '/',
	    {   name: 'styles',
	        items: [ 'Styles', 'Format', 'Font', 'FontSize' ] 
	    },
	    {   name: 'basicstyles', 
	        groups: [ 'basicstyles', 'cleanup' ], 
	        items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', 'RemoveFormat' ] 
	    },
	    {   name: 'links', 
	        items: [ 'Link', 'Unlink'/*, 'Anchor' */] 
	    },
	  ];

	  config.toolbar = "Custom";
};
