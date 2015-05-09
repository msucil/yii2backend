/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';

	//remove buttons
	config.removeButtons = "Source,Save,NewPage,Preview,Print,Templates,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField";
	//tooblbar grouping
	config.toolbarGroups = [
		{name : 'document', groups: ['clipboard','undo','find','selection','spellchecker']},
		{name : 'links', groups: ['Link','Unlink','Anchor']},
		{ name: 'insert'},
		'/',
		{name: 'basicstyles'},
		{name : 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ]},
		'/',
		{name : 'styles'},
		{name : 'colors'},
		{name : 'others'}

	];
	
	//extra plugins
	config.extraPlugins = "wordcount,widget,dialog,lineutils,image,image2,base64image,oembed,tableresize,leaflet,pgrfilemanager";
};
