/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {

    CKEDITOR.config.allowedContent = true;
    CKEDITOR.config.fillEmptyBlocks = false;
    CKEDITOR.config.indentClasses = ["i","ul-grey", "ul-red", "text-red", "ul-content-red", "circle", "style-none", "decimal", "paragraph-portfolio-top", "ul-portfolio-top", "url-portfolio-top", "text-grey"];
    CKEDITOR.config.protectedSource.push(/<(style)[^>]*>.*<\/style>/ig);
    // CKEDITOR.config.protectedSource.push(/<(script)[^>]*>.*<\/script>/ig);// разрешить теги <script>
    CKEDITOR.config.protectedSource.push(/<\?[\s\S]*?\?>/g);// разрешить php-код
    CKEDITOR.config.allowedContent = true; /* all tags */
     config.extraPlugins ='smiley,bbcode,uploadimage' ;


    // config.uploadUrl = '/upload/upload.php';
	// Define changes to default configuration here.
	// For complete reference see:
	// http://docs.ckeditor.com/#!/api/CKEDITOR.config

	// The toolbar groups arrangement, optimized for two toolbar rows.
	config.toolbarGroups = [

		{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
		{ name: 'links' },
		{ name: 'insert' },
		{ name: 'forms' },
		{ name: 'tools' },
		{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'others' },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
		{ name: 'styles' },
		{ name: 'colors' },
		{ name: 'about' }
	];
	config.defaultLanguage = 'en';

	// Remove some buttons provided by the standard plugins, which are
	// not needed in the Standard(s) toolbar.
	config.removeButtons = 'Underline,Subscript,Superscript,Table,Anchor';

	// Set the most common block elements.
	// config.format_tags = 'p;h1;h2;h3;pre';

	// Simplify the dialog windows.
	config.removeDialogTabs = 'image:advanced;link:advanced';


};

