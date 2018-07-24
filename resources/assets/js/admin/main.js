
    /**
     *  BootTree Treeview plugin for Bootstrap.
     *
     *  Based on BootSnipp TreeView Example by Sean Wessell
     *  URL:	http://bootsnipp.com/snippets/featured/bootstrap-30-treeview
     *
     *	Revised code by Leo "LeoV117" Myers
     *
     */
    $.fn.extend({
        treeview:	function() {
            return this.each(function() {
                // Initialize the top levels;
                var tree = $(this);

                tree.addClass('treeview-tree');
                tree.find('li').each(function() {
                    var stick = $(this);
                });
                tree.find('li').has("ul").each(function () {
                    var branch = $(this); //li with children ul

                    branch.prepend("<i class='tree-indicator glyphicon glyphicon-chevron-right'></i>");
                    branch.addClass('tree-branch');
                    branch.on('click', function (e) {
                        if (this == e.target) {
                            var icon = $(this).children('i:first');

                            icon.toggleClass("glyphicon-chevron-down glyphicon-chevron-right");
                            $(this).children().children().toggle();
                        }
                    })
                    branch.children().children().toggle();

                    /**
                     *	The following snippet of code enables the treeview to
                     *	function when a button, indicator or anchor is clicked.
                     *
                     *	It also prevents the default function of an anchor and
                     *	a button from firing.
                     */
                    branch.children('.tree-indicator, button').click(function(e) {
                        branch.click();

                        e.preventDefault();
                    });
                });
            });
        }
    });

/**
 *	The following snippet of code automatically converst
 *	any '.treeview' DOM elements into a treeview component.
 */



$(window).on('load', function () {
    $('.treeview').each(function () {
        var tree = $(this);
        tree.treeview();
    })
})

    /***********************************************
     add product
     ***********************************************/

   

    function preview_image()
    {
        var total_file=document.getElementById("upload_file").files.length;
       if (total_file==2){
           $('#image_preview').empty();

           for(var i=0;i<2;i++)
           {

               $('#image_preview').append("<img style='width: 100px; height:100px;float: left' class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'>");
           }
           $('#image_preview').append("<br><br><br><br><br><br>");


       }else {
           alert("Please select two images");
       }

    }
