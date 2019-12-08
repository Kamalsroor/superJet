// $("iframe").on("load", function() {
//     let head = $("iframe").contents().find("head");
//     let css = '<style>body {background-color: #303841 !important;}</style>';
//     $(head).append(css);
//   });

// window.onload=function(){
//     CKEDITOR.instances.editor_data.addCss( 'body { background-color: #efefef; }' );
// }


tinyMCE.init({
    content_css : "/css/custom.css"
});