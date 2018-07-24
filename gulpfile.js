var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')

        .styles([
            'vendors/bower_components/morris.js/morris.css',

            'vendors/bower_components/datatables/media/css/jquery.dataTables.min.css',

            'vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css',

            'dist/css/style.css'

        ],'./public/css/admin.css','resources/assets/admin')

        .scripts([
           'vendors/bower_components/jquery/dist/jquery.min.js',

            'vendors/bower_components/bootstrap/dist/js/bootstrap.min.js',

             'vendors/bower_components/peity/jquery.peity.min.js',

             'dist/js/peity-data.js',

            'vendors/bower_components/datatables/media/js/jquery.dataTables.min.js',

            'dist/js/productorders-data.js',

            'dist/js/jquery.slimscroll.js',

            'dist/js/dropdown-bootstrap-extended.js',

            'vendors/jquery.sparkline/dist/jquery.sparkline.min.js',

            'vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js',
            
            'dist/js/skills-counter-data.js',

            'vendors/bower_components/raphael/raphael.min.js',

            'vendors/bower_components/morris.js/morris.min.js',

            'dist/js/morris-data.js',

            'vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js',

            'dist/js/init.js',

            'dist/js/ecommerce-data.js'

        ],'./public/js/admin.js','resources/assets/admin')

});
