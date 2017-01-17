process.env.DISABLE_NOTIFIER = true
const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    // mix.sass('app.scss')
    //    .version('css/app.css')
    //    .webpack('app.js');
    // mix.less(['app.less', 'other.less']);
    // mix.coffee(['module.coffee', 'moduletwo.coffee']);
    // mix.scripts(["one.js", "two.js"], 'public/foo/bar.js');
    // mix.browserify(['one.js', 'two.js']);
    mix.phpUnit();
});
